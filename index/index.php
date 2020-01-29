<?php
    
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "test_db";

    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    if ($conn->connect_error) {
        die("connection Failed");
    }

    echo "<font size=5 color=green><center><b>PHP Tutorials Welcomes You !!! </font><hr color=green><font size=3, color=blue>Connected Successfully </b></center></font><hr color=green>";


// ZVAL Container

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
 echo "<font color=green><b><u>Functions of the predefined class mysqli</u></b></font><br><br>";

	$methods = get_class_methods($conn);

	foreach ($methods as $value) {

	echo "<font color=red>$value </font><br>";

	}




?>