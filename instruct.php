<!doctype html>
<html lang="en">
<head>
<title>Instructors</title>
<meta charset="utf-8">
<link rel="stylesheet" href="floater.css">

<script type="text/javascript">

function data_validator()
{
	var customer = document.forms["eric_orders"]["customer_id"].value;
	var date = document.forms["eric_orders"]["rental_date"].value;
	var instructor = document.forms["eric_orders"]["product_id"].value;
	var time = document.forms["eric_orders"]["rental_time"].value;
	var cages = document.forms["eric_orders"]["qty_of_cages"].value;
	
	if(customer=="")
		{
			alert("Please enter value for the first and last name!");
			return false;
		}

	if(date=="")
		{
			alert("Please enter value for the date!");
			return false;
		}
		
	if(instructor=="")
		{
			alert("Please enter value for the instructor!");
			return false;
		}
	
	if(time=="")
		{
			alert("Please enter value for the time!");
			return false;
		}
		
	if(cages=="")
		{
			alert("Please enter value for the number of cages!");
			return false;
		}
}

</script>

</head>

<body>
	<div class="wrapper">

		<header><h1>Instructors</h1></header>
		
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
				<img src="bob.png" class="bobfloat" alt="BattingCage" height="200" width="200">
				<h2>Bob</h2>
					<p>Bob is a great instructor. He comes from years of experience
					and will serve you very well if you decide to take instruction from him. 
					He is proficient in hitting as well as fielding and has a lot of knowledge.</p>
				<br>
				<br>
				<h2> Rick </h2>
					<p>Rick has been instructing for many years. He has plenty of experience in
					pitching and fielding.Furthermore, Rick played professionally for 10 years and 
					is very willing to pass along his knowledge.
				<br>
				<br>
				<h2>Jerry</h2>
					<p>Jerry was a shortstop and second baseman for the local university. He was
					an outstanding hitter and can really show you how to field a groundball efficiently. 
					Not only that, but he has experience in the catcher position too. 
					<br>
					<br>
				<h1> Book your lesson or just rent a cage for yourself!</h1>
				<form method="GET" action="process.php" name="eric_orders" onsubmit="return data_validator()">
					First and Last Name: <input type="text" name="id" id="customer_id">
					<br>
					Choose a Date: <input type="date" name="mydate" id="rental_date">
					<br>
					Choose an Instructor: <input type="text" name="instructor" id="product_id" list="instruct">
						<datalist id="instruct">
							<option value="Bob">
							<option value="Rick">
							<option value="Jerry">
						</datalist>
					<br>
					Select Time: <input type="text" name="time" id="rental_time" list="times">
					<datalist id="times">
						<option value="12:00">
						<option value="1:00">
						<option value="2:00">
						<option value="3:00">
						<option value="4:00">
						<option value="5:00">
						<option value="6:00">
						<option value="7:00">
						<option value="8:00">
						<option value="9:00">
					</datalist>
					<br>
					Number of Cages: <input type="text" name="quantity" id="qty_of_cages">
					<br>
					<input type="submit" value="Submit"> <input type="reset">
				</form>
				
				
			</main>
		</div>







	</div>
<footer>Copyright &copy Eric Garcia</footer>
</body>

</html>