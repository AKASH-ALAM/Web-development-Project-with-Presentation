<ul>
			<li class="current_page_item"><a href="index.php">Home</a></li>
			<!--<li><a href="register.php">Register</a></li>-->
			<?php 
					if(isset($_SESSION['status']))
					{
						
						echo '<li><a href="logout.php">Logout</a></li>';
					}
					else
					{
						echo '<li><a href="register.php">Register</a></li>';
					}
			?>
			
			
			<li class="last"><a href="contact.php">Contact</a></li>
			<li class="last"><a href="aboutus.php">About Us</a></li>
			<li><a href="viewcart.php">View Cart</a></li>
			
</ul>