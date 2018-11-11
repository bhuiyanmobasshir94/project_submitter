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
		$ccode = $_SESSION['du'];
        $id = $_SESSION['id'];

    $sql = "DELETE FROM projects WHERE ID = '$id' AND Coursecode = '$ccode'";

        $result = mysqli_query($conn, $sql)or die(mysqli_error());
		if ($result)
		echo "Project deleted successfully";
		else echo "Unsuccessfull delete request";
 ?>