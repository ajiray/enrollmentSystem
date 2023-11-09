<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
    <style>
@import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');
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
}
.bg-image img{
	filter: brightness(60%);
	position: relative;
	height: 100vh;
	width: 100vw;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
  }
.box 
{
	position: absolute;
	width: 380px;
	height: 420px;
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
	background: linear-gradient(0deg,transparent,#1ab140,#1ab140);
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
	background: linear-gradient(0deg,transparent,#1ab140,#1ab140);
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
	color: #1ab140;
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
	color: #1ab140;
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
	background: #1ab140;
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
input[type="submit"]
{
	border: none;
	outline: none;
	padding: 11px 25px;
	background: #1ab140;
	cursor: pointer;
	border-radius: 4px;
	font-weight: 600;
	width: 100px;
	margin-top: 10px;
	margin-left: 100px;
	margin-top: 30px;
}
input[type="submit"]:active 
{
	opacity: 0.8;
}
.error {
	background: #F2DEDE;
	color: #A94442;
	padding: 5px;
	text-align: center;
	width: 90%;
	border-radius: 5px;
	margin-left: -20px;
	margin-top: -35px;
	position: absolute;
 }
 p {
    color: white;
    margin-top: 10px;
	font-size: 15px;
 }
 .white {
    color: #1ab140;
 }
    </style>
</head>
<body>
    <div class="bg-image"><img src="loginbg2.jpg"></div>
	<div class="box">
		<form action="./processloginadmin.php" method="post" autocomplete="off">
			<h2>Log in</h2>
			<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     		<?php } ?>
			<div class="inputBox">
				<input type="text" required="required" name="username" id="username">
				<span>Username</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="password" required="required" name="password" id="password">
				<span>Password</span>
				<i></i>
			</div>
			<div class="signup">
				<p>New user? </p>
                <p class="white">Please contact system administrator for your username and password</p>
			</div>
			<input type="submit" value="Login">
		</form>
	</div>
</body>
</html>








