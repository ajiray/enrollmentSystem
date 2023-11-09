<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>manage payments</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');
    *{
        font-family: 'Poppins', sans-serif;
    }
    .text{
        font-size: 50px;
    }
    .text1{
        font-size: 40px;
    }
    .btn{
        font-size: 30px;
    }
</style>

<body>
    <div style = "margin-left: 200px; margin-top: 100px;">
    <form action="6.6manageConnections.php" method="post">

    <h1 style = " font-size: 60px; color: red; border: 2px solid black; width: 900px; text-align: center; border-color: black; border-radius: 15px;">Enter a Transaction Below</h1>
    <label class = "text">Name: </label><input type = "text" name = "name" class = "text1" style = " width: 500px;"><br>
    <label class = "text">Student ID: </label><input type = "text" name = "stud_id" class = "text1" style = " width: 500px;"><br>
    <label class = "text">Email: </label><input type = "email" name = "email" class = "text1" style = "width: 500px;"><br>

    <label class = "text">Payment Type </label><select name="type" id="type" class = "text1">
		<option  value="gcash" id="gcash" name="gcash" required >Gcash</option>
        <option value="Visa" id="Visa" name="Visa" required>Visa</option>
        <option value="Paypal" id="Paypal" name="Paypal" required>Paypal</option>
	</select><br>

    <label class = "text">Amount Paid: </label><input type = "amount" name = "amount" class = "text1" style = "width: 150px; color: green"><br>

    <label class = "text">Status </label><select name="status" id="status" class = "text1">
		<option value="confirmed" id="confirmed" name="confirmed" required>Confirmed</option>
	</select><br>

    <button  class = "btn" type = "submit" name = "submit" style = "margin-top: 50px; color: white; background-color: maroon;">Submit</button>

    </form>
    </div>

</body>
</html>