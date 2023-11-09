<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Payment Submission</title>
    <style>
        
		*{
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
    background: -webkit-linear-gradient(0deg, #ffffff 0%, #f4b41a 100%);
    background: linear-gradient(0deg, #ffffff 0%, #f4b41a 100%);

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
  .box 
{   position:absolute;
	max-width: 100%;
    width:500px;
	max-height: 100%;
    height:500px;
	background: #1c1c1c;
	border-radius: 8px;
	overflow: hidden;
    margin-left:auto;
    margin-right:auto;
}
.box::before 
{
	content: '';
	z-index: 1;
	position: absolute;
	top: -50%;
	left: -50%;
	width: 500px;
	height: 500px;
	transform-origin: bottom right;
	background: linear-gradient(0deg,transparent,#f4b41a,#f4b41a);
	animation: animate 6s linear infinite;
}
.box::after 
{
	content: '';
	z-index: 1;
	position: absolute;
	top: -50%;
	left: -50%;
	width: 500px;
	height: 500px;
	transform-origin: bottom right;
	background: linear-gradient(0deg,transparent,#f4b41a,#f4b41a);
	animation: animate 6s linear infinite;
	animation-delay: -3s;
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
	position: absolute;
	inset: 2px;
	background: #101820;
	padding: 50px 40px;
	border-radius: 8px;
	z-index: 2;
	display: flex;
	flex-direction: column;
}
h2 
{
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
    background-color:#b38314;

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
    
    <div class="box">
        <form method="post" action="submitPayment.php" enctype="multipart/form-data">
        <h1 style = "text-align: center; color: green;">Payment Submission</h1><br>
		<p style = "text-align: center; color: white;">Please send your official receipt from the payment you have made into our email<p><br>
        <p style = "color: white;">1. Please fill up the information with your complete Name,Student ID, Email Address, Payment Type, Amount Paid and Screenshot of the receipt </p><br>
		<p style = "color: white;">2. Send the complete information to the email <span style = "color: yellow;">hocsonbenedict@yahoo.com</span> </p><br><br>
		<h1 style = "text-align: center; color: white;">THANK YOU!</h1>
        </div>
    </div><br><br><br><br>
</form>

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


</body>
</html>