<style>
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
    .list {
        text-align: center;
        margin-left: 8%;
      }
      .list table {
        color: #101820;
    word-wrap: break-word;        
    overflow-wrap: break-word;     
    text-align: center;
    font-size: 23px;
    min-width: 90%;
      }
      .list table, tr, td, th{
        border: 1px solid #f5cb67;
        color: #f5cb67;
        background-color: #101820;
        
      }
      .list th {
        padding: 10px 15px;
      }
      table {
        margin-top: 15px;
        margin-right: 50px;
        position: relative;
      }
      td {
        padding: 20px 20px;
        color: whitesmoke;
      }
      .list th {
        font-size: 30px;
      }
</style>
<?php
  session_start(); 
  include "database.php";

  $studid = $_SESSION['stud_id'];
  $sql = "SELECT * FROM subjectlist where stud_id ='$studid'";
  $result = mysqli_query($mysqli, $sql);
  echo "<div class = list>";
  echo "<table>";
  echo "<tr><th>Subject</th><th>Subject Code</th></th><th>Lec/Lab Units</th></th><th>Total Unit</th></tr>";

// Print the data for each row
while($row = mysqli_fetch_assoc($result)) {


    echo "<tr>";
    echo "<td>" . $row['SubjectTitle'] . "</td>";
	echo "<td>" . $row['SubjectCode'] . "</td>";
	echo "<td>" . $row['LecLabUnits'] . "</td>";
    echo "<td>" . $row['TotalUnits'] . "</td>";
    echo "</tr>";
    echo "</div>";
}
echo "</table>";
?>
