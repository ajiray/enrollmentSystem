<?php
	$db_host = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_name = "login_db";
	$link = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
	if (!$link) {
    	echo "Error: Unable to connect to MySQL." . PHP_EOL;
    	echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    	echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    	exit;
	}

      ?>


<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<style>     
            @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');

            .container{
                width:1050px;
                margin-left:auto;
                margin-right:auto;
                
            }
            body{
                background: #ffffff;
                background: -webkit-linear-gradient(0deg, #ffffff 0%, #21e6c3 100%);
                background: linear-gradient(0deg, #ffffff 0%, #21e6c3 100%);
                font-family: 'Poppins', sans-serif;
            }
            .tbl{
                border:1px solid black;

            }
            .tbl th{
                border:1px solid black;
                width:200px;
                height:50;
                text-align:center;
                padding:10px;

            }
            .tbl td{
                border:1px solid black;
                width:200px;
                text-align: center;
                height:50;
                padding:10px;
            }
            h1{
                text-align: center;
            }
            a{
                text-decoration: none ;
            }
            .butt1{
                background-color:blue;
                color: white;
                border: none;
                border-radius: 4px;
                cursor: pointer;
               padding: 10px 20px;
            }
            .butt2{
                background-color: red;
                color: white;
                border: none;
                border-radius: 4px;
                cursor: pointer;
               padding: 10px 20px;
            }
        </style>
</head>
<body>
<div class="container">
  <h1 style = "color: black">LIST OF ALL PAYMENTS</h1>

  <?php if (isset($_GET['error'])) { 
    echo $_GET['error']; 
  } 
  ?>

   <form id ="form" action ="5.5allDelete.php" method ="POST">
  <table class="tbl">
      
    <tr>
      <th style = "background-color: maroon; color: white;">Name</th>
      <th style = "background-color: maroon; color: white;">Email</th>
      <th style = "background-color: maroon; color: white;">Type</th>
      <th style = "background-color: maroon; color: white;">Amount</th>
      <th style = "background-color: maroon; color: white;">Status</th>
      <th style = "background-color: maroon; color: white;">Generate</th>
      <th style = "background-color: maroon; color: white;">Delete</th>
    </tr> 
    <?php
    $sql = "SELECT * from paymentconfirmed";
    $result = mysqli_query($link, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
    ?>
    <tr>

      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['type']; ?></td>
      <td><?php echo $row['amount']; ?></td>
      <td><?php echo $row['status']; ?></td>
      <?php echo "<td><input type=submit name = generate class =butt1 value=Generate>"; ?>
      <?php echo "<td><a class  =butt2 href=5.5allDelete.php?id='" . $row['id'] . "'>Delete</a>";?>
    </tr>
    <?php } ?>                                                                             
  </table>
</div>
</body>
</html>