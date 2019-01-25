function validateDate(){
            let current_year = new Date().getFullYear();
            let current_month = new Date().getMonth();
            let current_date = new Date().getUTCDate();
            
            let date_element=document.getElementById("birth_date");
            let month_element=document.getElementById("birth_month");
            let year_element=document.getElementById("birth_year");
        
            let date = date_element.value;
            let month = month_element.value;
            let year = year_element.value;
        //necessary to change background if everything okay
        date_element.setAttribute("style","background:inherit");    
        month_element.setAttribute("style","background:inherit");    
        year_element.setAttribute("style","background:inherit");    
        
        if(date!=="" || month!=="" ||year!==""){
            date=parseInt(date);
            month=parseInt(month);
            year=parseInt(year);
            
            
            if(month < 1 || month > 12){
                month_element.setAttribute("style","background:red;");
                month_element.focus();
                check_birth_date= 0;
            }
            
            else 
                if(year > current_year || year < 1950){
                    year_element.setAttribute("style","background:red;");
                    year_element.focus();
                    check_birth_date= 0;
                }

            else 
                if(year == current_year){
                    if(month>current_month){
                        month_element.setAttribute("style","background:red;");
                        month_element.focus();
                        check_birth_date= 0;
                    }
                }
            
            else 
                if(date < 1 || date > 31){
                    date_element.setAttribute("style","background:red;");
                    date_element.focus();
                    check_birth_date= 0;
                }

            else
            
                if(month== 2){
                    if(((year%4!==0) && (date >28))){
                        date_element.setAttribute("style","background:red;");
                        date_element.focus();
                        check_birth_date= 0;
                    }
                    else
                    if(((year%4==0) && (date >29))){
                        date_element.setAttribute("style","background:red;");
                        date_element.focus();
                        check_birth_date= 0;
                    }
                    
                }
            
            else
                if((month == 4) ||(month == 6)||(month == 9)||(month == 11)){
                   if(date>30){
                        date_element.setAttribute("style","background:red;");
                        date_element.focus;
                        check_birth_date= 0;
                    }
                }
            
            else
                {
                    check_birth_date= 1;
                }

            
        }
        else if(date=="" || month=="" ||year==""){
            check_birth_date= 0;
        }
            
     
            
} 