
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <noscript>
        <meta http-equiv="refresh" content="0; url=/jsdisable.html" />
    </noscript>
    <title>SignUp</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="signup.js"></script>
    <style type="text/css">
        .field-validation-error {
            color: red;
        }
    </style>
    <style>
     body {
         margin: 0;
         padding: 0;
         height: 100%;
         background-color: #efefef;
     }
 </style>
    <link href="style.css" rel="stylesheet">

</head>
<body>



<div>
    <div>
        <div class="text-center">
            <div class="login-form" style="top: 100.5px;">
                <div>
                    <a href="http://www.aiub.edu">
                        <div class="row">
                            <div class="col-sm-4 col-xs-12 text-center">
                                <img src="images/aiub_logo_92x92.png" height="92" />
                            </div>

                            <div class="col-sm-8 col-xs-12">
                                <blockquote>
                                    <p class="aiub_title" style="font-size: 13px;
">AMERICAN INTERNATIONAL UNIVERSITY-BANGLADESH</p>
                                    <small class="aiub_slogan">where leaders are created.</small>
                                </blockquote>
                            </div>
                        </div>
                    </a>
                </div>

                <div>
                <br />
                    <div class="login_header" style="margin-bottom: 30px;">Sign up with your organizational information.</div>
                    
                    
                    
<!--DATABASE ACTION NEED--> <!-- Signup form work is needed here -->

<form  action="sconfirm.php" method="POST" name="signup">                        
                        <div class="form-group">
                            <input class="form-control" id="ID" name="ID" placeholder="ID" type="text" value="" onkeyup="verify(this)" required/>
                            <!--NEED MODIFICATION-->
                            
                        </div>

                         <div class="form-group">
                            <input class="form-control" id="UserName" name="UserName" placeholder="User Name" type="text" onkeyup="verify(this)" required/>
                            <!--NEED MODIFICATION-->
    
                        </div>

                        <div class="form-group">
                            <input class="form-control" id="Password" name="Password" placeholder="Password" type="password" onkeyup="verify(this)" required/>
                            <!--NEED MODIFICATION-->
                            
                        </div>

                        <div class="form-group">
                            <input class="form-control" id="Cpassword" name="Cpassword" placeholder="Confirm Password" type="password" onkeyup="verify(this)" required/>
                            <!--NEED MODIFICATION-->
                
                        </div>
                        <!--LOGIN-->
                        </div>
                    <input name="User" id="user" type="hidden" value="">
                    
                        <div class="form-group">
                            <!--NEED MODIFICATION-->
                            <button type="submit" class="btn btn-block btn-primary p-lg-left-right" name="submit" onclick="check()" disabled> Sign Up </button>
                        </div>

</form>
                </div>
            </div>

        </div>
    </div>
</div>

</body>

</html>
