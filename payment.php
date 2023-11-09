<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>

*{
  font-family: 'Poppins', sans-serif;
  margin:0; 
  padding:0;
  box-sizing: border-box;
  outline: none; border:none;
  text-transform: capitalize;
  transition: all .2s linear;
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

.glass_morph{
    background: rgba(255,255,255,0.35);
    -webkit-backdrop-filter: blur(8px);
    backdrop-filter: blur(8px);
    border: 1px solid rgba(255,255,255,0.175);

    margin-bottom: 70px;
    margin-right: auto;
    margin-left: auto;
    text-align: center;
}

.payment_method{
    border: 2px solid black;
    border-radius: 13px;
    width: 500px;
    background-color: rgb(89, 223, 89);

    margin-left: auto;
    margin-right: auto;
    margin-top: 40px;
}

.payment_gcash_visa_paypal{
    display: inline-block;
}

.button_gcash{
    margin-top: 20px;

    padding: 10px 10px 10px 36px;
    font-family: "Trebuchet MS", Arial, Verdana;   
    background: #e9e9e9 url("gcashlogo.png") 10px 10px no-repeat;
    background-size: 100px 80px; 
    border-radius: 16px;
    border: 1px solid #d9d9d9;
    text-shadow: 1px 1px #fff;
    text-align: left;
    font-size: 50px;
    
    
    height: 100px;
    width: 120px;
    cursor: pointer;
}

.button_gcash:hover{
    filter: brightness(80%);
}

.button_visa{
    margin-top: 20px;

    padding: 10px 10px 10px 36px;
    font-family: "Trebuchet MS", Arial, Verdana;   
    background: #e9e9e9 url("mastercardlogo.png") 15px 10px no-repeat;
    background-size: 150px 80px; 
    border-radius: 16px;
    border: 1px solid #d9d9d9;
    text-shadow: 1px 1px #fff;
    text-align: left;
    font-size: 50px;
    align-content: center;

    height: 100px;
    width: 180px;
    cursor: pointer;
}

.button_visa:hover{
    filter: brightness(80%);
}

.button_paypal{
    margin-top: 20px;

    padding: 10px 10px 10px 36px;
    font-family: "Trebuchet MS", Arial, Verdana;   
    background: #e9e9e9 url("paypal_logo.png") 15px 10px no-repeat;
    background-size: 150px 80px; 
    border-radius: 16px;
    border: 1px solid #d9d9d9;
    text-shadow: 1px 1px #fff;
    text-align: left;
    font-size: 50px;
    align-content: center;

    height: 100px;
    width: 180px;
    cursor: pointer;
}

.button_paypal:hover{
    filter: brightness(80%);
}

</style>

<body>

    <div class="container">
        
        <div class="glass_morph" style = "height: 570px; width: 800px;">
            <h1 class = "payment_method">Choose Payment Method</h1>
        <div class = "payment_gcash_visa_paypal">
            <a href = "paymentGcash.php"><button class = "button_gcash"></button></a><br>
            <a href = "paymentVisa.html" target ="popup" onclick = "window.open('paymentVisa.html', 'popup' , 'width = 900; height = 900'); return false;"><button class = "button_visa"></button></a><br>
            <a href = "https://paypal.me/wolfieee901?country.x=PH&locale.x=en_US" target ="popup" onclick = "window.open('https://paypal.me/wolfieee901?country.x=PH&locale.x=en_US', 'popup' , 'width = 900; height = 900'); return false;"><button class = "button_paypal"></button></a>
        </div>
        <br>
        <h1 style = "font-size: 14px; margin-top: 30px; color: black; text-transform: none;">Please take a screenshot and submit it to the <a href = "home.php" style = "text-decoration: none;"><span style = "color: red; cursor: pointer;">PAYMENT SUBMISSION</span></a> tab for processing</h1>
        </div>

    </div>
    
</body>
</html>