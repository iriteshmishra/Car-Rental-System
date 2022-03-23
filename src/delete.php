<?php
	include_once 'config.php';

?>

<?php
	

	
	$sql = "DELETE FROM details WHERE feedback_id= '$_POST[feedback_id]'";

	if ($conn->query($sql) === TRUE) {
	  echo "<script>alert ('Record deleted successfully') ; window.location='deleteFeedback.html';</script>";
	} else {
	  echo "Error deleting record: " . $conn->error;
	}

	$conn->close();
?>