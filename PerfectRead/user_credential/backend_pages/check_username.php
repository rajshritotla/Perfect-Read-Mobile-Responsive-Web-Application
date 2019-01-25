<?php

$uname = $_REQUEST["q"];
$available_response="true";
if ($uname !== "") {
    $uname = strtolower($uname);
    $len=strlen($uname);
    
    //retrieving username from db  
    include '../../include_pages/database_connection.php';

    $sql="SELECT `user_name` FROM `user` WHERE 1";
    $stmt = $conn->prepare($sql); 
    $stmt->execute();
    foreach ($stmt as $row){
        if($row['user_name']==$uname){
            $available_response="false";        //user name exists
            echo $available_response;
            return;
        }
        
    }    
    $stmt->closeCursor();
    echo $available_response;
    
}
