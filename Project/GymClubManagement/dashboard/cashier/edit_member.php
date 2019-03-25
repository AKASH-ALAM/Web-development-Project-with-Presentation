<?php
require 'db_conn.php';
page_protect();

if (isset($_POST['name'])) {
    $memid = $_POST['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Sam's Slim Gym</title>
    <link rel="stylesheet" href="../../neon/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css"  id="style-resource-1">
    <link rel="stylesheet" href="../../neon/css/font-icons/entypo/css/entypo.css"  id="style-resource-2">
    <link rel="stylesheet" href="../../neon/css/font-icons/entypo/css/animation.css"  id="style-resource-3">
    <link rel="stylesheet" href="../../neon/css/neon.css"  id="style-resource-5">
    <link rel="stylesheet" href="../../neon/css/custom.css"  id="style-resource-6">

    	<!-- Theme framework -->
	<script src="../../js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="../../js/application.min.js"></script>
	<!-- Just for demonstration -->
	<script src="../../js/demonstration.min.js"></script>

    <script src="../../neon/js/jquery-1.10.2.min.js"></script>

	<script src="../../js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
	<script src="../../js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
	<script src="../../js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
	<script src="../../js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
	<script src="../../js/plugins/jquery-ui/jquery.ui.spinner.js"></script>
	<script src="../../js/plugins/jquery-ui/jquery.ui.slider.js"></script>


    <script type="text/javascript">
		$(document).ready(function()
		{
		$(".country").change(function()
		{
		var id=$(this).val();
		var dataString = 'id='+ id;

		$.ajax
		({
		type: "POST",
		url: "ajax_city.php",
		data: dataString,
		cache: false,
		success: function(html)
		{
		$(".city").html(html);
		} 
		});

		});
		});
		    </script>
		<script type="text/javascript">
		$(document).ready(function()
		{
		$(".country1").change(function()
		{
		var id=$(this).val();
		var dataString = 'id='+ id;

		$.ajax
		({
		type: "POST",
		url: "ajax_city1.php",
		data: dataString,
		cache: false,
		success: function(html)
		{
		$(".city1").html(html);
		} 
		});

		});
		});
    </script>


    <SCRIPT LANGUAGE="JavaScript">
		function checkIt(evt) {
		    evt = (evt) ? evt : window.event
		    var charCode = (evt.which) ? evt.which : evt.keyCode
		    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
		        status = "This field accepts numbers only."
		        return false
		    }
		    status = ""
		    return true
		}
	</SCRIPT>

	<script type="text/javascript" src="webcam.js"></script>

</head>
    <body class="page-body  page-fade">

    	<div class="page-container">	
	
		<div class="sidebar-menu">
	
			<header class="logo-env">
			
				<!-- logo -->
				<div class="logo">
					<a href="main.php">
						<img src="images/logo.png" alt="" width="192" height="80" />
					</a>
				</div>
				
						<!-- logo collapse icon -->
				<div class="sidebar-collapse">
					<a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
						<i class="entypo-menu"></i>
					</a>
				</div>
								
				
				<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
				<div class="sidebar-mobile-menu visible-xs">
					<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
						<i class="entypo-menu"></i>
					</a>
				</div>
			</header>

    		<?php include('nav.php'); ?>
    	</div>

    		<div class="main-content">
		
				<div class="row">
					
					<!-- Profile Info and Notifications -->
					<div class="col-md-6 col-sm-8 clearfix">	

					</div>
				
					<!-- Raw Links -->
					<div class="col-md-6 col-sm-4 clearfix hidden-xs">
						
						<ul class="list-inline links-list pull-right">


							<li>Welcome <?php echo $_SESSION['full_name']; ?> 
							</li>							
						
							<li>
								<a href="logout.php">
									Log Out <i class="entypo-logout right"></i>
								</a>
							</li>
						</ul>
					</div>
			</div>

		<h3>Edit Member Details</h3>

		<hr />

			<form action="edit_mem_submit.php" enctype="multipart/form-data" method="POST" role="form" class="form-horizontal form-groups-bordered">

				<?php
	    
				    $query  = "select * from user_data WHERE newid='$memid'";
				    //echo $query;
				    $result = mysqli_query($con, $query);
				    $sno    = 1;
				    
				    if (mysqli_affected_rows($con) == 1) {
				        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
				            $pic_src = $row['pic_add'];
				            $name    = $row['name'];
				            $email   = $row['email'];
				            $address   	 = $row['address'];
				            $zipcode = $row['zipcode'];
				            $birthdate	 = $row['birthdate'];
				            $age     = $row['age'];
				            $date    = $row['joining'];
				            $address = $row['address'];
				            $contact = $row['contact'];
				            $height  = $row['height'];
				            $weight  = $row['weight'];
				            $nationality  = $row['nationality'];
				            $facebookaccount  = $row['facebookaccount'];
				            $twitteraccount  = $row['twitteraccount'];
				            $contactperson  = $row['contactperson'];
				            $previousgym  = $row['previousgym'];
				            $yearstraining  = $row['yearstraining'];

				        }
				    }


				?>

				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">Membership ID :</label>					
						<div class="col-sm-5">
							<input type="text" name="p_id" value="<?php echo $memid;?>" class="form-control" readonly/>
						</div>
				</div>

				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">Photo :</label>					
						<div class="col-sm-5">
							<img src='<?php echo $pic_src; ?>'>
						</div>
				</div>			

				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">Name :</label>					
						<div class="col-sm-5">
							<input type="text" name="p_name" id="textfield3" class="form-control" data-rule-required="true" data-rule-minlength="4" value ='<?php echo $name; ?>' placeholder="Member Name" maxlength="30">
						</div>
				</div>

				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">Address :</label>					
						<div class="col-sm-5">
							<input type="text" name="add" id="textfield5" class="form-control" data-rule-required="true" data-rule-minlength="6" value ='<?php echo $address; ?>'  placeholder="Address">
						</div>
				</div>

				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">Zip Code :</label>					
						<div class="col-sm-5">
							<input type="text" name="zipcode" id="zipcode" class="form-control" data-rule-required="true" data-rule-minlength="4" value ='<?php echo $zipcode; ?>' placeholder="Zip Code" maxlength="30">
						</div>
				</div>

				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">Birth Date :</label>					
						<div class="col-sm-5">
							<input type="text" name="birthdate" id="birthdate" class="form-control datepicker" value ='<?php echo $birthdate; ?>' data-format="yyyy-m-d">
						</div>
				</div>

				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">Age :</label>					
						<div class="col-sm-5">
							<input type="text" name="age" id="textfield4" class="form-control" data-rule-required="true" data-rule-minlength="1" placeholder="Age" value ='<?php echo $age; ?>'  onKeyPress="return checkIt(event)" maxlength="3">
						</div>
				</div>					

				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">Sex :</label>					
						<div class="col-sm-5">
						<select name="sex" id="bbb" data-rule-required="true" class="form-control" value ='<?php echo $sex; ?>'>
						    <option value="">-- Please select --</option>
						    <option value="Male">Male</option>
						    <option value="Female">Female</option>
						</select>
						</div>
				</div>

				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">Height :</label>					
						<div class="col-sm-5">
							<input type="text" name="height" id="textfield" class="form-control" data-rule-required="true" data-rule-minlength="1" placeholder="Height" onKeyPress="return checkIt(event)" value ='<?php echo $height; ?>' maxlength="3"> (In Feet)
						</div>
				</div>

				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">Weight :</label>					
						<div class="col-sm-5">
							<input type="text" name="weight" id="textfield" class="form-control" data-rule-required="true" data-rule-minlength="1" placeholder="Weight" onKeyPress="return checkIt(event)" value ='<?php echo $weight; ?>'  maxlength="3"> (In Kgs)
	    				</div>
				</div>

				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">Nationality :</label>					
						<div class="col-sm-5">
							<input type="text" name="nationality" id="nationality" class="form-control" data-rule-required="true" data-rule-minlength="6" value ='<?php echo $nationality; ?>'  placeholder="Nationality">
						</div>
				</div>

				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">Contact :</label>					
						<div class="col-sm-5">
							<input type="text" name="contact" id="textfield6" class="form-control" data-rule-required="true" data-rule-minlength="10" placeholder="Mobile / Phone" value ='<?php echo $contact; ?>'  onKeyPress="return checkIt(event)" maxlength="10">
						</div>
				</div>										

				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">E-Mail :</label>					
						<div class="col-sm-5">
							<input type="text" name="email"  id="emailfield" class="form-control" value ='<?php echo $email; ?>'  data-rule-minlength="5" placeholder="E-Mail" maxlength="60">
						</div>
				</div>

				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">Facebook Account :</label>					
						<div class="col-sm-5">
							<input type="text" name="facebookaccount" id="facebookaccount" class="form-control" data-rule-required="true" data-rule-minlength="6" value ='<?php echo $facebookaccount; ?>'  placeholder="Facebook Account">
						</div>
				</div>						

				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">Twitter Account :</label>					
						<div class="col-sm-5">
							<input type="text" name="twitteraccount" id="twitteraccount" class="form-control" data-rule-required="true" data-rule-minlength="6" value ='<?php echo $twitteraccount; ?>'  placeholder="Twitter Account">
						</div>
				</div>						


				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">Contact Person :</label>					
						<div class="col-sm-5">
							<input type="text" name="contactperson" id="contactperson" class="form-control" data-rule-required="true" data-rule-minlength="6" value ='<?php echo $contactperson; ?>'  placeholder="Contact Person">
						</div>
				</div>	

				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">Previous Gym :</label>					
						<div class="col-sm-5">
							<input type="text" name="previousgym" id="previousgym" class="form-control" data-rule-required="true" data-rule-minlength="6" value ='<?php echo $previousgym; ?>'  placeholder="Previous Gym">
						</div>
				</div>					

				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">Years Training:</label>					
						<div class="col-sm-5">
							<input type="text" name="yearstraining" id="yearstraining" class="form-control" data-rule-required="true" data-rule-minlength="6" value ='<?php echo $yearstraining; ?>'  placeholder="Years Training">
						</div>
				</div>	

				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">Proof Given :</label>					
						<div class="col-sm-5">
						<select name="proof" id="bbb" data-rule-required="true" class="form-control" value ='<?php echo $proof; ?>'>
							    <option value="">-- Please select --</option>
							    <option value="GSIS Card">GSIS Card</option>
							    <option value="Voter Card">Voter Card</option>
								<option value="Driving License">Driving License</option>
								<option value="Passport">Passport</option>
								<option value="College/School ID">College/School ID</option>
								<option value="Others">Others</option>
						</select>
						
						</div>
				</div>				

				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">Join Date :</label>					
						<div class="col-sm-5">
							<input type="text" name="date" id="textfield22" class="form-control" value ='<?php echo $date; ?>' >
						</div>
				</div>	

				

			
	 
										
	
	                                    
				<div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-primary">Save changes</button>	
						</div>
				</div>		

			

			</form>

			<?php include('footer.php'); ?>
    	</div>


    <script src="../../neon/js/gsap/main-gsap.js" id="script-resource-1"></script>
    <script src="../../neon/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js" id="script-resource-2"></script>
    <script src="../../neon/js/bootstrap.min.js" id="script-resource-3"></script>
    <script src="../../neon/js/joinable.js" id="script-resource-4"></script>
    <script src="../../neon/js/resizeable.js" id="script-resource-5"></script>
    <script src="../../neon/js/neon-api.js" id="script-resource-6"></script>
    <script src="../../neon/js/jquery.validate.min.js" id="script-resource-7"></script>
    <script src="../../neon/js/neon-login.js" id="script-resource-8"></script>
    <script src="../../neon/js/neon-custom.js" id="script-resource-9"></script>
    <script src="../../neon/js/neon-demo.js" id="script-resource-10"></script>
    <script src="../../neon/js/bootstrap-datepicker.js" id="script-resource-11"></script>

  
</body>
</html>	

<?php
} else {
    
}
?>