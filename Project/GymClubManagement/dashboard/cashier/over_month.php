
<?php
require 'db_conn.php';
page_protect();

if (isset($_POST['from'])) {
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

		<h3>Members</h3>

		<hr / >

		<?php
		    $from = $_POST['from'];
		    $to   = $_POST['to'];
		?>	

		Members From :<?php
		    echo $from;
		?>   To : <?php
		    echo $to;
		?>

		<table class="table table-bordered datatable" id="table-1">
				<thead>
					<tr>
						<th>S.No</th><th>Membership ID</th>
						<th>Name</th>
						<th>Age / Sex</th>
						<th>Join On</th>
					</tr>
				</thead>
				<tbody>
				<?php   
				    $query  = "select * from user_data WHERE joining BETWEEN '$from' AND '$to'";
				    //echo $query;
				    $result = mysqli_query($con, $query);
				    $sno    = 1;
				    
				    if (mysqli_affected_rows($con) != 0) {
				        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
				            
				            
				            
				            echo "<tr><td>" . $sno . "</td>";
				            echo "<td>" . $row['newid'] . "</td>";
				            echo "<td>" . $row['name'] . "</td>";
				            echo "<td>" . $row['age'] . " / " . $row['sex'] . "</td>";
				            echo "<td>" . $row['joining'] . "</td>";
				            
				            $sno++;
				            
				        }
				        
				        
				    }
				    
				?>									
				</tbody>
			</table>
							
			<h4>Total Members in This Date Range :<?php echo $sno - 1; ?></h4>

			<?php
				    $from = $_POST['from'];
				    $to   = $_POST['to'];
			?>

			Members Payments :<?php
				    echo $from;
				?>   To : <?php
				    echo $to;
			?>

			<table class="table table-bordered datatable" id="table-1">
				<thead>
					<tr>
						<th>S.No</th><th>Membership ID</th>
						<th>Name</th>
						<th>Age / Sex</th>
						<th>Join On</th>
					</tr>
				</thead>
				<tbody>
				<?php   
				    $query  = "select * from user_data WHERE joining BETWEEN '$from' AND '$to'";
				    //echo $query;
				    $result = mysqli_query($con, $query);
				    $sno    = 1;
				    
				    if (mysqli_affected_rows($con) != 0) {
				        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
				            
				            
				            
				            echo "<tr><td>" . $sno . "</td>";
				            echo "<td>" . $row['newid'] . "</td>";
				            echo "<td>" . $row['name'] . "</td>";
				            echo "<td>" . $row['age'] . " / " . $row['sex'] . "</td>";
				            echo "<td>" . $row['joining'] . "</td>";
				            
				            $sno++;
				            
				        }
				        
				        
				    }
				    
				?>									
				</tbody>
			</table>

			<table class="table table-nomargin dataTable dataTable-tools  table-bordered">
				<thead>
					<tr>
						<th>S.No</th>
						<th>Membership ID</th>
						<th>Name</th>
						<th>Total / Paid</th>
						<th>Expiry</th>
						<th>Payment Date</th><th>invoice</th>										
					</tr>
				</thead>
				<tbody>
						<?php
						    $query  = "select * from subsciption WHERE paid_date BETWEEN '$from' AND '$to'";
						    //echo $query;
						    $result = mysqli_query($con, $query);
						    $sno    = 1;
						    $total  = 0;
						    if (mysqli_affected_rows($con) != 0) {
					        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {         
								echo "<tr><td>" . $sno . "</td>";
								echo "<td>" . $row['mem_id'] . "</td>";
								echo "<td>" . $row['name'] . "</td>";
								echo "<td>" . $row['total'] . " / " . $row['paid'] . "</td>";
								echo "<td>" . $row['expiry'] . "</td>";
								echo "<td>" . $row['paid_date'] . "</td>";
								echo "<td>" . $row['invoice'] . "</td>";
								$total = $total + $row['total'];
								$sno++;
								            
								        }
								        
								        
								    }
								    
							?>									
					</tbody>
				</table>
				
				<h4>Total Payments in This Date Range :<?php echo $sno - 1; ?></h4>
				<h4>Total Income in This Date Range :<?php echo $total;?></h4>

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

	<link rel="stylesheet" href="../../neon/js/select2/select2-bootstrap.css"  id="style-resource-1">
	<link rel="stylesheet" href="../../neon/js/select2/select2.css"  id="style-resource-2">

	<script src="../../neon/js/jquery.dataTables.min.js" id="script-resource-7"></script>
	<script src="../../neon/js/dataTables.bootstrap.js" id="script-resource-8"></script>
	<script src="../../neon/js/select2/select2.min.js" id="script-resource-9"></script>

	<script src="../../neon/js/bootstrap-datepicker.js" id="script-resource-11"></script>



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
					
<?php
}

?>


