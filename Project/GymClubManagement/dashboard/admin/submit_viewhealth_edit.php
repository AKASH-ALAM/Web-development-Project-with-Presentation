<?php
require 'db_conn.php';
page_protect();
if (isset($_POST['id'])) {
    
    $name  = rtrim($_POST['name']);
    $date1 = rtrim($_POST['date1']);
    $bodyfat   = rtrim($_POST['bodyfat']);
    $water   = rtrim($_POST['water']);
    $muscle  = rtrim($_POST['muscle']);
    $calorie = rtrim($_POST['calorie']);
    $bone    = rtrim($_POST['bone']);
    $remarks = rtrim($_POST['remarks']);
    
    $id = $_POST['id'];
    
    mysqli_query($con, "UPDATE healthstatus SET name='$name', date1='$date1', bodyfat='$bodyfat', water='$water', muscle='$muscle' , calorie='$calorie' , bone='$bone' , remarks='$remarks' WHERE id='$id'");
    echo "<meta http-equiv='refresh' content='0; url=view_health.php'>";
} else {
    echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_health.php'>";
    
}
?>
