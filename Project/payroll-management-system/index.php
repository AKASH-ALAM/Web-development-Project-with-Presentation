
<html>

<head>
    <meta charset="UTF-8">
    <title>Login Form</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/index.js"></script>


</head>

<body>

    <img src="images/p.png" style="position:absolute;top:15%;left:30%;">
    <div class="login">


        <form name="loginform" onsubmit="return validateForm();" action="payroll.php#top" method="post">
            <input type="text" name="usr" placeholder="Username" required="required" />
            <input type="password" name="pword" placeholder="Password" required="required" />
            <button type="submit" value="Login" class="btn btn-primary btn-block btn-large">Login</button>
        </form>
    </div>



</body>

</html>
