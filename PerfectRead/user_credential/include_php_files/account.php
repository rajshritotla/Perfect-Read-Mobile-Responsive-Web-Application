<?php
$user_id = $_SESSION['user_id'];
    
    // we are reading how much uploads have been done by the user
    include '../include_pages/database_connection.php';
    $sql="SELECT COUNT(`user_id`) FROM `upload` WHERE `user_id`=$user_id";
    $stmt = $conn->prepare($sql); 
    $stmt->execute();
    foreach ($stmt as $row){
        $upload_count = $row['COUNT(`user_id`)'];
    }