<?php

// taking the data entered by user for analysis
$genre = $_POST['genre']; 
$contenttype = $_POST['contenttype'];
$wordlimit = $_POST['wordlimit'];
$timelimit = $_POST['timelimit'];

//priority is given to time
if($timelimit!=0){
    $wordlimit = $timelimit*100;    //considering the average 100words/min
}

//to get max choices we can, we are changing the limit user entered
$minwordlimit = $wordlimit-300;     
$maxwordlimit = $wordlimit+300;

// database connection
include '../include_pages/database_connection.php';

// we will make sql queries according to the data user provided

// !! everything is 0, no choices/filter mentioned
if($contenttype==0 && $genre==0 && $wordlimit==0){
    $sql="SELECT `upload_id`, `upload_title`, `upload_abstract`, `upload_content` FROM `upload`WHERE `status`=1";
}
//only wordlimit known
else if($genre==0 && $contenttype==0){   
    $sql="SELECT `upload_id`, `upload_title`, `upload_abstract`, `upload_content` FROM `upload` WHERE `status`=1 AND `upload_length` BETWEEN $minwordlimit AND $maxwordlimit";
}
//considering cases when wordlimit is unknown
else if($wordlimit==0){
    if($contenttype==0 && $genre!=0){
        $sql="SELECT `upload_id`, `upload_title`, `upload_abstract`, `upload_content` FROM `upload` WHERE `genre_id`=$genre AND `status`=1";
    }
    else if($genre==0 && $contenttype!=0){
        $sql="SELECT `upload_id`, `upload_title`, `upload_abstract`, `upload_content` FROM `upload` WHERE `type_id`=$contenttype AND `status`=1";
    }
    else if($genre!=0 && $contenttype!=0){
        $sql="SELECT `upload_id`, `upload_title`, `upload_abstract`, `upload_content` FROM `upload` WHERE `genre_id`=$genre AND `type_id`=$contenttype AND `status`=1";
    }
}
// wordlimit and content type known
else if($genre==0 && $contenttype!=0){     
    $sql="SELECT `upload_id`, `upload_title`, `upload_abstract`, `upload_content` FROM `upload` WHERE `type_id`=$contenttype AND `status`=1 AND `upload_length` BETWEEN $minwordlimit AND $maxwordlimit";
}
// wordlimit and genre known
else if($contenttype==0 && $genre!=0){   
    $sql="SELECT `upload_id`, `upload_title`, `upload_abstract`, `upload_content` FROM `upload` WHERE `genre_id`=$genre AND `status`=1 AND `upload_length` BETWEEN $minwordlimit AND $maxwordlimit ";
}
//if user used all filters 
else{
    $sql="SELECT `upload_id`, `upload_title`, `upload_abstract`, `upload_content` FROM `upload` WHERE `genre_id`=$genre AND `status`=1 AND `type_id`=$contenttype AND `upload_length` BETWEEN $minwordlimit AND $maxwordlimit";
}

$stmt = $conn->prepare($sql); 
$stmt->execute();

//if no results matched with user query then narrow filters automatically wordlimit, genre, content type

$rowcount =$stmt->rowCount();   
if($rowcount==0){
    
    if($wordlimit!=0){
        //check with combining wordlimit and genre
        if($genre!=0){
            $sql="SELECT `upload_id`, `upload_title`, `upload_abstract`, `upload_content` FROM `upload` WHERE `genre_id`=$genre AND `status`=1 AND `upload_length` BETWEEN $minwordlimit AND $maxwordlimit";
        }
        else{
            $sql="SELECT `upload_id`, `upload_title`, `upload_abstract`, `upload_content` FROM `upload` WHERE `status`=1 AND `upload_length` BETWEEN $minwordlimit AND $maxwordlimit";
        }
    }
    //check with genre
    else if($genre!=0){
        $sql="SELECT `upload_id`, `upload_title`, `upload_abstract`, `upload_content` FROM `upload` WHERE `genre_id`=$genre AND `status`=1";
    }
    // check with content type
    else if($contenttype!=0){
        $sql="SELECT `upload_id`, `upload_title`, `upload_abstract`, `upload_content` FROM `upload` WHERE `type_id`=$contenttype AND `status`=1";
    }
    // trying using OR between filters
    else {
        $sql="SELECT `upload_id`, `upload_title`, `upload_abstract`, `upload_content` FROM `upload` WHERE `genre_id`=$genre OR `type_id`=$contenttype OR `upload_length` BETWEEN $minwordlimit AND $maxwordlimit AND `status`=1";
    }
    
    $stmt = $conn->prepare($sql); 
    $stmt->execute();
    
    // after resetting filters if still we have 0 results
    $rowcount2 =$stmt->rowCount();
    if($rowcount2==0){
        $sql="SELECT `upload_id`, `upload_title`, `upload_abstract`, `upload_content` FROM `upload` WHERE `status`=1";
        $stmt = $conn->prepare($sql); 
        $stmt->execute();
    }
}