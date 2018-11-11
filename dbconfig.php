<?php

$conn = mysqli_connect("localhost", "root", "","project_submitter");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>