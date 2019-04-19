<!doctype html>
<html>
	<head>
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/adminoperation.css">
		<style>
			body{
				background-image:url("images/bg1.jpg");
				background-repeat:no-repeat;
				background-size:cover;}  
		</style>	
	</head>
	
	<body>
		<span>Welcome To Admin Page</span>
		<div class="wrapper">
		
			<div class="inner">	
				<h3>Operatios</h3>
				<form action="operation2.php" method="post">
					<div>
						<button name="btn1"> Display </button>						
					</div>
					<div>
						<button name="btn2"> Insert </button>						
					</div>
					<div>
						<button name="btn3"> Modify </button>						
					</div>
					<div>
						<button name="btn4"> Search </button>						
					</div>
					<div>
						<button name="btn5"> Delete </button>						
					</div>
				</form>
			</div>
		</div>
	</body>	
</html>
