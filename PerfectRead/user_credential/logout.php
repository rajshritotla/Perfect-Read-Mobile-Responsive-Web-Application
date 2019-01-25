<?php
    session_start();
    unset($_SESSION['user_id']);
    session_destroy();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=500, initial-scale=1">
        
        <title>Perfect Read | Logout</title>
        
        <!-- Title logo-->
        <link rel="shortcut icon" href="../images/logo_owl.png" />
        <!-- Title logo-->
        
        <link rel="stylesheet" href="stylesheets/logout.css">
    </head>
    <body onclick="location.href='login.php'">
        
    </body>
</html>
