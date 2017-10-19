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
//echo "Connected successfully";
$Name=$_POST["pname"];
$qty=$_POST["qty"];
$to=$_POST["to"];
$from=$_POST["from"];
$date=$_POST["date"];
$status=$_POST["status"];


$sql="Insert into transfers(name,qty,transfrom,transto,date,status ) 
      values
      ('$Name',$qty,'$from','$to','$date','$status')";
$result = mysqli_query($conn, $sql);
if ($result) {
 	
 	//code through which the difference in quantities will be shown
 	if ($from == 'mumbai'){
 		$getinfo= "SELECT quantity FROM mproducts WHERE name='$Name'";
 		$query = mysqli_query($conn, $getinfo);
		if(!$query){
			echo "something is wrong";
		}
		else{
			$row = mysqli_fetch_array($query);
			$quant = $row['quantity'];
			$quant= $quant-$qty;
			$update = "UPDATE mproducts SET quantity=$quant WHERE name='$Name'";
			if ($conn->query($update) === TRUE) {
    			echo "Record updated successfully";
			} else {
    			echo "Error updating record: " . $conn->error;
			}
		}	
	}
	else if ($from == 'bangalore'){
 		$getinfo= "SELECT quantity FROM bproducts WHERE name='$Name'";
 		$query = mysqli_query($conn, $getinfo);
		if(!$query){
			echo "something is wrong";
		}
		else{
			$row = mysqli_fetch_array($query);
			$quant = $row['quantity'];
			$quant= $quant-$qty;
			$update = "UPDATE bproducts SET quantity=$quant WHERE name='$Name'";
			if ($conn->query($update) === TRUE) {
    			echo "Record updated successfully";
			} else {
    			echo "Error updating record: " . $conn->error;
			}
		}	
	}
	else if ($from == 'delhi'){
 		$getinfo= "SELECT quantity FROM dproducts WHERE name='$Name'";
 		$query = mysqli_query($conn, $getinfo);
		if(!$query){
			echo "something is wrong";
		}
		else{
			$row = mysqli_fetch_array($query);
			$quant = $row['quantity'];
			$quant= $quant-$qty;
			$update = "UPDATE dproducts SET quantity=$quant WHERE name='$Name'";
			if ($conn->query($update) === TRUE) {
    			echo "Record updated successfully";
			} else {
    			echo "Error updating record: " . $conn->error;
			}
		}	
	}
}
header("location: transfer.php");		
?>


                                                        
                                               
                                                            
                                                            

