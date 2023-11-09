<?php


$host = "localhost";
$username = "root";
$password = "";
$dbname = "login_db";

$conn = mysqli_connect($host, $username, $password, $dbname);

$name = $_POST["gcash_name"];
$amount = $_POST["gcash_amount"];
$type = $_POST["type"];

if (mysqli_connect_errno()) {
    die("Connect Error: " . mysqli_connect_error());
}

$sql  = "INSERT INTO gcash (gcash_name, gcash_amount, gcash_type)
        VALUES (?, ? ,?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "sss",
                        $name,
                        $amount,
                        $type);

mysqli_stmt_execute($stmt);

echo file_get_contents("gcashqr.php");

?>