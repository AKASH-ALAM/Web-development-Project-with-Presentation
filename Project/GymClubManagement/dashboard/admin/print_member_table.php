<?php
require 'db_conn.php';
page_protect();
if (isset($_POST['name'])) {
    
    $mem_id  = $_POST['name'];
    $name    = $_POST['full_name'];
    $details = $_POST['details'];
    $date    = $_POST['date'];
    
} else {
    echo "<meta http-equiv='refresh' content='0; url=table_view.php'>";
    
}
?>
<!doctype html>

	<head>
		<meta charset="utf-8">
		<title>Invoice</title>
		<link rel="stylesheet" href="style.css">
		<script src="script.js"></script>
 <script type="text/javascript" src="jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="jquery-barcode.js"></script>
    <script type="text/javascript">
  
      function generateBarcode(){
        var value = "<?php
echo $mem_id;
?>";
        var btype = "code128";
        var renderer = "css";
        
		var quietZone = false;
        if ($("#quietzone").is(':checked') || $("#quietzone").attr('checked')){
          quietZone = true;
        }
		
        var settings = {
          output:renderer,
          bgColor: $("#bgColor").val(),
          color: $("#color").val(),
         
          moduleSize: $("#moduleSize").val(),
          posX: $("#posX").val(),
          posY: $("#posY").val(),
          addQuietZone: $("#quietZoneSize").val()
        };
        if ($("#rectangular").is(':checked') || $("#rectangular").attr('checked')){
          value = {code:value, rect: true};
        }
        if (renderer == 'canvas'){
          clearCanvas();
          $("#barcodeTarget").hide();
          $("#canvasTarget").show().barcode(value, btype, settings);
        } else {
          $("#canvasTarget").hide();
          $("#barcodeTarget").html("").show().barcode(value, btype, settings);
        }
      }
          
      function showConfig1D(){
        $('.config .barcode1D').show();
        $('.config .barcode2D').hide();
      }
      
      function showConfig2D(){
        $('.config .barcode1D').hide();
        $('.config .barcode2D').show();
      }
      
      function clearCanvas(){
        var canvas = $('#canvasTarget').get(0);
        var ctx = canvas.getContext('2d');
        ctx.lineWidth = 1;
        ctx.lineCap = 'butt';
        ctx.fillStyle = '#FFFFFF';
        ctx.strokeStyle  = '#000000';
        ctx.clearRect (0, 0, canvas.width, canvas.height);
        ctx.strokeRect (0, 0, canvas.width, canvas.height);
      }
      
      $(function(){
        $('input[name=btype]').click(function(){
          if ($(this).attr('id') == 'datamatrix') showConfig2D(); else showConfig1D();
        });
        $('input[name=renderer]').click(function(){
          if ($(this).attr('id') == 'canvas') $('#miscCanvas').show(); else $('#miscCanvas').hide();
        });
        generateBarcode();
      });
  
    </script>
	</head>
	<body>
		<header>
			<a href="table_view.php"><h1>Time Schedule (Re-Print Slip)</h1></a>
			<address>
				<p>Galaxy The Gym</p>
				<p>M-21, Lane 2 ,Khalilullah Masjid</p><p>Jamia Nagar Oklha New Delhi 110025</p>
				<p>Mobile:-9873712786</p><p>www.galaxythegym.com (galaxythegym@gmail.com)</p><br><p><div id="barcodeTarget" class="barcodeTarget"></div>
    <canvas id="canvasTarget"></canvas> </span>
			</address>
			<span><img alt="" src="logo.png">
		</header>
		<article><img alt="" src="pic1.jpg" width="100" height="100">
			<table class="meta">
				
				<tr>
					<th><span  >Date</span></th>
					<td><span  ><?php
echo $date;
?></span></td>
				</tr>
				<tr>
					<th><span  >Member ID</span></th>
					<td><?php
echo $mem_id;
?></span></td>
				</tr>
			</table>	
<table class="meta">
				<tr>
					<th><span  >Name</span></th>
					<td><span  ><?php
echo $name;
?></span></td>
				</tr>
			</table>	
<table class="inventory">
				<thead>
					<tr>
						
						<th><span  >Details</span></th>
						
						
					</tr>
				</thead>

				<tbody>
					<tr>
						
						<td><span  ><?php
echo $details;
?></span></td>
						
					</tr>
				</tbody>
			</table>
			
			
			
		</article>
		<center>
<a href="table_view.php"><h1>Time Sechdule Print Slip</a></center></font></h1>
	</body>
</html>
