<?php
	include_once 'config.php';
?>


<?php
	$fname = $_POST["field1"];
	$lname = $_POST["field2"];
	$email = $_POST["field3"];
	$num = $_POST["field4"];
	$txt = $_POST["field5"];
	
	$sql = "insert into contactus(ContactusID,Fname,Lname,Email,Pnum,Msg)values('','$fname','$lname','$email','$num','$txt')";
	
	if(mysqli_query($conn,$sql)){
		
		echo"<script>alert('We will contact with you, Thank you..!');window.location='displaycontactus.php';</script>";
	}
	else
	{
		echo"<script>alert('Error in inserting records!')</script>";
	}
	
	
	mysqli_close($conn);




?>