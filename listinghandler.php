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
	$link = mysqli_connect("localhost", "root", "mysql44") or die("ERROR: " . mysqli_error($link));
	
	//Create DB
	$dbQuery = "CREATE DATABASE IF NOT EXISTS rpItems";
	$db = $link->query($dbQuery) or die ("DB ERROR: " . mysqli_error($link));
	//$db->close();
	
	//Create Items Table
	$link->select_db("rpItems") or die(mysqli_error());
	$link->query("CREATE TABLE IF NOT EXISTS items (
		id INT NOT NULL AUTO_INCREMENT,
		itemName VARCHAR(30) NOT NULL,
		catagory VARCHAR(30) NOT NULL,
		price FLOAT(3, 2) NOT NULL,
		description VARCHAR(400),
		PRIMARY KEY(id)
	)") or die("TABLE ERROR: " . mysqli_error($link));
	
	//Insert Information
	//$strSQL = "INSERT INTO items(";
	
	$link->close();
	
	
	
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
