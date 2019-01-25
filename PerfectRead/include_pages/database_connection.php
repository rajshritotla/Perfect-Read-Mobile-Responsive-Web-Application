<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "perfect_read";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database_name", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    
    }
?>