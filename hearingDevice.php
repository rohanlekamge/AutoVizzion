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
echo " Connected successfully. ";

$deviceCatalogName=$_POST['w1715777_deviceCatalogName'];
$deviceDescription=$_POST['w1715777_deviceDescrip'];
$availabilityStatus=$_POST['w1715777_availabilityStatus'];
$hearingDeviceMake=$_POST['w1715777_hdMake'];
$hearingDeviceModel=$_POST['w1715777_hdModel'];

$SQL = "INSERT INTO w1715777_device (w1715777_deviceCatalogName, w1715777_deviceDescrip, w1715777_availabilityStatus) VALUES 
	('$deviceCatalogName', '$deviceDescription', '$availabilityStatus');"; //Creating SQL
$SQL .= "INSERT INTO w1715777_HearingDevice (w1715777_hdMake, w1715777_hdModel) VALUES 
	('$hearingDeviceMake', '$hearingDeviceModel');";  //Creating SQL

if(mysqli_multi_query($conn,$SQL)){
	echo " New record created successfully";
} else {
	echo "Error: Could not able to execute $SQL. " . mysql_error($conn);
}

?>