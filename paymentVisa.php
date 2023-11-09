<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">

</head>

<script>
  function onBtnClickHandle(){
        setTimeout(function(){ 
        window.location="paymentGcash.php"
     }, 3000);
    }

function validateForm() {
  var x = document.getElementById("name").value;
  var y = document.getElementById("email").value;
  if (x == "" || y == "") {
    alert("All fields must be filled out");
    return false;
  }
}

</script>

<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

*{
  font-family: 'Poppins', sans-serif;
  margin:0; padding:0;
  box-sizing: border-box;
  outline: none; border:none;
  text-transform: capitalize;
  transition: all .2s linear;
}

.container{
  display: flex;
  justify-content: center;
  align-items: center;
  padding:25px;
  min-height: 100vh;
  background: #ffffff;
    background: -webkit-linear-gradient(0deg, #ffffff 0%, #f4b41a 100%);
    background: linear-gradient(0deg, #ffffff 0%, #f4b41a 100%);
}

.container form{
  padding:20px;
  width:700px;
  background: black;
  color: white;
  box-shadow: 0 5px 10px rgba(0,0,0,.1);
}

.container form .row{
  display: flex;
  flex-wrap: wrap;
  gap:15px;
}

.container form .row .col{
  flex:1 1 250px;
}

.container form .row .col .title{
  font-size: 20px;
  color:#333;
  padding-bottom: 5px;
  text-transform: uppercase;
}

.container form .row .col .inputBox{
  margin:15px 0;
}

.container form .row .col .inputBox span{
  margin-bottom: 10px;
  display: block;
}

.container form .row .col .inputBox input{
  width: 100%;
  border:1px solid #ccc;
  padding:10px 15px;
  font-size: 15px;
  text-transform: none;
}

.container form .row .col .inputBox input:focus{
  border:1px solid #000;
}

.container form .row .col .flex{
  display: flex;
  gap:15px;
}

.container form .row .col .flex .inputBox{
  margin-top: 5px;
}

.container form .row .col .inputBox img{
  height: 34px;
  margin-top: 5px;
  filter: drop-shadow(0 0 1px #000);
}

.container form .submit-btn{
  width: 100%;
  padding:12px;
  font-size: 17px;
  background: #27ae60;
  color:#fff;
  margin-top: 5px;
  cursor: pointer;
}

.container form .submit-btn:hover{
  background: #2ecc71;
}

#exp_month{
    width: 330px;
    height: 44px;
}

</style>

<body>

<div class="container">

    <form action="paymentVisa_2.php" onsubmit="return validateForm()">

        <div class="row">

            <div class="col">

                <h3 class="title" style = "color: white">billing address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" minlength="8" maxlength = "80" placeholder="Enter Full Name here" id = "name" required>
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" minlength="1" maxlength = "50" placeholder="Enter Email Address here" required>
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" minlength="1" maxlength = "80" placeholder="Enter Address here" required>
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" minlength="1" maxlength = "30" placeholder="Enter City here" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" minlength="1" maxlength = "30" placeholder="Enter State here" required>
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" minlength="1" maxlength = "10" placeholder="ZIP CODE" required>
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title" style = "color: white">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" minlength="8" maxlength = "80" placeholder="Enter Card Holder Name here" required>
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="tel" maxlength="19" placeholder="1111-2222-3333-4444" required>
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <select name = "exp month :" id = "exp_month">
                        <option value = "january" required>January</option>
                        <option value = "febuary" required>Febuary</option>
                        <option value = "march" required>March</option>
                        <option value = "march" required>April</option>
                        <option value = "may" required>May</option>
                        <option value = "june" required>June</option>
                        <option value = "july" required>July</option>
                        <option value = "august" required>August</option>
                        <option value = "september" required>September</option>
                        <option value = "october" required>October</option>
                        <option value = "november" required>November</option>
                        <option value = "december" required>December</option>
                    </select>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" minlength="4" maxlength = "4"  placeholder="2022" required>
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" minlength="3" maxlength = "3" placeholder="123" required>
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" value="proceed to checkout" class="submit-btn" target ="popup">

    </form>

</div>    

</body>
</html>