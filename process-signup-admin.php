<?php
if ($_POST["password"] !== $_POST["password_confirmation"]) {
    header("Location: signupadmin.php?error=Passwords must match");
	exit();
}
$mysqli = require __DIR__ . "/database.php";
$username = $_POST["username"];
$password = $_POST["password"];
$usertype = $_POST["usertype"];
$sql = "SELECT * FROM adminuser WHERE username='$username' ";
		$result = mysqli_query($mysqli, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signupadmin.php?error=Username already used");
	exit();
		}else {
           $sql2 = "INSERT INTO adminuser(username, password, type) VALUES('$username', '$password', '$usertype')";
           $result2 = mysqli_query($mysqli, $sql2);
           if ($result2) {
           	 header("Location: listofuser.php");
	         exit();
           }else {
	           	header("Location: signupadmin.php?error=unknown error occurred&$user_data");
		        exit();
           }
        }









