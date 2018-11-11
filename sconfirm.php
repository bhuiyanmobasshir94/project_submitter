<?php 



require_once('dbconfig.php');
$id =  $_REQUEST['ID'];
$uname =  $_REQUEST['UserName'];
$password =  $_REQUEST['Password'];
$cpassword =  $_REQUEST['Cpassword'];
$user =  $_REQUEST['User'];


$sql = "INSERT INTO $user (ID, Uname, Password, Cpassword) VALUES ('$id', '$uname', '$password', '$cpassword')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header("Location:signin.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    header("Location:signup.php");
}

mysqli_close($conn);

?>