let check_uname;
let check_pass;
let check_email;
let check_birth_date;

function validateForm(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange=function(){
       if (this.readyState == 4 && this.status == 200) {
            
            //console.log("username " + check_uname);
            validatePassword();
            //console.log("pass "+check_pass);
            validateDate();
            //console.log("date "+check_birth_date)
            
            if(check_uname!==1 || check_pass!==1 || check_birth_date!==1){
                document.getElementById("register_form").addEventListener("submit", function(event){
                    event.preventDefault();
                });
            }
            else{
                document.getElementById("register_form").addEventListener("submit", function(event){
                    href="account.php";
                });
            }
       
        }
    };
    xmlhttp.open('POST',"register.php",true);
    xmlhttp.send();
};