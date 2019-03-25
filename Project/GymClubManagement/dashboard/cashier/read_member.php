

<?php
require 'db_conn.php';
page_protect();
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
					<img src="../../img/logo.png" alt="" width="192" height="80" />
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

		<h3>Sam's Slim Gym</h3>

			Details of : - <?php
			$id     = $_POST['name'];
			$query  = "select * from user_data WHERE newid='$id'";
			//echo $query;
			$result = mysqli_query($con, $query);

			if (mysqli_affected_rows($con) != 0) {
			    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			        $name = $row['name'];
			        echo $name;
			    }
			}
			?>

		<hr />
		
		<table class="table table-bordered datatable" id="table-1">
			<thead>
				<tr>
					<th>Image</th>
					<th>Membership ID</th>
					<th>Name</th>
					<th>Age / Sex</th>
					<th>Join On</th>
				</tr>
			</thead>
				<tbody>
					<?php
					$query  = "select * from user_data WHERE newid='$id'";
					//echo $query;
					$result = mysqli_query($con, $query);
					if (mysqli_affected_rows($con) != 0) {
					    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {	        
					        
					        
					        echo "<tr><td><img src='" . $row['pic_add'] . "'></td>";
					        echo "<td>" . $row['newid'] . "</td>";
					        echo "<td>" . $row['name'] . "</td>";
					        echo "<td>" . $row['age'] . " / " . $row['sex'] . "</td>";
					        echo "<td>" . $row['joining'] . "</td></tr>";
					    }

					}
					?>								
				</tbody>
		</table>
				Details of : - <?php
				$id     = $_POST['name'];
				$query  = "select * from user_data WHERE newid='$id'";
				//echo $query;
				$result = mysqli_query($con, $query);

				if (mysqli_affected_rows($con) != 0) {
				    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
				        $name = $row['name'];
				        echo $name;
				    }
				}
				?>
		<table class="table table-bordered datatable" id="table-1">
			<thead>
				<tr>
					<th>S.No</th>
					<th>Name</th>
					<th>Membership</th>
					<th>Payment Date</th>
					<th>Total  / Paid</th>
					<th>Invoice</th>
					<th>Membership Expiry</th>
					<th>Action</th>
				</tr>
			</thead>
				<tbody>
					<?php
						$memid  = $_POST['name'];
						$query  = "select * from subsciption WHERE mem_id='$memid'";
						//echo $query;
						$result = mysqli_query($con, $query);
						$sno    = 1;

						if (mysqli_affected_rows($con) != 0) {
						    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
						        $msgid = $row['invoice'];
						        echo "<td>" . $sno . "</td>";
						        echo "<td>" . $row['name'] . "</td>";
						        echo "<td>" . $row['sub_type_name'] . "</td>";
						        echo "<td>" . $row['paid_date'] . "</td>";
						        echo "<td>" . $row['total'] . " / " . $row['paid'] . "</td>";
						        echo "<td>" . $row['invoice'] . "</td>";
						        echo "<td>" . $row['expiry'] . "</td>";
						        
						        $sno++;
						        
						        echo "<td><form action='gen_invoice.php' method='post'><input type='hidden' name='name' value='" . $msgid . "'/><input type='submit' value='Print Invoice ' class='btn btn-info'/></form><form action='edit_invoice.php' method='post'><input type='hidden' name='name' value='" . $msgid . "'/><input type='submit' value='Edit Invoice ' class='btn btn-warning'/></form><form action='del_invoice.php' method='post' onSubmit='return ConfirmDelete();'><input type='hidden' name='name' value='" . $msgid . "'/><input type='submit' value='Delete Invoice ' class='btn btn-danger'/></form></td></tr>";
						        $msgid = 0;
						    }
						    
						}

					?>							
				</tbody>
		</table>



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

        <script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
    </script>
    </body>
</html>

