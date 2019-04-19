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
				background-size:cover;}  
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
		<span>Welcome To Admin Modify Page</span>  <a href="operation.php" style=" font-size: 33px; margin-left:350px;">HoMe</a>
		<div class="wrapper">		
			<div class="inner">	
				<h3>Modify Data</h3>				
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
			
			<div class="inner" style="background-color:white;">
				<div id="first" class="collapse">
						<form action="updatecat.php"method="post">
							<label style="color:#808080; font-size:20px;"> Choose cat-title for modify : </label>
								<?php
									include("dbconnection.php");
									$query="SELECT cat_title FROM product_categories";									
									$list=mysqli_query($conn,$query);
									echo"<select name='bcat'>";
									while($row=mysqli_fetch_assoc($list)){ 
										echo"<option value='".$row['cat_title']."'>".$row['cat_title']."</option>";
									}
									echo "</select>";
								?>
							<br>
							<label> New modify cat-title : </label>
							<input type="text" name="acat" ><br>
							<button>Submit</button>
						</form>						
					</div>
									
					<div id="second" class="collapse">
						<form action="udatesubcat.php"method="post">
							<label> Choose cat-id for modify : </label>
								<?php
									include("dbconnection.php");
									$query="SELECT * FROM product_categories";									
									$list=mysqli_query($conn,$query);
									echo"<select name='cat-id'>";
									while($row=mysqli_fetch_assoc($list)){ 
										echo"<option value='".$row['cat_id']."'>".$row['cat_id']."</option>";
									}
									echo "</select>";
								?><br>
							
							<label> Choose subcat-title for modify : </label>
								<?php
									include("dbconnection.php");
									$query="SELECT * FROM product_subcategories";									
									$list=mysqli_query($conn,$query);
									echo"<select name='scat-title'>";
									while($row=mysqli_fetch_assoc($list)){ 
										echo"<option value='".$row['subcat_title']."'>".$row['subcat_title']."</option>";
									}
									echo "</select>";
								?><br>
							<label> New modify cat-id : </label>
							<input type="text"><br>
							<label> New modify subcat-title : </label>
							<input type="text" ><br>
							<button>Submit</button>
						</form>
					</div>
					
					<div id="third" class="collapse">
						<form action=" "method="post">
							<label>Product-id for modify : </label>
								<?php
									include("dbconnection.php");
									$query="SELECT product_id FROM product";									
									$list=mysqli_query($conn,$query);
									echo"<select name='id'>";
									while($row=mysqli_fetch_assoc($list)){ 
										echo"<option value='".$row['product_id']."'>".$row['product_id']."</option>";
									}
									echo "</select>";
								?><br>
							<label>Product column for modify : </label>
								<select>
									<option value=" ">----ALL----</option>
									<option value="">product_id </option>
									<option value=" ">product_subcat_id </option>
									<option value=" ">product_title </option>
									<option value=" ">product_image </option>
									<option value=" ">product_price </option>
									<option value=" ">product_weight </option>
									<option value=" ">product_length </option>
									<option value=" ">product_width </option>
									<option value=" ">product_height </option>
									<option value=" ">product_desc </option>
								</select><br>
							<label>Modified value</label>
							<input type="text"><br>
							<button>Submit</button>
						</form>
					</div>
		    </div>
		</div>
	</body>
	
</html>