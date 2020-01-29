<?php

$dsn = "mysql:host=localhost; dbname=test_db;";
$db_user = "root";
$db_password = "";

try{
	//Create Connection
	$conn = new PDO($dsn, $db_user, $db_password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connected"; //this will be deleted at the time of programme handover to your clint;
}
catch(PDOException $e){
	echo "Connection Failed" .$e->getMessage();	//this will also be deleted at the time of programme handover to your clint;
} 

echo "<pre><font size=4, color=green>";
var_dump($conn);
echo "</font></pre>";

// To know class name
//==================================================================================================================
	echo "<font color=orange>To Know The class name<br>";

	echo get_class($conn);

//==================================================================================================================
 echo "<font color=blue><pre>";
 print_r($conn);
 echo "</pre><br>";


 //==================================================================================================================
 echo "<font color=green><b><u>Functions of the predefined class PDO</u></b></font><br><br>";

	$methods = get_class_methods($conn);

	foreach ($methods as $value) {

	echo "<font color=red>$value </font><br>";

	}

	

?>