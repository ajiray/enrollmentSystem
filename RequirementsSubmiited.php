<?php
session_start();
include "database.php";
$studid=$_SESSION['stud_id'];
if(isset($_SESSION['stud_id'])){
	$studid = $_SESSION['stud_id'];

	$sql = "SELECT * FROM temp_images where stud_id = '$studid'";
	$result = mysqli_query($mysqli, $sql);

	if(mysqli_num_rows($result)>0)
	{
		foreach($result as $row)
		{

		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Submitted</title>
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
	display: flex;
	overflow: hidden;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	flex-direction: column;
	background: #ffffff;
    background: -webkit-linear-gradient(0deg, #ffffff 0%, #5b92c2 100%);
    background: linear-gradient(0deg, #ffffff 0%, #5b92c2 100%);
}
.box 
{
	position: absolute;
	width: 380px;
	height: 250px;
	background: #1c1c1c;
	border-radius: 8px;
	overflow: hidden;
}
.box::before 
{
	content: '';
	z-index: 1;
	position: absolute;
	top: -50%;
	left: -50%;
	width: 380px;
	height: 420px;
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
	width: 380px;
	height: 420px;
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
	text-align: center;
	letter-spacing: 0.1em;
}
.inputBox 
{
	position: relative;
	width: 300px;
	margin-top: 35px;
}
.inputBox input 
{
	position: relative;
	width: 100%;
	padding: 20px 10px 10px;
	background: transparent;
	outline: none;
	box-shadow: none;
	border: none;
	color: #101820;
	font-size: 1em;
	letter-spacing: 0.05em;
	transition: 0.5s;
	z-index: 10;
}
.inputBox span 
{
	position: absolute;
	left: 0;
	padding: 20px 0px 10px;
	pointer-events: none;
	font-size: 1em;
	color: #8f8f8f;
	letter-spacing: 0.05em;
	transition: 0.5s;
}
.inputBox input:valid ~ span,
.inputBox input:focus ~ span 
{
	color: #f4b41a;
	transform: translateX(0px) translateY(-34px);
	font-size: 0.75em;
}
.inputBox i 
{
	position: absolute;
	left: 0;
	bottom: 0;
	width: 100%;
	height: 2px;
	background: #f4b41a;
	border-radius: 4px;
	overflow: hidden;
	transition: 0.5s;
	pointer-events: none;
	z-index: 9;
}
.inputBox input:valid ~ i,
.inputBox input:focus ~ i 
{
	height: 44px;
}
.links 
{
	display: flex;
	justify-content: space-between;
}
.links a 
{
	margin: 10px 0;
	font-size: 0.75em;
	color: #8f8f8f;
	text-decoration: beige;
}
.links a:hover, 
.links a:nth-child(2)
{
	color: #f4b41a;
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
		</style>
</head>
<body>
	<div class="box">
		<form autocomplete="off" action ="requirement.php"method="POST">
			<h2>Requirements Submitted!</h2>
            <input type="submit" name="submit" value="Back">
        </form>
	</div>
</body>
</html>