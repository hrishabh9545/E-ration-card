<?php
error_reporting(E_ALL ^ E_DEPRECATED);
require_once('tcpdf/tcpdf.php');
// Retrieve form data
$name = $_POST['t1'] ?? '';
$cnum = $_POST['t2'] ?? '';
$rnum = $_POST['t7'] ?? '';
$fnum = $_POST['t4'] ?? '';
$address = $_POST['t5'] ?? '';
$adhar = $_POST['t6'] ?? '';
$email = $_POST['t3'] ?? '';
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
$pdf->Image($image_file1, 50, 70, 100, '', 'JPEG', '', '', false, 300);
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
$pdf->Image($image_file2, 120,220 , 60,'', 'JPEG', '', '', false, 300); // Adjust the Y position as needed
// Close and output PDF
$pdf->Output('ration_card.pdf', 'D');
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
 VALUES ('$name', '$cnum', '$rnum', '$fnum', '$address', '$adhar', '$email')";
// Execute SQL statement
if ($conn->query($sql) === TRUE) {
 echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
// Close database connection
$conn->close();
?>