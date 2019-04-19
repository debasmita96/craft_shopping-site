<!doctype html>
<html>
	<head>
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<link rel="stylesheet" href="css/insert.css">
		<style>
			body{
				background-image:url("images/bg1.jpg");
				background-repeat:no-repeat;
				background-size:cover;
			}  
		</style>
		
		<script type="text/javascript">
			function one(){
				document.getElementById("first").style.visibility='visible';
				document.getElementById("second").style.visibility='hidden';
				document.getElementById("third").style.visibility='hidden';			
			}
			function two(){
				document.getElementById("second").style.visibility='visible';
				document.getElementById("first").style.visibility='hidden';
				document.getElementById("third").style.visibility='hidden';				
			}
			function three(){
				document.getElementById("third").style.visibility='visible';
				document.getElementById("second").style.visibility='hidden';
				document.getElementById("first").style.visibility='hidden';				
			}
		</script>
	</head>
	
	<body>
		<span>Welcome To Insert Page</span>  <a href="operation.php" style=" font-size: 33px; margin-left:350px;">HoMe</a>
		<div class="wrapper">
		
			<div class="inner">	
				<h3>Insert Data</h3>
				
					<div>
						<button id="btn1" data-toggle="collapse" data-target="#first" onclick="one()"> Category </button>						
					</div>
					<div>
						<button id="btn2" data-toggle="collapse" data-target="#second" onclick="two()"> Subcategory </button>						
					</div>	
					<div>
						<button id="btn3" data-toggle="collapse" data-target="#third" onclick="three()"> Product </button>						
					</div>			
			</div>
			
			<div class="inner" id="2nd">
				<div id="first" class="collapse">
					<form action=" addcat.php"method="post">						
						<input type="text" placeholder="category-title" name='cat'required>
						<button>Submit</button>
					</form>						
				</div>
									
				<div id="second" class="collapse">
					<form action="addsubcat.php" method="post">
						<label style="color:white;">Chooce Cat-id : </label>
						<?php
							include("dbconnection.php");
							$query="SELECT cat_id FROM product_categories";									
							$list=mysqli_query($conn,$query);
							echo"<select name='cat-id'>";
							while($row=mysqli_fetch_assoc($list)){ 
								echo"<option value='".$row['cat_id']."'>".$row['cat_id']."</option>";
							}
							echo "</select>";
						?><br>
						<input type="text" placeholder="subcategory-title" name="scat-title" required>
						<button>Submit</button>
					</form>
					<?php 
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
						}
					?>
				</div>
				
				<div id="third" class="collapse" >
					<form action="insertproduct.php"method="post" enctype="multipart/form-data">
						<label style="color:white;">product_subcat_id :  </label>
						<?php
							include("dbconnection.php");
							$query="SELECT subcat_id FROM product_subcategories";									
							$list=mysqli_query($conn,$query);
							echo"<select name='subcat-id'>";
							while($row=mysqli_fetch_assoc($list)){ 
								echo"<option value='".$row['subcat_id']."'>".$row['subcat_id']."</option>";
							}
							echo "</select>";
						?><br>
						<label style="color:white;">product_title :  </label> <input type="text" name="title"><br><br>
						<label style="color:white;">product_image : </label> <input style="color:white;"type="file" name="file"><br>
						<label style="color:white;">product_price : </label> <input type="text"name="price"><br><br>
						<label style="color:white;">product_weight : </label> <input type="text"name="weight"><br><br>
						<label style="color:white;">product_length : </label> <input type="text"name="length"><br><br>
						<label style="color:white;">product_width :  </label> <input type="text" name="width"><br><br>
						<label style="color:white;">product_height : </label> <input type="text" name="height"><br><br>
						<label style="color:white;">product_desc :  </label> <input type="text" name="descr"><br><br>
						<label style="color:white;">product_avail : </label> <input type="text" name="avail"><br><br>
						<button>Submit</button>
					</form>
					<?php
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
						}
					?>
				</div>
		    </div>
		</div>
	</body>	
</html>