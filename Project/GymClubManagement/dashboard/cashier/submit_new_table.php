<?php
require 'db_conn.php';
page_protect();
if (isset($_POST['p_id'])) {
    
    $name    = rtrim($_POST['name']);
    $details = rtrim($_POST['details']);
    $date    = rtrim($_POST['date']);
    $p_id    = $_POST['p_id'];
    
    mysqli_query($con, "INSERT INTO time_table (mem_id,name,date,details)
VALUES ('$p_id','$name','$date','$details')");
    echo "<meta http-equiv='refresh' content='0; url=table_view.php'>";
} else {
    echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=table_view.php'>";
    
}
?>
