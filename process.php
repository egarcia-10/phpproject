<!doctype html>
<html lang="en">
<head>
<title>Payment</title>
<meta charset="utf-8">
<link rel="stylesheet" href="floater.css">
<style>
	
</style>

<script type="text/javascript">

function data_validator()
{
	var fname = document.forms["eric_customers"]["fname"].value;
	var lname = document.forms["eric_customers"]["lname"].value;
	var addr = document.forms["eric_customers"]["address"].value;
	var ccinfo = document.forms["eric_customers"]["credit_card_info"].value;
	var email = document.forms["eric_customers"]["customer_id"].value;
	
	if(fname=="")
		{
			alert("Please enter value for the first name!");
			return false;
		}

	if(lname=="")
		{
			alert("Please enter value for the last name!");
			return false;
		}
		
	if(addr=="")
		{
			alert("Please enter value for the address!");
			return false;
		}
	
	if(ccinfo=="")
		{
			alert("Please enter value for the credit card!");
			return false;
		}
		
	if(email=="")
		{
			alert("Please enter value for the email!");
			return false;
		}
}

</script>

</head>

<body>

<?php
//declare form variables from input.php file

$id = $_GET['id'];
$date = $_GET['mydate'];
$instructor = $_GET['instructor'];
$time = $_GET['time'];
$cages = $_GET['quantity'];

//prepare db parameters

$host = "localhost";
$username = "eric";
$password = "class2018$";
$db = "db_it225";

//prepare db connection

$dbConn = mysqli_connect($host, $username, $password, $db);

//prepare sql statement for inserting data from the form into the db table

$sql = "INSERT INTO eric_orders(customer_id, rental_date, product_id, rental_time, qty_of_cages) VALUES ('$id','$date','$instructor','$time','$cages')";

//execute the query (sql statement)

mysqli_query($dbConn, $sql);

//close db connection

mysqli_close($dbConn);


?>

<?php
//declare form variables from input.php file

$id = $_GET['glove'];
$name = $_GET['helmet'];
$type = $_GET['bat'];

//prepare db parameters

$host = "localhost";
$username = "eric";
$password = "class2018$";
$db = "db_it225";

//prepare db connection

$dbConn = mysqli_connect($host, $username, $password, $db);

//prepare sql statement for inserting data from the form into the db table

$sql = "INSERT INTO eric_inventory(product_id, product_name, product_type) VALUES ('$id','$name','$type')";

//execute the query (sql statement)

mysqli_query($dbConn, $sql);

//close db connection

mysqli_close($dbConn);


?>




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


<h2> Thank You!</h2>

<?php
//prepare parameters for db connections
$host = "localhost";
$username = "eric";
$passwrd = "class2018$";
$db = "db_it225";

//prepare database connection
$dbConn = mysqli_connect($host, $username, $passwrd, $db);


//prepare the sql statement retieval from the table
$sql = "SELECT product_id, product_name, product_type FROM eric_inventory";


//process/execute the SQL statement for the DB query to create a result set
$resultset = mysqli_query($dbConn, $sql);

//loop through the resultset in memory to print each record in a php webpage
while($records = mysqli_fetch_assoc($resultset))
{
	//print each record from the resultset
	printf("%s %s %s \n", $records["product_id"], $records["product_name"], $records["product_type"]);
	echo "<br>";
}

//free server memory by releasing the resultset
mysqli_free_result($resultset);



//close DB conncection
mysqli_close($dbConn);


?>

<h3> Payment Information </h3>

	<form method="POST" action="confirm.php" name="eric_customers" onsubmit="return data_validator()">
		<p>First Name: <br> <input type ="text" name="fname" id="fname"></p>
		<p>Last Name: <br> <input type = "text" name="lname" id="lname"></p>
		<p>Address: <br> <input type ="text" name="addr" id="address" size="60px"></p>
		<p>Credit Card Number: <br> <input type="text" name="ccnum" id="credit_card_info" size="35px"></p>
		<p>Email Address: <br> <input type="text" name="cemail" id="customer_id" size="35px"></p>
		<p><input type="submit" value="Confirm Payment"></p>
	</form>
		
			
		
			</main>
			
</div>
	</div>
<footer>Copyright &copy Eric Garcia</footer>




</body>

</html>
