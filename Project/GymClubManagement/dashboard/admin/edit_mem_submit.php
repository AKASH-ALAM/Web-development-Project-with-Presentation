<?php
require 'db_conn.php';
page_protect();
if (isset($_POST['p_id'])) {
    
    
    $date      = $_POST['date'];
    $age       = rtrim($_POST['age']);
    $full_name = rtrim($_POST['p_name']);
    $email     = rtrim($_POST['email']);
    $address   = rtrim($_POST['add']);
    $contact   = rtrim($_POST['contact']);
    $height    = rtrim($_POST['height']);
    $weight    = rtrim($_POST['weight']);
    
    $p_id = $_POST['p_id'];
    
    mysqli_query($con, "UPDATE user_data SET name='$full_name', address='$address', contact='$contact', email='$email', height='$height', weight='$weight', joining='$date', age='$age' WHERE newid='$p_id'");
    echo "<meta http-equiv='refresh' content='0; url=view_mem.php'>";
} else {
    echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_mem.php'>";
    
}
?>
