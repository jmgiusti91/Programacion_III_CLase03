<?php 
	echo $_POST["fahrenheit"]." grados fahrenheit son ";
	echo (($_POST["fahrenheit"]-32)*5/9)." grados centigrados";
	echo "<br>";
	echo "<br>";
	echo $_POST["centigrados"]." grados centigrados son ";
	echo ($_POST["centigrados"]*9/5+32)." grados fahrenheit";
?>