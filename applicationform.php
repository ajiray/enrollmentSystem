<?php
session_start(); 
include "database.php";
$studid = $_SESSION['stud_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Application Form</title>
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
	display: flex;
	overflow: hidden;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	flex-direction: column;
}
.bg-image img{
	filter: brightness(40%);
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
	width: 1500px;
	height: 870px;
	margin-top: -10px;
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
	width: 1500px;
	height: 920px;
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
	width: 1500px;
	height: 920px;
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
	border-radius: 10px;
	z-index: 2;
	display: flex;
	flex-direction: column;
}
.inputBox 
{
	position: relative;
	width: 450px;
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
	letter-spacing: .05em;
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
h1 {
	color: white;
	text-align: center;
	margin-top: -30px;
	margin-bottom: 20px;
	font-size: 35px;
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
	margin-left: 40%;
	margin-top: 30px;
	width: 20%;
}
input[type="submit"]:active 
{
	opacity: 0.8;
}
.margin-top {
	margin-top: 30px;
	margin-bottom: -10px;
}
select {
	background-color: #101820;
	width: 450px;
	color: #8f8f8f;
	height: 45px;
	font-size: 1em;
	border: 1px solid #101820;
	border-bottom: 2px solid #f4b41a;
	margin-top: 10px;
	border-radius: 5px;
}

    </style>
</head>
<script>
    function changeColor1() {
    let color = "#f4b41a"
    let color1 = "#101820"
    var optionElement = document.getElementById('rgb');
    optionElement.style.background = color;
    optionElement.style.color = color1;
};
function changeColor2() {
    let color = "#f4b41a"
    let color1 = "#101820"
    var optionElement = document.getElementById('rgb2');
    optionElement.style.background = color;
    optionElement.style.color = color1;
};
function changeColor3() {
    let color = "#f4b41a"
    let color1 = "#101820"
    var optionElement = document.getElementById('rgb3');
    optionElement.style.background = color;
    optionElement.style.color = color1;
};
function changeColor4() {
    let color = "#f4b41a"
    let color1 = "#101820"
    var optionElement = document.getElementById('rgb4');
    optionElement.style.background = color;
    optionElement.style.color = color1;
};
function changeColor5() {
    let color = "#f4b41a"
    let color1 = "#101820"
    var optionElement = document.getElementById('rgb5');
    optionElement.style.background = color;
    optionElement.style.color = color1;
};
</script>
<body>
    <div class="bg-image"><img src="./loginbg.jpg"></div>
	<div class="box">
		<form action="process-application.php" method="post" id="application" autocomplete="off">
            <h1>Application Form</h1>
			<table>
            <tr>
            <td>
			<div class="inputBox">
				<input type="text" required="required" name="FirstName">
				<span>First Name</span>
				<i></i>
			</div>
            </td>
            <td>
                <div class="inputBox">
                    <input type="text" required="required" name="MiddleName">
                    <span>Middle Name</span>
                    <i></i>
                </div>
                </td>
            <td>
			<div class="inputBox">
				<input type="text" required="required" name="LastName">
				<span>Last Name</span>
				<i></i>
			</div>
        </td>
    </tr>

    <tr>
        <td>
        <div class="inputBox">
            <select name="Gender" onchange="changeColor1();" id="rgb">
				<option value="0">Gender</option>
				<option value="M" id="Gender" name="Gender">Male</option>
				<option value="F" id="Gender" name="Gender">Female</option>
			</select>
        </div>
        </td>
        <td>
            <div class="inputBox">
                <input type="text" required="required" name="ContactNumber">
                <span>Contact Number</span>
                <i></i>
            </div>
            </td>
        <td>
        <div class="inputBox">
            <input type="text" required="required" name="Nationality">
            <span>Nationality</span>
            <i></i>
        </div>
    </td>
</tr>

<tr>
    <td>
    <div class="inputBox">
        <input type="text" required="required" name="homeAddress">
        <span>Address</span>
        <i></i>
    </div>
	<td>
		<div class="inputBox">
			<input type="text" required="required" name="School">
			<span>Previous School</span>
			<i></i>
		</div>
	</td>
	<td>
        <div class="inputBox">
            <select name="Course" onchange="changeColor2();" id="rgb2">
				<option value="0" id="Course">Program</option>
				<option value="IT" id="Course" name="Course">IT</option>
				<option value="CS" id="Course" name="Course">CS</option>
				<option value="Tourism" id="Course" name="Course">Tourism</option>
				<option value="HRM" id="Course" name="Course">HRM</option>
			</select>
        </div>
        </td>
</td>
</tr>

<tr>
    
</tr>

<tr>
    
    <td>
		<div class="inputBox">
        <select name="Year" onchange="changeColor3();" id="rgb3">
			<option value="0">Year</option>
			<option value="1st" id="Year" name="Year">1st Year</option>
			<option value="2nd" id="Year" name="Year">2nd Year</option>
			<option value="3rd" id="Year" name="Year">3rd Year</option>
			<option value="4th" id="Year" name="Year">4th Year</option>
		</select>
	</div>
        </td>
    <td>
    <div class="inputBox">
        <select name="schoolYear" onchange="changeColor4();" id="rgb4">
			<option value="">School Year</option>
			<option value="2022-2023">2022-2023</option>
		</select>
    </div>
</td>

<td>
    <div class="inputBox">
<input type="date" required="required" name="birthday" value="2001-06-12">
			<span>Birthday</span>
			<i></i>
    </div>
</td>
</tr>
<tr>
    
    <td>
    <div class="inputBox">
                <input type="text" required="required" name="religion">
                <span>Religion</span>
                <i></i>
            </div>
        </td>
    <td>
    <div class="inputBox">
        <select name="civilstatus" onchange="changeColor5();" id="rgb5">
			<option value="">Civil Status</option>
			<option value="Single">Single</option>
            <option value="Married">Married</option>
		</select>
    </div>
</td>

</tr>
</table>

<h1 class="margin-top">Emergency Contact Person</h1>
<table>
<tr>
    <td>
    <div class="inputBox">
        <input type="text" required="required" name="GuardianName">
        <span>Name</span>
        <i></i>
    </div>
    </td>
    <td>
        <div class="inputBox">
            <input type="text" required="required" name="GuardianRelationship">
            <span>Relationship</span>
            <i></i>
        </div>
        </td>
    <td>
    <div class="inputBox">
        <input type="text" required="required" name="GuardianNumber">
        <span>Contact number</span>
        <i></i>
    </div>

    
</td>
</tr>
</form>
	</div>
</table>
<input type="submit" value="Submit">
</body>
</html>