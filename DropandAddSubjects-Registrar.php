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
.glass_morph{
  background: rgba(255,255,255,0.35);
  -webkit-backdrop-filter: blur(8px);
  backdrop-filter: blur(8px);
  border: 1px solid rgba(255,255,255,0.175);
  margin-bottom: 70px;
  margin-right: auto;
  margin-left: auto;
  text-align: center;
  border-radius:10px;
}
.searchbar{
  width: 40%; 
  box-sizing: border-box; 
  padding: 12px 20px;
  border: 2px solid #ccc;
  border-radius: 4px;
}
.tbl{
  margin-left:auto;
  margin-right:auto;
  width:700px;
  border:1px solid black;
  border-radius:5px;
  background-color:lightblue;
}
.tbl th{
  width:200px;
  border:1px solid black;
  border-radius:5px;
}
.tbl td{
  border:1px solid black;
  text-align:center;
  border-radius:5px;
}
.tbl a{
  text-decoration: none;
}
.alb{
  width: 200px;
	height: 200px;
	padding:28px;
  margin-left:auto;
  margin-right:auto;
  cursor:pointer;
}
.alb img{
  width: 100%;
  height: 100%;
  border-radius:10px;
}
.del{
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
.sear{
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
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
    text-align: center;
    font-size: 23px;
    min-width: 100%;
      }
      .list table, tr, td, th{
        border: 1px solid #f5cb67;
        color: #f5cb67;
        background-color: #101820;
        text-align:center;
        
      }
      .list th {
        padding: 10px 15px;

      }
      table {
        margin-top: 15px;
        margin-right: 50px;
        margin-left:auto;
        margin-right:auto;
        text-align:center;
        
      }
      td {
        padding: 20px 20px;
        color: whitesmoke;
      }
      .list th {
        font-size: 30px;
      }
      .error {
	background: lightgreen;
	color: green;
	padding: 5px;
	text-align: center;
	border-radius: 5px;
    width:200px;
    margin-left:auto;
    margin-right:auto;
 }

</style>

    </head>
    <body>
        <!-- Search Bar -->
        <div class= "glass_morph" style = "width:1000px;">
            <form action="DropandAddSubjects-Registrar.php" method = "POST">
        <h1>Drop Subjects</h1>
        <?php if (isset($_GET['error'])) { ?>
        <p class=error><?php echo $_GET['error'];}?></p>
            <input type="text" class="searchbar" id="studid" name="studid"  placeholder ="SEARCH STUDENT ID">
            <input type="submit" value="Search" class="sear">
        </form>
            <?php 
            //Search Function
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $studid = $_POST['studid'];
                $sql1 = "SELECT * FROM applicationform where stud_id=$studid";
                $result1 = mysqli_query($mysqli, $sql1);
                if ($result1->num_rows > 0) {
                    while ($row1 = $result1->fetch_assoc()) {
                        echo "<table>";
                        echo "<tr><th>Name</th></tr>";
                        echo "<td>" . $row1['fName'] . " " . $row1['lName'] . "</td>";
                    }
                } ?>
<?php
        $sql = "SELECT * FROM subjectlist where stud_id ='$studid'";
        $result = mysqli_query($mysqli, $sql);
        echo "<div class = list>";
        echo "<table>";
        echo "<tr><th></th><th>Subject</th><th>Subject Code</th></th><th>Lec/Lab Units</th></th><th>Total Unit</th></tr>";

        // Print the data for each row
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            echo "<tr>";
            echo "<td><a href = removesubject-registrar.php?id=$id>Remove</a></td>";
            echo "<td>" . $row['SubjectTitle'] . "</td>";
            echo "<td>" . $row['SubjectCode'] . "</td>";
            echo "<td>" . $row['LecLabUnits'] . "</td>";
            echo "<td>" . $row['TotalUnits'] . "</td>";
            echo "</tr>";
            echo "</div>";
        }

        echo "</table>";
            }
?>


        </div>
    </body>
</html>
