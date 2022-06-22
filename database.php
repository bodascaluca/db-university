<?php 
define("DB_SERVERNAME", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "root");
define("DB_NAME", "first_db");
define("DB_PORT", 8888);

$conn = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);
var_dump($conn);

if($conn && $conn->connect_error){
    echo "DB  error". 
    $conn->connect_error;
    die();
}

?>