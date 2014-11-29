<?php
	
	//Item Information
	$catagory = $_POST["catagory"];
	$item = $_POST["itemName"];
	$price = $_POST["price"];
	$description = $_POST["description"];
	//REMEMEBER TO GET PICTURE
	
	//Contact Information
	$phone = $_POST["phone"];
	$email = $_POST["email"];
	
	/*DO NOT FORGET TO PUT THIS ON YOUR LOCAL HOST AND ADD YOUR INFORMATION*/
	$link = mysqli_connect("localhost", "root", "root") or die("ERROR: " . mysqli_error($link));
	
	//Create DB
	mysqli_query("CREATE DATABASE IF NOT EXISTS rpItems") or die (mysqli_error());
	
	//Create Items Table
	mysqli_select_db("rpItems") or die(mysqli_error());
	mysqli_query("CREATE TABLE IF NOT EXISTS items (
		id INT NOT NULL AUTO_INCREMENT,
		itemName VARCHAR(30) NOT NULL,
		catagory VARCHAR(30) NOT NULL,
		price FLOAT(3, 2) NOT NULL,
		description VARCHAR(400),
		PRIMARY KEY('id')
	)") or die(mysqli_error());
	
	//Insert Information
	//$strSQL = "INSERT INTO items(";
	
	mysqli_close();
	
	
	//Pictures need to be added, I am just not sure how to store them yet

/*if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
  
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Error: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Stored in: " . $_FILES["file"]["tmp_name"];
    }
  }
else
  {
  echo "Invalid file";
  }*/
  
?>

<html>
<head>
<title>Listing Posted</title>
</head>
<body>
<h1>You Good!</h1>
</body>
</html>
