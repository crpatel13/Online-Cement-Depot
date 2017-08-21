<?php
	  $conn= new mysqli("localhost","root","","cementdepot") or die("Could not Connect My Sql");
		if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
			} 
?>
