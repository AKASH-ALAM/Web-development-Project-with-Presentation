<!DOCTYPE html>
<html>
<head>
<title>Airline World</title>
<style type="text/css">
a:link{color:white}
a:visited {color:white}
a:hover {color:white}
#gound{color: white}
html { 
  background: url(airline2.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
#main_area	{
	margin: auto auto;
	color: white;
	width:800px;
	height: 400px;
	margin: 0 auto;
	color:white;
	border-radius: 25px;
	margin-top:50px;
	padding-top: 30px;
	padding-right: 30px;
	padding-bottom: 30px;
	padding-left: 30px;
	background-color: rgba(0,0,0,0.3);
    box-shadow: inset -4px -4px rgba(0,0,0,0.5);
}
#welcometext	{
	font-family:"Comic Sans MS", cursive, sans-serif;
	font-size: 50px;
}
#registertext	{
	font-family:"Comic Sans MS", cursive, sans-serif;
	font-size: 25px;
}
#fillertext	{
	font-family:"Comic Sans MS", cursive, sans-serif;
	font-size: 35px;
}
</style>
</head>
<body>
<?php 
session_start();
include("nav.php") 
?>
<div align="center" id="main_area">
<div id="logo"><img src="Logo.jpg" alt="logo" height="100" width="100" align="left"/></div>
<div id="welcometext">Welcome To Airline World</div>
<br/><br/><br/><br/>
<div id="fillertext">Making your journey the best!</div>
<br/><br/><br/><br/><br/><br/><br/>
<div id="registertext">To fill the registration form please <a href="register.php">Click here</a><div>
</div>
</body>
</html>