<?php
    session_start();
    include "database.php";
    $sub = $_POST['sub'];
    $studid = $_SESSION['stud_id'];

    

    
        foreach ($sub as $item) {
            
        $sql = "SELECT * FROM test where sub_id = '$subid'";
        $result = mysqli_query($mysqli, $sql);

        

              


     
            }
        

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: white;
        }
    </style>
</head>
<body>
    
</body>
</html>