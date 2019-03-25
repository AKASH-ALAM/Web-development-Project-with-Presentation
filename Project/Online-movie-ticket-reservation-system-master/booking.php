<html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="savoyonline";


// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
else
{
    echo " ";
}

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $movie = mysqli_real_escape_string($conn,$_POST['movie']);
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $contactno = mysqli_real_escape_string($conn,$_POST['contactno']);
    $quantity = mysqli_real_escape_string($conn,$_POST['quantity']);
    $paymentmethod = mysqli_real_escape_string($conn,$_POST['paymentmethod']);
    $cardno = mysqli_real_escape_string($conn,$_POST['cardno']);
   

    $sql = "insert into booking (movie,name,email,contactno,quantity,paymentmethod,cardno)
VALUES ('$movie','$name','$email','$contactno','$quantity','$paymentmethod','$cardno')";
    $result = mysqli_query($conn,$sql);
    
    if($result)
    {
        echo" ";
    }else {
        echo "Error";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Savoy.lk</title>
<!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="footers/assets/css/Footer-with-map.css">

</head>
<body style="background-color:#efefef;">
<?php
      include_once "headers/header.php";
 ?>

<br>
<h2 class="text-center">Successfully Submitted</h2>
<br>
<div class="container"> 

<center><p><a href="now-showing.php" class="btn btn-primary" role="button"><span aria-hidden="true"></span> Ok</a> </p></center>

<!--Footer-->
<br>
<br>
<?php
      include_once "footers/Footer-with-map.html";
 ?>
</div>
 
<script src="js/jquery-1.11.3.min.js"></script> 
<script src="js/bootstrap.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<br>
<br>

</body>
</html>

 
 
</html>



