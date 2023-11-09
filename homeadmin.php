<?php
    session_start();
    include "database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gantari&display=swap" rel="stylesheet">
    <title>Home</title>
    <style>
    @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap%27');

*{
    margin: 0;
    padding: 0;
    max-width: 100%;
    max-width: 100%;
}

body{
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

.welcome-message{
    height: 140px;
    width: 500px;

    text-align: center;
    margin-top: -34px;
    margin-left: -35px;
    border-radius: 10px;
}

.first h1{
    color: black;
    font-size: 57px;
    font-family: 'Josefin Sans', sans-serif;

    margin-top: 15px;
}

.first img{
    height: 90px;
    width: 90px;

    cursor: grab;
    position: absolute;
    left: 580px;
    top: 290px;
}

.second h1{
    color: black;
    font-size: 27px;
    font-family: 'Gantari', sans-serif;

    margin-top: 9px;
}

.fourth img{
    height: 70px;
    width: 70px;

    position: relative;
    top: 305px;
    left: 992px;
}

.wave{
    -webkit-animation-duration: 2.1s;
    animation-duration: 2.1s;
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
    -webkit-animation-name: wave-animation;
    animation-name: wave-animation;
    display: inline-block;
    -webkit-transform-origin: 70% 70%;
    transform-origin: 70% 70%;
}

@keyframes wave-animation {
    0% {
        transform: rotate( 0.0deg)
    }
    10% {
        transform: rotate(14.0deg)
    }
    20% {
        transform: rotate(-8.0deg)
    }
    30% {
        transform: rotate(14.0deg)
    }
    40% {
        transform: rotate(-4.0deg)
    }
    50% {
        transform: rotate(10.0deg)
    }
    60% {
        transform: rotate( 0.0deg)
    }
    100% {
        transform: rotate( 0.0deg)
    }
}
    </style>
</head>

<body>

    <div class="container">

        <div class="welcome-message">

            <div class="first">
                <img src = "handemoji.png" class = "wave">
                <h1 class = "welcome-text">Welcome!</h1>
            </div>

            <div class="second">
                <h1><?php 
                   if(isset($_SESSION['adminid'])){
                    $adminid = $_SESSION['adminid'];

                    $sql = "SELECT * FROM adminuser where adminid = '$adminid'";
                    $result = mysqli_query($mysqli, $sql);

                    if(mysqli_num_rows($result)>0)
                    {
                        foreach($result as $row)
                        {
                            echo $row['username'];
                        }
                    }
                }?></h1>
            </div>

        </div>

            <div class="fourth">
                <img src = "QRCODENEW.png">
            </div>
    </div>

</body>
</html>