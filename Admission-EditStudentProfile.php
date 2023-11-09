<?php
include "database.php";
?>
<html>
    <head>
        <style>
@import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Secular+One&display=swap');
*{
  font-family: 'Secular One', sans-serif;
  margin:0; 
  padding:0;
  color: orangered;
}
body{
  width: 100%;
  background: #ffffff;
  background: -webkit-linear-gradient(0deg, #ffffff 0%, #5b92c2 100%);
  background: linear-gradient(0deg, #ffffff 0%, #5b92c2 100%);
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  flex-direction: column;
}
h1{
text-align:center;
}
.searchbar{
  width: 40%; 
  box-sizing: border-box;
  padding: 12px 20px;
  border: 2px solid #ccc;
  border-radius: 4px;
                
}
.glass_morph{
  background: rgba(255,255,255,0.35);
  -webkit-backdrop-filter: blur(8px);
  backdrop-filter: blur(8px);
  border: 1px solid rgba(255,255,255,0.175);
  width:600px;
  margin-bottom: 70px;
  margin-right: auto;
  margin-left: auto;
  text-align: center;
  border-radius:10px;
}
.tbl{
  border-radius: 10px;
  margin-left:50px;
  margin-left:auto;
  margin-right:auto;
  max-width: 100%;
  max-height: 100%;
  padding:20px;
}
.tbl th{
  border-radius: 5px;
  text-align:left;
  width:200px;
  padding:10px;
  font-size:20px;
}
.tbl td{
  border-radius: 5px;
  text-align:center;
  width:20px;
  font-size:20px;
}
table .data{
  text-align:left;
  width:200px;
  font-size:30px;
  
}
.but{
  margin-left:auto;
  margin-right:auto;
  width:130px;
   
}
.upd{
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
.tbl input{
  background: rgba(255,255,255,0.35);
  width:200px;
  padding:10px;
  border-radius:5px;
  font-size:20px;
}
#search{
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
</style>
    </head>
    <body>
      <!-- Search Bar -->
        <div class="glass_morph">
            <form method = "POST">
        <h1>List of Student Profiles</h1>
            <input type="text" class="searchbar" id="studid" name="studid"  placeholder ="SEARCH STUDENT ID">
            <button type="submit"  id="search">Search</button>
        </form>
       
        <?php
        //Search Function
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $studid = $_POST['studid'];
            $sql = "SELECT * FROM applicationform WHERE stud_id=$studid";
            $result = mysqli_query($mysqli, $sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) { ?>
        <form method="POST">
          <!-- Print The Results -->
          <table class="tbl">
            <tr>
            <th>First Name</th>
            <td>:</td>
            <td class="data"><input type="text" name="fName" placeholder="Middle Name" value="<?php echo $row['fName']; ?>"></td>
              </tr>
              <tr>
            <th>Middle Name</th>
            <td>:</td>
            <td class="data"> <input type="text" name="mName" placeholder="Middle Name" value="<?php echo $row['mName']; ?>"></td>
              </tr>
              <tr>
            <th>Last Name</th>
            <td>:</td>
            <td class="data"><input type="text" name="lName" placeholder="Last Name" value="<?php echo $row['lName']; ?>"> </td>
              </tr>
              <tr>
            <th>Gender</th>
            <td >:</td>
            <td class="data"><input type="text" name="gender" placeholder="Last Name" value="<?php echo $row['gender']; ?>"> </td>
              </tr>
              <tr>
            <th>Birthday</th>
            <td>:</td>
            <td class="data"><input type="text" name="birthday" placeholder="Last Name" value="<?php echo $row['birthday']; ?>"> </td>
              </tr>
              <tr>
            <th>Religion</th>
            <td>:</td>
            <td class="data"><input type="text" name="religion" placeholder="Last Name" value="<?php echo $row['religion']; ?>"> </td>
              </tr>
              <tr>
            <th>Contact Number</th>
            <td>:</td>
            <td class="data"><input type="text" name="cNumber" placeholder="Last Name" value="<?php echo $row['cNumber']; ?>"> </td>
              </tr>
              <tr>
            <th>Nationality</th>
            <td>:</td>
            <td class="data"><input type="text" name="nationality" placeholder="Last Name" value="<?php echo $row['nationality']; ?>"> </td>
              </tr>
              <tr>
            <th>Civil Status</th>
            <td>:</td>
            <td class="data"><input type="text" name="civilstatus" placeholder="Last Name" value="<?php echo $row['civilstatus']; ?>"> </td>
              </tr>
              <tr>
            <th>Address</th>
            <td>:</td>
            <td class="data"><input type="text" name="address" placeholder="Last Name" value="<?php echo $row['address']; ?>"> </td>
              </tr>
              <tr>
            <th>Previous School</th>
            <td>:</td>
            <td class="data"><input type="text" name="prevSchool" placeholder="Last Name" value="<?php echo $row['prevSchool']; ?>"> </td>
              </tr>
              <tr>
            <th>Emergency Contact Name</th>
            <td>:</td>
            <td class="data"><input type="text" name="emerName" placeholder="Last Name" value="<?php echo $row['emerName']; ?>"> </td>
              </tr>
              <tr>
            <th>Emergency Contact Relationship</th>
            <td>:</td>
            <td class="data"><input type="text" name="emerRelationship" placeholder="Last Name" value="<?php echo $row['emerRelationship']; ?>"> </td>
              </tr>
              <tr>
            <th>Emergency Contact Number</th>
            <td>:</td>
            <td class="data"> <input type="text" name="emerContact" placeholder="Last Name" value="<?php echo $row['emerContact']; ?>"> </td>
              </tr>
            </table><br>
              <input type="hidden" name ="studid" id="studid" value="<?php echo $row['stud_id'] ?>">
              <input type="submit" value="Update" name="update_profile" class="upd">
                </form>
                </div>
   <?php }}
  else {
            $em = "No Results Found!";
            echo $em;
  }}?>
   <?php 
   //Update Function
    if (isset($_POST['update_profile'])) {
        $id = $_POST['studid'];
        $sql = "SELECT * from applicationform where stud_id = $id";
        $result = mysqli_query($mysqli, $sql);
        $info = mysqli_fetch_assoc($result);
        $fname = $_POST['fName'];
        $mname = $_POST['mName'];
        $lname = $_POST['lName'];
        $gender= $_POST['gender'];
        $bday = $_POST['birthday'];
        $religion = $_POST['religion'];
        $cnumber = $_POST['cNumber'];
        $nationality = $_POST['nationality'];
        $civilstatus = $_POST['civilstatus'];
        $address = $_POST['address'];
        $prevSchool = $_POST['prevSchool'];
        $emerName = $_POST['emerName'];
        $emerRelationship = $_POST['emerRelationship'];
        $emerContact = $_POST['emerContact'];
        $sql1 = "UPDATE applicationform set fName='$fname', mName='$mname', lName='$lname', gender='$gender', birthday='$bday', religion='$religion', cNumber='$cnumber', nationality='$nationality', civilstatus='$civilstatus', address='$address', prevSchool='$prevSchool', emerName='$emerName', emerRelationship='$emerRelationship', emerContact='emerContact' where stud_id = '$id'";
        $result1 = mysqli_query($mysqli, $sql1);
        if ($result1) {
            echo '<script type ="text/javascript"> alert("Student Updated") </script>';
        } else {
            echo '<script type ="text/javascript"> alert("Student Not Updated") </script>';
        }
    }

   ?>
    </body>
</html>
