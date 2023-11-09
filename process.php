<?php
  session_start(); 
  $mysqli = require __DIR__ . "/database.php";
  $studid = $_SESSION['stud_id']; 
  $subjectcode = $_SESSION['SubjectCode']; 
  $leclabunits = $_SESSION['LecLabUnits']; 
  $totalunits = $_SESSION['TotalUnits']; 

   if (isset($_POST['checkbox1'])) {
    $subjectlist = $_POST['checkbox1'];
  }
    
$sql = "Insert into subjectlist(stud_id,SubjectTitle,SubjectCode,LecLabUnits,TotalUnits) 
values ('$studid','$subjectlist','$subjectcode','$leclabunits','$totalunits')";
$result =  mysqli_query($mysqli, $sql);
if ($result) 
header("Location: subjecttable.php");
?>