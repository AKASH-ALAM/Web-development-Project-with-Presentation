<?php
require 'db_conn.php';
page_protect();
if (isset($_POST['invoice']) && isset($_POST['date'])) {
    
    $invoice   = $_POST['invoice'];
    $pay_date  = $_POST['date'];
    $total     = rtrim($_POST['total']);
    $paid      = rtrim($_POST['paid']);
    $mem_type1 = $_POST['mem_type'];
    $bal       = $total - $paid;
    
    $query1 = "select * from mem_types WHERE mem_type_id='$mem_type1'";
    
    //echo $query;
    $result1 = mysqli_query($con, $query1);
    
    if (mysqli_affected_rows($con) == 1) {
        while ($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
            $mem_type = $row1['name'];
            $sub_type = $row1['mem_type_id'];
            $days     = $row1['days'];
        }
    }
    
    $mod_date = strtotime($pay_date . "+ $days days");
    $expiry   = date("Y-m-d", $mod_date);
    $time     = $days * 86400;
    $exp_time = $time + strtotime($pay_date);
    
    mysqli_query($con, "UPDATE subsciption SET paid_date='$pay_date', total='$total', paid='$paid', sub_type_name='$mem_type', bal='$bal', sub_type='$sub_type', expiry='$expiry', exp_time='$exp_time' WHERE invoice='$invoice'");
    echo "<meta http-equiv='refresh' content='0; url=view_mem.php'>";
} else {
    echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_mem.php'>";
    
}
?>
