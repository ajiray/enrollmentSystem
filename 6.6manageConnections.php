<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login_db";

    $conn = mysqli_connect($server, $username, $password, $dbname);

    if(isset($_POST['submit'])){

        if(!empty($_POST['name']) && !empty($_POST['stud_id']) && !empty($_POST['email']) && !empty($_POST['type']) && !empty($_POST['amount']) && !empty($_POST['status'])){

        $name = $_POST['name'];
        $studid = $_POST['stud_id'];
        $email = $_POST['email'];
        $type = $_POST['type'];
        $amount = $_POST['amount'];
        $status = $_POST['status'];

        $query = "INSERT INTO paymentconfirmed(name,stud_id,email,type,amount,status) values('$name','$studid', '$email', '$type', '$amount', '$status')";

        $run = mysqli_query($conn,$query) or die();

        if($run){
            header('Location: 6managePayments.php');
            exit;
        } 
        else {
            echo "Form not Submitted";
        }
        }
        else{
            echo "all fields are required";
        }
    }
?>