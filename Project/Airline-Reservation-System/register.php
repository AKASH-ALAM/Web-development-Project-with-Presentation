<?php
session_start();
$conn = mysqli_connect("localhost","root","","airline");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
if (isset($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['age'];
$mob=$_POST['mob'];
$email=$_POST['email'];
$pw=$_POST['pw'];
$sql = "INSERT INTO passenger(Fname,Lname,age,mno,email,password) VALUES ('$fname', '$lname', '$age', '$mob','$email', '$pw');";
	if(mysqli_query($conn, $sql))
{  
	$message = "You have been successfully registered";
}
else
{  
	$message = "Could not insert record"; 
}
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<HTML>
<HEAD>
<TITLE>Register on Airline World</TITLE>
<style type="text/css">
html {
	background: url(airline4.jpg) no-repeat center center;
	background-size: cover;
}

#register_form	{
	width: 40%;
	margin: auto;
	border-radius: 25px;
	border: 2px solid blue;
	margin-top: 30px;
	padding-bottom: 20px;
	background-color: rgba(0,0,0,0.2);
    box-shadow: inset -2px -2px rgba(0,0,0,0.5);
}
.button	{
	border-radius: 5px;
	background-color: rgba(0,0,0,0);
 	padding: 7px 7px 7px 7px;
 	box-shadow: inset -1px -1px rgba(0,0,0,0.5);
 	font-family:"Comic Sans MS", cursive, sans-serif;
	font-size: 15px;
}
</style>
<script src="validation.js"></script>
</HEAD>
<BODY>
<?php include("nav.php") ?>
<div id="register_form" align="center" height="200" width="200">
<FORM name="register" method="post" action="register.php" onsubmit="return validate()">
<TABLE border="0">
<CAPTION><FONT size="6"><br/>Enter your details:</FONT></CAPTION>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5">First name:</FONT></TD>
<TD><INPUT name="fname" type="TEXT" placeholder="Enter your first name" size="30" maxlength="30" align="center" id="fname"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5">Last name:</FONT></TD>
<TD><INPUT type="TEXT" name="lname" align="center" size="30" maxlength="30" placeholder="Enter your last name" id="lname"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5">Age:</FONT></TD>
<TD><INPUT type="TEXT" name="age" align="center" size="30" maxlength="3" placeholder="Enter age" id="age"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5">Mobile Number:</FONT></TD>
<TD><INPUT type="TEXT" name="mob" size="30" maxlength="10" placeholder="Enter your mobile number" id="mob"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5">E-Mail ID:</FONT></TD>
<TD><INPUT name="email" type="TEXT" id="email" placeholder="Enter your E-Mail ID" size="30" maxlength="30"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5">Password:</FONT></TD>
<TD><INPUT type="PASSWORD" name="pw" size="30"  id="pw"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5">Confirm Password:</FONT></TD>
<TD><INPUT type="PASSWORD" name="cpw" size="30" id="cpw"></TD>
</TR><tr></tr><tr></tr><tr></tr><tr></tr>
<tr></tr>
</TABLE>
<P><INPUT TYPE="Submit" value="Submit" name="submit" id="submit" class="button">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<INPUT TYPE="Reset" value="Reset" id="reset" class="button"></P></FORM>
<HR width="450" style="border-color: blue;display: block;" noshade>
<FORM action="login.php">
<P align="CENTER"><FONT size="6" face="Arial">
Already have an account with us?<BR></FONT><br/><br/>
<INPUT TYPE="submit" value="Login" id="login" class="button">
</P>
</FORM></div>
</BODY>
</HTML>