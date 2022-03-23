<?php
	include_once 'config.php';
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Ritesh Car Rental</title>
<link rel="stylesheet" type="text/css" href="styles/Home_styles.css">
<link rel="stylesheet" type="text/css" href="styles/footer.css">
<link rel="stylesheet" type="text/css" href="styles/stylesss.css">
<link rel="stylesheet" type="text/css" href="styles/tablestyles.css">
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
</header>
</div>
</div>

<ul class="menu">
   <li class="menu"><a href="index.html"><i class="fa fa-home" id="nav-image"></i>Home</a></li>
   <li class="menu"><a href="about us.html"><i class="fa fa-user" id="nav-image"></i>About Us</a></li>
   <li class="menu"><a href="Rates.php"><i class="fa fa-usd" id="nav-image"></i>Rates</a></li>
   <li class="menu"><a href="contactUs.html"><i class="fa fa-phone" id="nav-image"></i>Contact Us</a></li>
</ul>
<br>



<center>
<h1 style="color: white" >--CONTACT US--</h1>
<div class="table-responsive">
		<table>
				<tr class="table-header">
					<th style="background: #b2b2b2" class="bookingA">CONTACT US ID</th>
					<th style="background: #b2b2b2" class="bookingA">FIRST NAME</th>
					<th style="background: #b2b2b2" class="bookingA">LAST NAME</th>
					<th style="background: #b2b2b2" class="bookingA">EMAIL</th>
					<th style="background: #b2b2b2" class="bookingA">PHONE NUMBER</th>
					<th style="background: #b2b2b2" class="bookingA">MESSAGE</th>
					
				</tr>
			
			
			<?php
			
			
			$sql = "select * from contactus";
			$result = $conn->query($sql);
			
			if($result->num_rows>0){
				while($row=$result->fetch_assoc()){
					echo"<tr><td style='color: white ;text-align: center' class='bookingB'>".$row["ContactusID"]."</td><td style='color: white ;text-align: center' class='bookingB'>".$row["Fname"]."</td><td style='color: white ;text-align: center' class='bookingB'>".$row["Lname"]."</td><td style='color: white ;text-align: center' class='bookingB'>".$row["Email"]."</td><td style='color: white ;text-align: center' class='bookingB'>".$row["Pnum"]."</td><td style='color: white ;text-align: center' class='bookingB'>".$row["Msg"]."</td></tr>";
				}
			}
			else{
				echo"Empty Table";
			}
			
			echo"</table></div><br>";
			$conn->close();
			?>

<br>		
</center>

<br>
<footer style="background-color:#283c5f; width:100%; height:200px; padding-top:2px">
<div class="main-content">
<div class="left box1">
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
<h5 align="center"><font color="white">Copyright 2022 © Ritesh Mishra . All Rights Reserved.</font></h5>
</body>



</html>

