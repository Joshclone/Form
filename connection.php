<?php 
$host = "localhost";
$user = "root";
$password = "";
$database_name = "josh";

try {
    $connection = new PDO("mysql:host=$host;dbname=$database_name", $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>