<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="craft_shopping";
	$conn=mysqli_connect($servername,$username,$password,$dbname);	
	
	$user=$_POST['username'];
	$pass=$_POST['password'];
	
	$query="SELECT * FROM admin";
	$result=mysqli_query($conn,$query);
		
	$r=mysqli_num_rows($result);
	
	while ($row=mysqli_fetch_assoc($result)){
		$u= $row['username'];
		$p= $row['password'];
		if($user==$u && $pass==$p){
			include ("operation.php");
			break;
		}else{
			echo"unsuccess";
		}
	}
	
?>