<?php
$servername = "dbserver";
$database = "test_db";
$username = "test_user";
$password = "pcZ2LjjG";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} 
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>