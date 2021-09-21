<?php
		$servername ="localhost";
		$username  = "root";
		$password  ="";
		$database  ="sparkbank";

		// -------------------------Create Connection---------------------
		
		$conn =mysqli_connect($servername, $username, $password, $database);
		if(!$conn){
			die("unable to connect the database  -->".mysqli_connect_error());
		}
		
?>