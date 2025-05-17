
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
top: 13px;
}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>new registration</title>

</head>
<body style="background-color:#AACB73">

<section>
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src=" img/e.jpeg" 
          +
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
              
 <CENTER> 
 <br/>
 

  <img src="img/icon.jpg" width="200" height="100"><br/>
  <br/>
 <h1 class="mb-5 text-uppercase"> 
               <div class="text-bg-warning p-3">REGISTRATION FORM</div></h1></CENTER>
              
           <form method="post" action="sub.php" >
<input type="text" placeholder="Enter  Name" required class="form-control form-control-lg" name="t1" >
<br/><br/>
<input type="text"  maxlength="10" placeholder="Enter Contact Number" name="t2"  required  class="form-control form-control-lg" >
<br/><br/>
<input type="email"  placeholder="Enter Email" name="t3"  name="email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" class="form-control form-control-lg">
<br/><br/>
<input type="password" placeholder="Enter Password " name="t4"  required class="form-control form-control-lg">
<br/><br/>
<input type="textArea" placeholder="Enter Address " name="t5"  class="form-control form-control-lg">
<br/><br/>
<input type="text" pattern="[0-9]*" maxlength="12" placeholder="adhar number " name="t6"  required class="form-control form-control-lg">
<br/><br/>
<center>
<input type="submit" class="btn btn-warning btn-lg" value="Submit" name="sb">
</center>
</form>





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

