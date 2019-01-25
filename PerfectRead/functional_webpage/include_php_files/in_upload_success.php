<?php
    $user_id = $_SESSION['user_id'];
    $genre = $_POST['genre']; 
    $contenttype = $_POST['contenttype'];
    $title = $_POST['uploadtitle'];
        $title = addslashes($title);
    $abstract = $_POST['abstract'];
        $abstract = addslashes($abstract);
    $content = $_POST['content'];
    $content_length = str_word_count($content);
        $content = addslashes($content);
                
    
    include '../include_pages/database_connection.php';
    
    $sql="SELECT `upload_id` FROM `upload` ORDER BY `upload_id` DESC LIMIT 1";
    $stmt = $conn->prepare($sql); 
    $stmt->execute();
    foreach ($stmt as $row){
        $upload_id = $row['upload_id'];
    }   
    $upload_id = $upload_id + 1;
    $stmt->closeCursor();

    $sql = "INSERT INTO `upload` (`upload_id`, `user_id`, `genre_id`, `type_id`, "
            . "`upload_title`, `upload_abstract`, `upload_content`, `upload_length`,"
            . " `upload_time`) VALUES "
            . "('$upload_id', '$user_id', '$genre', '$contenttype', '$title', '$abstract', '$content', '$content_length', CURRENT_TIMESTAMP)";

    $conn->query($sql);
//    $conn->close();    
    
    //updating count in type
        
        //pick previous count
    $sql= "SELECT `type_count` FROM `type` WHERE `type_id`=$contenttype";
    $stmt = $conn->prepare($sql); 
    $stmt->execute();
    foreach ($stmt as $row){
        $type_count = $row['type_count'];
    }   
    $type_count = $type_count + 1;
   
        //update new count
    $sql= "UPDATE `type` SET `type_count`=$type_count WHERE `type_id`=$contenttype";
    $stmt = $conn->prepare($sql); 
    $stmt->execute();
    $stmt->closeCursor();
    

    //updating count in type
        
        //pick previous count
    $sql= "SELECT `type_count` FROM `type` WHERE `type_id`=$contenttype";
    $stmt = $conn->prepare($sql); 
    $stmt->execute();
    foreach ($stmt as $row){
        $type_count = $row['type_count'];
    }   
    $type_count = $type_count + 1;
   
        //update new count
    $sql= "UPDATE `type` SET `type_count`=$type_count WHERE `type_id`=$contenttype";
    $stmt = $conn->prepare($sql); 
    $stmt->execute();
    $stmt->closeCursor();
    

    //updating count in genre
        
        //pick previous count
    $sql= "SELECT `genre_count` FROM `genre` WHERE `genre_id`=$genre";
    $stmt = $conn->prepare($sql); 
    $stmt->execute();
    foreach ($stmt as $row){
        $genre_count = $row['genre_count'];
    }   
    $genre_count = $genre_count + 1;
   
        //update new count
    $sql= "UPDATE `genre` SET `genre_count`=$genre_count WHERE `genre_id`=$genre";
    $stmt = $conn->prepare($sql); 
    $stmt->execute();
    $stmt->closeCursor();
    
    
?>