<?php 
session_start(); 
include "database.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	$pass = validate($_POST['password']);

	
		// hashing the password
        $pass = md5($pass);

        
		$sql = "SELECT * FROM user WHERE email='$email' AND password_hash='$pass'";

		$result = mysqli_query($mysqli, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password_hash'] === $pass) {
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['stud_id'] = $row['stud_id'];
				
				if(isset($_SESSION['stud_id'])){
                    $studid = $_SESSION['stud_id'];
					
					$sql = "SELECT stud_id FROM applicationform WHERE stud_id = '$studid'";
                    
                    $result = mysqli_query($mysqli, $sql);
            
                    if(mysqli_num_rows($result)===1)
                    {
                        foreach($result as $row)
                        {
                            header("Location: dashboard.php");
                        }
                    } else {
						header("Location: applicationform.php");
					}
                } 
            	
		        exit();
            }else{
				header("Location: index.php?error=Incorrect User name or password");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorrect User name or password");
	        exit();
		}
	}
	
else{
	header("Location: index.php");
	exit();
}