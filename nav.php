

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>nav</title>
<style>
  .body{
    background-image: url('r.jpg');
    background-size: cover;
    background-attachment: fixed;
}
/* Add a black background color to the top navigation */
.topnav {
    background-color: #333;
    overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

/* Right-aligned section inside the top navigation */
.topnav-right {
  float: right;
}

</style>
</head>
<body>
<div id="Wrapper">
<div id="header"><?php include("header.php"); ?></div>
<div id="nav">
<center>


<div class="topnav">
  <a href="" class="active" >Home</a>
     <a href="rationcard.php" >Download</a>


<div class="topnav-right">

    <a href="adminlog.php"> <i class="fa fa-fw fa-user"></i>admin</a>
    <a href="log.php"> <i class="fa fa-fw fa-user"></i>Logout</a>
  

</div>

</center>

<div><h1><span class="badge text-bg-primary"></span></h1></div>
            <hr class="border border-dark border-2 opacity-50">
            

 <div class="container">
    <div class="row">
      <!-- Frame containing marquee tag -->
      <div class="col">
        <iframe src="marque.php" width="100%" height="600" frameborder="0"></iframe>
      </div>

      <!-- Display image between frames -->
      <div class="col" style="text-align: center;">

        <img id="changingImage" src="img/r.jpg" alt="" width="750" height="600">

      </div>

      



    <!-- Frame containing dropdown list -->
    <div class="col">
        <iframe src="d.php" width="120%" height="600" frameborder="15"></iframe>
      </div>
    </div>
  </div>
    
  <br>
  
  
        <p class="mt-2 text-center text-xs text-slate-500"><b>© 2024 E_RATION CARD. All rights reserved.</b></p>
    </div>

</div>

  <script>
    // Define an array of image URLs to be displayed
    var imageUrls = [
      "img/r.jpg",
      "img/c.jpeg",
      "img/d.jpeg",
       "img/e.jpeg"
    ];

    // Function to change the image every 3 seconds
    var currentIndex = 0;
    function changeImage() {
      currentIndex = (currentIndex + 1) % imageUrls.length;
      document.getElementById("changingImage").src = imageUrls[currentIndex];
    }
    
    // Call changeImage function every 3 seconds
    setInterval(changeImage, 1000);
  </script>



</body>

</html>
