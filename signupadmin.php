<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
	<style>
	@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");
        *
{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body
{
	max-width: 100%;
    max-width: 100%;
	display: flex;
	overflow: hidden;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	flex-direction: column;
    height: 100vh;
    width: 100%;
    background: -webkit-linear-gradient(0deg, #ffffff 0%, #5b92c2 100%);
    background: linear-gradient(0deg, #ffffff 0%, #5b92c2 100%);
}
.box 
{
	max-width: 100%;
  	max-width: 100%;
	position: absolute;
	width: 380px;
	height: 540px;
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
 select {
	background-color: #101820;
	width: 305px;
	color: #8f8f8f;
	height: 45px;
	font-size: 1em;
	border: 1px solid #101820;
	border-bottom: 2px solid #1ab140;
	margin-top: 10px;
	border-radius: 5px;
}
    </style>

</head>
<body>
    <script>
        function changeColor() {
    let color = "#1ab140"
    let color1 = "#101820"
    var optionElement = document.getElementById('rgb');
    optionElement.style.background = color;
    optionElement.style.color = color1;
};
    </script>
	<div class="box">
		<form action="process-signup-admin.php" method="post" id="signup" autocomplete="off">
			<h2>Sign Up</h2>
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
			<div class="inputBox">
				<input type="password" required="required" name="password_confirmation" id="password_confirmation">
				<span>Confirm Password</span>
				<i></i>
			</div>
            <div class="inputBox">
            <select name="usertype" onchange="changeColor();" id="rgb">
			<option value="">Type of User</option>
			<option value="admin">Admin</option>
			<option value="dean">Dean</option>
            <option value="cashier">Cashier</option>
            <option value="registrar">Registrar</option>
            <option value="admission">Admission</option>
            <option value="enrollementadviser">Enrollement Adviser</option>
		    </select>
			</div>
			<input type="submit" value="Submit" name="sign-up">
		</form>
	</div>
</body>
</html>