



function login(){
                    let user_name=document.getElementById("username").value;
                    let password=document.getElementById("password").value;
                    
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange=function(){
                       if (this.readyState == 4 && this.status == 200) {
                            if(this.responseText=="valid"){
                                location.href="account.php";
                                document.getElementById("login_form").addEventListener("submit", function(event){
                                    href="account.php";
                                });
                            }
                            else{
                                document.getElementById("login_form").addEventListener("submit", function(event){
                                    event.preventDefault();
                                });
                                
                                alert("Invalid user credentials");
                            }

                        }
                    };
                    xmlhttp.open('POST',"backend_pages/login_check.php?un="+user_name+"&pa="+password,true);
                    xmlhttp.send();
                    
                };