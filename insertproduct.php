<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="craft_shopping";
	$con=mysqli_connect($servername,$username,$password,$dbname);
	
	$name = $_FILES["file"]["name"];
	$tmp_name = $_FILES['file']['tmp_name'];
	$error = $_FILES['file']['error'];

	if (isset ($name)) {
		if (!empty($name)) {
			$location = 'product/'.$name;
			if  (move_uploaded_file($tmp_name, $location)){
				echo 'Uploaded';    
			}
        } else {
          echo 'please choose a file';
          }
    }
	$fol=$location.$name;
	
	$subcat=$_POST['subcat-id'];							
	$title = $_POST["title"];	
	$price = $_POST['price'];
	$weight = $_POST["weight"];
	$length = $_POST["length"];
	$width =$_POST["width"];
	$height = $_POST["height"];
	$desc = $_POST["descr"];
	$avail=$_POST['avail'];
	
	
	//$query="INSERT INTO product (product_img) VALUES ('$location')";
	//$query="INSERT INTO product  VALUES ('$subcat','$title','$location','$price','$weight','$length','$width','$height','$desc','$avail')";
	/*$query="INSERT INTO product (product_subcatid,product_img,product_price,product_weight,product_length,product_width,product_height)
		VALUES ($subcat,$location,$price,$weight,$length,$width,$height)";*/
	$query="INSERT INTO product 				    (product_subcatid,product_title,product_img,product_price,product_weight,product_length,product_width,product_height,product_desc,product_stock)  
		VALUES ('$subcat','$title','$location',$price,$weight,$length,$width,$height,'$desc','$avail')";	
	
	$result=mysqli_query($con,$query);
	if($result){
		include("insert.php");
	}else{
		echo "not entry";
	}
?>