<?php
  //Connect to DB
  $dbOK = false;
  include('includes/connect.php');
  if ($db->connect_error) {
    echo '<div class="messages">Could not connect to the database. Error: ';
    echo $db->connect_errno . ' - ' . $db->connect_error . '</div>';
  } 
  else {
    $dbOk = true; 
  }
  $havePost = isset($_POST["Submit"]);
  if($havePost){
    $login = $_POST["username"];
    $pass = $_POST["password"];
    
    $query = "SELECT * FROM members WHERE email LIKE '$login'";
    $result = $db->query($query);
    $numResults = $result->num_rows;
    if($numResults != 0){
      $record = $result->fetch_assoc();
      if($pass == $record["password"]){
        header('Location: index.php');
      }
    }
  }
  $db->close();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Log In</title>    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>    
    <link href="resources/stylesheet.css" rel="stylesheet" type="text/css"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--<script type="text/javascript" src="JavaScript/LogInJavascript.js"></script>-->
  </head>
  <body>

    <!--Navigation Bar-->
    <nav>
      <ul>
        <li><a href="index.php">RPItems</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="SignUp.html">Sign Up</a></li>
        <li><a href="login.php">Log In</a></li>
      </ul>
    </nav>
    <h1>RPItems</h1>
    <div id="description">
      <div id="itemLogo">
        <img src="resources/logo.jpg" id="logo"/>
      </div>
      <form id="addForm" name="addForm" action="login.php" method="post" onsubmit="return validate(this);">
        <fieldset> 
          <legend>Log In</legend>
          <div class="formData">
                          
            <label class="field" for="username">RPI Email Address:</label>
            <div class="value">
              <input type="email" size="60" value="" name="username" id="username" required/>
            </div>
              
            <label class="field" for="password">Password:</label>
            <div class="value">
              <input type="password" size="60" name="password" value="" id="password" required/>
            </div>
              
            <div class = "submited">
              <input type="submit" value="Submit" id="Submit" name="Submit"/>
            </div>
          </div>
        </fieldset>
      </form>
    </div>
	
    <footer>
	  <small>&copy; 2014 copyright RPITEM Group</small>
	</footer>
  </body>
</html>
