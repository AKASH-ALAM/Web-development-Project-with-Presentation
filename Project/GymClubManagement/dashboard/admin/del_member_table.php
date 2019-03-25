<?php
include 'db_conn.php';
page_protect();

$msgid = $_POST['name'];
if (strlen($msgid) > 0) {
    mysqli_query($con, "DELETE FROM time_table WHERE mem_id='$msgid'");
    echo "<html><head><script>alert('Time Table Deleted');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=table_view.php'>";
} else {
    echo "<html><head><script>alert('ERROR! Delete Opertaion Unsucessfull');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=table_view.php'>";
}
mysqli_close($con);

?>