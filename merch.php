<!doctype html>
<html lang="en">
<head>
<title>Merch</title>
<meta charset="utf-8">
<link rel="stylesheet" href="floater.css">
<style>
	
</style>

</head>

<body>
	<div class="wrapper">

		<header><h1>Double Play Hitting Facility</h1></header>
		
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="instruct.php">Instructors</a></li>
				<li><a href="merch.php">Merchandise</a></li>
				<li><a href="aboutus.php">About Us</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
		<div class="rightco">
			<main>
				<h3>Batting Gloves</h3>
				<img src="glove.jpg" alt="Gloves" height="75" width="100" style="float:right">
				<form method="GET" action="process.php" name="eric_inventory">
					Infield Glove:<input type="text" name="glove" id="product_id" list="glove">
						<datalist id="glove">
							<option value="Mizuno 12 inch Brown">
							<option value="Mizuno 12 inch Black">
							<option value="Mizuno 12 inch Tan">
							<option value="Wilson 12 inch Brown">
							<option value="Wilson 12 inch Black">
							<option value="Wilson 12 inch Tan">
							<option value="Nakona 12 inch Brown">
							<option value="Nakona 12 inch Black">
							<option value="Nakona 12 inch Tan">
							
							</datalist>
						<br>
					
				<h3>Helmets</h3>
				<img src="helmet.jpg" alt="baseball helmet" height="75" width="100" style="float:right">
				Brand:<input type="text" name="helmet" id="product_name" list="helmet">
						<datalist id="helmet">
							<option value="Mizuno Black">
							<option value="Mizuno Red">
							<option value="Mizuno Blue">
							<option value="Adidas Black">
							<option value="Adidas Red">
							<option value="Adidas Blue">
							<option value="Nike Black">
							<option value="Nike Red">
							<option value="Nike Blue">
						</datalist>
					
					
				<br>
				<h3>Bats</h3>
				<img src="bat.jpg" alt="baseball bat" height="75" width="100" style="float:right">
				Brand:<input type="text" name="bat" id="product_type" list="bat">
						<datalist id="bat">
							<option value="Easton size 32">
							<option value="Easton size 33">
							<option value="Easton size 34">
							<option value="Omaha size 32">
							<option value="Omaha size 33">
							<option value="Omaha size 34">
							<option value="Nike size 32">
							<option value="Nike size 33">
							<option value="Nike size 34">
						</datalist>
						<br>

					<input type="submit">
					</form>
				<br>
				
			
			
		
			</main>
			
</div>
	</div>
<footer>Copyright &copy Eric Garcia</footer>
</body>

</html>