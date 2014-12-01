<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>RPItems</title>
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
			<li><a href="LogIn.html">Log In</a></li>
		</ul>
	</nav>
	
	<!--Page Header-->
	<header>
		<h1>Welcome to RPItems</h1>
		<h2>A place for students to sell things within the RPI Community</h2>
	</header>
	
	<!--Search Bar-->
	<div id="index">
		<form>
			<label for="search">Find what you need<br /></label>
			<input type="search" id="search"/>
			<button type="submit" id="searchSubmit">Search</button>
		</form>
		<br/>
		
		<!--List New Item-->
		<button onclick="window.location.href='/rpitems/newlisting.html'">List New Item</button>
		
		<!--Popular Items-->
		<div id="popular">
			<h3>Recent Items</h3>
			<table>
				<?php 
					$db = new mysqli('localhost', 'root', 'mysql44', 'rpitems');
					
					if($db->connect_error){
						echo "<h5>This is where items would go if we had any</h5>";
					}else{
						$query = 'select * from items';
						$result = $db->query($query);
						$numItems = $result->num_rows;
						
						for($i = 0; $i < $numItems; $i ++){
							$record = $result->fetch_assoc();
							if($i % 5 == 0){
								if($i != 0){
									echo "</tr>";
								}
								echo "<tr>";
								
							}
							echo "<td>
								<h5>" . $record['itemName']."</h5>
								<p>$" . $record['price'] ."</p>
								<img src = '". $record['img'] ."' height='200' width = '200' >
								</td>";
								
							if($i == 8){
								break;
							}
						}
						
						$result->free();
					}
					$db->close();
				?>
			</table>
		</div>
	</div>
	<footer>
		<p>Created Winter 2014 for Intro to Information Technology and Web Science</p>
	</footer>
</body>
</html>
