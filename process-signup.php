<?php


if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    header("Location: Signup.php?error=Valid email is required");
	exit();
}

if (strlen($_POST["password"]) < 8) {
    header("Location: Signup.php?error=Password must be at least 8 characters");
	exit();
}

if ($_POST["password"] !== $_POST["password_confirmation"]) {
    header("Location: Signup.php?error=Passwords must match");
	exit();
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);




$mysqli = require __DIR__ . "/database.php";

$email = $_POST["email"];
$pass = $_POST["password"];
$type = "student";

$pass = md5($pass);

$sql = "SELECT * FROM user WHERE email='$email' ";
		$result = mysqli_query($mysqli, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: Signup.php?error=Email already used");
	exit();
		}else {
           $sql2 = "INSERT INTO user(email, password_hash,type) VALUES('$email', '$pass','$type')";
           $result2 = mysqli_query($mysqli, $sql2);
           if ($result2) {
           	 header("Location: index.php");
	         exit();
           }else {
	           	header("Location: Signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
        }









