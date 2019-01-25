<?php
session_start();
if(isset($_SESSION['user_id'])){
    
?>

<?php

    include './include_php_files/account.php';
    //................................................................
    //to get images for quotes
    $bg = array('1 (1).jpg','1 (2).jpg','1 (3).jpg','1 (4).jpg','1 (5).jpg','1 (6).jpg','1 (7).jpg','1 (8).jpg','1 (9).jpg','1 (10).jpg','1 (11).jpg','1 (12).jpg','1 (13).jpg','1 (14).jpg' ); // array of filenames
    $i = rand(0, count($bg)-1); // generate random number size of the array
    $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
    //................................................................
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=500, initial-scale=1">
        <title>Perfect Read | Account</title>
        
        <!-- Title logo-->
        <link rel="shortcut icon" href="../images/logo_owl.png" />
        <!-- Title logo-->
        <!--Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!--Bootstrap-->
        
        <!--Header-->
        <link rel="stylesheet" href="../main_template/css_files/header.css">
            <!--Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Finger+Paint" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
        <!--Header-->
        <style>
            #show_dynamic img{
                margin:15vh;
                height: 50vh;
                width: 50vw;
                border-style: groove;
                border-width: thick;
                border-color: midnightblue;
                border-radius: 10px;
                
            }
            
            form{
                margin: 2%;
            }
            
            input{
                font-size: larger;
            }
            
        </style>
        
        
    </head>
    <body>
        <!------------------------------------HEADER-------------------------------------------------------------------------------------------------->
        <div class="row d_header">

                <div class="col-12 col-md-8 d_header_left">
                        <nav class="navbar navbar-expand-lg ">
                            <!--<a class="navbar-brand" href=""><img src="" width="90" height="40" class="d-inline-block align-top" alt=""></a>-->
                            <!--<div class="collapse navbar-collapse" id="navbarNav">-->    
                                <div class="navbar navbar-nav " id="navbarNav">
                                        <ul class="navbar-nav">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="account.php"><img width="45" height="45" class="d-inline-block " src="../images/account.png">Account</a>
                                        </li>
                                        <li class="nav-item active">
                                            <a class="nav-link" href="../functional_webpage/upload.php"><img width="45" height="45" class="d-inline-block " src="../images/upload.png">Upload</a>
                                        </li>
                                        <li class="nav-item active">
                                            <a class="nav-link" href="../functional_webpage/read.php"><img width="45" height="45" class="d-inline-block " src="../images/read.png">Read</a>
                                        </li>

                                    </ul>
                                </div>
                            </nav>
                 </div>



                <div class="col-6 col-md-4 d_header_right">
                        <nav class="navbar navbar-expand-lg ">
                                <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav" >
                                        <li class="nav-item active">
                                            <a class="nav-link" href="logout.php"><img width="45" height="45" class="d-inline-block " src="../images/logout.png">Log Out</a>
                                        </li>
                                    </ul>
                                </div>
                        </nav>
                </div>
        </div>
       
            
    <!------------------------------------HEADER-------------------------------------------------------------------------------------------------->
        
        <!--Body-->
        <div id="show_dynamic">


            <form class="form-inline" action="../functional_webpage/show_user_upload.php">
                <div class="form-group mb-2">
                  <input type="text" readonly class="form-control-plaintext" value="Upload Count: <?php echo $upload_count; ?>">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Show Uploads</button>
            </form>


            
            
            <!-- showing quote-->
            <img src="../images/quotes/<?php echo $selectedBg; ?>" class="img-fluid">
            
        </div>
        
        
    </body>
</html>


<?php
}
else{    
    header('Location: ../user_credential/login.php');exit;
    
}
?>