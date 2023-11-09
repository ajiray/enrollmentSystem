<?php
include "database.php";
if (isset($_POST['submit'])) {
    if (isset($_POST['update_profile'])) {
        $id = $_POST['studid'];
        $sql = "SELECT * from applicationform where stud_id = $id";
        $result = mysqli_query($mysqli, $sql);
        $info = mysqli_fetch_assoc($result);
        $fname = $_POST['fName'];
        $mname = $_POST['mName'];
        $lname = $_POST['lName'];
        $sql1 = "UPDATE applicationform set fName='$fname', mName='$mname', lName='$lname' where stud_id = '$id'";
        $result1 = mysqli_query($mysqli, $sql1);
        if ($result1) {
            echo '<script type ="text/javascript"> alert("Student Updated") </script>';
        } else {
            echo '<script type ="text/javascript"> alert("Student Not Updated") </script>';
        }
    }
}
?>
<html>
    <head>
        <style>
            .cont{
                width:200px;
                margin-left: auto;
                margin-right: auto;
            }
            </style>
    </head>
    <body>
        <div class="cont">
            <form action="Update-form.php" method="POST">
            <input type="text" name="fName" placeholder="First Name"><br><br>
            <input type="text" name="mName" placeholder="Middle Name"><br><br>
            <input type="text" name="lName" placeholder="Last Name"><br><br>
            <input type="submit" value="Update" name="update_profile">
            </form>
        </div>
    </body>

</html>
