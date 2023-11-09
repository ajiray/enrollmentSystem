<?php 
session_start(); 
include "database.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['username']);
	$password = validate($_POST['password']);
		$sql = "SELECT * FROM adminuser WHERE username='$username' AND password ='$password'";

		$result = mysqli_query($mysqli, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $password) {
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['adminid'] = $row['adminid'];
				$_SESSION['type'] = $row['type'];

				if(isset($_SESSION['type'])){
                    $type = $_SESSION['type'];
					
					$sql = "SELECT type FROM adminuser WHERE type = '$type'";
                    
                    $result = mysqli_query($mysqli, $sql);
            
                    if($type=="cashier")
                    {
                        
                        header("Location: 2cashierdashboard.php");
                        
                    } else if ($type=="dean") {
						header("Location: deandb.php");
					} else if ($type=="cashier") {
						header("Location: admindashboard.php");
					} else if ($type=="registrar") {
						header("Location: registrardb.php");
					} else if ($type=="admission") {
						header("Location: Admission-dashboard.php");
					} else if ($type=="enrollementadviser") {
						header("Location: enrollementadviserdb.php");
					}
                } 
            	
		        exit();
            } else{
				header("Location: 2cashierdashboard.php?error=Incorrect User name or password");
				exit();
			}
		       
			} else{
			header("Location: 2cashierdashboard.php?error=Incorrect User name or password");
	        exit();
		}
	
}
