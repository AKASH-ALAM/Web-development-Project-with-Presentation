<?php
include 'index.php';
$key          = rtrim($_POST['login_key']);
$pass         = rtrim($_POST['pwfield']);
$user_id_auth = $_SESSION['user_data'];
if (isset($user_id_auth) && isset($pass) && isset($key)) {
    $sql    = "SELECT * FROM auth_user WHERE security='$key'";
    $result = mysqli_query($con, $sql);
    $count  = mysqli_num_rows($result);
    if ($count == 1) {
        mysqli_query($con, "UPDATE auth_user SET pass_key='$pass' WHERE login_id='$user_id_auth'");
        echo "<head><script>alert('Password Updated ,Login Again');</script></head></html>";
        echo "<meta http-equiv='refresh' content='0; url=logout.php'>";
    } else {
        echo "<head><script>alert('Change Unsuccessful');</script></head></html>";
        echo "<meta http-equiv='refresh' content='0; url=more-userprofile.php'>";
    }
} else {
    echo "<head><script>alert('Change Unsuccessful');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=more-userprofile.php'>";
}
?>
<center>
<img src="loading.gif">
</center>