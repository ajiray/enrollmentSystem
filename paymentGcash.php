<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
@import url('https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap');

    *{
        font-family: 'Titillium Web', sans-serif;
        max-width: 100%;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        list-style: none;
        text-decoration: none;
    }

    body{
        background-color: rgb(235,236,240);
    }

    .color-blue{
        background-color: #0057E4;
        height: 275px;
    }

    .color-blue img{
        height: 60px;
        width: 250px;
    
        margin-top: 30px;
    }

    .glass-morph{
        background: rgba(255,255,255,0.95);
        -webkit-backdrop-filter: blur(4px);
        backdrop-filter: blur(4px);
        border: 1px solid rgba(255,255,255,0.475);
        border-radius: 5px;

        margin-left: auto;
        margin-right: auto;
        margin-top: -150px;

        height: 400px;
        width: 550px;
    }

    .box{
        margin-top: 30px;
        margin-left: 50px;
        letter-spacing: 3px;
    }

    .merchant{
        font-size: 22px;
        color: #A3A9BC;
    }
    
    .amount{
        color: #A3A9BC;
        font-size: 22px;
    }

    .submit{
        border: 0px;
        border-radius: 20px;
        background-color: #0057E4;
        color: white;
        cursor: pointer;

        font-size: 20px;
        font-weight: 900;
        height: 45px;
        width: 300px;
        
        display: flex;
        justify-content: center;
        align-items: center;

        margin-left: auto;
        margin-right: auto;
        margin-top: 50px;
    }

    .input-amount{
        border: none;
        background-color: #F2F6FE;
        color: BLUE;
        font-weight: 900;
        font-size: 22px;
        height: 35px;
        width: 181px;
        border: 2px solid black;
        border-radius: 4px;
        

        margin-left: 2px;
    }

    input[type=number]::-webkit-inner-spin-button, 
    input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
    }


    .gcash_name{
    color: #A3A9BC;
    font-size: 22px;

    margin-top: -20px;
    }

    .input-name{
        border: none;
        background-color: #F2F6FE;
        color: BLUE;
        font-weight: 900;
        font-size: 22px;
        height: 35px;
        width: 300px;
        border: 2px solid black;
        border-radius: 4px;
        
        margin-bottom: 20px;
        margin-left: 5px;
    }

    #type{
        font-weight: 900;
        width: 180px;
        font-size: 18px;
        border: 2px solid black;
        
        margin-left: 165px;
    }

</style>

<body>
    <div class="container">

        <div class="color-blue" style = "display: flex; justify-content: center;">
            <img src = "gcashlogowhite.png"><br>
        </div>

        <div class="glass-morph">
            
        <form action = "gcashconnect.php" method = "POST" >

            <div class="box">

            <div class = "merchant-generic">
                <h1 class = "merchant">Merchant</h1><br>
                <h1 style = "font-size: 22px; color: black; float: right; margin-bottom: -20px; margin-top: -58px; margin-right: 140px;">GENERIC PROGRAM</h1><br>
            </div>
                <h1 class = "gcash_name">GCASH <a style = "color: blue;">NAME</a><input class = "input-name" type = "text" name = "gcash_name" id = "gcash_name" required><h1>
                <h1 class = "amount">AMOUNT <a style = "color: blue;">PHP</a><input class = "input-amount" type = "number" name = "gcash_amount" id = "gcash_amount" required><h1>

            <select name="type" id="type">
				<option value="enrollment" id="enrollment" name="enrollment" required>Enrollment</option>
				<option value="tuition" id="tuition" name="tuition" required>Tuition</option>
			</select>

            </div>
            <a href = "home.php"><input class = "submit" type = "submit" name = "submit" value = "NEXT"></a>

        </form>
        </div>

        
    </div>
</body>
</html>
