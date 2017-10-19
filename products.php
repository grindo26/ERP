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
	<li><a href="warehouse.php">Warehouse</a></li>
	</ul>
	
	<br>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "erpfinal";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

echo "<h1>Tentative cost</h1>";
echo "<table id=productsTable>
	<tr>
		<th>Product</th>
		<th>Selling Price</th>
		<th>Quantity</th>
		<th>Total Cost</th>
	</tr>
	</table>";

echo '<table id=productsTable>
      <tr>
      <td>Maggi(1 pack)</td>
      <td>INR 10</td>
      <td>
      <form method="POST" action="products.php">
	  <input type="number" name="qty" placeholder="Enter Quantity" min="1">
	  <input type="submit"><input type="button" onclick="myFunction()" value="Reset form">
      </form></td>';
     @ $qty=$_POST["qty"];
      $tcost=10*$qty;
echo "<td>INR $tcost</td>";

echo '<table id=productsTable>
      <tr>
      <td>Maggi(2 pack)</td>
      <td>INR 20</td>
      <td>
      <form method="POST" action="products.php">
	  <input type="number" name="qty1" placeholder="Enter Quantity" min="1">
	  <input type="submit"><input type="button" onclick="myFunction()" value="Reset form">
      </form></td>';
      @$qty1=$_POST["qty1"];
      $tcost1=20*$qty1;
echo "<td>INR $tcost1 </td>";

echo '<table id=productsTable>
      <tr>
      <td>Maggi(6 pack)</td>
      <td>INR 60</td>
      <td>
      <form method="POST" action="products.php">
	  <input type="number" name="qty2" placeholder="Enter Quantity" min="1">
	  <input type="submit"><input type="button" onclick="myFunction()" value="Reset form">
      </form></td>';
      @$qty2=$_POST["qty2"];
      $tcost2=60*$qty2;
echo "<td>INR $tcost2 </td>";

echo '<table id=productsTable>
      <tr>
      <td>Milky Bar</td>
      <td>INR 20</td>
      <td>
      <form method="POST" action="products.php" id="myForm">
	  <input type="number" name="qty3" placeholder="Enter Quantity" min="1">
	  <input type="submit"><input type="button" onclick="myFunction()" value="Reset form">
      </form></td>';
     @ $qty3=$_POST["qty3"];
      $tcost3=20*$qty3;
echo "<td>INR $tcost3</td>";

echo '<table id=productsTable>
      <tr>
      <td>Dairy Creamer</td>
      <td>INR 40</td>
      <td>
      <form method="POST" action="products.php">
	  <input type="number" name="qty4" placeholder="Enter Quantity" min="1">
	  <input type="submit"><input type="button" onclick="myFunction()" value="Reset form">
      </form></td>';
     @ $qty4=$_POST["qty4"];
      $tcost4=40*$qty4;
echo "<td>INR $tcost4 </td>";

     
?>
<script>
      function myFunction() {
    document.getElementById("myForm").reset();
}
</script>
</body>
</html>