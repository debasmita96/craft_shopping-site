<?php
	if(isSet($_POST['btn1'])){
		include ('display.html');
	}
		if(isSet($_POST['btn2'])){
		include ('insert.php');
	}
		if(isSet($_POST['btn3'])){
		include ('modify.php');
	}
		if(isSet($_POST['btn4'])){
		include ('search.html');
	}
		if(isSet($_POST['btn5'])){
		include ('delete.html');
	}
?>