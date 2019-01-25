<!DOCTYPE html>

<html>
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>PerfectRead | Login</title>
        
        
        <!-- Title logo-->
        <link rel="shortcut icon" href="../images/logo_owl.png" />
        <!-- Title logo-->
        
        <!--Purecss-->
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
        <!--Purecss-->
        
        <link rel="stylesheet" href="stylesheets/login.css">
        
        <script src="javascript_files/login.js"></script>
        
    </head>
   
    <body onchange="login()">
        <form class="pure-form pure-form-aligned" id="login_form" formmethod="post">
            <fieldset>
                <legend style="color: rgb(233, 0, 0);">LOGIN to find your perfect read!</legend>
                <div class="pure-control-group">
                    <label for="username">Username</label>
                    <input id="username" name="username" type="text" placeholder="Username" required="required">
                </div>

                <div class="pure-control-group">
                    <label for="password">Password</label>
                    <input id="password" name="password" type="password" placeholder="Password" required="required">
                </div>

                <div class="pure-controls">
                    <button type="submit" class="pure-button pure-button-primary">Submit</button>
                </div>
                
                
                <div class="pure-controls">
                    <label for="forgot_password" class="">
                        <a href="forgot_password.php">Forgot Password</a>
                    </label>
                </div>
                
                <div class="pure-controls">
                    <label for="register" class="">
                        <a href="register.php">New User, Register!</a>
                    </label>
                </div>
            </fieldset>
        </form>
    </body>
</html>
