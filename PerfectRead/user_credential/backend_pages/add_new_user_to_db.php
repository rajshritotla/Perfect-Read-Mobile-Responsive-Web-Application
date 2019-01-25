<?php   
    session_start();

//add error system in case data not added to db

    $user_name = $_POST['name'];
    $password = $_POST['password'];
    $email =  $_POST['email'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $birth_date = $_POST['birth_date'];
    $birth_month = $_POST['birth_month'];
    $birth_year = $_POST['birth_year'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state '];
    $country = $_POST['country'];
    $zipcode = $_POST['zipcode'];
    $contact = $_POST['contact'];

    include '../include_pages/database_connection.php';

    //get last user id in db
    $sql="SELECT `user_id` FROM `user` ORDER BY `user_id` DESC LIMIT 1";
    $stmt = $conn->prepare($sql); 
    $stmt->execute();
    foreach ($stmt as $row){
        $user_id = $row['user_id'];
    }   
    $user_id = $user_id+1;
    $stmt->closeCursor();

    $sql = "INSERT INTO `user` (`user_id`, `user_name`, `password`, `email`, "
            . "`first_name`, `middle_name`, `last_name`, `gender`, `age`, `birth_date`, `birth_month`, "
            . "`birth_year`, `city`, `state`, `country`, `zipcode`, "
            . "`address`, `mobile`, `timestamp`, `account_status`) "
            . "VALUES "
            . "($user_id, $user_name, $password, $email,"
            . " $first_name, $middle_name, $last_name, $gender, NULL, $birth_date, $birth_month"
            . ", $birth_year, $city, $state, $country, $zipcode, "
            . "$address, $mobile, CURRENT_TIMESTAMP, 'active')";

    $conn->query($sql);
/*          
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
*/
    $conn->close();
    
    $_SESSION['user_id']= $user_id;