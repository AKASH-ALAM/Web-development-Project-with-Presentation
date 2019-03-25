<?php

$opass = $_POST['opass'];
$npass = $_POST['npass'];

if(isset($_POST['prfl']))
{
	header('location:profile.php');

}
?>

<html>
<head>
<script>
function go()
{
	document.location="profile.php";
}
</script>
</head>
<div align="center">
<form method="post">
<p><b>Old Password : </b><input type="text" name="opass" placeholder="Old Password"></p>
<p><b>New Password : </b><input type="text" name="npass" placeholder="new Password"></p>
<p><input type="submit" value="Submit" name="prfl"></p>
</form>
</div>
</html> 