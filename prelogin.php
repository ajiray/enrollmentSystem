<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generic Program Prelogin</title>
</head>

<style>

@import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Secular+One&display=swap');

/*-- PERSONALISED KEYFRAMES (for support of each browser) --*/

@keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 1; }
}

@-moz-keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 1; }
}

@-webkit-keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 1; }
}

@-o-keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 1; }
}

@-ms-keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 1; }
}

/*-- CLASS for making secondary delay fade in  --*/

.fade-in-slow{
    animation: fadeIn 4s 0.75s both;
}

.fade-in-slower{
    animation: fadeIn 3s 1.5s both;
}

/*-- ANIMATION for BOP --*/

@keyframes bop {
  0% { margin-top: 0px; }
  100% { margin-top: 20px; }
}

.bopper{
    animation: bop 1s 0.75s both;
}


/*-- END OF PERSONALISED KEYFRAMES --*/

*{
    margin: 0;
    padding: 0;
    max-width: 100%;
    box-sizing: border-box;
    font-family: 'Secular One', sans-serif;

    max-height: 300px;
}

body{
    max-width: 100%;
    background-color: #101820;
}

img{
    cursor: pointer;
}

.first{
    color: #F4B41A;
    text-align: center;
    height: 250px;

}

.first h1{
  font-size: 90px;
  animation: fadeIn 4s;
  -webkit-animation: fadeIn 4s;
  -moz-animation: fadeIn 4s;
  -o-animation: fadeIn 4s;
  -ms-animation: fadeIn 4s;

  padding-top: 20px;
}

.first h2{
  font-size: 20px;
}

.second{
    margin-top: -50px;
    
    display: flex;
    justify-content: center;
    align-items: center;
}

.second img{
  border-radius: 10px;
  border: 3px solid #F4B41A;
}

/*-- neon color background effects --*/

.yellow{
  -webkit-box-shadow: 0 4.5px 13px 0.5px #f4b41a;
  -moz-box-shadow: 0 4.5px 13px 0.5px #f4b41a;
  box-shadow: 0 4.5px 13px 0.5px #f4b41a;
}

.blue{ 
  -webkit-box-shadow: 0 4.5px 13px 0.5px blue;
  -moz-box-shadow: 0 4.5px 13px 0.5px blue;
  box-shadow: 0 4.5px 13px 0.5px blue;
}

.second img:hover{
  opacity: 0.3;
}

.third{
  margin-top: 40px;
  margin-left: -18px;

  display: flex;
  justify-content: center;
  align-items: center;
}

.third img{
  border-radius: 10px;
  border: 3px solid #F4B41A;
}

.third img:hover{
  opacity: 0.3;
}

.anim:hover{
  animation: bop 0.5s;
  -webkit-animation: bop 0.5s;
  -moz-animation: bop 0.5s;
  -o-animation: bop 0.5s;
  -ms-animation: bop 0.5s;
}

</style>

<body>
    
    <div class="container">

        <div class="first">
            <h1>Welcome</h1>
            <h2 class = "fade-in-slow" style = "color: white; font-size: 24px;">Choose your occupation</h2>
        </div>
  
        <div class="second fade-in-slower">
            <a href = "login.php"><img class = "anim bopper yellow" src = "student.png" style = "margin-left: 0px;"></a>
            <a href = "loginadmin.php"><img class = "anim bopper yellow" src = "enrollmentadvisor.png" style = "margin-left: 40px;"></a>
            <a href = "loginadmin.php"><img class = "anim bopper yellow" src = "admission.png" style = "margin-left: 40px;"></a>
            <a href = "loginadmin.php"><img class = "anim bopper yellow" src = "registrar.png" style = "margin-left: 40px;"></a>
            <a href = "loginadmin.php"><img class = "anim bopper yellow" src = "cashier.png" style = "margin-left: 40px;"></a>
        </div>

        <div class="third fade-in-slower">
            <a href = "loginadmin.php"><img class = "anim bopper yellow" src = "dean.png" style = "margin-left: 40px;"></a>
            <a href = "loginadmin.php"><img class = "anim bopper yellow" src = "admin.png" style = "margin-left: 40px;"></a>
        </div>

    </div>

</body>
</html>