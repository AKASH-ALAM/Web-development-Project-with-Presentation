<?php
include 'index.php';
page_protect();
$login_id = $_SESSION['user_data'];
$name     = rtrim($_POST['full_name']);
if (isset($name)) {
    mysqli_query($con, "UPDATE auth_user SET name='$name' WHERE login_id='$login_id'");
    echo "<head><script>alert('Profile Updated,Login Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=logout.php'>";
} else {
    echo "<meta http-equiv='refresh' content='0; url=more-userprofile.php'>";
}
?>
<center>
<img src="loading.gif">
</center>