<?php 
	$cantidad = $_POST["cantidad"];
	$marca = $_POST["marca"];
	$precio = 0;
	$precio = 35*$cantidad;

	if ($cantidad>=6) {
		$precio -= $precio*0.5; 
	}

	if ($cantidad==5 && $marca=="ArgentinaLuz") {
		$precio -= $precio*0.4;
	} else if($cantidad==5 && $marca!="ArgentinaLuz"){
		$precio -= $precio*0.3;
	}

	if ($cantidad==4 && $marca!="otra") {
		$precio -= $precio*0.25;
	} else if($cantidad==4 && $marca=="otra"){
		$precio -= $precio*0.20;
	}

	if ($cantidad==3 && $marca=="ArgentinaLuz") {
		$precio -= $precio*0.15;
	} else if($cantidad==3 && $marca=="FelipeLamparas"){
		$precio -= $precio*0.10;
	} else if($cantidad==3 && $marca=="otra"){
		$precio -= $precio*0.05;
	}

	
	if ($precio>120) {
		$ingresos_brutos=$precio*0.10;
		$precio += $ingresos_brutos;
		echo "Usted pago ".$ingresos_brutos." de IIBB";
		echo "<br>";
	}

	echo "El precio final a abonar es de: $".$precio;



?>