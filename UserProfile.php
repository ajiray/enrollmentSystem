<?php
include 'database.php';
session_start();
//Set stud_id
if(isset($_SESSION['stud_id'])){
  $studid = $_SESSION['stud_id'];

  $sql = "SELECT * FROM applicationform where stud_id = '$studid'";
  $result = mysqli_query($mysqli, $sql);
  if(mysqli_num_rows($result)>0)
  {
      foreach($result as $row)
      {

      }
  }
}
$user_id = $_SESSION['stud_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');
:root{
   --blue:#3498db;
   --dark-blue:#2980b9;
   --red:#e74c3c;
   --dark-red:#c0392b;
   --black:#333;
   --white:#fff;
   --light-bg:#eee;
   --box-shadow:0 5px 10px rgba(0,0,0,.1);
    --yellow:#f4b41a;
}
*{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border: none;
   text-decoration: none;
}
*::-webkit-scrollbar{
   width: 10px;
}
*::-webkit-scrollbar-track{
   background-color: transparent;
}
*::-webkit-scrollbar-thumb{
   background-color: var(--blue);
}
.btn,
.delete-btn{
   width: 350px;
   border-radius: 5px;
   padding:10px 30px;
   color:var(--white);
   display: block;
   text-align: center;
   cursor: pointer;
   font-size: 20px;
   margin-top: 10px;
}
.btn{
   background-color: var(--blue);
   margin-left:auto;
   margin-right:auto;
}
.btn:hover{
   background-color: var(--dark-blue);
}
.delete-btn{
   background-color: var(--red);
}
.delete-btn:hover{
   background-color: var(--dark-red);
}
.message{
   margin:10px 0;
   width: 100%;
   border-radius: 5px;
   padding:10px;
   text-align: center;
   background-color: var(--red);
   color:var(--white);
   font-size: 20px;
}

.container{
   min-height: 100vh;
   background-color: #263a4e;
   max-width: 100%;
   max-height: 100%;
   padding:20px;
}

.container .profile img{
   height: 150px;
   width: 150px;
   border-radius: 50%;
   object-fit: cover;
   margin-bottom: 5px;
}

.container .profile h3{
   margin:5px 0;
   font-size: 20px;
   color:var(--black);
}

.container .profile p{
   margin-top: 20px;
   color:var(--black);
   font-size: 20px;
}

.container .profile p a{
   color:var(--red);
}

.container .profile p a:hover{
   text-decoration: underline;
}
.tbl{
    border:1px solid black;
    margin-left:50px;
    margin-left:auto;
   margin-right:auto;
   max-width: 100%;
   max-height: 100%;
}
.tbl th{
    text-align:left;
    border:1px solid black;
    width:200px;
}
.tbl td{
    text-align:center;
    width:20px;
    border:1px solid black;
}
table .data{
    text-align:left;
    width:200px;
}
.tbl1{
   border:1px solid black;
   margin-left:auto;
   margin-right:auto;
   max-width: 100%;
   max-height: 100%;
   
}
.tbl1 th{
   text-align:left;
   border:1px solid black;
   width:200px;
}
.tbl1 td{
   text-align:center;
   width:20px;
   border:1px solid black;
}

.tbl1 .data{
  text-align:left;
    width:200px;
}
.tbl2{
   border:1px solid black;
   max-width: 100%;
      max-height: 100%;
   margin-left:auto;
   margin-right:auto;
}
.tbl2 th{
   text-align:left;
   border:1px solid black;
   width:200px;
}
.tbl2 td{
   text-align:center;
   width:20px;
   border:1px solid black;
}
.tbl2 .data{
  text-align:left;
    width:200px;
}
.profile-two{
   width:100%;
   display:flex;
   justify-content: center;
   flex-wrap:wrap;
}
.profile{
   position:relative;
   flex:1;
   max-width:400px;
   height:400px;
   margin:10px;
   border-radius:5px;
   padding:20px;
   background-color: var(--yellow);
   box-shadow: var(--box-shadow);
   text-align: center;
}
.profile2{
   position:relative;
   flex:1;
   max-width:820px;
   height:400px;
   margin:-350px;
   border-radius:5px;
   background-color: var(--yellow);
   box-shadow: var(--box-shadow);
   text-align: center;
}
      </style>
</head>
<body>
    <div class="container">
      <div class="profile-two">
        <div class="profile">
            <?php
               //Display Profile Picture
               $select = mysqli_query($mysqli, "SELECT * FROM applicationform WHERE stud_id = '$user_id'") or die('query failed');
               if(mysqli_num_rows($select) > 0){
                  $fetch = mysqli_fetch_assoc($select);
               }
               if($fetch['image'] == ''){
                  echo '<img src="default-avatar.png">';
               }else{
                  echo '<img src="uploaded_img/'.$fetch['image'].'">';
               }
            ?>
            <h3><?php echo $row['fName']." ".$row['lName']?></h3>
            <h4 style="opacity:50%;"><?php echo $row['year']." Year"." "."BS"."".$row['course'] ?></h4>
            <a href="updateProfilePic.php" class="btn">Update Profile Picture</a>
           
         </div>
         <!-- Display Personal Information -->
         <div class="profile">
          <h1 style="text-align:center; margin-top:30px; font-size:25px;">General Information</h1>
          <table class="tbl">
            <tr>
            <th>First Name</th>
            <td>:</td>
            <td class="data"><?php echo $row['fName'];  ?></td>
              </tr>
              <tr>
            <th>Middle Name</th>
            <td>:</td>
            <td class="data"><?php echo $row['mName']; ?></td>
              </tr>
              <tr>
            <th>Last Name</th>
            <td>:</td>
            <td class="data"><?php echo $row['lName']; ?></td>
              </tr>
              <tr>
            <th>Gender</th>
            <td >:</td>
            <td class="data"><?php echo $row['gender']; ?></td>
              </tr>
              <tr>
            <th>Birthday</th>
            <td>:</td>
            <td class="data"><?php echo $row['schoolYear']; ?></td>
              </tr>
              <tr>
            <th>Religion</th>
            <td>:</td>
            <td class="data"><?php echo $row['prevSchool']; ?></td>
              </tr>
              </table></div></div><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
              <div class="profile-two">
            <div class="profile2">
              <h1 style="text-align:center; font-size:25px;">Contact in Case of Emergency</h1>
              <table class="tbl2">
                <tr>
                  <th>Guardian</th>
                  <td>:</td>
                  <td class="data"><?php echo $row['emerName']; ?></td>
                </tr>
                <tr>
                  <th>Relationship</th>
                  <td>:</td>
                  <td class="data"><?php echo $row['emerRelationship']; ?></td>
                </tr>
                <tr>
                  <th>Contact No.</th>
                  <td>:</td>
                  <td class="data"><?php echo $row['emerContact']; ?></td>
                </tr>
              </table>
              <h1 style="text-align:center; font-size:25px;">Other Information</h1>
              <table class="tbl1">
                <tr>
                  <th>Contact No.</th>
                  <td>:</td>
                  <td class="data"><?php echo $row['cNumber']; ?></td>
                </tr>
                <tr>
                  <th>Nationality</th>
                  <td>:</td>
                  <td class="data"><?php echo $row['nationality']; ?></td>
                </tr>
                <tr>
                  <th>Address</th>
                  <td>:</td>
                  <td class="data"><?php echo $row['address']; ?></td>
                </tr>
                <tr>
                  <th>Previous School</th>
                  <td>:</td>
                  <td class="data"><?php echo $row['prevSchool']; ?></td>
                </tr>
                <tr>
                  <th>Student ID</th>
                  <td>:</td>
                  <td class="data"><?php echo $row['stud_id']; ?></td>
                </tr>
              </table>
            </div>
            </div>
    </div>
            </div>
    
</body>
</html>