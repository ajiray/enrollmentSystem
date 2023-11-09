<?php
  session_start(); 
  include "database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subject List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  
    
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");
      * {
    margin: 0;
	  padding: 0;
	  box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
      }
      body {
    background: #f5cb67;
 
    }

    /* hide scroll bar but can still scroll */
    ::-webkit-scrollbar {
    display: none;
    }
    /*main div */
    #container{
        display: flex;                
        flex-direction: row;         
        flex-wrap: nowrap;           
        justify-content: space-between; 

      }
    #container > div {  
        max-width: 100%;
    }
    /* Third div */
      .list {
        text-align: center;
        font-size: 20px; 
      }
      .list table {
        color: #101820;
    word-wrap: break-word;         /* All browsers since IE 5.5+ */
    overflow-wrap: break-word;     /* Renamed property in CSS3 draft spec */
    width: 100%;
    max-width: 815px;
      }
      .list table, tr, td, th{
        border: 1px solid #f5cb67;
        color: #f5cb67;
        background-color: #101820;
        
      }
      .list th {
        padding: 10px 15px;
      }
      table a {
        text-decoration: none;
        color: black;
        padding: 0px 20px;
      }
      table {
        margin-top: 15px;
        margin-right: 50px;
        position: relative;
      }
      td {
        padding: 10px 2px;
        color: whitesmoke;
      }
      .los {
        font-size: 50px;
        color: #101820;
        text-align: center;
      }
      .add a{
        color: #03fc03;
      }
      .remove a {
        color: #fc0d0d;
      }
      .add a:hover {
        opacity: 50%;
      }
      .remove a:hover {
        opacity: 50%;
      }
      h2 {
        color: #f5cb67;
        margin-left: 15px;
        font-size: 25px;
      }
      .listdel {
       min-width: 500px;
      }
      .listdel th {
        color: #fc0d0d;
      }
      .del {
        min-width: 815px;
        border: 1px solid #101820;
        background-color: white;
        max-width: 815px;
      }
      .dell {
        min-width: 815px;
      }
      .dell input[type="submit"] {
        background-color: #101820;
        color: whitesmoke;
      }
      .dell input[type="submit"]:hover {
        opacity: 50%;
      }
      .del td {
        text-align: center;
        font-size: 20px;
        color: whitesmoke;
      }
      .del input[type="text"] {
        border: none;
        color: whitesmoke;
        font-size: 25px;
        background-color: #101820;
        text-align: center;
        width: 540px;
        
      }
      .del input[type="submit"] {
        border: none;
        padding: 5px 20px;
        background-color: #101820;
        
      }
      .addtable {
        min-width: 815px;
        max-width: 815px;
        text-align: center;
      }
      .losdel {
        font-size: 50px;
        text-align: center;
      }
      td .submit {
        color: #03fc03;
      }
      .submit input[type="submit"] {
        color: #03fc03;
      }
      .submit input[type="submit"]:hover {
        opacity: 50%;
      }
      .cancel input[type="submit"] {
        color: #fc0d0d;
      }
      .cancel input[type="submit"]:hover {
        opacity: 50%;
      }
      .losadd {
        font-size: 50px;
        text-align: center;
      }
      .addtable input[type="text"] {
        width: 400px;
        text-align: center;
        background-color: whitesmoke;
        border: none;
      }
      .losadd th {
        color: #03fc03;
      }
      .addtable input[type="submit"] {
        border: none;
        padding: 5px 20px;
        background-color: #101820;
      }
      .checkbox {
        font-size: 20px;
        margin-top: 20px;
        margin-left: 10px;
      }
      .checkbox input[type="submit"] {
        padding: 10px;
        margin-top: 20px;
        border-radius: 10px;
      }
      .errormess {
        margin-left: 35%;
        font-size: 30px;
        margin-top: 20px;
        color: red;
      }
      .errormess a{
        text-decoration: none;
        color: #f5cb67;
        margin-left: 60px;
        border: 1px solid black;
        padding: 10px 15px;
        background-color: black;
        border-radius: 10px;
      }
      .errormess h1{
        margin-top: 50px;
        margin-bottom: 30px;
      }
      .errormess a:hover{
        
        opacity: 70%;
      }
    </style>
    
</head>
<body>
    

            <?php
include "database.php";
$studid = $_SESSION['stud_id'];
$cmd   = "";
$rec = 1;
$maxUnits = 21;
$query1 = "SELECT * FROM subjects";
$result3 = mysqli_query($mysqli, $query1);
$rows2 = mysqli_fetch_assoc($result3);
$units = $rows2['TotalUnits'];
 
$sql1 = "SELECT * FROM subjectlist WHERE stud_id = '$studid'";
$result1 = mysqli_query($mysqli, $sql1);

$totalUnits = 0;


while ($row1 = mysqli_fetch_assoc($result1)) {
  $totalUnits += $row1['TotalUnits'];
}


if ($totalUnits + $units > $maxUnits) {

  echo "<h1> Cannot add subject. Total units will exceed the maximum allowed units.</h1>";
            } else {


              if (isset($_GET['cmd'])) {
                $cmd = $_GET['cmd'];
                $rec = $_GET['recID'];
              }
              if (isset($_POST['cmd'])) {
                $cmd = $_POST['cmd'];
                $rec = $_POST['recID'];
              }
              if ($cmd == "Cancel" or $cmd == "No" or $cmd == "") {
                $sql = "SELECT * FROM subjectlist where stud_id ='$studid'";
                $result = mysqli_query($mysqli, $sql);
                if ($result) {
                  if (mysqli_num_rows($result) > 0) {
                    echo "<div class = list>";
                    echo "<table>";
                    echo "<tr class=los><th colspan = 7>List of Subjects";
                    echo "<tr>";
                    echo "<td class=add><a href = subjecttable.php?cmd=Insert&recID=Auto>Add</a></td>";
                    echo "<th>Subject</th>";
                    echo "<th>Subject Code</th>";
                    echo "<th>Lec/Lab Units</th>";
                    echo "<th>Total Unit</th>";

                    while ($row = mysqli_fetch_array($result)) {
                      $id = $row['id'];
                      echo "<tr>";
                      echo "<td class=remove><a href = subjecttable.php?cmd=Delete&recID=$id>Remove</a>";
                      echo "<td>" . $row['SubjectTitle'] . "</td>";
                      echo "<td>" . $row['SubjectCode'] . "</td>";
                      echo "<td>" . $row['LecLabUnits'] . "</td>";
                      echo "<td>" . $row['TotalUnits'] . "</td>";
                      echo "</tr>";

                      echo "</div>";
                    }
                    // Free result set
                    mysqli_free_result($result);
                  } else {
                    echo "<form action=subjecttable.php method = post>";
                    echo "<table class = addtable>";
                    echo "<tr class=losadd><th colspan = 2>Add Subject";
                    echo "<tr hidden><td>Record ID <td><input type = text name = recID value = $rec readonly>";
                    echo "<tr><td>Subject<td><input type = text name = subjectlist autocomplete=off>";
                    echo "<tr><td class=submit colspan=2><input type=submit  value = 'Create' name = cmd></td>";
                    echo "</form>";
                  }
                } else {
                  echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
                }
              }

              // Block of codes for Insert Command
//
              if ($cmd == 'Insert') {

                echo "<form action=subjecttable.php method = post>";
                echo "<table class = addtable>";
                echo "<tr class=losadd><th colspan = 2>Add Subject";
                echo "<tr hidden><td>Record ID <td><input type = text name = recID value = $rec readonly>";
                echo "<tr><td>Subject<td><input type = text name = subjectlist autocomplete=off>";
                echo "<tr><td class=cancel><input type=submit  value = 'Cancel' name = cmd></td>";
                echo "<td class=submit><input type=submit  value = 'Create' name = cmd></td>";
                echo "</form>";
              }



              //
// Codes to add record if user clicked the 'Create' button during Insert 
// 
            
              if ($cmd == 'Create') {
                $subjectlist = $_POST['subjectlist'];
                $sql = "SELECT * FROM subjects WHERE SubjectTitle = '$subjectlist'";
                $result = mysqli_query($mysqli, $sql);
                if (mysqli_num_rows($result) == 0) {
                  // Input was not found, display an error message
                  echo "<div class = errormess>";
                  echo "<h1>Subject not found</h1>";
                  echo "<a href=subjecttable.php>Try again</a>";
                  echo "</div>";
                  die();
                } else {
                  $sql1 = "SELECT * FROM subjects INNER JOIN subjectschedules ON subjects.SubjectCode = subjectschedules.SubjectCode WHERE SubjectTitle='$subjectlist' ";
                  $result1 = mysqli_query($mysqli, $sql1);
                  $options = array();
                  $sql = "SELECT * FROM subjects WHERE SubjectTitle='$subjectlist'";
                  $result = mysqli_query($mysqli, $sql);
                  if (mysqli_num_rows($result) === 1) {
                    $row = mysqli_fetch_assoc($result);
                    if ($row['SubjectTitle'] === $subjectlist) {
                      $_SESSION['SubjectCode'] = $row['SubjectCode'];
                      $_SESSION['LecLabUnits'] = $row['LecLabUnits'];
                      $_SESSION['TotalUnits'] = $row['TotalUnits'];

                    }
                  }

                  if ($subjectlist == "Discrete Mathematics") {
                    while ($row1 = $result1->fetch_assoc()) {
                      $options[] = $row1['SubjectTitle'] . " " . $row1['Schedule'];
                    }


                  } else if ($subjectlist == "Database System 2 - Lec") {
                    while ($row1 = $result1->fetch_assoc()) {
                      $options[] = $row1['SubjectTitle'] . " " . $row1['Schedule'];
                    }
                  } else if ($subjectlist == "Database System 2 - Lab") {
                    while ($row1 = $result1->fetch_assoc()) {
                      $options[] = $row1['SubjectTitle'] . " " . $row1['Schedule'];
                    }
                  } else if ($subjectlist == "System Integration and Architecture - Lec") {
                    while ($row1 = $result1->fetch_assoc()) {
                      $options[] = $row1['SubjectTitle'] . " " . $row1['Schedule'];
                    }
                  } else if ($subjectlist == "System Integration and Architecture - Lab") {
                    while ($row1 = $result1->fetch_assoc()) {
                      $options[] = $row1['SubjectTitle'] . " " . $row1['Schedule'];
                    }
                  } else if ($subjectlist == "Advanced Game Design - Lec") {
                    while ($row1 = $result1->fetch_assoc()) {
                      $options[] = $row1['SubjectTitle'] . " " . $row1['Schedule'];
                    }
                  } else if ($subjectlist == "Advanced Game Design - Lab") {
                    while ($row1 = $result1->fetch_assoc()) {
                      $options[] = $row1['SubjectTitle'] . " " . $row1['Schedule'];
                    }
                  } else if ($subjectlist == "Computer Graphics Programming - Lec") {
                    while ($row1 = $result1->fetch_assoc()) {
                      $options[] = $row1['SubjectTitle'] . " " . $row1['Schedule'];
                    }
                  } else if ($subjectlist == "Computer Graphics Programming - Lab") {
                    while ($row1 = $result1->fetch_assoc()) {
                      $options[] = $row1['SubjectTitle'] . " " . $row1['Schedule'];
                    }
                  } else if ($subjectlist == "English for the Profession") {
                    while ($row1 = $result1->fetch_assoc()) {
                      $options[] = $row1['SubjectTitle'] . " " . $row1['Schedule'];
                    }
                  } else if ($subjectlist == "The Perpetualite: A Filipino Christian Leader") {
                    while ($row1 = $result1->fetch_assoc()) {
                      $options[] = $row1['SubjectTitle'] . " " . $row1['Schedule'];
                    }
                    // 1st Year IT
                  } else if ($subjectlist == "Introduction to Computing - Lec BSIT") {
                    while ($row1 = $result1->fetch_assoc()) {
                      $options[] = $row1['SubjectTitle'] . " " . $row1['Schedule'];
                    }
                  } else if ($subjectlist == "Introduction to Computing - Lab BSIT") {
                    while ($row1 = $result1->fetch_assoc()) {
                      $options[] = $row1['SubjectTitle'] . " " . $row1['Schedule'];
                    }
                  } else if ($subjectlist == "Fundamentals of Programming - Lec BSIT") {
                    while ($row1 = $result1->fetch_assoc()) {
                      $options[] = $row1['SubjectTitle'] . " " . $row1['Schedule'];
                    }
                  } else if ($subjectlist == "Fundamentals of Programming - Lab BSIT") {
                    while ($row1 = $result1->fetch_assoc()) {
                      $options[] = $row1['SubjectTitle'] . " " . $row1['Schedule'];
                    }
                  } else if ($subjectlist == "Information Assurance and Security") {
                    while ($row1 = $result1->fetch_assoc()) {
                      $options[] = $row1['SubjectTitle'] . " " . $row1['Schedule'];
                    }
                  } else if ($subjectlist == "Science, Technology, and Society 1") {
                    while ($row1 = $result1->fetch_assoc()) {
                      $options[] = $row1['SubjectTitle'] . " " . $row1['Schedule'];
                    }
                  } else if ($subjectlist == "Entrepreneurial Mind 1") {
                    while ($row1 = $result1->fetch_assoc()) {
                      $options[] = $row1['SubjectTitle'] . " " . $row1['Schedule'];
                    }
                  } else if ($subjectlist == "National Service Training Program 1 BSIT") {
                    while ($row1 = $result1->fetch_assoc()) {
                      $options[] = $row1['SubjectTitle'] . " " . $row1['Schedule'];
                    }
                  } else if ($subjectlist == "Physical Activities Toward Health and Fitness 1 BSIT") {
                    while ($row1 = $result1->fetch_assoc()) {
                      $options[] = $row1['SubjectTitle'] . " " . $row1['Schedule'];
                    }
                  } else if ($subjectlist == "Discrete Structure 1") {
                    while ($row1 = $result1->fetch_assoc()) {
                      $options[] = $row1['SubjectTitle'] . " " . $row1['Schedule'];
                    }
                  } else if ($subjectlist == "Introduction to Computing - Lec BSCS") {
                    while ($row1 = $result1->fetch_assoc()) {
                      $options[] = $row1['SubjectTitle'] . " " . $row1['Schedule'];
                    }
                  } else if ($subjectlist == "Introduction to Computing - Lab BSCS") {
                    while ($row1 = $result1->fetch_assoc()) {
                      $options[] = $row1['SubjectTitle'] . " " . $row1['Schedule'];
                    }
                  } else if ($subjectlist == "Fundamentals of Programming - Lec BSCS") {
                    while ($row1 = $result1->fetch_assoc()) {
                      $options[] = $row1['SubjectTitle'] . " " . $row1['Schedule'];
                    }
                  } else if ($subjectlist == "Fundamentals of Programming - Lab BSCS") {
                    while ($row1 = $result1->fetch_assoc()) {
                      $options[] = $row1['SubjectTitle'] . " " . $row1['Schedule'];
                    }
                  } else if ($subjectlist == "The Perpetualite: Identity and Dignity") {
                    while ($row1 = $result1->fetch_assoc()) {
                      $options[] = $row1['SubjectTitle'] . " " . $row1['Schedule'];
                    }
                  } else if ($subjectlist == "Science, Technology, and Society2") {
                    while ($row1 = $result1->fetch_assoc()) {
                      $options[] = $row1['SubjectTitle'] . " " . $row1['Schedule'];
                    }
                  } else if ($subjectlist == "Entrepreneurial Mind 2") {
                    while ($row1 = $result1->fetch_assoc()) {
                      $options[] = $row1['SubjectTitle'] . " " . $row1['Schedule'];
                    }
                  } else if ($subjectlist == "National Service Training Program 1 BSCS") {
                    while ($row1 = $result1->fetch_assoc()) {
                      $options[] = $row1['SubjectTitle'] . " " . $row1['Schedule'];
                    }
                  } else if ($subjectlist == "Physical Activities Toward Health and Fitness 1 BSCS") {
                    while ($row1 = $result1->fetch_assoc()) {
                      $options[] = $row1['SubjectTitle'] . " " . $row1['Schedule'];
                    }
                  }
                }
                ?>
  <?php foreach ($options as $option) {
        ?>
  <div class="checkbox">
  <form action=process.php method = post>
  <!-- Checkbox 1 -->
  <input type="checkbox" name="checkbox1" value="<?php echo $option ?>"> <?php echo $option ?><br>
  <?php } ?>
  <!-- Submit button -->
  <input type="submit" value="Add to List">
</form>
</div>

<?php



              }

              //==========================================================
// Codes for Delete Command
//
              if ($cmd == 'Delete') {
                $sql = "Select * from subjectlist where id = '$rec'";
                $result = mysqli_query($mysqli, $sql);
                if ($result) {
                  $sql = "Select * from subjectlist where id = '$rec'";
                  $result = mysqli_query($mysqli, $sql);
                  if ($result) {


                    $row = mysqli_fetch_array($result);
                    $subjectlist = $row["SubjectTitle"];
                    $subjectcode = $row["SubjectCode"];
                    $leclabunits = $row["LecLabUnits"];
                    $totalunits = $row["TotalUnits"];
                    echo "<div class = listdel>";
                    echo "<form action=subjecttable.php method = post>";
                    echo "<table class=del>";
                    echo "<tr class=losdel><th colspan = 2>Delete this Subject";
                    echo "<tr hidden><td>Record ID <td><input type = text name = recID value = '$rec' readonly>";
                    echo "<tr><td>Subject<td><input type = text name = subjectlist value='$subjectlist' readonly>";
                    echo "<tr><td>Subject Code<td><input type = text name = subjectcode value = '$subjectcode' readonly>";
                    echo "<tr><td class=cancel><input type=submit  value = 'Cancel' name = cmd>";
                    echo "<td class=submit><input type=submit  value = 'Confirm' name = cmd>";
                    echo "</form>";
                    echo "</div>";

                  }
                }
              }
              //
// Codes to delete record if  user clicked  'Yes' button
//
              if ($cmd == 'Confirm') {
                $sql = "Delete from subjectlist where id = '$rec'";
                $result = mysqli_query($mysqli, $sql);
                if ($result)
                  echo "<div class = list>";
                echo "<form action=subjecttable.php method = post>";
                echo "<table class=dell>";
                echo "<tr><td align = center><h2>Subject successfully Deleted from your list</h2>";
                echo "<tr><th><input type = submit value = 'Click here to display your subject list'></form>";
                echo "</div>";
                mysqli_close($mysqli);
              }
            }
?>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>