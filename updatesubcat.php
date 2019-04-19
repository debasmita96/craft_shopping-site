<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="craft_shopping";
	$conn=mysqli_connect($servername,$username,$password,$dbname);	
	$ct=$_POST['subcat_title'];
	$ut=$_POST['usubcat_title'];
	$query="UPDATE product_subcategories SET subcat_title='$ut' WHERE subcat_title='$ct' ";
	$data=mysqli_query($conn,$query);
	if($data){
		echo "update";
	}else{
		echo "not update";
	}
?>