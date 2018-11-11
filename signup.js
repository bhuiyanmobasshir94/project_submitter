var fid = false,funame = false,fpass = false,fcpass = false;

function valid(){
        if (fid) {
           if(funame){
                if (fpass) {
                if (fcpass) {
                        document.signup.submit.disabled=false;

                }
                else{
                        verify(document.signup.Cpassword);
                        document.signup.submit.disabled=true;
                }
            }
            else{
                    verify(document.signup.Password);
                    document.signup.submit.disabled=true;
            }
           }else{
                document.signup.submit.disabled=true; 
                verify(document.signup.UserName);
           }

        }
        else{
                document.signup.submit.disabled=true; 
                verify(document.signup.ID);
        }
        
    }


function verify(val){
     var a,b,c,d;
        a = document.signup.ID.value;
        b = document.signup.UserName.value;
        c = document.signup.Password.value;
        d = document.signup.Cpassword.value;    
     
        if(val.getAttribute("name")=="ID"){
            
            var c1 = a.indexOf("-"); 
            var c2 = a.indexOf("-",c1+1);
            if(c1 == 2 || c1 == 4){
               if(c2 == 8 || c2 == 9)
               {
                   fid = true;
                   document.signup.ID.style.borderColor = '#337ab7';
               }else{
                document.signup.ID.style.borderColor = 'red';
                fid=false;
               }
            }
            else
            {
                document.signup.ID.style.borderColor = 'red';
                fid=false;
                
            }
        }
        else if(val.getAttribute("name")=="UserName"){
             
            if(b.length<1){
            
            document.signup.UserName.style.borderColor = 'red';
                funame=false;
            }
            else{
                document.signup.UserName.style.borderColor = '#337ab7';
                funame=true;

            }
        }

     
        else if(val.getAttribute("name")=="Password"){
             
            if(c.length<8){
            
            document.signup.Password.style.borderColor = 'red';
                fpass=false;
            }
            else{

                fpass=true;
                document.signup.Password.style.borderColor = '#337ab7';
            }
        } 
        else if(val.getAttribute("name")=="Cpassword"){
            
            if(c!= d){
            document.signup.Cpassword.style.borderColor = 'red';
                fcpass=false;
            }
            else{
            document.signup.Cpassword.style.borderColor = '#337ab7';
                fcpass=true;

            }
        }
         valid();
    }

function check(){
  var a = document.signup.ID.value;
   var user = "";
    var c1 = a.indexOf("-"); 
    var c2 = a.indexOf("-",c1+1);
    if(c1 == 2 && c2 == 8){
    user = "student";
    }else {
    user = "teacher";
    }
    
    document.signup.User.value = user;
}








