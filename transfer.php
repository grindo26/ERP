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
	<!-- end of nav bar -->
<!-- Trigger/Open The Modal -->
<button id="myBtn">Create Transfer</button><br><br>
<!-- The Modal -->
<div id="myModal" class="modal">
<!-- Modal content -->
<div class="modal-content">
<span class="close">&times;</span>
<h3>Enter the Transfer details here</h3>
<form action="createTransfer.php" method="POST">
<label>PRODUCT NAME:</label><br>
<input type="text" name="pname"><br><br>


 <label>QUANTITY</label><br>
<input type="text" name="qty"><br><br>
<label>TRANSFER TO</label><br>
<input type="text" name="to"><br><br>
<label>TRANSFER FROM</label><br>
<select name="from" required>
  <option value="mumbai">Mumbai Warehouse</option>
  <option value="bangalore">Bangalore Warehouse</option>
  <option value="delhi">Delhi Warehouse</option>
  </select><br><br>
  
<label>Date of transfer</label><br>
<input type="date" name="date"><br><br>
<label>Status</label><br>
<select name="status" required>
  <option value="completed">Completed</option>
  <option value="pending">Pending</option>
  <option value="inprogress">In Progress</option>
  </select> 

<input type="submit">
</form>

</div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "erpfinal";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);


echo "<table id=productsTable>
	<tr>
		<th>Product name</th>
		<th>Quantity</th>
		<th>Transfer from</th>
		<th>Transfer to</th>
		<th>DOT</th>
		<th>Status</th>
	</tr>
</table>";
$result = mysqli_query($conn,"SELECT * FROM transfers") or die(mysqli_error());
if ($result->num_rows > 0) 
{ 
 while($row =mysqli_fetch_array($result)) {
 echo "<table id=productsTable><tr><td>"
        .@$row["name"]."</td><td>"
        .@$row["qty"]."</td><td>"
        .@$row["transfrom"]."</td><td>"
        .@$row["transto"]."</td><td>"
        .@$row["date"]."</td><td>"
        .@$row["status"]."</td></tr>";
 }
  echo "</table>";
 } else {
 echo "0 results";
 }
$conn->close();






?>

</body>
</html>