<?php
session_start();
if(isset($_SESSION['user_id'])){
?>
<?php include './include_php_files/in_upload_success.php'; ?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=500, initial-scale=1">
        <title>Perfect Read | Upload</title>
        
        <!-- Title logo-->
        <link rel="shortcut icon" href="../images/logo_owl.png" />
        <!-- Title logo-->
        
        <!--Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        <!--Bootstrap-->
        
        <!--Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif+SC" rel="stylesheet">
        <!--Google Fonts-->
        
        <!--Header-->
        <link rel="stylesheet" href="../main_template/css_files/header.css">
            <!--Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Finger+Paint" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
        <!--Header-->
        
        <link rel="stylesheet" href="stylesheets/upload_success.css">
        
        
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
                                            <a class="nav-link" href="../user_credential/account.php"><img width="45" height="45" class="d-inline-block " src="../images/account.png">Account</a>
                                        </li>
                                        <li class="nav-item active">
                                            <a class="nav-link" href="upload.php"><img width="45" height="45" class="d-inline-block " src="../images/upload.png">Upload</a>
                                        </li>
                                        <li class="nav-item active">
                                            <a class="nav-link" href="read.php"><img width="45" height="45" class="d-inline-block " src="../images/read.png">Read</a>
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
                                            <a class="nav-link" href="../user_credential/logout.php"><img width="45" height="45" class="d-inline-block " src="../images/logout.png">Log Out</a>
                                        </li>
                                    </ul>
                                </div>
                        </nav>
                </div>
        </div>
       
    <!------------------------------------HEADER-------------------------------------------------------------------------------------------------->
    <div class="success">
        <img src="../images/check-circle.gif" alt="success">
        <img src="../images/success.gif" alt="success">
    </div>
        
    </body>
</html>
    
    
<?php
}
else{    
    header('Location: ../user_credential/login.php');exit;
    
}
?>