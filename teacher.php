<?php
	require_once("jsondb.php");
    session_start();
?>
<?php
    if ($_SESSION["id"]==null && $_SESSION["password"]==null && $_SESSION['user'] != "teacher"){
        include("signout.php");
        header("Location:signin.php");
    }
         if ($_SESSION["id"] !=null && $_SESSION["password"]!=null && $_SESSION['user'] == "student"){
        include("signout.php");
    }
?>


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>Teacher's Index</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        .drawer-controls {
            padding-top: 10px;
        }
    </style>
    <link href="style.css" rel="stylesheet">

</head>
<body>
    
<div class="container">
<br />
<div class="row">
    <div class="hidden-lg hidden-md" style="padding: 15px;">
    </div>
    <nav class="navbar navbar-default">
        <div class="topbar-container">
            <!-- FOR LOGO -->
            <div class="navbar-header">
                <!--Navbar Logo --> 
                <a id="navigation-toggler" class="navbar-brand logo" href="teacher.php">
                </a>
                <a id="navigation-toggler" class="navbar-brand" href="teacher.php">
                    <h1 style="
                        font-weight: 900;
                        color: #0c4da2;
                        margin-top: -8px;
                        margin-left: -6px;
                ">PROJECT</h1>
                </a>

            </div>
            <!--Need change for db --> 
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse">
                <!-- student information get -->
                <button type="submit" class="navbar-text navbar-right butn btn-danger" style =" margin-right: 40px;font-size:17px;" ><a href="signout.php" style="color: white;">Logout</a></button>
                <p class="navbar-text navbar-right">Welcome <a href="" class="navbar-link"><?php echo $_SESSION['uname'] ;?></a></p>
            </div>
        </div>
    </nav>
</div>
<!--HEADER.PHP-->
  <div class="container">
     <div class="row">
        
        <div class="col-md-3 col-sm-3 col-xs-3">
            <div class="panel-group wrap" id="bs-collapse">

                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#bs-collapse" href="#one">
                        Assign New Project</a></h4> 
                    </div>
                    <div id="one" class="panel-collapse collapse">
                         <div class="panel-body">
                             
                             <div class="border">
                                <div class="border">  
                             <form method="post" name="Assignproject" >      
                         <div class="form-group">
                            <input  class="form-control"  id="ccode" name="Ccode" placeholder="Code [sec]" type="text" value="" required/>
                            <!--NEED MODIFICATION-->
                            <span class="field-validation-valid" ></span>
                        </div>
                        <div class="form-group">
                            <input class="form-control"  id="groupmember" name="Member" placeholder="Group Member" type="text" required/>
                            <!--NEED MODIFICATION-->
                            <span class="field-validation-valid"></span>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                            <input class="form-control"  id="date" name="Date" placeholder="18/08/17" type="text" required/>
                            <!--NEED MODIFICATION-->
                            <span class="field-validation-valid"></span>
                        </div>
                        <div class="form-group col-md-6">
                            <input class="form-control"  id="time" name="Time" placeholder="11:59 PM" type="text" required/>
                            <!--NEED MODIFICATION-->
                            <span class="field-validation-valid" ></span>
                        </div>
                        </div>
                        <!--SUBMISSION need change-->
                        <div class="row">
                         <div class="form-group col-md-6">
                            <a class="btn btn-block btn-danger p-lg-left-right" data-toggle="collapse" data-parent="#bs-collapse" href="#one"> Cancel </a>
                        </div>
                        <div class="form-group col-md-6">
                            <button type="submit" class="btn btn-block btn-primary p-lg-left-right" onclick="assignProject()"> Confirm </button>
                        </div>
                    </div>
                     </form>  
                        </div>         
                     <div class="border">
                        <div class="row">
                            <div class="col-md-offset-5"> 
                                 <a class="login_forgotpassword" href="https://fsit.aiub.edu/education/course-offerings/undergraduate-course-offereings/bsc-cse" target="_blank" style="text-align:left;"> See Course Code</a>
                            </div>
                       </div>
                        </div>
                                 
                             </div>     
                        </div>
                          </div>
                </div>
                
                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                         <a data-toggle="collapse" data-parent="#bs-collapse" href="#two" >Offered Projects</a></h4>
                    </div>
                    <div id="two" class="panel-collapse collapse">
                          <div class="panel-body">
 
                <?php
                             
                $id =  $_SESSION['id'];  

                $sql = "SELECT Ccode, Date, Time FROM courseassigned WHERE Tid ='$id'";

                $row = json_decode(getJSONFromDB($sql));

                for ($i=0;$i<sizeof($row);$i++){

                ?>
                        <input type="button" class="btn btn-block btn-primary p-lg-left-right" value="<?php echo $row[$i]-> Ccode;?>" onclick="assigned(this.value)">
                <?php
                }
                ?>                    
                        </div>
                    </div>
                </div>
                <!-- end of panel -->

            </div>
            <!-- end of #bs-collapse-->
        </div>
        <!-- Body part preview-->
         <!-- ******************************************* Right Section ************************************************************************* -->

             <?php require("teacherpreview.php");?>
         
         <!-- **************************************************** Right Section End ************************************************************ -->
         
      </div>
    </div>
    <!-- end of container -->
   
     <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- JavaScript for accordian -->
    <script type="text/javascript">
         $(document).ready(function () {
            $('.collapse.in').prev('.panel-heading').addClass('active');
            $('#accordion, #bs-collapse')
                .on('show.bs.collapse', function (a) {
                    $(a.target).prev('.panel-heading').addClass('active');
                })
                .on('hide.bs.collapse', function (a) {
                    $(a.target).prev('.panel-heading').removeClass('active');
                });
        });
        
        
    <!-- custome javascript -->
        
        function assignProject() {
                    
            var a,b,c,d;
            a= document.Assignproject.Ccode.value;
            b= document.Assignproject.Member.value;
            c= document.Assignproject.Date.value;
            d= document.Assignproject.Time.value;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    resp= xmlhttp.responseText;
                    alert(resp);
                    window.location = 'teacher.php';
                }
            };
            
            var url='assignproject.php?Ccode='+a+'&Maxmember='+b+'&Date='+c+'&Time='+d;
            xmlhttp.open("GET", url, true);
            xmlhttp.send();
        }
        function submitMarks()
        {
            var a = document.getElementById("Marks").value;
            alert(a);
        }
        
        function assigned(val)
        {
           window.location = 'teacher.php?Ccode='+val;
               
        }
        function huda(val)
        {
          window.location = 'teacher.php?ID='+val;
        }
        
    </script>
</body>
</html>