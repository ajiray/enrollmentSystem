<?php 
session_start(); 
include "database.php";
$studid = $_SESSION['stud_id'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');

*{
  max-width: 100%;
  max-height: 100%;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
  font-family: 'Josefin Sans', sans-serif;
}
body{
  max-width: 100%;
  max-height: 100%;
  height: 100%;
   background-color: #f3f5f9;
   overflow: hidden;
}

.wrapper{
  max-width: 100%;
  max-height: 100%;
  display: flex;
  position: relative;
}

.wrapper .sidebar{
  max-width: 100%;
  max-height: 100%;
  width: 200px;
  height: 100%;
  background: #101820;
  padding: 30px 0px;
  position: fixed;
}

.wrapper .sidebar h2{
  max-width: 100%;
  max-width: 100%;
  color: #f4b41a;
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 30px;
}

.wrapper .sidebar ul li{
  max-width: 100%;
  max-width: 100%;
  padding: 15px;
  border-bottom: 1px solid #f4b41a;
  border-bottom: 1px solid rgba(0,0,0,0.05);
  border-top: 1px solid rgba(255,255,255,0.05);
}    

.wrapper .sidebar ul li a{
  max-width: 100%;
  max-width: 100%;
  color: #bdb8d7;
  display: block;
}

.wrapper .sidebar ul li a .fas{
  max-width: 100%;
  max-width: 100%;
  width: 25px;
}

.wrapper .sidebar ul li:hover{
  max-width: 100%;
  max-width: 100%;
  background-color: #101820;
}
    
.wrapper .sidebar ul li:hover a{
  max-width: 100%;
  max-width: 100%;
  color: #f4b41a;
}

.header {
  max-width: 100%;
    position: absolute;
    background-color: #101820;
    height: 128.5px;
    width: 90%;
    margin-top: -20px;
    max-width: 100%;
    margin-left: 200px;
      
}
.wrapper button{
  max-width: 100%;
    background-color: #bdb8d7;
    width: 100px;
    height: 40px;
    float: right;
    font-size: 15px;
    margin-top: 270%;
    margin-right: 27%;
    cursor: pointer;
    border-radius: 10px;
    text-align: center;
    border: 2px solid black;
}
iframe {
  max-width: 100%;
  max-width: 100%;
  margin-left: 200px;
  margin-top: 109px;
  height: 850px;
}
body {
    background: #222222;
  }
  
  .datetime {
    font-size: 16px;
    padding: 24px;
    color: #ffffff;
    background: #444444;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.25);
    border-radius: 4px;
    border-right: 10px #f4b41a solid;
    width: 250px;
    font-weight: 500;
    font-family: "Inter", sans-serif;
    margin-top:30px;
    float:right;
    margin-right:20px;
  }
  
  .time {
    font-size: 1em;
    color: #f4b41a;
  }
  
  .date {
    margin-top: 12px;
    font-size: .75em;
  }
  
    </style>
    <link rel="stylesheet" href="datetime.css">
    <script src = "datetime.js" defer></script>
</head>
<body>

<div class="header">
<div class="datetime">
        <div class="time"></div>
        <div class="date"></div>
      </div>
</div>
   <div class="wrapper">
       <div class="sidebar">
           <h2>Name Of School</h2>
           <ul>
               <li><a href="home.php" target="iframe_a"><i class="fas fa-home"></i>Home</a></li>
               <li><a href="requirement.php" target="iframe_a"><i class="fas fa-address-card"></i>Requirements</a></li>
               <li><a href="availsubjects.php" target="iframe_a"><i class="fas fa-cash-register"></i>Subject List</a></li>
               <li><a href="subjects.php" target="iframe_a"><i class="fas fa-check-square"></i>Chosen Subjects</a></li>
               <li><a href="UserProfile.php" target="iframe_a"><i class="fas fa-user"></i>Student Profile</a></li>
               <li><a href="GenerateAssessForm.php" target="iframe_a"><i class="fas fa-cash-register"></i>Assessment Form</a></li>
               <li><a href="payment.php" target="iframe_a"><i class="fas fa-cash-register"></i>Payment</a></li>
               <li><a href="paymentSubmission.php" target="iframe_a"><i class="fas fa-cash-register"></i>Payment Form</a></li>
               <li><a href="GenerateAssessmentForm.php" target="iframe_a"><i class="fas fa-user"></i>Print Registration Form</a></li>
           </ul> 

           <a href="logout.php"><button>Logout</button></a>
    </div>
    </div>

    <iframe src="home.php" name="iframe_a" width="90%" frameBorder="0"></iframe>


</body>
</html>
    
    
    
    
    
    
    
    
    
    
    