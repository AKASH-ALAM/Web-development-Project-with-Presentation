<?php
include("connection.php");

//getting id of the data from url
$employee_id = $_GET['employee_id'];

//deleting the row from table
$result = mysqli_query($conn, "DELETE FROM employee WHERE employee_id=$employee_id");

//redirecting to the display page (index.php in our case)
header("Location:payroll.php#about");
?>

