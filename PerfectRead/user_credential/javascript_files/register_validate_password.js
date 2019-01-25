
    function validatePassword(){
    let pass_element = document.getElementById("password");
    let re_pass_element = document.getElementById("reenter_password");
    
    let pass=pass_element.value;
    let re_pass=re_pass_element.value;
    
        
    //if(!(pass_element.focus())){
        if(pass==""){
            pass_element.setAttribute("style","background:inherit");
            check_pass=0;
        }
            
        if(pass!=="" && pass.length<8){
            pass_element.setAttribute("style","background:red;");
            check_pass=0;
        }

        else 
        {
            if(pass!==""){
                let check_upper=0;
                let check_no=0;

                for(let i=0; i<pass.length; i++){
                        let ch=pass.charAt(i);

                        if(ch == ch.toUpperCase() && check_upper === 0 && isNaN(ch)){
                            check_upper=1;
                        }

                        if(!(isNaN(ch)) && check_no == 0 ){
                            check_no=1;
                        }

                        if(check_upper==1 && check_no==1){
                            pass_element.setAttribute("style","background:inherit;");
                            check_pass = 1;
                            check_upper=0;
                            check_no=0;
                            break;
                        }
                        else{
                            pass_element.setAttribute("style","background:red;");
                            check_pass=0;
                        }
                    }
                }
           }
    //}
    
    //if(!(re_pass_element.focus())){
        if(re_pass===""){
            re_pass_element.setAttribute("style","background:inherit;");
            check_pass=0;
        }
        
        if(pass!==""){
            if(re_pass!=="" && re_pass!==pass ){
                    re_pass_element.setAttribute("style","background:red;");
                    check_pass = 0;
                }
                else{
                    if(re_pass!=="" && re_pass===pass){
                    re_pass_element.setAttribute("style","background:inherit;");
                    check_pass = 1;
                }
            }
            
        }
  //  }
};