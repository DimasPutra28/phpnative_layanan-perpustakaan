<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "library";

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}   

// session_start();
// if(!isset($_SESSION["user"])) header("Location: login.php");