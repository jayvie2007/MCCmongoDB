<?php
session_start();
// call database
require 'database.php';
?>
<html>
	<head>
		<link rel ="stylesheet" href="css/admins.css">
		<title>Admin</title>
		
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
				<a href="contact.php">Contact</a>
				<a class="active"  href="admin.php">Admin</a>
			</div>
		</div>
		<!--the body-->
		<div class="wd">
			<div class="topnav">
				<div class="tab">
					<button class="tablinks" onclick="openCity(event, 'Order')">Order</button>
					<button class="tablinks" onclick="openCity(event, 'Feedback')">Feedback</button>
				</div>
			<!--the order tab-->
				<div id="Order" class="tabcontent">
					<?php
						//Gather Data//
						$getffoods = $ffood->find([]);
						foreach ($getffoods as $getffood){
					?>
						<ul>
							<li class ="textpm">Order ready to be deliver: <?php echo $getffood->food; echo " "; echo $getffood->price; ?> PHP</li>
							<form method ="post" action ='received.php?id=<?php echo $getffood->_id?>' onSubmit="alert('You have assemble the order');">
								<button input="submit" class="btnorderedit">Deliver</button>
							</form>
						</ul>
						<?php
							}  if (empty($getffood)) {
								echo "<div class ='textcenter'>YOU HAVE NO ORDER </div>";
							}
						?>
				</div>	
				
			<!--the feedback tab-->
				<div id="Feedback" class="tabcontent">
					<?php
						//Gather Data//
						$getmessages = $message->find([]);
						foreach ($getmessages as $getmessage){
					?>
						<ul>
							<li class ="textpm">Full Name: <?php echo $getmessage->fname ?></li>
							<li class ="textpm">Email Address: <?php echo $getmessage->eaddress ?></li>
							<li class ="textpm">Contact Number: <?php echo $getmessage->num ?></li>
							<li class ="textpm">Subject: <?php echo $getmessage->subject ?></li>
							<li class ="textmsg">Message: <?php echo $getmessage->msg ?></li>
							<form method ="post" action ='received.php?id=<?php echo $getmessage->_id?>' onSubmit="alert('You have read the message');">
								<button input="submit" class="btnorder">Delete</button>
							</form>
						</ul>
						<?php
							} if (empty($getmessage)) {
								echo "<div class ='textcenter'>YOU HAVE NO FEEDBACK </div>";
							}
						?>
				</div>
			</div>
		</div>
		<!--script of tabs-->
		<script>
			function openCity(evt, cityName) {
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
			tabcontent[i].style.display = "none";
			}
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
			tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
			document.getElementById(cityName).style.display = "block";
			evt.currentTarget.className += " active";
			}
		</script>
	</body>
</html>