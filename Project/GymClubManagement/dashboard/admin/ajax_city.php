
<?php
include('db_conn.php');
if ($_POST['id']) {
    $id = $_POST['id'];
    
    $query = "select * from mem_types WHERE mem_type_id='$id'";
    
    //echo $query;
    $result = mysqli_query($con, $query);
    
    if (mysqli_affected_rows($con) != 0) {
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            
            echo "Total Cost :<input type='text' name='total' id='textfield' class='input-small' data-rule-required='true' data-rule-minlength='1'value='" . $row['rate'] . "' maxlength='10'><br><br><p>Total Paid: :<input type='text' name='paid' id='textfield' class='input-small' data-rule-required='true' data-rule-minlength='1'  onKeyPress='return checkIt(event)' maxlength='10'>";
            
        }
    }
}


?>