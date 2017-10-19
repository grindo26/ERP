<!DOCTYPE html>
<html>
<head>
	<title>products</title>
	<link rel="stylesheet" type="text/css" href="layout.css">
	
</head>
<body>
<!-- nav bar -->
	<ul>
		<li><h4>NESTLE</h4></li>
	
		
	<li><a href="dashboard.php" id="item">Dashboard</a></li>
	<li><a href="products.php">Products</a></li>
	<li><a href="transfer.php">Transfer</a></li>
	<li><a href="operations.php">Operations</a></li>
	<li><a href="warehouse.php">Warehouse</a></li>
	</ul>
	
	<br>
	<!-- end of nav bar -->

<form>
	<input type="number" name="qty" placeholder="Enter Quantity">

</form>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "erpfinal";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

echo "<h1>Products in the inventory:</h1>";
echo "<table id=productsTable>
	<tr>
		<th>Product</th>
		<th>Total Quantity</th>
		<th>Selling Price</th>
	</tr>
</table>";

$result = mysqli_query($conn,"SELECT * FROM mproducts") or die(mysqli_error());
if ($result->num_rows > 0) 
{ 
 while($row =mysqli_fetch_array($result)) {
 echo "<table id=productsTable><tr><td>"
        .@$row["Name"]."</td><td>"
        .@$row["Description"]."</td><td>"
        .@$row["Quantity"]."</td><td>"
        .@$row["SelllingPrice"]."</td></tr>";
 }
  echo "</table>";
 } else {
 echo "0 results";
 }
$conn->close();
?>

</body>
</html>