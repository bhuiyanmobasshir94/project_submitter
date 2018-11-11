<?php
	require_once("jsondb.php");
    session_start();
?>
<?php
    if ($_SESSION["id"]==null && $_SESSION["password"]==null ){
         header("Location:teacher.php");
    }
     else if ($_SESSION["id"] !=null && $_SESSION["password"]!=null && $_SESSION['user'] == "teacher"){
        include("signout.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>Student's Index</title>
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
                <a id="navigation-toggler" class="navbar-brand logo" href="student.php">
                </a>
                <a id="navigation-toggler" class="navbar-brand" href="student.php">
                    <h1 style="
                        font-size: 37px !important;       
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
                <button typre="submit" class="navbar-text navbar-right butn btn-danger" style =" margin-right: 40px;font-size:17px;" ><a href="signout.php" style="color: white;">Logout</a></button>
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
              <!-- ******************************************************************************** -->      
                <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                             <a data-toggle="collapse" data-parent="#bs-collapse" href="#five">Offered Courses</a></h4>
                        </div>
                        <div id="five" class="panel-collapse collapse">
                            <div class="panel-body">
                             <?php
                            $sql = "SELECT Ccode FROM courseassigned";

                            $row = json_decode(getJSONFromDB($sql));

                            for ($i=0;$i<sizeof($row);$i++){

                            ?>
                                    <input type="button" class="btn btn-block btn-primary p-lg-left-right" onclick="huda(this.value)" value="<?php echo $row[$i]-> Ccode; ?>">
                            <?php
                            }
                            ?>          
                            </div>
                    </div>
                    </div>
                <!-- ******************************************************************************** -->
                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                         <a data-toggle="collapse" data-parent="#bs-collapse" href="#fivechild">My Projects</a></h4>
                    </div>
                    <div id="fivechild" class="panel-collapse collapse">
                        <div class="panel-body">
                         <?php    
                        $id =  $_SESSION['id'];
                        $sql = "SELECT Coursecode FROM projects WHERE ID ='$id'";

                        $row = json_decode(getJSONFromDB($sql));

                        for ($i=0;$i<sizeof($row);$i++){

                        ?>
                                <input type="button" class="btn btn-block btn-primary p-lg-left-right" onclick="huda1(this.value)" value="<?php echo $row[$i]-> Coursecode; ?>">
                        <?php
                        }
                        ?>          
                      </div>
                    </div>
                </div>
               <!-- ******************************************************************************** --> 
         </div>
    </div>
         
         <!-- **************************************************Right**************************************************************************** -->
                <div class="col-md-9 col-sm-9 col-xs-9 navbar-default">
                   <div class="row">
                       <?php require("studentinput.php");?>
                    </div>
                    <br/>
                    <div class="row">
                      <?php require("studentpreview.php");?>
                    </div>
                    <br/>
                    <div class="row">
                      <?php require("projectupdate.php");?>
                    </div>
                </div>

         
         
         
                                           
        
            
            <!-- ******************************************* Right ****************************************************************************** -->
            </div>
                </div>      
                
            </div>
   
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
        
        <!-- Custom Code -->
        
        function projectInfo()
        {
            var a,b,c;
            a= document.Projectinfo.Ccode.value;
            b= document.Projectinfo.Title.value;
            c= document.Projectinfo.Ids.value;
            
              var d = new Date();
              var n = d.toString();
            
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    resp= xmlhttp.responseText;
                    alert(resp);
                    window.location = 'student.php';
                }
            };
            
            var url='projectinfosubmit.php?Ccode='+a+'&Title='+b+'&Ids='+c+'&Date='+n;
            xmlhttp.open("GET", url, true);
            xmlhttp.send();
        }
        function proposalInfo()
        {
            var a,b,c;
            a= document.Proposalinfo.Ideas.value;
            b= document.Proposalinfo.Tags.value;
            c= document.Proposalinfo.Ccode.value;
   
              var d = new Date();
              var n = d.toString();
            
           var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    resp = xmlhttp.responseText;
                    alert(resp);
                    window.location = 'student.php';
                }
            };
            
            var url='proposalinfosubmit.php?Ccode='+c+'&Ideas='+a+'&Tags='+b+'&Date='+n;
            xmlhttp.open("GET", url, true);
            xmlhttp.send();     
        }
        
        function huda(val)
        {
          window.location = 'student.php?Ccode='+val;
        }
        function huda1(val)
        {
          window.location = 'student.php?code='+val;
        }
        function deleteProject()
        {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    resp = xmlhttp.responseText;
                    alert(resp);
                    window.location = 'student.php';
                }
            };
            
            var url='deleteproject.php';
            xmlhttp.open("GET", url, true);
            xmlhttp.send();
        }
        function projectUpdate()
        {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    resp = xmlhttp.responseText;
                    alert(resp);
                    window.location = 'student.php';
                }
            };
            
            var url='projectupdate.php?status=yes';
            xmlhttp.open("GET", url, true);
            xmlhttp.send();
        }
    </script>

</body>
</html>