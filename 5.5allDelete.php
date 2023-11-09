<?php

$db_host = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_name = "login_db";
	$link = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
	if (!$link) {
    	echo "Error: Unable to connect to MySQL." . PHP_EOL;
    	echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    	echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    	exit;
	}

    $id = $_GET["id"];
    $sql = "DELETE FROM paymentconfirmed where id = $id";
    if (mysqli_query($link, $sql)) {
         header("Location:5allPayments.php?error=Payment Removed!");
    }else {
       header("Location:5allPayments.php?error=<div class='alert alert-danger'>Error Removing</div>");
    }

?>