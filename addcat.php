<?php
	include("dbconnection.php");
	
	$cate=$_POST['cat'];
	echo $cate ."<br>";
	$query="INSERT INTO product_categories(cat_title) VALUES ('$cate')";
	$result=mysqli_query($conn,$query);
	if($result){
		echo"entry";
		//include("insert.php");
		//echo '<script type="text/javascript">alert("successfully entry")</script>';
	}else{
		echo" no entry";
	}
?>