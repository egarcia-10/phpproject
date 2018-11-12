<!doctype html>
<html lang="en">
<head>
<title>Thank you!</title>
<meta charset="utf-8">
<link rel="stylesheet" href="floater.css">
<style>

</style>

</head>

<body>

<?php
//declare form variables from process.php file

$fname = $_GET['fname'];
$lname = $_GET['lname'];
$addr = $_GET['addr'];
$ccnum = $_GET['ccnum'];
$cemail = $_GET['cemail'];

//prepare db parameters

$host = "localhost";
$username = "eric";
$password = "class2018$";
$db = "db_it225";

//prepare db connection

$dbConn = mysqli_connect($host, $username, $password, $db);

//prepare sql statement for inserting data from the form into the db table

$sql = "INSERT INTO eric_customers(fname, lname, address, credit_card_info, customer_id) VALUES ('$fname','$lname','$addr','$ccnum','$cemail')";

//execute the query (sql statement)

mysqli_query($dbConn, $sql);

//close db connection

mysqli_close($dbConn);


?>


	<div class="wrapper">

		<header><h1>Double Play Baseball Facility</h1></header>
		
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


<h2 style = "text-align:center"> Thank You For Your Purchase!</h2>

<p>Double Play Hitting appreciates your purchase. We look forward to serving you whenever
you're in need of practice, instruction, or just some new batting gloves. Please check out 
our <a href="https://twitter.com/" target="_blank">Twitter</a> page and like us on 
<a href="https://www.facebook.com/" target="_blank">Facebook</a>. We strive to make our facilities 
a better place, so please contact us with any concern, or praise, if needed.</p>

<p>Address:<br>
5555 Way Back Way<br>
Big, TX<br>
55344</p>

<p>Phone Number:<br>
345-345-3456</p>

<p>Email:<br>
dphitting@cages.com</p>

			
		
			</main>
			
</div>
	</div>
<footer>Copyright &copy Eric Garcia</footer>




</body>

</html>
