<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gcash QR CODE</title>
</head>

<style>

    *{
       margin:0; 
       padding:0;

       background-color: white;
       box-sizing: border-box;
       outline: none; border:none;
       transition: all .2s linear;

       font-family: 'Poppins', sans-serif;
    }

    .first{
        background-color: #0057E4;
        height: 275px;
    }

    .morph_glass{
        background: rgba(255,255,255,0.9);
        -webkit-backdrop-filter: blur(1px);
        backdrop-filter: blur(1px);
        border: 1px solid rgba(255,255,255,0.45);
        border-radius: 10px;

        border: 2px solid black;

        margin-left: auto;
        margin-right: auto;
        margin-top: -180px;

        height: 690px;
        width: 600px;
    }

    

    .gcash_qr{
    
        height: 250px;
        width: 300px;

        margin-top: 40px;
        margin-left: 150px;
    }

    .step{
        font-size: 7px;
        
        margin-left: 30px;
        margin-top: 10px;
    }

    .proceed{
        text-decoration: none;
        color: green;

        padding-t
    }

</style>

<body>
    
    <div class="container">

    <div class="first">
    
    </div>
    
    <div class="morph_glass">
        <img class = "gcash_qr" src = "gcash_image.png">

            <br>    
            <h1 style = "text-align: center; color: blue; font-size: 23px;">How to Pay using GCASH</h1>
            <div class = "step">
            <h1>1. Launch GCASH APP</h1>
            <h1>2. Press SCAN QR CODE</h1>
            <h1>3. Input the <span style = "color: red;">AMOUNT</span> that you have registered from the last window</h1>
            <h1>4. Send the correct amount and take a <span style = "color: red;">SCREENSHOT</span> of the receipt</h1>
            <br>
            <br>
            <br>
            <br>
            <h1 style = "text-align: center; color: blue; font-size: 23px;">How to Submit the receipt</h1>
            <h1>1. Make sure that you have the proof of payment saved in your device</h1>
            <h1>2. Go to <a href = "home.php" style = "color: green; text-decoration: none;">Payment Submission</a> and submit the receipt</h1>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <h1><a href = "home.php" class = "proceed">Proceed back to the Home Page</a></h1>
        </div>

    </div>

    </div>

</body>
</html>