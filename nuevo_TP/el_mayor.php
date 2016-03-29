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
		 ?>
	</body>
</html>	
