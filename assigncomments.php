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
        $id = $_REQUEST['ID'];
        $marks = $_REQUEST['Marks'];
        $tid = $_SESSION["id"];

$sql ="UPDATE projects SET Marks ='$marks',Tid ='$tid' WHERE ID = '$id' AND Coursecode = '$ccode'";

		$result = mysqli_query($conn, $sql)or die(mysqli_error());
		if ($result)
		echo "Marks successfully assigned";
		else echo "Unsuccessfull submission";
 ?>