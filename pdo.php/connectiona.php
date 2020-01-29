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

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="This is description for your side looks in brouser">
	<meta name="keywords" content="how to derive formula, class-10 mathematics, class-12 mathematics, formula of(a+b)3">
	<meta name="author" content="Sandeep Kumar Dubey">
	<title>About Meta Tags</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="refresh" content="5">
	<title>The Single Tooth</title>
	<link rel="stylesheet" href="">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-sm-4">			
			<form action="" method="POST">
				<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" class="form-control" id="name">
				</div>
				<div class="form-group">
					<lable for="roll">Roll</lable>
					<input type="text" name="roll" class="form-control" id="roll">
				</div>
				<div class="form-group">
					<lable for="address">Adress</lable>
					<input type="text" name="address" class="form-control" id="address">
				</div>
				<button type="submit" class="btn btn-primary" name="submit">submit</button>
			</form>
			</div>		
		</div>
	</div>	
</body>
</html>