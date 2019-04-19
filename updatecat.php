<?php
	include("dbconnection.php");
	
	$ct=$_POST['bcat'];
	$ut=$_POST['acat'];
	$query="UPDATE product_categories SET cat_title='$ut' WHERE cat_title='$ct' ";
	$data=mysqli_query($conn,$query);
	if($data){
		echo "update";
	}else{
		echo "not update";
	}
?>