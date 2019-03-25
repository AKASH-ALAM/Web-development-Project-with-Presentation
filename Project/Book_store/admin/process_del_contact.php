<?php

	require('includes/config.php');
			
			$query="delete from contact where con_id =".$_GET['id'];
		
			mysqli_query($conn,$query) or die("can't Execute...");
			
			
			header("location:contact.php");

?>