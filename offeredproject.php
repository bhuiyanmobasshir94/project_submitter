<?php
   session_start();
   require_once('jsondb.php');
  
    if ($_SESSION["id"]==null && $_SESSION["password"]==null){
        header("Location:signin.php");
    }
?>
<?php


$id =  $_SESSION['id'];  

$sql = "SELECT Ccode, Date, Time FROM courseassigned WHERE Tid ='$id'";

$row = json_decode(getJSONFromDB($sql));

for ($i=0;$i<sizeof($row);$i++){

?>
     <?php echo $row[$i]-> Ccode; ?>

<?php
}
?>




<!-- 

  function offeredProjects()
        {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    resp= xmlhttp.responseText;
                    alert(resp);
                    window.location = 'teacher.php';
                }
            };
            
            var url='offeredproject.php?';
            xmlhttp.open("GET", url, true);
            xmlhttp.send();

        }

-->