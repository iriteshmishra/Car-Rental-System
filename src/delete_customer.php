<?php

include 'config.php';

if(isset($_POST['btn1']))
{
	
	$que1 = "DELETE FROM customers where Email = '$_POST[Email]'"; 
	
	if(mysqli_query($conn, $que1)){
		echo "<script>alert('Deleted Successfully! Register Again to Login '); window.location='Login_customer.php';</script>";
	}
	else{
		echo "<script>alert('Delete Unsuccessful!')</script>";
	}
	
}
?>