 <html>
	<head>
		<title></title>
	</head>
	<body>
		<form method="post">
			<input type="text" name="el_primero"><br>
			<input type="text" name="el_segundo"><br>
			<input type="text" name="el_tercero"><br>
			<input type="submit" value="Calcular" name="calcular">
		</form>
		<br>
		<br>
		<?php 
			var_dump($_POST);
			echo "<br>";
			echo "<br>";
			if ($_POST["el_primero"] > $_POST["el_segundo"] && $_POST["el_primero"] > $_POST["el_tercero"]) {
				echo "el mayor es: ".$_POST["el_primero"];
			} else if($_POST["el_segundo"] > $_POST["el_tercero"]){
				echo "el mayor es: ".$_POST["el_segundo"];
			} else{
				echo "el mayor es: ".$_POST["el_tercero"];
			}
			/* hay un metodd php que se lamma isset()... Devuelve true o false, si esta setado (no estar seteado es null)... Devuelve true si la variable no es null*/
			/*Las variables POST y GET, puede devolver arrays vacios.*/
			/*si yo pongo isset($_POST), siempre va a devolver true porque $_POST es una variable global y tiene muchos datos. Es probable que alguna este vacia*/
			/* Lo correcto es poner isset($_POST["nombreindice"]. Hay pregunto si una variable puntual esta seteada*/
		 ?>
	</body>
</html>	
