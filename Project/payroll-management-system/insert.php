<html>

<head>
    <title>Insert an employee</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="assets/css/main.css" />
  
</head>

<body>
<?php
     $gender="";
     $name="";
     $email="";
     $birth_date="";
     $address="";
     $city="";
     $province="";
     $website="";
     $join_date="";
     $basic_pay="";
     $employee_id="";
     $zip_code="";
     

     $genderErr="";
     $nameErr="";
     $emailErr="";
     $birth_dateErr="";
     $addressErr="";
     $cityErr="";
     $provinceErr="";
     $websiteErr="";
     $join_dateErr="";
     $basic_payErr="";
     $employee_idErr="";
     $zip_codeErr="";
     

     if($_SERVER["REQUEST_METHOD"]=="POST"){
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
          } else {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
              $nameErr = "Only letters and white space allowed"; 
            }
          }

        
         
            if (empty($_POST["gender"])) {
                $genderErr = "Gender is required";
              } else {
                $gender = test_input($_POST["gender"]);
         }
         
         if(empty($_POST["email"])){
            $emailErr = "Email is required";
        } else {
          $email = test_input($_POST["email"]);
          // check if e-mail address is well-formed
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format"; 
          }
        }
         
        
            if (empty($_POST["address"])) {
                $addressErr = "Address is required";
              } else {
                $address = test_input($_POST["address"]);
         }
        
        
            if (empty($_POST["city"])) {
                $cityErr = "city is required";
              } else {
                $city = test_input($_POST["city"]);
         }
         
        if (empty($_POST["province"])) {
            $provinceErr = "province is required";
          } else {
            $province = test_input($_POST["province"]);
         }
         
         if(empty($_POST["website"])){
            $website = "";
        } else {
          $website = test_input($_POST["website"]);
          // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
          if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            $websiteErr = "Invalid URL"; 
          }
        }
      
         
        if (empty($_POST["basic_pay"])) {
            $basic_payErr = "pay is required";
          } else {
            $basic_pay = test_input($_POST["basic_pay"]);
         }
        
         if (empty($_POST["employee_id"])) {
            $employee_idErr = "Id is required";
          } else {
            $employee_id = test_input($_POST["employee_id"]);
         }
         
         if (empty($_POST["zip"])) {
            $zip_codeErr = "zip is required";
          } else {
            $zip_code = test_input($_POST["zip"]);
         }
        
         if (empty($_POST["birth_date"])) {
            $birth_dateErr = "Birth Date is required";
          } else {
            $birth_date = test_input($_POST["birth_date"]);
         }
        
         if (empty($_POST["join_date"])) {
            $join_dateErr = "Date is required";
          } else {
            $join_date = test_input($_POST["join_date"]);
         }
   
         include("connection.php");


      



                $name = $conn->real_escape_string($_POST["name"]);
                $gender = $conn->real_escape_string($_POST["gender"]);
                $join_date = $conn->real_escape_string($_POST["join_date"]);
                $birth_date = $conn->real_escape_string($_POST["birth_date"]);
                $zip_code = $conn->real_escape_string($_POST["zip"]);
                $employee_id = $conn->real_escape_string($_POST["employee_id"]);
                $basic_pay = $conn->real_escape_string($_POST["basic_pay"]);
                $website = $conn->real_escape_string($_POST["website"]);
                $province = $conn->real_escape_string($_POST["province"]);
                $city = $conn->real_escape_string($_POST["city"]);
                $address = $conn->real_escape_string($_POST["address"]);
                $email = $conn->real_escape_string($_POST["email"]);
                    
                 $sql="INSERT INTO `employee` ( `employee_id`,`name`, `gender`, `birth_date`, `address`, `city`, `province`, `postal_code`, `email`, `website`, `join_date`, `annual_basic_pay`)
                  VALUES('$employee_id','$name','$gender','$birth_date',
                                '$address','$city','$province','$zip_code',
                               '$email','$website','$join_date','$basic_pay')";
                   $success = $conn->query($sql);


                   $mysql3="Update employee SET tax = 15 where annual_basic_pay < 45916; ";
                   $mysql4="Update employee SET tax = 20.5 where annual_basic_pay > 45916 AND annual_basic_pay < 91831; ";
                   $mysql5="Update employee SET tax = 26 where annual_basic_pay < 142353 AND annual_basic_pay > 91831; ";
                   $mysql6="Update employee SET tax = 29 where annual_basic_pay < 202800 AND annual_basic_pay > 142353; ";
                   $mysql7="Update employee SET tax = 33 where annual_basic_pay > 202800; ";
                   $conn->query($mysql3);
                   $conn->query($mysql4);
                   $conn->query($mysql5);
                   $conn->query($mysql6);
                   $conn->query($mysql7);



                   
                   $my="Update employee SET tax_amount = (annual_basic_pay/12) * ((tax+100)/100);";
                   $conn->query($my);
                    $mysql2="Update employee SET monthly_pay = (annual_basic_pay/6)- tax_amount;";
                    $conn->query($mysql2);
                   
                   if(!$success){
                       die("couldn't enter data: ".$conn->error);
         
                   }   else{
                    header("Location: payroll.php#about");
                   }
                   $conn->close();         



        }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
        
  ?>
  

        <!-- Header -->
        <div id="header">

            <div class="top">

                <!-- Logo -->
                <div id="logo">
                    <span class="image avatar48"><img src="images/avatar.jpg" alt="" /></span>
                    <h1 id="title">Admin</h1>
                    <p>Payroll Manager</p>
                </div>

                <!-- Nav -->
                <nav id="nav">

                    <ul>
                        <li><a href="payroll.php" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Home</span></a></li>
                        <li><a href="payroll.php" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-user">Employee</span></a></li>
                        <li><a href="payroll.php" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-th">list</span></a></li>
                        <li><a href="payroll.php" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Pay Slip</span></a></li>
                    </ul>
                </nav>

            </div>

            <div class="bottom">

                <!-- Social Icons -->
                <ul class="icons">
                    <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
                    <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                    <li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
                </ul>

            </div>

        </div>

        <!-- Main -->
        <div id="main">
            <div class="container">

                <form class="well form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="contact_form">
                    <fieldset>

                        <!-- Form Name -->
                        <legend>Add an Employee!</legend>

                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label">Employee Id</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input name="employee_id" placeholder="Employee Id" class="form-control" type="text" value="<?php echo $employee_id; ?>">
                                    <span style="color: red;">* <?php echo $employee_idErr;?></span>
                                </div>
                            </div>
                        </div>

                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label">Name</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input name="name" placeholder="Employee Name" class="form-control" type="text" value="<?php echo $name; ?>">
                                    <span style="color: red;">* <?php echo $nameErr;?></span>
                                </div>
                            </div>
                        </div>
                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label">Birth Date</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input name="birth_date" placeholder="Birth Date" class="form-control" type="date" value="<?php echo $birth_date; ?>">
                                    <span style="color: red;">* <?php echo $birth_dateErr;?></span>
                                </div>
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label">E-Mail</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                    <input name="email" placeholder="E-Mail Address" class="form-control" type="text" value="<?php echo $email; ?>">
                                    <span style="color: red;">* <?php echo $emailErr;?></span>
                                </div>
                            </div>
                        </div>


                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label">Gender</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                    <select name="gender"  class="form-control" value="<?php echo $gender; ?>">
                                    <option  >Please select your Gender</option>
                          <option>Male</option>
                          <option>Female</option>
                          
                          
                        </select>
                                    <span style="color: red;">* <?php echo $genderErr;?></span>
                                </div>
                            </div>
                        </div>

                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label">Address</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                    <input name="address" placeholder="Address" class="form-control" type="text" value="<?php echo $address; ?>">
                                    <span style="color: red;">* <?php echo $addressErr;?></span>
                                </div>
                            </div>
                        </div>

                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label">City</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                    <input name="city" placeholder="city" class="form-control" type="text" value="<?php echo $city; ?>">
                                    <span style="color: red;">* <?php echo $cityErr;?></span>
                                </div>
                            </div>
                        </div>

                        <!-- Select Basic -->

                        <div class="form-group">
                            <label class="col-md-4 control-label">Province</label>
                            <div class="col-md-4 selectContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                    <select name="province" class="form-control selectpicker" value="<?php echo $province; ?>">
                          <option  >Please select your Province</option>
                          <option>ON</option>
                          <option>QC</option>
                          <option >NS</option>
                          <option >NB</option>
                          <option >MB</option>
                          <option >BC</option>
                          <option >PE</option>
                          <option >SK</option>
                          <option >PE</option>
                          <option> SK</option>
                          <option >AB</option>
                          <option >NL</option>
                          
                        </select>
                        <span style="color: red;">* <?php echo $provinceErr;?></span>
                                </div>
                            </div>
                        </div>

                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label">Zip Code</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                    <input name="zip" placeholder="Zip Code" class="form-control" type="text" value="<?php echo $zip_code; ?>">
                                    <span style="color: red;">* <?php echo $zip_codeErr;?></span>
                                </div>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label">Website or domain name</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                                    <input name="website" placeholder="Website or domain name" class="form-control" type="text" value="<?php echo $website; ?>">
                                    <span style="color: red;">* <?php echo $websiteErr;?></span>
                                </div>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label">Join Date</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                                    <input name="join_date" placeholder="Joining Date" class="form-control" type="date" value="<?php echo $join_date; ?>">
                                    <span style="color: red;">* <?php echo $join_dateErr;?></span>
                                </div>
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label">Annual Pay</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                                    <input name="basic_pay" placeholder="Annual basic pay ($)" class="form-control" type="text" value="<?php echo $basic_pay; ?>">
                                    <span style="color: red;">* <?php echo $basic_payErr;?></span>
                                </div>
                            </div>
                        </div>
 



                        <!-- Success message -->
                        <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> New Employee Added.</div>

                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-4">
                                <button onclick="alert('Employee Added Successfully!')"<input type="submit" name="submit" value="Submit">ADD <span class="glyphicon glyphicon-send"></span></button>
                            </div>
                        </div>

                    </fieldset>
                </form>
               
            </div>
        </div>
        <!-- /.container -->

       
        
        <!-- Footer -->
        <div id="footer">

            <!-- Copyright -->
            <ul class="copyright">
                <li>&copy; PMS. All rights reserved.</li>
                <li>Design: Arsh</a></li>
            </ul>

        </div>

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/jquery.scrollzer.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
        <script src="assets/js/main.js"></script>
    
       
</body>
</html>