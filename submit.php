<?php
session_start();
$studid = $_SESSION['stud_id'];
$mysqli = require __DIR__ . "/database.php";
if (isset($_POST['submit']) && isset($_FILES['inputfile'])) {

	echo "<pre>";
	print_r($_FILES['inputfile']);
	echo "</pre>";

	$img_name = $_FILES['inputfile']['name'];
	$img_size = $_FILES['inputfile']['size'];
	$tmp_name = $_FILES['inputfile']['tmp_name'];
	$error = $_FILES['inputfile']['error'];
    $docuName = $_POST['Docu'];
    $t = date('Y-d-m H:i:s',time());
	if ($error === 0) {
		if ($img_size > 2000000) {
			$em = "Sorry, your file is too large.";
		    header("Location: requirement.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);
			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);
				if(empty($docuName)){
					$em = " Type the name of the Document you are submitting";
					header("Location: requirement.php?error=$em");
				}
				// Insert into Database
                if(!empty($docuName)){
				$sql = "INSERT INTO temp_images(stud_id,images,DocumentName,created) 
				        VALUES('$studid','$new_img_name','$docuName','$t')";
				mysqli_query($mysqli, $sql);
				header("Location: requirement.php");
			}}else {
				$em = "You can't upload files of this type";
		        header("Location: requirement.php?error=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: requirement.php?error=$em");
	}

}else {
	header("Location: requirement.php");
}

?>