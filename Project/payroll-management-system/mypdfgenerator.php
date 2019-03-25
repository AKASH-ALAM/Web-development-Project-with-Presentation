<?php
 // INCLUDE THE phpToPDF.php FILE
require("phpToPDF.php"); 
$employee_id = $_GET['employee_id'];
// SET YOUR PDF OPTIONS
// FOR ALL AVAILABLE OPTIONS, VISIT HERE:  http://phptopdf.com/documentation/
$pdf_options = array(
  "source_type" => 'url',
  "source" => "localhost/pms/export1.php?employee_id=$res[employee_id]",
  "action" => 'save',
  "save_directory" => '',
  "file_name" => 'payslip.pdf');

// CALL THE phptopdf FUNCTION WITH THE OPTIONS SET ABOVE
phptopdf($pdf_options);

// OPTIONAL - PUT A LINK TO DOWNLOAD THE PDF YOU JUST CREATED
echo ("<a href='payslip.pdf'>Download Your PDF</a>");
?>