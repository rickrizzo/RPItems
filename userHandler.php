<?php
  //Item Information
  $fname = $_POST["firstName"];
  $lname = $_POST["lastName"];
  $email = $_POST["username"];
  $password = $_POST["password"];
  
  /*DO NOT FORGET TO PUT THIS ON YOUR LOCAL HOST AND ADD YOUR INFORMATION*/
  include('includes/connect.php');
  
  //Create DB
  $dbQuery = "CREATE DATABASE IF NOT EXISTS rpItems";
  $database = $db->query($dbQuery) or die ("DB ERROR: " . mysqli_error($db));
  
  //Create Items Table
  $db->select_db("rpItems") or die(mysqli_error());
  $db->query("CREATE TABLE IF NOT EXISTS members (
    id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
    firstName VARCHAR(30) NOT NULL,
    lastName VARCHAR(30) NOT NULL,
    email VARCHAR(40) NOT NULL,
    password VARCHAR(30) NOT NULL,
    PRIMARY KEY(id)
  )") or die("TABLE ERROR: " . mysqli_error($db));
  
  //Insert Information
  $strSQL = "INSERT INTO members(firstName, lastName, email, password)";
  $strSQL .= "VALUES('" . $fname . "', '" . $lname . "', '" . $email . "', '";
  $strSQL .= $password . "')";
  $insert = mysqli_query($db, $strSQL) or die ("INSERT ERROR: " . mysqli_error($db));
  
  $db->close();  
?>

<html>
  <head>
    <title>User Created</title>
    <link rel="stylesheet" type="text/css" href="resources/stylesheet.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <h1>Thank You!</h1>
    <div id="thank">
      <h2>You are now a registered user!</h2>
      <button><a href="index.php">Go back</a></button>
    </div>
  </body>
</html>
