<?php
	session_start();
?>
<html>
	<head>
		<title>
			Ticket Booking Successful
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 127px
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
		<img class="logo" src="admin/img/logo.png"/> 
		<h3 id='title' style="width:40px">
			NAEKANA BUS RESERVATION
		</h3>
		<div style="background-color:#993">
			<ul >
				<li><a href="customer_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>
		<h2>BOOKING SUCCESSFUL</h2>
		<h3>Your payment of Kshs. <?php echo $_SESSION['total_amount']; ?> has been received.<br><br> Your Ticket NO is <strong><?php echo $_SESSION['pnr'];?></strong>. Your tickets have been booked successfully.</h3><a style="text-decoration:none; margin-left:200px" href="customer_homepage.php">Home</a>
		<!--Following data fields were empty!
			...
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
		-->
        
	</body>
</html>