<?php
// Start output buffering to prevent premature output
ob_start();
error_reporting(E_ALL ^ E_DEPRECATED);
require_once('tcpdf/tcpdf.php');

// Authentication Logic
if (isset($_POST['sb'])) {
    $cno = $_POST['t7'];  // Ration number
    $ps = $_POST['t6'];   // Aadhar number

    // Create connection
    $conn = new mysqli("localhost", "root", "", "d1");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        // Use prepared statement to prevent SQL injection
        $sql = "SELECT rnum, adnum FROM verify WHERE rnum = ? AND adnum = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $cno, $ps);
        $stmt->execute();
        $stmt->store_result();

        // Check if the ration number and Aadhar number match
        if ($stmt->num_rows > 0) {
            // If authenticated, proceed with PDF generation
            ob_end_clean(); // Ensure buffer is cleared before generating the PDF
            generatePDF($_POST);
        } else {
            // If authentication fails, show alert
            echo '<script type="text/javascript">';
            echo 'alert("Incorrect ration and adhar number. Please try again.")';
            echo '</script>';

        }

        $stmt->close();
    }

    // Close the database connection
    $conn->close();
}

// Function to generate PDF and insert the record into the database
function generatePDF($data) {
    $name = $data['t1'] ?? '';
    $cnum = $data['t2'] ?? '';
    $rnum = $data['t7'] ?? '';
    $fnum = $data['t4'] ?? '';
    $address = $data['t5'] ?? '';
    $adhar = $data['t6'] ?? '';
    $email = $data['t3'] ?? '';

    // Create a new TCPDF instance
    $pdf = new TCPDF();

    // Set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Your Name');
    $pdf->SetTitle('Ration Card');
    $pdf->SetSubject('Ration Card Details');
    $pdf->SetKeywords('Ration, Card, Details');

    // Set font
    $pdf->SetFont('helvetica', '', 12);

    // Add a page
    $pdf->AddPage();

    // Add the first image at the top of the page
    $image_file1 = 'img/img.jpeg'; // Path to your first image file
    $pdf->Image($image_file1, 70, 80, 80, '', 'JPEG', '', '', false, 300);

    // Set some content to display
    $content = "
        <h1>Ration Card</h1>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Contact Number:</strong> $cnum</p>
        <p><strong>Ration number:</strong> $rnum</p>
        <p><strong>Family Member:</strong> $fnum</p>
        <p><strong>Address:</strong> $address</p>
        <p><strong>Adhar number:</strong> $adhar</p>
        <p><strong>Email:</strong> $email</p>
    ";

    // Print content using writeHTMLCell method
    $pdf->writeHTMLCell(0, 0, '', '', $content, 0, 1, 0, true, '', true);

    // Add the second image at the bottom of the page
    $image_file2 = 'img/icon2.jpg'; // Path to your second image file
    $pdf->Image($image_file2, 120, 220, 60, '', 'JPEG', '', '', false, 300); // Adjust the Y position as needed

    // Close and output PDF to the browser
    $pdf->Output('ration_card.pdf', 'D');

    // Insert into database after generating the PDF
    insertRecord($name, $cnum, $rnum, $fnum, $address, $adhar, $email);
}

// Function to insert record into the database
function insertRecord($name, $cnum, $rnum, $fnum, $address, $adhar, $email) {
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "d1";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement
    $sql = "INSERT INTO ration (name, cnum, rnum, fm, ad, adnum, email)
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $name, $cnum, $rnum, $fnum, $address, $adhar, $email);

    // Execute SQL statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}

ob_end_flush(); // Output buffer cleanup after everything is done
?>
