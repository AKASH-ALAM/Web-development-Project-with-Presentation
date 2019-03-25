<?php
$a = $_SERVER['HTTP_REFERER'];

if (strpos($a, '/e-has/') !== false) {
    
} else {
    header("Location: ../login/");
}

?>
<?php
include 'index.php';
include '../include/db_conn.php';
$key          = rtrim($_POST['login_key']);
$pass         = rtrim($_POST['pwfield']);
$user_id_auth = rtrim($_POST['login_id']);
if (isset($user_id_auth) && isset($pass) && isset($key)) {
    $sql    = "SELECT * FROM login_user_level WHERE login_key='$key'";
    $result = mysqli_query($con, $sql);
    $count  = mysqli_num_rows($result);
    if ($count == 1) {
        mysqli_query($con, "UPDATE login_user_level SET pass_key='$pass' WHERE login_id='$user_id_auth'");
        echo "<html><head><script>alert('Password Updated ,Login Again ');</script></head></html>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    } else {
        echo "<html><head><script>alert('Change Unsuccessful');</script></head></html>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    }
} else {
    echo "<html><head><script>alert('Change Unsuccessful');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}
?>
<center>
<img src="loading.gif">
</center>