<?php

$login_user_name = $_REQUEST["un"];
$login_password = $_REQUEST["pa"];
$validity = "no such user";

include '../../include_pages/database_connection.php';

$sql="SELECT `user_id`, `user_name`, `password` FROM `user` WHERE 1";
$stmt = $conn->prepare($sql); 
$stmt->execute();
foreach ($stmt as $row){
    
    if($row['user_name']==$login_user_name && $row['password']===$login_password){
        $validity="valid";        //user exists
        
        session_start();
        $_SESSION['user_id'] = $row['user_id'];
        echo $validity;
        return;
    }

}    
$stmt->closeCursor();

//echo 'valid';
//header("location:register.php");