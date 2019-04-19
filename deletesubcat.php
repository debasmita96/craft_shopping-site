<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="craft_shopping";
	$conn=mysqli_connect($servername,$username,$password,$dbname);	
	
	$ct=$_POST['subcat_title'];
	$query="DELETE FROM product_subcategories WHERE subcat_title='$ct'";
	$data=mysqli_query($conn,$query);
	if($data){
		echo "delete";
	}else{
		echo "not delete";
	}

?>