<?php
	include_once 'config.php';
?>


<?php


	$que = "Delete from drivers where driverID = '$_POST[field1]'";
	
	if(mysqli_query($conn,$que)){
		echo"<script>alert('Deleted Successfully' ); window.location='view.php';</script>";
	}
	
	else{
		echo"<script>alert('Delete Unsuccessful!')</script>";
	}
	
	mysqli_close($conn);




?>