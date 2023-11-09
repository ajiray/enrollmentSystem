<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src = "datetime.js" defer></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');

*{
  max-width: 100%;
  max-width: 100%;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
  font-family: 'Josefin Sans', sans-serif;
}
.datetime {
  font-size: 16px;
  padding: 24px;
  color: #ffffff;
  background: #444444;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.25);
  border-radius: 4px;
  border-right: 10px #5292da solid;
  width: 250px;
  font-weight: 500;
  font-family: "Inter", sans-serif;
  margin-top:30px;
  float:right;
  margin-right:20px;
}
  
.time {
  font-size: 1em;
  color: #5292da;
}
  
.date {
  margin-top: 12px;
  font-size: .75em;
}
  
body{
  max-width: 100%;
  max-width: 100%;
  background-color: #f3f5f9;
  overflow: hidden;
}

.wrapper{
  max-width: 100%;
  max-width: 100%;
  display: flex;
  position: relative;
}

.wrapper .sidebar{
  max-width: 100%;
  max-width: 100%;
  width: 200px;
  height: 100%;
  background: #101820;
  padding: 30px 0px;
  position: fixed;
}

.wrapper .sidebar h2{
  max-width: 100%;
  max-width: 100%;
  color: #5292da;
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 30px;
}

.wrapper .sidebar ul li{
  max-width: 100%;
  max-width: 100%;
  padding: 15px;
  border-bottom: 1px solid #5292da;
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
  color: #5292da;
}

.header {
  max-width: 100%;
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
  max-width: 100%;
  background-color: #5292da;
  width: 130px;
  height: 40px;
  float: right;
  font-size: 15px;
  margin-top: 300%;
  margin-right: 21%;
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
    </style>
</head>
<body>
<!-- Date and Time -->
<div class="header">
<div class="datetime">
        <div class="time"></div>
        <div class="date"></div>
      </div>
</div>
<!-- Dashboard -->
   <div class="wrapper">
       <div class="sidebar">
           <h2>Name Of School</h2>
           <ul>
               <li><a href="./homeadmin.php" target="iframe_a"><i class="fas fa-home"></i>Home</a></li>
               <li><a href="./Admission-Requirements.php" target="iframe_a"><i class="fas fa-address-card"></i>Manage Documents</a></li>
               <li><a href="./Admission-EditStudentProfile.php" target="iframe_a"><i class="fas fa-cash-register"></i>Manage Student Profiles</a></li>
               <li><a href="./DropandAddSubjects-Registrar.php" target="iframe_a"><i class="fas fa-cash-register"></i>Drop and Add Subjects on a Student</a></li>
           </ul> 

           <a href="prelogin.php"><button>Logout</button></a>
    </div>
    </div>

    <iframe src="homeadmin.php" name="iframe_a" width="90%" frameBorder="0"></iframe>


</body>
</html>