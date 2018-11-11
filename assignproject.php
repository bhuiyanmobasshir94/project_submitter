<?php
    require("dbconfig.php");
    session_start();
?>
<?php
    if ($_SESSION["id"]==null && $_SESSION["password"]==null){
        header("Location:signin.php");
    }
?>
<?php 			
		$ccode = $_REQUEST['Ccode'];
        $member = $_REQUEST['Maxmember'];
        $date = $_REQUEST['Date'];
        $time = $_REQUEST['Time'];
        $tid = $_SESSION["id"];
$sql = "INSERT INTO courseassigned (TiD, Ccode, Maxmember, Date, Time) VALUES ('$tid', '$ccode', '$member', '$date','$time')";

		$result = mysqli_query($conn, $sql)or die(mysqli_error());
		if ($result)
		echo "Project successfully assigned";
		else echo "Unsuccessfull submission";
 ?>