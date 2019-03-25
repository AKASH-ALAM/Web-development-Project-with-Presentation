<?php
require 'db_conn.php';
page_protect();
if (isset($_POST['invoice'])) {
    $invoice = $_POST['invoice'];
    $paid    = rtrim($_POST['paid']);
    $total   = rtrim($_POST['total']);
    $bal     = $total - $paid;
    
    mysqli_query($con, "UPDATE subsciption SET bal='$bal',paid='$paid',total='$total'  WHERE invoice='$invoice'");
    echo "<meta http-equiv='refresh' content='0; url=unpaid.php'>";
} else {
    echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=unpaid.php'>";
    
}
?>
