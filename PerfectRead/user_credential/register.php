<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=500, initial-scale=1">
        <title>Perfect Read | Register</title>
        
        <!-- Title logo-->
        <link rel="shortcut icon" href="../images/logo_owl.png" />
        <!-- Title logo-->
        
        <!--pure css api-->
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
        
        <!--Stylesheets-->
        <link rel="stylesheet" href="stylesheets/register.css"/>
        <!--jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      
        <!--AJAX call to check username availability-->
        <script src="javascript_files/register_validate_username.js"></script>
        <script src="javascript_files/register_validate_date.js"></script>
        <script src="javascript_files/register_validate_password.js"></script>
        <script src="javascript_files/register_validate_form.js"></script>
            
        
    </head>
    <body onchange="validateForm()">
        
        <form class="pure-form pure-form-aligned" method="POST" id="register_form" action="account.php">
            <fieldset>
                <legend>Registration Form</legend>
                <div class="pure-control-group">
                    <label for="name">Username</label>
                    <input id="name" name="name" type="text" onkeyup="checkUserNameAvailablity(this.value)" required>
                </div>
                <div class="pure-control-group">
                    <label></label> <!--this is necessary for formatting -->
                    <span class="pure-form-message-inline" id="username_message">This should be unique.</span>
                </div>

                <div class="pure-control-group">
                    <label for="password">Password</label>
                    <input id="password" name="password" type="password" required>
                </div>
                <div class="pure-control-group">
                    <label></label> <!--this is necessary for formatting -->
                    <span class="pure-form-message-inline" id="password_message">Enter at least 8 characters long password having atleast 1 uppercase and 1 number.</span>
                </div>

                <div class="pure-control-group">
                    <label for="reenter_password">Reenter Password</label>
                    <input id="reenter_password" type="password" required>
                </div>
                
                <div class="pure-control-group">
                    <label for="email">Email Address</label>
                    <input id="email" name="email" type="email" required>
                </div>

                <div class="pure-control-group">
                    <label></label> <!--this is necessary for formatting -->
                    <span class="pure-form-message-inline">Enter valid email (Account access info will be sent on this email).</span>
                </div>

                <div class="pure-control-group">
                    <label for="">First Name</label>
                    <input id="first_name" name="first_name" type="text" required>
                </div>


                <div class="pure-control-group">
                    <label for="">Middle Name</label>
                    <input id="middle_name" name="middle_name" type="text">
                </div>


                <div class="pure-control-group">
                    <label for="">Last Name</label>
                    <input id="last_name" name="last_name" type="text" required>
                </div>


                <div class="pure-control-group">
                    <label for="">Gender</label>
                    <select id="gender" name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <!--
                <div class="pure-control-group">
                    <label for="">Age</label>
                    <input id="age" type="number">
                </div>
                -->

                <div class="pure-control-group " id="birthdate_div">
                    <label for="">Birth Date</label>
                    <input id="birth_date" name="birth_date" type="number" maxlength="2" placeholder="DD" required>
                    <input id="birth_month" name="birth_month" type="number" maxlength="2" placeholder="MM" required>
                    <input id="birth_year" name="birth_year" type="number" maxlength="2" placeholder="YYYY" required>
                </div>

                <div class="pure-control-group">
                    <label for="">Address</label>
                    <input id="address" name="address" type="text" required>
                </div>
                <div class="pure-control-group">
                    <label for="">City</label>
                    <input id="city" name="city" type="text" required>
                </div>
                <div class="pure-control-group">
                    <label for="">State</label>
                    <input id="state" name="state" type="text" required>
                </div>
                <div class="pure-control-group">
                    <label for="">Country</label>
                    <input id="country" name="country" type="text" required>
                </div>
                <div class="pure-control-group">
                    <label for="">Zipcode</label>
                    <input id="zipcode" name="zipcode" type="number" maxlength="10" required>
                </div>

                <div class="pure-control-group">
                    <label for="">Contact</label>
                    <input id="contact" name="contact" type="tel" placeholder="CCMXXXXXXXXM" required>
                </div>
                <div class="pure-control-group">
                    <label></label> <!--this is necessary for formatting -->
                    <span class="pure-form-message-inline" id="username_message">C: Country Code MXM: 10 digit Mobile Number</span>
                </div>

                <div class="pure-controls">
                    <label for="cb" class="pure-checkbox">
                        <input id="termsandcondition" type="checkbox"  required> I've read the terms and conditions
                   </label>

                    <button type="submit" class="pure-button pure-button-primary">Submit</button>
                </div>
            </fieldset>
        </form>
        
    </body>
</html>
