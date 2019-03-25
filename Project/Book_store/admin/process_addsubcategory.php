<?php
require('includes/config.php');
	if(!empty($_POST))
	{
		$msg=array();
		if(empty($_POST['subcat']) || empty($_POST['parent']))
		{
			$msg[]="Please full fill all requirement";
		}
		
		if(!empty($msg))
		{
			echo '<b>Error:-</b><br>';
			
			foreach($msg as $k)
			{
				echo '<li>'.$k;
			}
		}
		else
		{
		
			
		
			$parent = $_POST['parent'];
			$subcat=$_POST['subcat'];
			
			$query="insert into subcat(parent_id, subcat_nm) values('$parent','$subcat')";
			
			mysqli_query($conn,$query) or die("can't Execute...");
			
			header("location:subcategory.php");
		}
	}
	else
	{
		header("location:index.php");
	}
?>
	
	