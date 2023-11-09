<?php 
include "database.php";
$id = $_GET["id"];
$sql = "DELETE FROM subjectlist where id = $id";
if (mysqli_query($mysqli, $sql)) {
         header("Location:DropandAddSubjects-Registrar.php?error=Subject Removed!");
    }else {
       header("Location:DropandAddSubjects-Registrar.php?error=<div class='alert alert-danger'>Cannot Remove Subject</div>");
    }
?>