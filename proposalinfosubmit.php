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
        $ideas = $_REQUEST['Ideas'];
        $tags = $_REQUEST['Tags'];
        $date = $_REQUEST['Date'];
        $id = $_SESSION['id'];

    $sql = "UPDATE projects SET Tags = '$tags', Ideas = '$ideas' WHERE ID = '$id' AND Coursecode = '$ccode'";

        $result = mysqli_query($conn, $sql)or die(mysqli_error());
		if ($result)
		echo "Project proposal successfully assigned";
		else echo "Unsuccessfull submission";
 ?>