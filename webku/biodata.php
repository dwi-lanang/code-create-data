<?php 
	if(isset($_GET['act']))
	{
		if($_GET['act']=="create")
		{
			//cek apakah data dikirimkan dari form atau tidak
			if(isset($_POST['f_submit']) AND $_POST['f_submit'])
			{
				//debug hasil submit dari form
				print_r($_POST);
			}
			else
			{
				header("location:biodata.php");
			}
		}
	}
	else
	{
		//create form add
		include "add-biodata.html";
	}
	
?>