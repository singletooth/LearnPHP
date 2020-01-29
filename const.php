<?php
    
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "test_db";

    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    if ($conn->connect_error) {
        die("connection Failed");
    }

    echo "Connected Successfully <hr>";


// ZVAL Container

echo "<pre>";
var_dump($conn);
echo "</pre>";


// echo "<pre>";
// print_r($conn);

?>