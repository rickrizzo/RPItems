<?php
	//Item Information
	$catagory = $_POST["catagory"];
	$item = $_POST["itemName"];
	$price = $_POST["price"];
	$description = $_POST["description"];
	$img = $_POST["itemPicture"];
	
	//Contact Information
	$phone = $_POST["phone"];
	$email = $_POST["email"];
	
	/*DO NOT FORGET TO PUT THIS ON YOUR LOCAL HOST AND ADD YOUR INFORMATION*/
	$link = mysqli_connect("localhost", "root", "mysql44") or die("ERROR: " . mysqli_error($link));
	
	//Create DB
	$dbQuery = "CREATE DATABASE IF NOT EXISTS rpItems";
	$db = $link->query($dbQuery) or die ("DB ERROR: " . mysqli_error($link));
	//$db->close();
	
	//Create Items Table
	$link->select_db("rpItems") or die(mysqli_error());
	$link->query("CREATE TABLE IF NOT EXISTS items (
		id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
		itemName VARCHAR(30) NOT NULL,
		catagory VARCHAR(30) NOT NULL,
		price FLOAT(6, 2) NOT NULL,
		description VARCHAR(400),
		img VARCHAR(200),
		PRIMARY KEY(id)
	)") or die("TABLE ERROR: " . mysqli_error($link));
	
	//Insert Information
	$strSQL = "INSERT INTO items(itemName, catagory, price, description, img)";
	$strSQL .= "VALUES('" . $item . "', '" . $catagory . "', '" . $price . "', '";
	$strSQL .= $description . "', '" . $img . "')";
	$insert = mysqli_query($link, $strSQL) or die ("INSERT ERROR: " . mysqli_error($link));
	
	$link->close();
  
?>

<html>
<head>
	<title>Listing Posted</title>
	<link rel="stylesheet" type="text/css" href="resources/stylesheet.css" />
</head>
<body>
	<h1>Thank You!</h1>
	<div id="thank">
		<h2>Your item has been uploaded</h2>
		<button><a href="index.php">Go back</a></button>
	</div>
</body>
</html>
