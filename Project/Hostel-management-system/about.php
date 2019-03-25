<?php
//change about 
$q5 = "SELECT abouthead FROM admin WHERE id=1";
$q51 = mysqli_query($con,$q5);
$disp = mysqli_fetch_array($q51);
//echo $disp['abouthead'];

$q6 = "SELECT aboutinfo FROM admin WHERE id=1";
$q61 = mysqli_query($con,$q6);
$disp2 = mysqli_fetch_array($q61);


?>
<h1 style="color:#000000"><b><u><center><?php echo $disp['abouthead']; ?></center></u></b></h1>

<h3><b>Our mission</b></h3>
<font size="+1"><?php echo $disp2['aboutinfo']; ?></font>
