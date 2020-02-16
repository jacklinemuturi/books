<?php
	// error_reporting(E_ALL^E_WARNING);	
    require_once('conn.php');

if(isset($_POST['search'])){
	$stmt = "SELECT * FROM bluebell";
	$result = mysqli_query($conn, $stmt);
		                
	$resultcheck = mysqli_num_rows($result);

		if($resultcheck > 0){
		while($row = mysqli_fetch_assoc($result));
		}
	}