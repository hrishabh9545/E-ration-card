<?php
if(isset($_REQUEST["sb"]))
{
	$id=$_REQUEST;
	$cn=$_REQUEST["t1"];
	$cno=$_REQUEST["t2"];
	$em=$_REQUEST["t3"];
	$ps=$_REQUEST["t4"];
	$ad=$_REQUEST["t5"];
	$ano=$_REQUEST["t6"];

	$con=mysqli_connect("localhost","root","","d1");
	if(!$con)
	{
		die("unable to connect");

	}
	else
	{
		$sql= "insert into regs values (  '$id','$cn','$cno','$em','$ps','$ad','$ano')";
					mysqli_query($con,$sql);
header("location:log.php");
	}

	
	mysqli_close($con);
}

?>