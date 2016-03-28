<?php
	/*echo "<h1>Datos Recibidos</h1>";*/
	echo "Recibidos: <br>";
	/*var_dump($_GET);*/
	echo "<br>";
	var_dump($_POST); /*La info se pasa en un array de clave valor. */
	/*Si esta por GET, se almacena en cache, puede guardarlo en favoritos puede recorrer por el historial pero se ve la informacion. Tiene restriccion de longitud. Maximo 2048 caracteres */
	/* POST no se puede guardar en favoritos, no se puede correr por el historial pero no muestra la informacion ni tiene restriccio de longitud*/
	$nombre=$_POST["usuario"];
	echo "<br>";
	echo "<br>";
	echo $nombre;	
?>