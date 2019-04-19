<?php
	include("dbconnection.php");
	
	$cate=$_POST['cat-id'];
	$subcate=$_POST['scat-title'];	
	$query="INSERT INTO product_subcategories(cat_id,subcat_title) VALUES ('$cate','$subcate')";
	$result=mysqli_query($conn,$query);
	if($result){
		echo "entry";
	}else{
		echo "not entry";
	}
?>