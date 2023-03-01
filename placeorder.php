<?php
session_start();
// session start
require 'database.php';
?>
<html>
	<head>
		<link rel ="stylesheet" href="css/placeorder.css">
		<title>Bill</title>
		
	</head>
	
	<body>
		<div class="topnav">
			<!--do not add href in mcc ics food company this is for display-->
			<a class="active" href="#">MCC-ICS FOOD COMPANY</a>
			<!--navigation-->
			<div class="topnav-right">
				<a href="index.php">Home</a>
				<a href="order.php">Order</a>
                <a class="active" href="placeorder.php">Bill</a>
				<a href="team.php">Team</a>
				<a href="contact.php">Contact</a>
				<a href="admin.php">Admin</a>
			</div>
		</div>
		<!--the body-->
		<div class="wd">
			<div class="topnav">
				<div class="tab">
					<button class="tablinks" onclick="openCity(event, 'Order')">Order</button>
					<button class="tablinks" onclick="openCity(event, 'Bill')">Bill</button>
				</div>
				<!--the order tab-->
				<div id="Order" class="tabcontent">
					<?php
						//Gather Data//
						$getfoods = $food->find([]);
						foreach ($getfoods as $getfood){
					?>
						<ul>
							<li class ="textpm">Pending Order: <?php echo $getfood->food; echo " "; echo $getfood->price; ?> PHP</li>
							<form method ="post" action ='delete.php?id=<?php echo $getfood->_id?>' onSubmit="alert('You have cancelled an order');">
							    <button input="submit" class="btnorder">Cancel</button>
							</form>
							<form method ="post" action ='delete.php?id=<?php echo $getfood->_id?>' onSubmit="alert('Your order has been submitted!');">
                                <input type="hidden" name="food" value="<?php echo $getfood->food;?>">    
                                <input type="hidden" name="price" value="<?php echo $getfood->price;?>">
							    <button input="submit" name ="fsubmit"  class="btnorderedit">Order</button>
							</form>
						</ul>
						<?php } if (empty($getfood)) {
							echo "<div class ='textcenter'>YOU HAVE NO PENDING ORDER </div>"; } 
						?>
				</div>	
				
				<!--the bill tab-->
				<div id="Bill" class="tabcontent">
				    <?php
						//Gather Data//
						$getfoods = $food->find([]);
                        $sum = 0; //to give value for sum
						foreach ($getfoods as $getfood){
                        $sum += $getfood->price;
						} if (empty($getfood)) { //called when the data is empty
						echo "<div class ='textcenter'> YOU NEED TO ORDER TO SEE BILL </div>";
                        } else { //shows when you have order
						echo "<div class ='textcenter'> YOUR TOTAL BILL IS: ".$sum." PHP</div>";  } 
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