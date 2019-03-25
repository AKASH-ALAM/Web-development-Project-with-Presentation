<?php
require('includes/config.php');

	if(!empty($_POST))
	{
		$msg=array();
		if(empty($_POST['name']) || empty($_POST['description']) || empty($_POST['publisher'])|| empty($_POST['edition']) || empty($_POST['isbn']) || empty($_POST['pages']) || empty($_POST['price']))
		{
			$msg[]="Please full fill all requirement";
		}
		if(!(is_numeric($_POST['price'])))
		{
			$msg[]="Price must be in Numeric  Format...";
		}
		if(!(is_numeric($_POST['pages'])))
		{
			$msg[]="Page must be in Numeric  Format...";
		}
		
		if(empty($_FILES['img']['name']))
		$msg[] = "Please provide a file";
	
		if($_FILES['img']['error']>0)
		$msg[] = "Error uploading file";
		
				
		if(!(strtoupper(substr($_FILES['img']['name'],-4))==".JPG" || strtoupper(substr($_FILES['img']['name'],-5))==".JPEG"|| strtoupper(substr($_FILES['img']['name'],-4))==".GIF"))
			$msg[] = "wrong file  type";
			
		if(file_exists("../upload_image/".$_FILES['img']['name']))
			$msg[] = "File already uploaded. Please do not updated with same name";
		
		if(empty($_FILES['ebook']['name']))
		$msg[] = "Please provide a document file";
	
		if($_FILES['ebook']['error']>0)
		$msg[] = "Error uploading document file";
		
		
		if(!(strtoupper(substr($_FILES['ebook']['name'],-4))==".PDF" || strtoupper(substr($_FILES['ebook']['name'],-4))==".PPT" ||strtoupper(substr($_FILES['ebook']['name'],-5))==".PPTX" ||  strtoupper(substr($_FILES['ebook']['name'],-4))==".DOC"|| strtoupper(substr($_FILES['ebook']['name'],-4))==".TXT"|| strtoupper(substr($_FILES['ebook']['name'],-5))==".DOCX"))
			$msg[] = "wrong document file  type";
			
		if(file_exists("../upload_ebook/".$_FILES['ebook']['name']))
			$msg[] = "Document File already uploaded. Please do not updated with same name";
		
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
			move_uploaded_file($_FILES['img']['tmp_name'],"../upload_image/".$_FILES['img']['name']);
			$b_img = "upload_image/".$_FILES['img']['name'];	
			
			move_uploaded_file($_FILES['ebook']['tmp_name'],"../upload_ebook/".$_FILES['ebook']['name']);
			$b_pdf = "upload_ebook/".$_FILES['ebook']['name'];	
		
			$b_nm=$_POST['name'];
			$b_cat=$_POST['cat'];
			$b_desc=$_POST['description'];
			$b_edition=$_POST['edition'];
			$b_publisher=$_POST['publisher'];			
			$b_isbn=$_POST['isbn'];
			$b_pages=$_POST['pages'];
			$b_price=$_POST['price'];
			
			
		
			
			$query="insert into book(b_nm,b_subcat,b_desc,b_edition,b_publisher,b_isbn,b_page,b_price,b_img,b_pdf)
			values('$b_nm','$b_cat','$b_desc','$b_edition','$b_publisher','$b_isbn',$b_pages,$b_price,'$b_img','$b_pdf')";
			
			mysqli_query($conn,$query) or die($query."Can't Connect to Query...");
			header("location:addbook.php");
		
		}
	}
	else
	{
		header("location:index.php");
	}
?>
	
	