<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<div class="container">
<?php include 'adminheader.php'; ?>
<?php
$reg = 0;
$rat = 0;
$order = 0;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "d1";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql1 = "SELECT * FROM regs";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
    while($row = $result1->fetch_assoc()) {
        $reg++;
    }
}

 $sql2 = "SELECT * FROM ration";
$result2 = $conn->query($sql2);
if ($result2->num_rows > 0) {
    while($row = $result2->fetch_assoc()) {
        $rat++;
    }
}



$conn->close();
?>

<div class="row">
    <div class="col-md-4">
        <div class="card summary-card">
            <div class="card-body">
                <h5 class="card-title">Total registration</h5>
                <p class="card-text"><?php echo $reg; ?></p>
            </div>
            
        </div>
    </div>
    <div class="col-md-4">
        <div class="card summary-card">
            <div class="card-body">
                <h5 class="card-title">Total download</h5>
                <p class="card-text"><?php echo $rat; ?></p>
            </div>
           
        </div>
    </div>

          
        </div>
    </div>
</div>
<br/>
<br/>
<center>
<div class="row">
    <div class="col-md-7">
        <h1 class="bg-dark text-white"><center>e-ration</center></h1>
        <table class="table  table-bordered">
            <thead class="thead-primary">
                <tr class="table-primary">
                    <td><b>name</b></td>
                    <td><b>contact number</b></td>
                    <td><b>ration number</b></td>
                    <td><b>family member</b></td>
                    <td><b>address</b></td>
                   <td><b>adhar number</b></td>
                    <td><b>email</b></td>
                </tr>
            </center>
            </thead>
            <?php
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT * FROM ration";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["cnum"]; ?></td>
                <td><?php echo $row["rnum"]; ?></td>
                <td><?php echo $row["fm"]; ?></td>
                <td><?php echo $row["ad"]; ?></td>
                <td><?php echo $row["adnum"]; ?></td>
                <td><?php echo $row["email"]; ?></td>

            </tr>
            <?php 
                }
            }
            $conn->close();
            ?>
        </table>
    </div>
    <div class="col-md-6">
        <h1 class="bg-dark text-white"><center>Registration</center></h1>
        <table class="table  table-bordered ">
            <thead class="thead-light">
                <tr class="table-primary">
                    <td><b>name</b></td>
                    <td><b>Contact number</b></td>
                    <td><b>email</b></td>
                    <td><b>address</b></td>
                    <td><b>adhar number</b></td>

                </tr>
            </thead>
            <?php
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT * FROM regs";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["cnum"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["address"]; ?></td>
                 <td><?php echo $row["adhar no."]; ?></td>

            </tr>
            <?php 
                }
            }
            $conn->close();
            ?>
        </table>
    </center>
    </div>
    </div>
</div>
</div>
</body>
</html>
