<?php
$host = "localhost";
$db_name = "signup";
$username = "aubgolympics";
$password = "aubgolympics";
 
try {
    $con = new PDO("mysql:host={$host};dbname={$db_name};charset=utf8", $username, $password);
}
 
//to handle connection error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>