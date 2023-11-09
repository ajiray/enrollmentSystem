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
</style>
    </head>
    <body>
        <!-- Search Bar -->
        <div class= "glass_morph" style = "width: 800px;">
            <form action="Admission-Requirements.php" method = "POST">
        <h1>Students Uploaded Requirements</h1>
            <input type="text" class="searchbar" id="studid" name="studid"  placeholder ="SEARCH STUDENT ID">
            <input type="submit" value="Search" class="sear">
        </form>
            <?php 
            //Search Function
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $studid = $_POST['studid'];
                $sql = "SELECT * FROM applicationform INNER JOIN temp_images ON applicationform.stud_id = temp_images.stud_id WHERE applicationform.stud_id=$studid";
                $result = mysqli_query($mysqli, $sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) { ?>
                    <form method ="POST">
                        <!-- Print The Results -->
                        <table class="tbl" cellpadding=5 cellspacing=5>
                            <tr>
                                <th>Name</th>
                                <th>Uploaded Documents</th>
                            </tr>
                            <tr> 
                                <td class="tdd"><?php echo $row['fName'] . " " . $row['lName'] ?></td>
                                <td class="tdd"><div class="alb"><img src="uploads/<?= $row['images'] ?>" onclick="window.open('uploads/<?= $row['images'] ?>', '_blank', 'width=800,height=600');"><br>
                                <?php echo strtoupper($row['DocumentName']) ?></div></td>
                                <input type ="hidden" name = "stuid" id = "stuid" value = "<?php echo $row['id']?> ">
                                <td><input type="submit" name = "delete" value = "Delete" class="del"></td>
                            </tr>
                        </table>
                    
                        </form>
<?php  }
}
else {
    $em = "No Results Found!";
    echo $em;
     } }?>
<?php 
//Delete Function
    if(isset($_POST['delete'])){
        $id = $_POST['stuid'];
        $sql = "DELETE FROM temp_images where id = $id";
        if (mysqli_query($mysqli, $sql)) {
            echo "Deleted Successfully";
            header("Location:Admission-Requirements.php");
                } else {
            $em = " Cannot Process Deletion";
            header("Location: Admission-Requirements.php?error=$em");
                }
                }?>
        </div>
    </body>
</html>
