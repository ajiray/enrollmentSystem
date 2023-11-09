<?php
 session_start();
$mysqli = require __DIR__ . "/database.php";
$studid = $_SESSION['stud_id'];
$type = "student";
$fName = ($_POST["FirstName"]);
$mName = ($_POST["MiddleName"]);
$lName = ($_POST["LastName"]);
$gender = ($_POST["Gender"]);
$cNumber = ($_POST["ContactNumber"]);
$nationality = ($_POST["Nationality"]);
$address = ($_POST["homeAddress"]);
$prevSchool = ($_POST["School"]);
$course = ($_POST["Course"]);
$year = ($_POST["Year"]);
$schoolYear = ($_POST["schoolYear"]);
$emerName = ($_POST["GuardianName"]);
$emerRelationship = ($_POST["GuardianRelationship"]);
$emerContact = ($_POST["GuardianNumber"]);
$birthday = ($_POST["birthday"]);
$religion = ($_POST["religion"]);
$civilstatus = ($_POST["civilstatus"]);

$sql = "INSERT INTO applicationform (stud_id, fName, mName,lName,gender,cNumber,nationality,address,prevSchool,course,year,schoolYear,emerName,emerRelationship,emerContact,birthday,religion,civilstatus,type)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?,?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("issssssssssssssssss",
                  $studid, $fName, $mName, $lName, $gender, $cNumber, $nationality, $address, $prevSchool, $course, $year, $schoolYear, $emerName, $emerRelationship, $emerContact, $birthday, $religion, $civilstatus,$type);
                  
if ($stmt->execute()) {

    header("Location: dashboard.php");
    exit;
    
}








