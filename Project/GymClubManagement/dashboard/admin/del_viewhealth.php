<?php
include 'db_conn.php';

$msgid = $_POST['name'];
if (strlen($msgid) > 0) {
    mysqli_query($con, "DELETE FROM healthstatus WHERE id='$msgid'");
    echo "<html><head><script>alert('Health Status Deleted');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_health.php'>";
} else {
    echo "<html><head><script>alert('ERROR! Delete Opertaion Unsucessfull');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_health.php'>";
}
mysqli_close($con);

?>

