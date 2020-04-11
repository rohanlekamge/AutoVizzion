<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "w1715777_dbms";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully.";

$deviceCatalogName=$_POST['w1715777_deviceCatalogName'];
$deviceDescription=$_POST['w1715777_deviceDescrip'];
$availabilityStatus=$_POST['w1715777_availabilityStatus'];
$lensSerialNumber=$_POST['w1715777_lensSerialNb'];
$lensVisionType=$_POST['w1715777_lensVisionType'];
$lensTint=$_POST['w1715777_lensTint'];
$lensThinnessLevel=$_POST['w1715777_lensThinnessLevel'];
$frameBrand=$_POST['w1715777_frBrand'];
$frameModel=$_POST['w1715777_frModel'];

$SQL = "INSERT INTO w1715777_device (w1715777_deviceCatalogName, w1715777_deviceDescrip, w1715777_availabilityStatus) VALUES 
	('$deviceCatalogName', '$deviceDescription', '$availabilityStatus');"; //Creating SQL
$SQL .= "INSERT INTO w1715777_VisualDeviceLensFrame (w1715777_lensSerialNb, w1715777_lensVisionType, w1715777_lensTint, w1715777_lensThinnessLevel) VALUES 
	('$lensSerialNumber', '$lensVisionType', '$lensTint', '$lensThinnessLevel');";  //Creating SQL
$SQL .= "INSERT INTO w1715777_VisualDeviceLensFrame (w1715777_frBrand, w1715777_frModel) VALUES 
	('$frameBrand', '$frameModel');";  //Creating SQL


if(mysqli_multi_query($conn,$SQL)){
	echo " New record created successfully";
} else {
	echo "Error: Could not able to execute $SQL. " . mysql_error($conn);
}

?>