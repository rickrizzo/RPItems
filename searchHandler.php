<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <title>RPItems - Search</title>
    <link rel="stylesheet" type="text/css" href="resources/stylesheet.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
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
	
    <!--Header-->
    <header>
      <h1>Search Results</h1>
    </header>
	
    <div id="index">
      <?php
        //Get Variable
        $search = $_POST["search"];
        
        echo "<h2>Displaying results for \"" . $search . "\"</h2>";
        
        /*DO NOT FORGET TO PUT THIS ON YOUR LOCAL HOST AND ADD YOUR INFORMATION*/
        include('includes/connect.php');
        
        $query = "SELECT * FROM items WHERE itemName LIKE '%$search%'";
        $result = $db->query($query);
        $numItems = $result->num_rows;
        
        echo "<table>";
        
        //PRINT DATA
        for($i = 0; $i < $numItems; $i ++){
          $record = $result->fetch_assoc();
          if($i % 5 == 0){
            if($i != 0){
              echo "</tr>";
            }
            echo "<tr>";
          }
          echo "<td><a href='productpage.php?item=" . $record['itemName'] . "'>
          <h5>" . $record['itemName']."</h5>
          <p>$" . $record['price'] ."</p>
          <img src = '". $record['img'] ."' height='200' width = '200' >
          </a></td>";
        }
        
        echo "</table>";
        
        $result->free();
        $db->close();
      ?>
    </div>

    <footer><small>&copy; 2014 copyright RPITEM Group</small></footer>


  </body>
</html>
