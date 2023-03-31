<?php 
$host = "localhost";
$database = "coffeeshop";
$user = "root";
$password = "root";
try {
    $connect = new PDO("mysql:host=$host;dbname=$database;charset=utf8mb4", $user,$password);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());

}