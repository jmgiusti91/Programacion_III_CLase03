<?php
	$total = $_POST["uno"] + $_POST["dos"] + $_POST["tres"];
	if (isset($_POST["suma"])) {
		echo "La sumatoria es: ";
		echo $total;
	} else if(isset($_POST["promedio"])){
		echo "El promedio es: ";
		echo $total/3;
	} else{
		echo "el precio final es: ";
		echo $total-($total*0.21);
	}
?>