<?php
session_start();
?>
<?php
if($_SESSION["name"]) {
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Ritesh Car Rental</title>
<link rel="stylesheet" type="text/css" href="styles/Home_styles.css">
<link rel="stylesheet" type="text/css" href="styles/footer.css">
<link rel="stylesheet" type="text/css" href="styles/stylesss.css">
<link rel="icon" href="images/icon.png">

<meta charset="utf-8">
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<script src="js/JavaScript.js"></script>

</head>
<body style="background-color:black">
<div style="background-color:orange; width:100%; height:195px; padding-bottom:20px">
<a href="index.html"><img src="images/LOGO11.png" width = "185" height = "185" class = "logo" style="border-radius:100px; padding-top:2px; padding-left:5px" align = "left"></a>
<div style="padding-top: 1px; padding-left: 10px; padding-right:150px;">
<header>
<center><h1 class="monospace"><b>Ritesh Rent-a-Car</b></h1></center>
<p style="position: relative; text-align:right; width:111%; font-size:18px"><a href="logout.php" style="text-decoration:none">LOG OUT </a></p>
</header>
</div>
</div>

<ul class="menu">
   <li class="menu"><a href="index.html"><i class="home" id="nav-image"></i>Home</a></li>
   <li class="menu"><a href="about us.html"><i class="user" id="nav-image"></i>About Us</a></li>
   <li class="menu"><a href="Rates.php"><i class="inr" id="nav-image"></i>Rates</a></li>
   <li class="menu"><a href="contactUs.html"><i class="phone" id="nav-image"></i>Contact Us</a></li>
</ul>

<center>
<h1 style="color: white" >!!..Welcome <?php echo $_SESSION["name"]; ?> ..!!</h1>
</center>
<div class="BoxesRate">
	<div class="columnRate">
		<div class="cardRate">
			<img src="images/LORDS.jpg" width = "100%" height = "160">
			<h2 style="text-align: center">Customer</h2>
			
			<div style=" padding-left:5px" align = "center">
			<a href="admin_customer.php"><button class="button"  type="button">VIEW CUSTOMERS</button></a>
			</div>
			<div style="padding-top:20px; padding-left:5px" align = "center">
			<a href="aDelete_customer.html"><button class="button"  type="button">DELETE CUSTOMERS</button></a>
			</div>
		</div>
	</div>
	
	<div class="columnRate">
		<div class="cardRate">
			<img src="images/LORDS.jpg" width = "100%" height = "160">
			<h2 style="text-align: center">Driver</h2>
			
			<div style=" padding-left:5px" align = "center">
			<a href="admin_drivers.php"><button class="button"  type="button">VIEW DRIVERS</button></a>
			</div>
			<div style="padding-top:20px; padding-left:5px" align = "center">
			<a href="aDelete_driver.html"><button class="button"  type="button">DELETE DRIVERS</button></a>
			</div>
		</div>
	</div>

</div>


<center>
<h2 style="color: white" >CARS</h2>
</center>
	<div>
			<div style=" padding-left:5px" align = "center">
			<a href="addVehicles.html"><button class="button"  type="button">ADD CARS</button></a>
			</div><br>
			<div style=" padding-left:5px" align = "center">
			<a href="updateVehicle.html"><button class="button"  type="button">UPDATE CARS</button></a>
			</div><br>
			<div style=" padding-left:5px" align = "center">
			<a href="deleteVehicle.html"><button class="button"  type="button">DELETE CARS</button></a>
			</div><br>

	</div>
	<br><br>
<center>	
<div class="BoxesRate">
	<div class="columnRate">
		<div class="cardRate">
			
			<h2 style="text-align: center">CONTACT US</h2>
			
			<div style=" padding-left:5px" align = "center">
			<a href="displaycontactus.php"><button class="button"  type="button">VIEW CONTACT US</button></a>
			</div>
			<br>
			<div style=" padding-left:5px" align = "center">
			<a href="deletecontactus.html"><button class="button"  type="button">DELETE CONTACT US</button></a>
			</div>
		</div>
	</div>
	
	<div class="columnRate">
		<div class="cardRate">
			
			<h2 style="text-align: center">FEEDBACKS</h2>
			
			<div style=" padding-left:5px" align = "center">
			<a href="displayfeedback.php"><button class="button"  type="button">VIEW FEEDBACKS</button></a>
			</div>
			
		</div>
	</div>

</div>	
</center>
<center>
<h2 style="color: white" >BOOKING DETAILS</h2>
</center>
	<div>
			<div style=" padding-left:5px" align = "center">
			<a href="displayBooking2.php"><button class="button"  type="button">VIEW WITH DRIVER</button></a>
			<a href="deletewithDriver.html"><button class="button"  type="button">DELETE WITH DRIVER</button></a>
			</div><br>
			
			<div style=" padding-left:5px" align = "center">
			<a href="displayBooking.php"><button class="button"  type="button">VIEW SELF DRIVE</button></a>
			<a href="deleteselfDrive.html"><button class="button"  type="button">DELETE SELF DRIVE</button></a>
			</div><br>

	</div>

<br>

<footer style="background-color:#283c5f; width:100%; height:200px; padding-top:2px">
<div class="main-content">
<div class="left box1">
<h4><a href="#"></a></h4>
<h5><a href="index.html">HOME</a></h5>
<h5><a href="terms.html">TERMS & CONDITIONS</a></h5>
<h5><a href="testimonials.html">TESTIMONIALS</a></h5>
</div>
<div class="left box2">
<h4><a href="#"></a></h4>
<h5><a href="Rates.php">RATES</a></h5>
<h5><a href="about us.html">ABOUT US</a></h5>
<h5><a href="contactUs.html">CONTACT US</a></h5>
</div>

<img src="images/LOGO12.png" width="400px" height="170px" class="logo" style="  padding-top:15px; padding-left:10px; padding-right:230px" align="center">

<div class="right box3">
<h4><font color="white">FOLLOW US</font></h4>
<div class="social">
<a href="#"><img src="images/facebook.png" alt="facebookicon"></a>
<a href="https://www.twitter.com/iriteshmishra"><img src="images/twitter.png" alt="twittericon"></a>
<a href="https://www.instagram.com/virat.kohli"><img src="images/instagram.png" alt="instagramicon"></a>
<a href="#"><img src="images/youtube.png" alt="youtubeicon"></a>
</div>
</div>
</div>

</footer>
<h5 align="center"><font color="white">Copyright 2022 © Ritesh Mishra. All Rights Reserved.</font></h5>
</body>



</html>

<?php } else echo "<script>alert('Please Login First'); window.location='Login_admin.php';</script>"; 

?>