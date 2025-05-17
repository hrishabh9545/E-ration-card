<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<style>

 



.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;}



</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title> login</title>

</head>
<body style="background-color:#FFFFFF">


<section>
  <div class="container">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src=" img/img2.jpg" 
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;">
            </div>
            <div class="col-xl-6" >
              <div class="card-body p-md-5 text-black" >
              
            <CENTER>
                <img src="img/icon.jpg" width="100" height="50">
                <br>
                <br/>
                 <h2 class="mb-5 text-uppercase"> 
               <div class="text-bg-dark p-3">LOGIN</div></h2></CENTER>
           

                <form method="post" > 

		     <input type="text" placeholder="Enter username" name="t2" class="form-control form-control-lg" required>
		     <br/>
		     <input type="password" placeholder="Enter Password " name="t4"  class="form-control form-control-lg" required>
		     
		    <br/>
		    
		     <input type="submit" value="Login"  class="btn btn-dark btn-lg" name="sb2">
		     <br/><br/>
		     

		     </form>
		     
<?php
if(isset($_REQUEST["sb2"])) {
    $cno = $_REQUEST["t2"];
    $ps = $_REQUEST["t4"];
    // Create connection
    $conn = mysqli_connect("localhost", "root", "", "d1");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        // Use prepared statement to prevent SQL injection
        $sql = "SELECT user, pass FROM admin WHERE user = ? AND pass = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $cno, $ps);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        // Check if there are any rows returned
        if (mysqli_stmt_num_rows($stmt) > 0) {
            // Authentication successful, redirect to some page
            header("Location: admindashboard.php"); // Assuming rg.php is the correct page to redirect
            exit();
        } else {
            // Authentication failed
             echo '<script type ="text/JavaScript">';  
             echo 'alert("please try again")';  
             echo '</script>';  
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($conn);
}
?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>
