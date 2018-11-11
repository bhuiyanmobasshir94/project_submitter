<?php
require_once('jsondb.php');
$id =  $_REQUEST['ID'];
$password =  $_REQUEST['Password'];
$user =  $_REQUEST['User'];

session_start();

$sql = "SELECT ID, Password, Uname FROM $user WHERE ID ='$id'";

$row = json_decode(getJSONFromDB($sql));


    if($row[0]-> ID ==$id && $row[0]->Password==$password && $user =="teacher"){
        $_SESSION['id'] = $id;
        $_SESSION['password'] = $password;
        $_SESSION['uname'] = $row[0]-> Uname;
        $_SESSION['user'] = $user;
        header("Location:teacher.php");
    }
     
    else if($row[0]-> ID ==$id && $row[0]->Password==$password && $user =="student"){
        $_SESSION['id'] = $id;
        $_SESSION['password'] = $password;
        $_SESSION['uname'] = $row[0]-> Uname;
        $_SESSION['user'] = $user;
        header("Location:student.php");
    }
    else{
        header("Location:signin.php");
        alert(" Invalid user");
    }

?>