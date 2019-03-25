<?php
require 'db_conn.php';
page_protect();
if (isset($_POST['p_id'])) {
    
    $name    = rtrim($_POST['name']);
    $details = rtrim($_POST['details']);
    $days    = rtrim($_POST['days']);
    $rate    = rtrim($_POST['rate']);
    
    $p_id = $_POST['p_id'];
    
    mysqli_query($con, "INSERT INTO mem_types (mem_type_id,name,days,rate,details)
VALUES ('$p_id','$name','$days','$rate','$details')");
    echo "<meta http-equiv='refresh' content='0; url=view_plan.php'>";
} else {
    echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_plan.php'>";
    
}
?>
