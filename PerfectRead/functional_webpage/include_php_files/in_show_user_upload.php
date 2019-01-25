<?php
$user_id = $_SESSION['user_id'];
    
    include '../include_pages/database_connection.php';
    $sql="SELECT `upload_id`, `upload_title`, `upload_abstract`, `upload_content` FROM `upload` WHERE `user_id` = $user_id AND `status` = 1";
    $stmt = $conn->prepare($sql); 
    $stmt->execute();
    ?>