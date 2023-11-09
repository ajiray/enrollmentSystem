<?php
include 'database.php';
session_start();
$user_id = $_SESSION['stud_id'];

if(isset($_POST['update_profile'])){

    $update_image = $_FILES['update_image']['name'];
    $update_image_size = $_FILES['update_image']['size'];
    $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
    $update_image_folder = 'uploaded_img/'.$update_image;

   if(!empty($update_image)){
      if($update_image_size > 2000000){
         $message[] = 'image is too large';
      }else{
         $image_update_query = mysqli_query($mysqli, "UPDATE applicationform SET image = '$update_image' WHERE stud_id = '$user_id'") or die('query failed');
         if($image_update_query){
            move_uploaded_file($update_image_tmp_name, $update_image_folder);
         }
         $message[] = 'IMAGE UPDATED SUCCESSFULLY!';
      }
   }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>update profile</title>
   <style>
.update-profile{
   min-height: 100vh;
   background-color: #263a4e;
   display: flex;
   align-items: center;
   justify-content: center;
   padding:20px;
}
.update-profile a{
   color:var(--white);
   display: block;
   text-align: center;
   cursor: pointer;
   font-size: 20px;
   margin-top: 60px;
}
.update-profile form{
   padding:20px;
   background-color: var(--yellow);
   box-shadow: var(--box-shadow);
   text-align: center;
   width: 700px;
   text-align: center;
   border-radius: 5px;
}

.update-profile form img{
   height: 200px;
   width: 200px;
   border-radius: 50%;
   object-fit: cover;
   margin-bottom: 5px;
}

.update-profile form .flex{
   display: flex;
   justify-content: space-between;
   margin-bottom: 20px;
   gap:15px;
}

.update-profile form .flex .inputBox{
   width: 49%;
}

.update-profile form .flex .inputBox span{
   text-align: left;
   display: block;
   margin-top: 15px;
   font-size: 17px;
   color:var(--black);
}

.update-profile form .flex .inputBox .box{
   width: 100%;
   border-radius: 5px;
   background-color: var(--yellow);
   padding:12px 14px;
   font-size: 17px;
   color:var(--black);
   margin-top: 10px;
}

@media (max-width:650px){
   .update-profile form .flex{
      flex-wrap: wrap;
      gap:0;
   }
   .update-profile form .flex .inputBox{
      width: 100%;
   }
}
.btn,
.delete-btn{
   width: 350px;
   border-radius: 5px;
   padding:10px 30px;
   height: 50px;
   color:var(--white);
   display: block;
   text-align: center;
   cursor: pointer;
   font-size: 20px;
   margin-top: 60px;
}
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
   max-width: 100%;
   max-height: 100%;
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
.btn{
   background-color: var(--blue);
}
.btn:hover{
   background-color: var(--dark-blue);
}
.delete-btn{
   background-color: var(--blue);
}
.delete-btn:hover{
   background-color: var(--dark-blue);
}
.message{
   margin:10px 0;
   width: 100%;
   border-radius: 5px;
   padding:10px;
   text-align: center;
   background-color: var(--dark-blue);
   color:var(--white);
   font-size: 20px;
}
      </style>
</head>
<body>
<!-- Update Profile Picture -->
<div class="update-profile">

   <?php
      $select = mysqli_query($mysqli, "SELECT * FROM applicationform WHERE stud_id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>

   <form action="" method="post" enctype="multipart/form-data">
      <?php
         if($fetch['image'] == ''){
            echo '<img src="default-avatar.png">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }
         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }
      ?>
      <div class="flex">
         <div class="inputBox">
            <span style="font-weight: bold;">UPDATE YOUR PICTURE:</span>
            <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box">
      </div>
      <input type="submit" value="Update Profile" name="update_profile" class="btn">
      <a href="UserProfile.php" class="delete-btn">Go Back</a>
   </form>

</div>

</body>
</html>