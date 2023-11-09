<?php
session_start();
include "database.php";
     
if(isset($_SESSION['stud_id'])){
        $studid = $_SESSION['stud_id'];

        $sql = "SELECT * FROM applicationform where stud_id = '$studid'";
        $result = mysqli_query($mysqli, $sql);

        if(mysqli_num_rows($result)>0)
        {
            foreach($result as $row)
            {
            
                    }
                }
            }
?>
<?php
        //INFORMATION TECHNOLOGY
    if($row['course']==="IT" && $row['year']==="1st"){
        $sql = "SELECT * FROM 1st_year_bs_it order by SubjectCode ASC";
        $result1 = $mysqli->query($sql);
        $mysqli->close();
    }
    else if($row['course']==="IT" && $row['year']==="2nd"){
        $sql = "SELECT * FROM 2nd_year_bs_it order by SubjectCode ASC";
        $result1 = $mysqli->query($sql);
        $mysqli->close();
    }
    else if($row['course']==="IT" && $row['year']==="3rd"){
        $sql = "SELECT * FROM 3rd_year_bs_it order by SubjectCode ASC";
        $result1 = $mysqli->query($sql);
        $mysqli->close();
    }
    else if($row['course']==="IT" && $row['year']==="4th"){
        $sql = "SELECT * FROM 4th_year_bs_it order by SubjectCode ASC";
        $result1 = $mysqli->query($sql);
        $mysqli->close();
    }
        //COMPUTER SCIENCE
    else if($row['course']==="CS" && $row['year']==="1st"){
        $sql = "SELECT * FROM 1st_year_bs_cs order by SubjectCode ASC";
        $result1 = $mysqli->query($sql);
        $mysqli->close();
        }
    else if($row['course']==="CS" && $row['year']==="2nd"){
        $sql = "SELECT * FROM 2nd_year_bs_cs order by SubjectCode ASC";
        $result1 = $mysqli->query($sql);
        $mysqli->close();
            }
    else if($row['course']==="CS" && $row['year']==="3rd"){
        $sql = "SELECT * FROM 3rd_year_bs_cs order by SubjectCode ASC";
        $result1 = $mysqli->query($sql);
        $mysqli->close();
                }
    else if($row['course']==="CS" && $row['year']==="4th"){
        $sql = "SELECT * FROM 4th_year_bs_cs order by SubjectCode ASC";
        $result1 = $mysqli->query($sql);
        $mysqli->close();
                }
        //TOURISM
    else if($row['course']==="Tourism" && $row['year']==="1st"){
        $sql = "SELECT * FROM 1st_year_bs_tm order by SubjectCode ASC";
        $result1 = $mysqli->query($sql);
        $mysqli->close();
                }
    else if($row['course']==="Tourism" && $row['year']==="2nd"){
        $sql = "SELECT * FROM 2nd_year_bs_tm order by SubjectCode ASC";
        $result1 = $mysqli->query($sql);
        $mysqli->close();
                }
    else if($row['course']==="Tourism" && $row['year']==="3rd"){
        $sql = "SELECT * FROM 3rd_year_bs_tm order by SubjectCode ASC";
        $result1 = $mysqli->query($sql);
        $mysqli->close();
                }
    else if($row['course']==="Tourism" && $row['year']==="4th"){
        $sql = "SELECT * FROM 4th_year_bs_tm order by SubjectCode ASC";
        $result1 = $mysqli->query($sql);
        $mysqli->close();
                }
        //HRM
    else if($row['course']==="HRM" && $row['year']==="1st"){
        $sql = "SELECT * FROM 1st_year_bs_hm order by SubjectCode ASC";
        $result1 = $mysqli->query($sql);
        $mysqli->close();
                }
    else if($row['course']==="HRM" && $row['year']==="2nd"){
        $sql = "SELECT * FROM 2nd_year_bs_hm order by SubjectCode ASC";
        $result1 = $mysqli->query($sql);
        $mysqli->close();
                }
    else if($row['course']==="HRM" && $row['year']==="3rd"){
        $sql = "SELECT * FROM 3rd_year_bs_hm order by SubjectCode ASC";
        $result1 = $mysqli->query($sql);
        $mysqli->close();
                }   
    else if($row['course']==="HRM" && $row['year']==="4th"){
        $sql = "SELECT * FROM 4th_year_bs_hm order by SubjectCode ASC";
        $result1 = $mysqli->query($sql);
        $mysqli->close();
                }     
                


        ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href = "EnrolledSubject.css">
</head>

<body>
    
    <div class="container">

        <div class="first">
            <h1>::::SUBJECTS ENROLLED::::</h1>
        </div>

        <div class="second">
            <h1>LIST OF SUBJECTS ENROLLED FOR 1st Semester, SCHOOL YEAR 2022-2023</h1>
        </div>

        <div class="third">
            <p>CURRENT SCHOOL YEAR/SEMESTER: 2022-2023-1st Semester</p>
            <p>DATE AND TIME OFFICIALLY ENROLLED: NA</p>
            <?php
              $rows = $result1->fetch_assoc();
            ?>

            <p>MAXIMUM UNITS FOR THIS SEMESTER:<?php echo $rows['MaxUnits']; ?></p>
        </div>

        <div class="fourth">
        <section>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th style = "width: 200px;">Subject Code</th>
                <th style = "width: 800px;">Subject Title</th>
                <th style = "width: 200px;">Lec/Lab Units</th>
                <th style = "width: 200px;">Total Units</th>
            </tr>

            <?php
              while ($rows = $result1->fetch_assoc()){;
            ?>
    
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->

            
                <td style = "text-align: left;"><?php echo $rows['SubjectCode'];?></td>
                <td style = "text-align: left;"><?php echo $rows['SubjectTitle'];?></td>
                <td><?php echo $rows['LecLabUnits'];?></td>
                <td><?php echo $rows['TotalUnits'];?></td>
            </tr>
            <?php
        }
    ?>
        </table>
    </section>        
        </div>

        <div class="fifth">
            <a></a>
        </div>

        <div class = "sixth">
            <a></a>
            </div>

    </div>

</body>
</html>