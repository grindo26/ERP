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
$Description=$_POST["desc"];
$Quantity=$_POST["qty"];
$SellingPrice=$_POST["sp"];


echo "$Name";
echo "$Quantity";
echo "$Description";
echo "$SellingPrice";

$sql="Insert into mproducts(name,description,quantity,sp) values('$Name','$Description',$Quantity,$SellingPrice)";
//$result = mysqli_query($conn, $sql);
$result = $conn->query($sql); 

if (!$result)
{
	echo $conn->error;
}
header("location: mwarehouse.php");




?>


                                                        
                                               
                                                            
                                                            

