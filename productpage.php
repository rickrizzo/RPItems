<?php
  $item = $_GET["item"];
  
  include('includes/connect.php');
  $query = "SELECT * FROM items WHERE itemName LIKE '$item' LIMIT 1";
  $result = $db->query($query);
  $itemResult = mysqli_fetch_assoc($result);

  echo "<!DOCTYPE html>

  <html lang='en' xmlns='http://www.w3.org/1999/xhtml'>
  <head>
    <meta charset='utf-8' />
    <title> " . $itemResult['itemName'] ." </title>
    <link rel='stylesheet' type='text/css' href='resources/stylesheet.css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  </head>
    <body>
      <!--Navigation Bar-->
      <nav>
        <ul>
          <li><a href='index.php'>RPItems</a></li>
          <li><a href='about.html'>About</a></li>
          <li><a href='SignUp.html'>Sign Up</a></li>
          <li><a href='login.php'>Log In</a></li>
        </ul>
      </nav>
	
	

      <!--Item Header-->
      <header>
        <h1>RPItems</h1>
      </header>
      <br/>

      <!--Listing Infromation-->
      <div id = 'whitebg'>
        <div id = 'mainbody'>
          <div id='listing'>
            <div id = 'picture'>
              <a id = 'aimage' href = '" . $itemResult['img'] . "' target = '_blank'>
                <img src='" . $itemResult['img'] . "' id='itemImage'/>
              </a>
            </div>
            <div id='text'>
              <ul id='itemInfo'>
                <li>
                  <big>" . $itemResult['itemName'] . "</big>
                  <br/>by <a href='profile.html'>Seller</a>
                </li>
                <li>Price: $" . $itemResult['price'] . "</li>
                <li>Posted: 11/11/14</li>
              </ul>
              <div id='description'>
                <h4>About</h4>
                <p>" . $itemResult['description'] . "</p>
              </div>
            </div>
          </div>

          <!--Seller Information-->
          <div id='seller'>
	    <a href='#'>Contact Seller</a>
          </div>
        </div>
      </div>
	  
	  <footer>
        <small>&copy; 2014 copyright RPITEM Group</small>
      </footer>
    </body>
  </html>"

?>
