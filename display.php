<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="craft_shopping";
	$conn=mysqli_connect($servername,$username,$password,$dbname);	
	
	if(isSet($_POST['btn1'])){
		$query="SELECT * FROM product_categories";
		$result=mysqli_query($conn,$query);
		echo("id   ");
		echo("title"."<br>");
		echo("----------------"."<br>");
	
		$r=mysqli_num_rows($result);
		if($r>0){
			while ($row=mysqli_fetch_assoc($result)){
				echo $row['cat_id']."  ";
				echo $row['cat_title']."<br/>";
			}
		}else{
			echo"No record found";
		}
	}
	if(isSet($_POST['btn2'])){
		$query="SELECT * FROM product_subcategories";
		$result=mysqli_query($conn,$query);
		echo("id   ");
		echo("title"."<br>");
		echo("----------------"."<br>");
	
		$r=mysqli_num_rows($result);
		if($r>0){
			while ($row=mysqli_fetch_assoc($result)){
				echo $row['subcat_id']."  ";
				echo $row['subcat_title']."<br/>";
			}
		}else{
			echo"No record found";
		}
	}
	if(isSet($_POST['btn3'])){
		$query="SELECT * FROM product";
		$result=mysqli_query($conn,$query);
		echo "prosuct-id";
		echo "prosuct-subcatid";
		echo "prosuct-title";
		echo "prosuct-img";
		echo "prosuct-price";
		echo "prosuct-weight";
		echo "prosuct-length";
		echo "prosuct-width";
		echo "prosuct-height";
		echo "prosuct-desc"."<br>";
		echo "-----------------------------------------------------------------------------------------------------------------"."<br>";
		$r=mysqli_num_rows($result);
		if($r>0){
			while ($row=mysqli_fetch_assoc($result)){
				echo $row['product_id']."  ";
				echo $row['product_subcatid']."  ";
				echo $row['product_title']."  ";
				echo $row['product_img']."  ";
				echo $row['product_price']."  ";
				echo $row['product_weight']."  ";
				echo $row['product_length']."  ";
				echo $row['product_width']."  ";
				echo $row['product_height']."  ";
				echo $row['product_desc']."<br/>";
			}
		}else{
			echo"No record found";
		}		
	}
?>