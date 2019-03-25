<?php
require 'db_conn.php';
page_protect();
if (isset($_POST['name'])) {
    $id = $_POST['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Sam's Slim Gym| Admin </title>
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

		<h3>Edit Plan Details</h3>

		<hr />

			<form action="submit_viewhealth_edit.php" enctype="multipart/form-data" method="POST" role="form" class="form-horizontal form-groups-bordered">

			<?php
			    
			    $query  = "select * from healthstatus WHERE id='$id'";
			    //echo $query;
			    $result = mysqli_query($con, $query);
			    $sno    = 1;
			    
			    if (mysqli_affected_rows($con) == 1) {
			        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			            $id    = $row['id'];
			            $name    = $row['name'];
			            $date1    = $row['date1'];
			            $bodyfat = $row['bodyfat'];
			            $water = $row['water'];
			            $muscle = $row['muscle'];
			            $calorie = $row['calorie'];
			            $bone = $row['bone'];
			            $remarks = $row['remarks'];
			        }
			    }
			?>

				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">ID :</label>					
						<div class="col-sm-5">
							<input type="text" name="id" value="<?php echo $id; ?>" class="form-control" readonly/>
						</div>
				</div>

				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">Name :</label>					
						<div class="col-sm-5">
							<input type="text" name="name" id="name" class="form-control" value ='<?php echo $name; ?>' placeholder="Name" >
						</div>
				</div>


				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">Date :</label>					
						<div class="col-sm-5">
							<input type="text" name="date1"  id="date1" class="form-control" value ='<?php echo $date1; ?>'  placeholder="Date" readonly>
						</div>
				</div>

				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">Body Fat :</label>					
						<div class="col-sm-5">
							<input type="text" name="bodyfat" id="bodyfat" class="form-control" placeholder="Body Fat" value ='<?php echo $bodyfat; ?>' >
						</div>
				</div>										


				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">Water :</label>					
						<div class="col-sm-5">
							<input type="text" name="water" id="water" class="form-control" placeholder="Water" value ='<?php echo $water; ?>'>
						</div>
				</div>


				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">Muscle :</label>					
						<div class="col-sm-5">
							<input type="text" name="muscle" id="muscle" class="form-control" placeholder="Muscle" value ='<?php echo $muscle; ?>' >
						</div>
				</div>

				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">Calorie :</label>					
						<div class="col-sm-5">
							<input type="text" name="calorie" id="calorie" class="form-control" placeholder="Calorie" value ='<?php echo $calorie; ?>'>
						</div>
				</div>	

				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">Bone :</label>					
						<div class="col-sm-5">
							<input type="text" name="bone" id="bone" class="form-control" placeholder="Bone" value ='<?php echo $bone; ?>' >
						</div>
				</div>																

				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">Remarks :</label>					
						<div class="col-sm-5">
							<input type="text" name="remarks" id="remarks" class="form-control" placeholder="Remarks" value ='<?php echo $remarks; ?>'>
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

  
</body>
</html>	

<?php
} else {
    echo "<meta http-equiv='refresh' content='0; url=view_health.php'>";
}
?>
Access Denied
