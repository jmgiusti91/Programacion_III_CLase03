<?php 
	var_dump($_POST);
	echo "<br>";
	if(isset($_POST["enviar1"])){
		echo "No es nulo el enviar 1";
		echo "<br>";
	} else{
		echo "Es NULO BOLUDO el enviar 1";
		echo "<br>";
	}


	if(isset($_POST["enviar2"])){
		echo "No es nulo el enviar 2";
		echo "<br>";
	} else{
		echo "Es NULO BOLUDO el enviar 2";
		echo "<br>";
	}
 ?>