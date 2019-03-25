<?php

require("phpToPDF.php"); 

$mysql='<HTML>
<head>	
    <title> Exportpdf </title>
 <link rel="stylesheet" href="assets/css/main.css" />   

</head>
    <body>
    <section>
           

                <header>
                    <h2>Pay Slip</h2>
                </header>
                <?php

include("connection.php");


$employee_id = $_GET["employee_id"];


$result = mysqli_query($conn, "Select * from employee WHERE employee_id=$employee_id");

echo "<table><tr><th>ID</th><th>Name</th><th>E-mail</th><th>City</th><th>Join Date</th><th>Monthly Pay</th><th>Tax</th><th>Gender</th><th>Province</th><th>Address</th></tr>";
while($res = mysqli_fetch_array($result)) { 		
    
    echo "<tr><td>" . $res["employee_id"]. "</td><td>" . $res["name"]. "</td><td> " . $res["email"]. "</td><td> " . $res["city"]. "</td><td> " . $res["join_date"]. "</td><td> " . $res["monthly_pay"]." $". "</td><td> " . $res["tax"]." %". "</td><td>". $res["gender"]. "</td><td> " . $res["province"]. "</td><td> ". $res["address"]. 
    "</td></tr>";
     }
    echo "</table>";


?>
 
        </section>
        
</body>
</HTML>';
$pdf_options = array(
  "source_type" => 'html',
  "source" => $mysql,
  "action" => 'save',
  "save_directory" => '',
  "file_name" => 'html_01.pdf');

// CALL THE phpToPDF FUNCTION WITH THE OPTIONS SET ABOVE
phptopdf($pdf_options);

// OPTIONAL - PUT A LINK TO DOWNLOAD THE PDF YOU JUST CREATED
echo ("<a href='html_01.pdf'>Download Your PDF</a>");
?>
