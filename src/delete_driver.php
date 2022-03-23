<?php

include 'config.php';

if(isset($_POST['btn2']))
{
	
	$que1 = "DELETE FROM drivers where Email = '$_POST[Email]'"; 
	
	if(mysqli_query($conn, $que1)){
		echo "<script>alert('Deleted Successfully! Register Again to Login '); window.location='Login_driver.php';</script>";
	}
	else{
		echo "<script>alert('Delete Unsuccessful!')</script>";
	}
	
}
?>