<?php
    require('phpToPDF.php');
?>

<html>
<head>	
    <title>Exporting pdf</title>
    <link rel="stylesheet" href="assets/css/main.css" />

</head>
    <body>
    <section>
           

                <header>
                    <h2>Pay Slip</h2>
                </header>
                <?php

include("connection.php");

//getting id of the data from url
$employee_id = $_GET['employee_id'];

//deleting the row from table
$result = mysqli_query($conn, "Select * from employee WHERE employee_id=$employee_id");

echo "<table><tr><th>ID</th><th>Name</th><th>E-mail</th><th>City</th><th>Join Date</th><th>Monthly Pay</th><th>Tax</th><th>Gender</th><th>Province</th><th>Address</th><th>Export</th></tr>";
while($res = mysqli_fetch_array($result)) { 		
    
    echo "<tr><td>" . $res["employee_id"]. "</td><td>" . $res["name"]. "</td><td> " . $res["email"]. "</td><td> " . $res["city"]. "</td><td> " . $res["join_date"]. "</td><td> " . $res["monthly_pay"]." $". "</td><td> " . $res["tax"]." %". "</td><td>". $res["gender"]. "</td><td> " . $res["province"]. "</td><td> ". $res["address"]. "</td><td><a onclick= \"test()\">Export</a></td></tr>";
     }
    echo "</table>";
//redirecting to the display page (index.php in our case)

?>
 
        </section>
        
</body>
</html>

<script>
function test(){
    //alert("calling");
    alert(document.documentElement.outerHTML);
    $mytext=document.documentElement.outerHTML;

    <?php
    $pdf_options = array(
    "source_type" => "html",
      "source" => $mytext,
      "action" => "save",
      "save_directory" => "/",
      "file_name" => "my_filename.pdf");

    //Code to generate PDF file from options above
    phptopdf($pdf_options);
    ?>
}
</script>





