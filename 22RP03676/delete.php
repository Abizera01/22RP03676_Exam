<?php
$id=$_GET['id'];
$con=mysqli_connect("localhost","root","","nextech_portal_22rp03676");
$del=mysqli_query($con,"delete from employees where id='$id'");
	if($del){
		header("location:display.php");
	}
	else{

		
		header("location:diplay.php");
	}

?>
