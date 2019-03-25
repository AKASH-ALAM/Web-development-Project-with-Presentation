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
<h2 class="text-center">BOOKING DETAILS</h2>
<br>

<div class="container">
  <div class="row text-center">
    <div class="col-lg-4 col-xs-6 col-sm-3 col-md-5">
      <div class="thumbnail"> <img src="images/21.jpg" alt="Thumbnail Image 1" class="img-responsive">      
      </div>
    </div>
<form action="booking.php" method="post">
    <div class="col-md-7">
      <h3 class="col-md-12"> Insidious - The Last Key (2018)</h3>
      <p class="col-md-12" id="mDescrip">Brilliant parapsychologist Elise Rainier receives a disturbing phone call from a man who claims that his house is haunted. Even more disturbing is the address 413 Apple Tree Lane in Five Keys, N.M. -- the home where Elise grew up as a child. Accompanied by her two investigative partners, Rainier travels to Five Keys to confront and destroy her greatest fear -- the demon that she accidentally set free years earlier.</p>
    </div>
    <div class="col-md-7" align="center" style="padding-top: 40px; padding-bottom: 40px" >
    <h3>Enter Booking Details</h3>

  <div class="input-group input-group-sm" style="width: 70%">
  <input type="text" name="movie" class="form-control" value="Insidious - The Last Key (2018)" readonly>
  </div>
  <div class="input-group input-group-sm" style="width: 70%">
  <input type="text" name="name" class="form-control" placeholder="Full Name" required>
  </div>
      <div class="input-group input-group-sm" style="width: 70%">
      <input type="email" name="email" class="form-control" placeholder="Email" required>
      </div>
  <div class="input-group input-group-sm" style="width: 70%">
  <input type="tel" name="contactno" class="form-control" placeholder="Contact No" onkeypress='return event.charCode >= 48 && event.charCode<=57' title="Enter 10 digit mobile number" required>
  </div>
<div class="input-group input-group-sm" style="width: 70%">
 <input type="number" name="quantity" class="form-control" placeholder="Quantity" min="1" required>
 </div>
<div style="width: 70%;height: 80px" >
 <div style="width: 100%;margin-top: 5px; font-family: Consolas" align="left">
    
   <label> Payment Method </label>
   </div>
   
   <p style="width: 50%" align="left">
     <label>
       <input type="radio" name="paymentmethod" value="paypal" id="payment_0" required>
       paypal</label>
     <br>
     <label>
       <input type="radio" name="paymentmethod" value="credit/debit" id="payment_1" required>
       credit/debit</label>
     <br>
   </p>
   </div>
    <div class="input-group input-group-sm" style="width: 70%">
  <input type="text" name="cardno" class="form-control" placeholder="Card Number" onkeypress='return event.charCode >= 48 && event.charCode<=57' required>
  </div>    
  <br>
  <!--
  <a href="booking.php" class="btn btn-primary" role="button"><span aria-hidden="true"></span> Book Now</a>
-->
<input type="submit" value="Book Now" class="btn btn-primary" role="button"><span aria-hidden="true"></span> 
</form>

</div>
</div>

<!--Footer-->

<br>
<?php
      include_once "footers/Footer-with-map.html";
 ?>

<script src="js/jquery-1.11.3.min.js"></script> 
<script src="js/bootstrap.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<br>
<br>

</body>
</html>

 