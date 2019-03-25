
<?php
include('db_conn.php');

if ($_POST['id'] == "Others") {
    echo "Other Proof :<input type='text' name='other_proof' id='textfield' class='input-xlarge' data-rule-required='true' data-rule-minlength='1'  maxlength='50'>";
    
}


?>