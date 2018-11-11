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
        $title = $_REQUEST['Title'];
        $date = $_REQUEST['Date'];
        $ids = $_REQUEST['Ids'];
        $id = $_SESSION["id"];
$sql = "INSERT INTO projects (ID, Coursecode, Title, Sdate, IDs) VALUES ('$id', '$ccode', '$title', '$date','$ids')";

		$result = mysqli_query($conn, $sql)or die(mysqli_error());
		if ($result)
		echo "Project info successfully assigned";
		else echo "Unsuccessfull submission";
 ?>