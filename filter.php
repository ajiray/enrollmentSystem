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

    /* first div */
      .filter {
        max-width: 600px;
        font-size: 20px; 
        margin-left: 15px;
        padding: 30px;
        margin-top: 15px;
        color: #101820;
        border-radius: 20px;
      }
      input[type="checkbox"] {
        margin-top: 15px;
      }

      .filhead {
        text-align: center;
      }
      .search {
        background-color: #101820;
        padding: 5px 78px;
        border-radius: 10px;
        color: #f5cb67;
        text-align: center;
        font-weight: 600;
      }
      .search:hover {
        opacity: 80%;
      }

    /* Second div */
    .middle h6{
        font-size: 20px;
        border: 1px solid #f5cb67;
        padding: 10px;
        text-align: center;
        color: #f5cb67;
        margin: 20px auto;
        max-width: 450px;
      }
      .middle {
        margin-top: 15px;
        padding: 30px;
        min-width: 520px;
        border: 1px solid #101820;
        border-radius: 20px;
        background-color: #101820;
        
      }

      h2 {
        color: #f5cb67;
        margin-left: 15px;
        font-size: 25px;
      }

    </style>
    
</head>
<body>
    
  
<div id="container">
            <div class="filter">
                <form action="" method="GET">
                    <div>
                        <div class="filhead">
                            <h5>Filter <br>
                                
                            </h5>
                        </div>
                        <div>
                            <h6>Subject List of Every Program</h6>
                            <hr>
                            <button type="submit" class="search">Search</button>
                            <?php
                                $subject_query = "SELECT * FROM program";
                                $subject_query_run  = mysqli_query($mysqli, $subject_query);

                                if(mysqli_num_rows($subject_query_run) > 0)
                                {
                                    foreach($subject_query_run as $sublist)
                                    {
                                        $checked = [];
                                        if(isset($_GET['subject']))
                                        {
                                            $checked = $_GET['subject'];
                                        }
                                        ?>
                                            <div>
                                                <input type="checkbox" name="subject[]" value="<?= $sublist['id']; ?>" 
                                                
                                                    <?php if(in_array($sublist['id'], $checked)){ echo "checked"; } ?>
                                                 />
                                                <?= $sublist['name']; ?>
                                                
                                            </div>
                                            
                                        <?php
                                    }
                                } 
                                else
                                {
                                    echo "No subject Found";
                                }
                            ?>
                        </div>
                    </div>
                </form>
            </div>

      
            <div class="middle">
              
                        <?php
                            if(isset($_GET['subject']))
                            {
                                $branchecked = [];
                                $branchecked = $_GET['subject'];
                                foreach($branchecked as $rowbrand)
                                {
                                  
                                    $products = "SELECT * FROM subjects WHERE sub_id IN ($rowbrand)";
                                    $products_run = mysqli_query($mysqli, $products);
                                    if(mysqli_num_rows($products_run) > 0)
                                    {
                                        foreach($products_run as $subitems) :
                                            ?>                                           
                                            <h6><?php echo $subitems["SubjectTitle"]; ?></h6>                                                                                                             
                                            <?php
                                        endforeach;
                                    }
                                }
                            }
                            
                                else
                                {
                                    echo "<h2>Please choose a specific Program</h2>";
                                }
                            
                        ?>
            </div>