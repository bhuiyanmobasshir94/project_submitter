var fid = false, fpass = false;

function valid(){
        if (fid) {
                if (fpass) {
                    document.signin.submit.disabled=false;
            }
            else{
                    verify(document.signin.Password);
                    document.signin.submit.disabled=true;
            }

        }
        else{
                document.signin.submit.disabled=true; 
                verify(document.signin.ID);
        }
        
    }


function verify(val){
     var a,b;
        a = document.signin.ID.value;
        b = document.signin.Password.value;   
     
        if(val.getAttribute("name")=="ID"){
            
            var c1 = a.indexOf("-"); 
            var c2 = a.indexOf("-",c1+1);
            if(c1 == 2 || c1 == 4){
               if(c2 == 8 || c2 == 9)
               {
                   fid = true;
                   document.signin.ID.style.borderColor = '#337ab7';
               }else{
                document.signin.ID.style.borderColor = 'red';
                fid=false;
               }
            }
            else
            {
                document.signin.ID.style.borderColor = 'red';
                fid=false;
                
            }
        }

        else if(val.getAttribute("name")=="Password"){
             
            if(b.length<8){
            
            document.signin.Password.style.borderColor = 'red';
                fpass=false;
            }
            else{

                fpass=true;
                document.signin.Password.style.borderColor = '#337ab7';
            }
        } 
         valid();
    }

function check(){
  var a = document.signin.ID.value;
   var user = "";
    var c1 = a.indexOf("-"); 
    var c2 = a.indexOf("-",c1+1);
    if(c1 == 2 && c2 == 8){
    user = "student";
    }else {
    user = "teacher";
    }
    
    document.signin.User.value = user;
}








