<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="layout.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<!-- nav bar -->
<ul>
	<li><h4>NESTLE</h4></li>

	
<li><a href="#dashboard" id="item">Dashboard</a></li>
<li><a href="products.php">Products</a></li>
<li><a href="transfer.php">Transfer</a></li>
<li><a href="warehouse.php">Warehouse</a></li>
</ul>

<br><br><br>
<!-- end of nav bar -->



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "erpfinal";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 



echo '<i class="fa fa-times-rectangle-o" style="font-size:48px;color:red"></i><br>';
$result = mysqli_query($conn,"SELECT name,transto FROM transfers where status='pending'");
$num_rows = mysqli_num_rows($result);
echo "$num_rows transfers are pending\n<br><br>";

echo'<i class="fa fa-check-square-o" style="font-size:48px;color:green"></i><br>';

$result = mysqli_query($conn,"SELECT name,transto FROM transfers where status='completed'");
$num_rows = mysqli_num_rows($result);
echo "$num_rows transfers have been completed\n<br><br>";

echo '<i class="fa fa-truck" style="font-size:48px;color:blue"></i>
<br>';
$result = mysqli_query($conn,"SELECT name,transto FROM transfers where status='inprogress'");
$num_rows = mysqli_num_rows($result);
echo "$num_rows transfers are in progress\n<br><br>";

?>


</body>
</html>