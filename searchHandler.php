<?php
	//Get Variable
	$search = $_POST["search"];
	
	/*DO NOT FORGET TO PUT THIS ON YOUR LOCAL HOST AND ADD YOUR INFORMATION*/
	$link = mysqli_connect("localhost", "root", "mysql44", "items") or die("ERROR: " . mysqli_error($link));
	
	$query = "SELECT * FROM items WHERE itemName LIKE '%$search%'";
	$result = $link->query($query);
	$numItems = $result->num_rows;
	
	//PRINT DATA
	
	$link->close();
?>