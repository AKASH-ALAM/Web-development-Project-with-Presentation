<?php
include '../new_p_submit.php';
?><!doctype html>

	<head>
		<meta charset="utf-8">
		<title>Invoice</title>
		<link rel="stylesheet" href="style.css">
		<link rel="license" href="http://www.opensource.org/licenses/mit-license/">
		<script src="script.js"></script>
	</head>
	<body>
		<header>
			<h1>Invoice</h1>
			<address>
				<p>World Hospital</p>
				<p>101 E. Chapman Ave<br>Orange, CA 92866</p>
				<p>(800) 555-1234</p>
			</address>
			<span><img alt="" src="logo.png"></span>
		</header>
		<article>
			<table class="meta">
				<tr>
					<th><span  >Invoice #</span></th>
					<td><span  ><?php echo $p_id;?></span></td>
				</tr>
				<tr>
					<th><span  >Date</span></th>
					<td><span  >January 1, 2012</span></td>
				</tr>
				<tr>
					<th><span  >Amount Due</span></th>
					<td><span id="prefix"  >$</span><span>600.00</span></td>
				</tr>
			</table>
			<table class="inventory">
				<thead>
					<tr>
						<th><span  >Item</span></th>
						<th><span  >Description</span></th>
						<th><span  >Rate</span></th>
						<th><span  >Quantity</span></th>
						<th><span  >Price</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><span  >Front End Consultation</span></td>
						<td><span  >Experience Review</span></td>
						<td><span data-prefix>$</span><span  >150.00</span></td>
						<td><span  >4</span></td>
						<td><span data-prefix>$</span><span>600.00</span></td>
					</tr>
				</tbody>
			</table>
			
			<table class="balance">
				<tr>
					<th><span  >Total</span></th>
					<td><span data-prefix>$</span><span>600.00</span></td>
				</tr>
				<tr>
					<th><span  >Amount Paid</span></th>
					<td><span data-prefix>$</span><span  >0.00</span></td>
				</tr>
				<tr>
					<th><span  >Balance Due</span></th>
					<td><span data-prefix>$</span><span>600.00</span></td>
				</tr>
			</table>
		</article>
		<aside>
			<h1><span  >Additional Notes</span></h1>
			<div  >
				<p>A finance charge of 1.5% will be made on unpaid balances after 30 days.</p>
			</div>
		</aside>
	</body>
</html>