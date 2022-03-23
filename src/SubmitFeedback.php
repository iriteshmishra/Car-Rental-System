<?php
	include_once 'config.php';

?>

<?php

	$experience = $_POST["experience"];
	$comments = $_POST["comments"];
	$name = $_POST["name"];
	$email = $_POST["email"];

	$sql = "INSERT INTO details(feedback_id, experience, comments, name, email) VALUES ('', '$experience', '$comments', '$name', '$email')";
	

	if (mysqli_query($conn, $sql)) {
		echo "<script>alert ('Record inserted successfully !!'); window.location='AddFeedback.html';</script>";
		 
	  
	} 
	else {
	  echo "<script>alert ('Error in inserting records !!') </script>";
	}

	mysqli_close($conn);



?>






