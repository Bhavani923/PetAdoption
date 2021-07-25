
<?php include('purchaseServer.php') ?>
<!DOCTYPE html>
<head>
<title> Purchases</title>
<link rel="stylesheet" type="text/css" href="Purchase.css?v=<?php echo time(); ?>">
</head>
<body>
<h1> Purchase Page</h1><br>    
<div class="container">
	
	<form action="Purchase.php" method="post">
			
			<label for="username">Adopter Name:</label></br>
			<input type="text" class="input-box" name="username"
			id="username" required></br>
				
			<label for="email">Email:</label></br>
			<input type="email" class="input-box" name="email"
			id="email" required></br>
							
			<label for="number">Phone Number:</label></br>
			<input type="text" class="input-box" name="number"
			id="number" required></br>

			<label for="addres">Address:</label></br>
			<input type="text" class="input-box" name="addres"
			id="addres" required></br>
				
			<label for="addres">Payment Option:</label></br>
			<select class="input-box" id="formate2" >
				<option value="2">Select mode of Payment </option>
				<option class="yes" value="png">Cash on delivery</option>
				
			</select></br>
							
			<button type="submit" class="submit-btn" name="purchase1" >
			Submit</button>						
	</form>
	</div>

</body>

</html>