<?php 
session_start(); 
include "database.php";
$studid = $_SESSION['stud_id'];
$sql = "SELECT * FROM  paymentconfirmed where stud_id = $studid";
$result = mysqli_query($mysqli, $sql);
$payment = 0;
while ($row = mysqli_fetch_array($result)) {
    $payment = $row['amount'];
}
if ($payment > 0) {
    echo "<h1 style =color:red;> YOU ALREADY PAID</h1>";
}else{
    ?>

<form id ="myform" action ="AssessmentForm.php" method ="POST">
 <input type=hidden name=id value = <?php echo $studid; ?>>
 <div class="but"><?php echo "<td><input type=submit name =generate class =butt2 value='Print Registration Form'>"; ?>
</form>
</div>
<?php } ?>
<style>
        *{
            background-color:white;
        }
        .butt2{
                background-color: #f4b41a;
                color: white;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                padding:30px 40px;
                margin-left:auto;
                margin-top:80px;

            }
            .but{
                width:300px;
                margin-top:200px;
                margin-left:auto;
                margin-right:auto;
            }
</style>