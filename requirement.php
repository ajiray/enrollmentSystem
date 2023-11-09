<?php
session_start();
include "database.php";
$studid=$_SESSION['stud_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Requirements</title>
    <style>
        *
{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body
{   
    height: 100vh;
    width: 100%;
    background: #ffffff;
    background: -webkit-linear-gradient(0deg, #ffffff 0%, #5b92c2 100%);
    background: linear-gradient(0deg, #ffffff 0%, #5b92c2 100%);
	display: flex;
	overflow: hidden;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	flex-direction: column;
}
.bg-image img{
	filter: brightness(40%);
	height: 100vh;
	width: 100vw;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
  }

@keyframes animate 
{
	0%
	{
		transform: rotate(0deg);
	}
	100%
	{
		transform: rotate(360deg);
	}
}

@keyframes animate 
{
	0%
	{
		transform: rotate(0deg);
	}
	100%
	{
		transform: rotate(360deg);
	}
}

form 
{
	max-width: 100%;
	position: absolute;
	inset: 2px;
	background: #101820;
	padding: 50px 40px;
	border-radius: 8px;
	z-index: 2;
	display: flex;
	flex-direction: column;
}
h2 h3
{
	max-width: 100%;
	color: #f4b41a;
	font-weight: 500;
	text-align: left;
	letter-spacing: 0.1em;
}

input[type="submit"]
{
	border: none;
	outline: none;
	padding: 11px 25px;
	background: #f4b41a;
	cursor: pointer;
	border-radius: 4px;
	font-weight: 600;
	width: 100px;
	margin-top: 10px;
    margin-left:auto;
    margin-right:auto;
}
input[type="submit"]:active 
{
	opacity: 0.8;
}

input[type="file"]{
    display:none;
	max-width: 100%;
}
input[type="submit"]:hover{
	color:#704f02;
}
label{
	
    color:white;
    height:30px;
    width:200px;
    background-color:#f4b41a;
    border-radius:10px;
    font-size:20px;
    display:flex;
    justify-content:center;
    align-items: center;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    cursor:pointer;
}
label:hover{
    background-color:#704f02;

}
.frm{
    color:#f4b41a;
    margin-top:20px;
    text-align: left;
}
#file-name{
    color:white;
}
select {
	background-color: #101820;
	max-width: 100%;
	width: 450px;
	color: white;
	height: 50px;
	font-size: 1em;
	border: 1px solid #101820;
	border-bottom: 2px solid #f4b41a;
}
.all{
   width:100%;
   display:flex;
   justify-content: center;
   flex-wrap:wrap;
}
.box{
   position:relative;
   flex:1;
   max-width:600px;
   height:400px;
   margin:10px;
   border-radius:5px;
   padding:20px;
   text-align: center;
	background: #1c1c1c;
	color:#f4b41a;
	font-size:20px;
   
}
.box2{
	position:relative;
   flex:1;
   max-width:600px;
   height:700px;
   margin:10px;
   border-radius:5px;
   padding:20px;
   text-align: center;
	background-color:#101820 ;
	color:#f4b41a;
	font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
	
}
.box{
	position:relative;
   flex:1;
   max-width:600px;
   height:400px;
   margin:10px;
   border-radius:5px;
   padding:20px;
   text-align: center;
	background: #1c1c1c;
	color:#f4b41a;
	font-size:20px;
}
.box3{
	opacity:0%;
}
.alb {
			width: 200px;
			height: 200px;
			padding:15px;
			margin-left:auto;
			margin-right:auto;
			transition: transform .1s; 
			margin: 0 auto;
		}
		.alb img {
			width: 100%;
			height: 100%;
			border-radius:10px;

		}

.alb:hover {
  transform: scale(2.5); 
}
#Docu{
	background-color: #101820;
	max-width: 100%;
	width: 450px;
	color: white;
	height: 50px;
	font-size: 1em;
	border: 1px solid #101820;
	border-bottom: 2px solid #f4b41a;
}
    </style>
</head>
<body>
	<?php if(isset($_GET['error'])):?>
    <p><?php echo $_GET['error']; ?></p>
    <?php endif ?>
	<!--Body Contents-->
	<div class="all">
    <div class="box">
	<?php $sql = "SELECT * FROM temp_images where stud_id='$studid' ORDER BY stud_id ASC";
          $res = mysqli_query($mysqli,  $sql);

    if (mysqli_num_rows($res) < 3) { ?>
             
        <form method="post" action="submit.php" enctype="multipart/form-data">
        <h2>List of Requirements</h2>
		<h3>Form 138, Good Moral, Birth Certificate</h3>
        <div class="inputBox">
			<input type="textbox" name="Docu" id="Docu" placeholder="Enter Document Name">
        </div>
        <div class="frm138">
            <p class="frm">Upload Documents Here:</p><br><br>
            <label for="inputfile">
                <input id='inputfile' type='file' name='inputfile' accept=".jpg, .jpeg, .png" multiple>
                        <i class="material-icons">
                             add_photo_alternate
                        </i> &nbsp;
                             Choose a photo.
                     </label><br>
                     <figure class="file-container">
                        <figcaption id="file-name"></figcaption>
                    </figure>
    <div> <input type="submit" name="submit" value="Submit"></div>
    </div><br><br><br><br>
	</div>
</form>
	<div class="box3">
		
<?php
    } else { ?>
	<h1 style="font-size:20px; margin-top:150px;">
	  <?php echo "Only 3 Submissions are allowed!"."<br>";
	  		echo "If a document is removed, it means that the administrator did not accept the uploaded document, you need to upload a new document."
  ?>
<?php }?>
	</h1>
	</div>
<div class="box2">
	<h1>Uploaded Documents</h1>
	<?php 
          $sql = "SELECT * FROM temp_images where stud_id='$studid' ORDER BY stud_id ASC";
          $res = mysqli_query($mysqli,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {
		 ?>
			
             <div class="alb">
             	<img src="uploads/<?= $images['images'] ?>">
				<?php echo strtoupper($images['DocumentName']) ?>
             </div>
          		
    <?php } } ?>
</div>
			</div>
<script>
	//Display Image Name
        let uploadButton = document.getElementById("inputfile");
        let fileName = document.getElementById("file-name");

            uploadButton.onchange = () => {
        let reader = new FileReader();
            reader.readAsDataURL(uploadButton.files[0]);
            reader.onload = () => {
            chosenFile.setAttribute("src",reader.result);
                }
            fileName.textContent = uploadButton.files[0].name;
            }
    </script>
</script>
</body>
</html>