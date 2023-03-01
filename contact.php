<?php
//session start
session_start();
?>
<html>
	<head>
		<link rel ="stylesheet" href="css/contact.css">
		<title>Contact</title>
	</head>
	
	<body>
	
		<div class="topnav">
			<!--do not add href in mcc ics food company this is for display-->
			<a class="active" href="#">MCC-ICS FOOD COMPANY</a>
			<!--navigation-->
			<div class="topnav-right">
				<a href="index.php">Home</a>
				<a href="order.php">Order</a>
				<a href="placeorder.php">Bill</a>
				<a href="team.php">Team</a>
				<a class="active" href="contact.php">Contact</a>
				<a href="admin.php">Admin</a>
			</div>
		</div>
		<!--The contact form-->
		<!--The action ="create.php" in every form method is used to send data to mongodb-->
		<form method ="post" action="create.php" onSubmit="alert('We have received your feedback!');">
			
			<div class="input-group">
				<label>Have any question? Send us a message!</label>
					<input type="text" name="fname" placeholder="Full name"required>
			</div>
			<div class="input-group">
				<input type="email" name="eaddress" placeholder="Email Address"required>
			</div>
			<div class="input-group">
				<input type="tel" name="num" pattern="[0-9]{11}" placeholder="Contact Number"required>
			</div>
			<div class="input-group">
				<input type="text" name="subject"  placeholder="Subject">
			</div>
			<div class="input-group">
				<textarea type="text" name="msg" class="textinput" maxlength="200" placeholder="Message (maximum of 200 characters)"required></textarea>
			</div>
			<div class="input-group">
				<button type="submit" name="submitform" class="button">Send Message</button>
			</div>
        </form>
		
	</body>
	</html>