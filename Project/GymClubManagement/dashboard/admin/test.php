<?php
session_start();
include 'connection.php';
$name    = time();
$newname = "../images/" . $name . ".jpg";
$file    = file_put_contents($newname, file_get_contents('php://input'));
mysqli_query($con, "DELETE FROM user_data WHERE wait='yes'");

$sql = "Insert into user_data(wait,newid,pic_add) values('yes','$name','$newname')";
$result = mysqli_query($con, $sql) or die("Error in query");
?>

