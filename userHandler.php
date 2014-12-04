<?php
  //Item Information
  $fname = $_POST["firstName"];
  $lname = $_POST["lastName"];
  $email = $_POST["username"];
  $password = $_POST["password"];
  
  /*DO NOT FORGET TO PUT THIS ON YOUR LOCAL HOST AND ADD YOUR INFORMATION*/
  $link = mysqli_connect("localhost", "root", "mysql44") or die("ERROR: " . mysqli_error($link));
  
  //Create DB
  $dbQuery = "CREATE DATABASE IF NOT EXISTS rpItems";
  $db = $link->query($dbQuery) or die ("DB ERROR: " . mysqli_error($link));
  
  //Create Items Table
  $link->select_db("rpItems") or die(mysqli_error());
  $link->query("CREATE TABLE IF NOT EXISTS members (
    id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
    firstName VARCHAR(30) NOT NULL,
    lastName VARCHAR(30) NOT NULL,
    email VARCHAR(40) NOT NULL,
    password VARCHAR(30) NOT NULL,
    PRIMARY KEY(id)
  )") or die("TABLE ERROR: " . mysqli_error($link));
  
  //Insert Information
  $strSQL = "INSERT INTO members(firstName, lastName, email, password)";
  $strSQL .= "VALUES('" . $fname . "', '" . $lname . "', '" . $email . "', '";
  $strSQL .= $password . "')";
  $insert = mysqli_query($link, $strSQL) or die ("INSERT ERROR: " . mysqli_error($link));
  
  $link->close();  
?>

<html>
  <head>
    <title>User Created</title>
    <link rel="stylesheet" type="text/css" href="resources/stylesheet.css" />
  </head>
  <body>
    <h1>Thank You!</h1>
    <div id="thank">
      <h2>You are now a registered user!</h2>
      <button><a href="index.php">Go back</a></button>
    </div>
  </body>
</html>
