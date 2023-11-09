<?php
  session_start(); 
  include "database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subject List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  
    
    <style>
  .iframe-container {
    display: flex;                
        flex-direction: row;         
        flex-wrap: nowrap;           
        justify-content: space-between; 
        

  }
  /* hide scroll bar but can still scroll */
  ::-webkit-scrollbar {
    display: none;
    }
  .iframe1 {
    min-width: 50%;
    min-height: 1000px;
  }
  .iframe2 {
    min-width: 50%;
    min-height: 1000px;
  }
</style>

<div class="iframe-container">
  <iframe class="iframe1" src="./filter.php" frameborder="0" scrolling="no"></iframe>
  <iframe class="iframe2" src="./subjecttable.php" frameborder="0" scrolling="no"></iframe>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>