<?php
//session start
session_start();
?>
<html>
	<head>
		<link rel ="stylesheet" href="css/orders.css">
		<title>Order</title>
	</head>
	<body>

		<div class="topnav">
			<!--do not add href in mcc ics food company this is for display-->
			<a class="active" href="#">MCC-ICS FOOD COMPANY</a>
			<!--navigation-->
			<div class="topnav-right">
				<a href="index.php">Home</a>
				<a class="active" href="order.php">Order</a>
				<a href="placeorder.php">Bill</a>
				<a href="team.php">Team</a>
				<a href="contact.php">Contact</a>
				<a href="admin.php">Admin</a>
			</div>
		</div>
		
		<!--The action ="create.php" in every form method is used to send data to mongodb-->
		<!--Carbonara-->	
		<div class="wd">
			<div class="row">
				<div class="column">
					<div class="card">
						<img src="food/carbonara.png" alt="carbo" style="width:100%;">
						<div class="container">
							<form method ="post" action="create.php" onSubmit="alert('Has been added to cart!');">
								<input type="hidden" name="food" value="Carbonara">
								<input type="hidden" name="price" value="170">
								<p><button type = "submit" name = "submit" class="button">Add to cart</button></p>
								<h2>CARBONARA</h2>
								<h2> 170 PHP </h2>
							</form>
						</div>
					</div>
				</div>
			
				<!--Grilled Chicken-->
				<div class="column">
					<div class="card">
						<img src="food/chicken.png" alt="grill" style="width:100%;">
						<div class="container">
							<form method ="post" action="create.php" onSubmit="alert('Has been added to cart!');">
								<input type="hidden" name="food" value="Grilled Chicken">
								<input type="hidden" name="price" value="180">
								<p><button type = "submit" name = "submit" class="button">Add to cart</button></p>
								<h2> GRILLED CHICKEN </h2>
								<h2> 180 PHP </h2>
							</form>
						</div>
					</div>
				</div>
				
				<!--Beef kebab-->
				<div class="column">
					<div class="card">
						<img src="food/kebab.png" alt="bkebab" style="width:100%;">
						<div class="container">
							<form method ="post" action="create.php" onSubmit="alert('Has been added to cart!');">
								<input type="hidden" name="food" value="Beef kebab">
								<input type="hidden" name="price" value="225">
								<p><button type = "submit" name = "submit" class="button">Add to cart</button></p>
								<h2> BEEF KEBAB </h2>
								<h2> 225 PHP </h2>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!--Pizza-->	
		<div class="wd">
			<div class="row">
				<div class="column">
					<div class="card">
						<img src="food/pizza.png" alt="piz" style="width:100%;">
						<div class="container">
							<form method ="post" action="create.php" onSubmit="alert('Has been added to cart!');">
								<input type="hidden" name="food" value="Pizza">
								<input type="hidden" name="price" value="220">
								<p><button type = "submit" name = "submit" class="button">Add to cart</button></p>
								<h2> PIZZA </h2>
								<h2> 220 PHP </h2>
							</form>
						</div>
					</div>
				</div>
				
				<!--Fried Rice-->
				<div class="column">
					<div class="card">
						<img src="food/rice.png" alt="frice" style="width:100%;">
						<div class="container">
							<form method ="post" action="create.php" onSubmit="alert('Has been added to cart!');">
								<input type="hidden" name="food" value="Fried Rice">
								<input type="hidden" name="price" value="120">
								<p><button type = "submit" name = "submit" class="button">Add to cart</button></p>
								<h2> FRIED RICE </h2>
								<h2> 120 PHP </h2>
							</form>
						</div>
					</div>
				</div>
				
				<!--Salmon Salad-->
				<div class="column">
					<div class="card">
						<img src="food/salmon.png" alt="cs" style="width:100%;">
						<div class="container">
							<form method ="post" action="create.php" onSubmit="alert('Has been added to cart!');">
								<input type="hidden" name="food" value="Salmon Salad">
								<input type="hidden" name="price" value="100">
								<p><button type = "submit" name = "submit" class="button">Add to cart</button></p>
								<h2> SALMON SALAD </h2>
								<h2> 100 PHP </h2>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!--Shrimp-->	
		<div class="wd">
			<div class="row">
				<div class="column">
					<div class="card">
						<img src="food/shrimp.png" alt="spasta" style="width:100%;">
						<div class="container">
							<form method ="post" action="create.php" onSubmit="alert('Has been added to cart!');">
								<input type="hidden" name="food" value="Shrimp">
								<input type="hidden" name="price" value="165">
								<p><button type = "submit" name = "submit" class="button">Add to cart</button></p>
								<h2> SHRIMP PASTA </h2>
								<h2> 165 PHP </h2>
							</form>
						</div>
					</div>
				</div>

				<!--Pork Siomai-->
				<div class="column">
					<div class="card">
						<img src="food/siomai.png" alt="siomaipork" style="width:100%;">
						<div class="container">
							<form method ="post" action="create.php" onSubmit="alert('Has been added to cart!');">
								<input type="hidden" name="food" value="Pork Siomai">
								<input type="hidden" name="price" value="145">
								<p><button type = "submit" name = "submit" class="button">Add to cart</button></p>
								<h2> PORK SIOMAI </h2>
								<h2> 145 PHP </h2>
							</form>
						</div>
					</div>
				</div>
				
				<!--Medium Rare Steak-->
				<div class="column">
					<div class="card">
						<img src="food/steak.png" alt="steak" style="width:100%;">
						<div class="container">
							<form method ="post" action="create.php" onSubmit="alert('Has been added to cart!');">
								<input type="hidden" name="food" value="Medium Rare Steak">
								<input type="hidden" name="price" value="255">
								<p><button type = "submit" name = "submit" class="button">Add to cart</button></p>
								<h2> MEDIUM RARE STEAK </h2>
								<h2> 255 PHP </h2>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!--Sushi-->	
		<div class="wd">
			<div class="row">
				<div class="column">
					<div class="card">
						<img src="food/sushi.png" alt="sush" style="width:100%;">
						<div class="container">
							<form method ="post" action="create.php" onSubmit="alert('Has been added to cart!');">
								<input type="hidden" name="food" value="Sushi">
								<input type="hidden" name="price" value="160">
								<p><button type = "submit" name = "submit" class="button">Add to cart</button></p>
								<h2> SUSHI </h2>
								<h2> 160 PHP </h2>
							</form>
						</div>
					</div>
				</div>
				
				<!--Teriyaki-->
				<div class="column">
					<div class="card">
						<img src="food/teriyaki.png" alt="teri" style="width:100%;">
						<div class="container">
						<form method ="post" action="create.php" onSubmit="alert('Has been added to cart!');">
								<input type="hidden" name="food" value="Teriyaki">
								<input type="hidden" name="price" value="175">
								<p><button type = "submit" name = "submit" class="button">Add to cart</button></p>
								<h2> TERIYAKI </h2>
								<h2> 175 PHP </h2>
							</form>
						</div>
					</div>
				</div>
				
				<!--Chicken Tikka Masala-->
				<div class="column">
					<div class="card">
						<img src="food/tikka.png" alt="tikka" style="width:100%;">
						<div class="container">
							<form method ="post" action="create.php" onSubmit="alert('Has been added to cart!');">
								<input type="hidden" name="food" value="Chicken Tikka Masala">
								<input type="hidden" name="price" value="120">
								<p><button type = "submit" name = "submit" class="button">Add to cart</button></p>
								<h2> CHICKEN TIKKA MASALA </h2>
								<h2> 120 PHP </h2>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

	</body>
</html>