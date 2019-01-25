// AJAX call to check username availability
        function checkUserNameAvailablity(uname){
            if(uname.length == 0){
                check_uname=0;
                return;
            }
            else{
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange=function(){
                   if (this.readyState == 4 && this.status == 200) {
                       
                        if(this.responseText=="false"){
                           document.getElementById("username_message").innerHTML = "User Name UNAVAILABLE, try something else";
                           check_uname=0;
                           return;
                        }
                        else{
                           document.getElementById("username_message").innerHTML = "User Name Available :)";
                           check_uname=1;
                           return;
                        }

                    }
                };
                xmlhttp.open("POST", "backend_pages/check_username.php?q=" + uname, true);
                xmlhttp.send();
            }
        }