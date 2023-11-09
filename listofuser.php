<?php
session_start(); 
include "database.php";
?>
<html>
<head>
<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");
*{
    margin: 0;
	padding: 0;
	box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body
{
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
    background: -webkit-linear-gradient(0deg, #ffffff 0%, #5b92c2 100%);
    background: linear-gradient(0deg, #ffffff 0%, #5b92c2 100%);
}
    
.list {
        border: 3px solid black;
        text-align: center;
        width: 50%;
        margin-left: 3%;
        font-size: 30px;
        margin-top: 5%;
        margin-bottom: 2%;
    }
table {
border-style:solid;
border-width:2px;
margin: auto;
font-size: 30px;
text-align: center;
margin-bottom: 30px;
}

td {
    
    padding: 5px 57px;
}

table, tr, td {
    border-collapse: collapse;
}

</style>

</head>

<body>
    <p class="list">List of Accounts</p>
<?php
$sql = "SELECT username, adminid, type, password FROM adminuser ORDER BY adminid";
$result = mysqli_query($mysqli, $sql);

if (mysqli_num_rows($result) > 0) {
  echo "<table border='1'>

  
<tr>
<th>ID</th>
<th>Username</th>
<th>Password</th>
<th>Position</th>
</tr>";
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
  echo "<td>" . $row['adminid'] . "</td>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['password'] . "</td>";
  echo "<td>" . $row['type'] . "</td>";
  echo "</tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

mysqli_close($mysqli);
?>
</body>

</html>