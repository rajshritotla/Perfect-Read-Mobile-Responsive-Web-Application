<?php
    //start the session
session_start();
if(isset($_SESSION['user_id'])){
    
?>
<?php
    include './include_php_files/in_get_read.php';
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=500, initial-scale=1">
        <title>Perfect Read | Read</title>
        
        <!-- Title logo-->
        <link rel="shortcut icon" href="../images/logo_owl.png" />
        <!-- Title logo-->
        
        <!--Bootstrap-->
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!--Bootstrap-->
        
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif+SC" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
        
        <!-- Google Fonts -->
        
        <!--Header-->
        <link rel="stylesheet" href="../main_template/css_files/header.css">
            <!--Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Finger+Paint" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
        <!--Header-->
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
        <style>
            .btn, .card{
                font-size: larger;
            }
            
            .card_content{
                display: none;
            }
            
            .card :hover{
                background-color: white;
            }
            
            .btn, .card, .card-body{
                font-family: 'Noto Serif SC', serif;
            }
            .card-body{
                background-color: burlywood;
                font-family: 'Arvo', serif;
            }
            .btn{
                font-family: 'Cabin Sketch', cursive;
                font-weight: 60s0;
                font-size: xx-large;
                color: crimson;
                background-color: white;
            }
            
            
            
        </style>
        
        <script>
            
            function show(parentid,childid,abstractid){
                document.getElementById(parentid).onclick = function(){
                    let x = document.getElementById(childid);
                    let y = document.getElementById(abstractid);
                    if (x.style.display === "none") {
                      x.style.display = "inherit";
                        y.style.display = "none";
                    } else {
                      x.style.display = "none";
                        y.style.display = "block";
                    }
                };
            }
            
              
        </script>
        
        
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
        
        <!--Body-->
 
               
        <div class="accordion" id="accordionExample">
        
        <?php
            foreach ($stmt as $row){
                
                $uid=$row['upload_id'];
                $title=$row['upload_title'];
                $abstract=$row['upload_abstract'];
                $content=$row['upload_content'];
        ?>
    
            
            
            <div class="card" onclick="show(<?php echo $uid.$uid;?>,<?php echo $uid;?>,<?php echo $uid.$uid.$uid;?>)">
                
                <div class="card-header card_title" id="<?php echo $uid.$uid;?>" onclick="show(<?php echo $uid.$uid;?>,<?php echo $uid;?>,<?php echo $uid.$uid.$uid;?>)">
                  <h5 class="mb-0" onclick="show(<?php echo $uid.$uid;?>,<?php echo $uid;?>,<?php echo $uid.$uid.$uid;?>)">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#<?php echo $uid; ?>" aria-expanded="false" aria-controls="<?php echo $uid; ?>" onclick="show(<?php echo $uid.$uid;?>,<?php echo $uid;?>,<?php echo $uid.$uid.$uid;?>)">
                        <?php echo $title; ?>
                    </button>
                  </h5>
                    <small id="<?php echo $uid.$uid.$uid; ?>"><?php echo $abstract; ?></small>
                
                
                </div>
                <div class="collapse card_content"  id="<?php echo $uid; ?>" aria-labelledby="<?php echo $uid.$uid; ?>" data-parent="#accordionExample">
                  <div class="card-body">
                      <?php echo $content; ?>
                  </div>
                </div>
            </div>
            
            
        <?php
            }
        $stmt->closeCursor();
        ?>
        </div>
        
        
        
     
        
    </body>
</html>
    
    
    
    
    
    
    
    
<?php
}
else{    
    header('Location: ../user_credential/login.php');exit;
    
}
?>