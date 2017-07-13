<?php 

	$numTeams = $_POST['numberOfTeams'];

	


 ?>
<!DOCTYPE html>
 <html lang="es">
	<head>
	<meta charset="utf-8">
	<link href="style/style.css" rel="stylesheet" type="text/css">

 	<title>Gestor de ligas(Nombre equipos)</title>
 </head>
 <body>
	<fieldset>
		<legend>Gestor de ligas(Nombre de equipos)</legend>
 		<form method="POST" action="createSeason.php">

 			<?php 

 				for ($i = 1; $i <= $numTeams ; $i++) { 
 					echo $i;
 					echo " <input type = 'text' name='team".$i."' placeholder = 'Escriba nombre del equipo' required='required'><br>";
 				}


 				setcookie('numTeams', $numTeams);
 			 ?>
 			<br>
 			<input type="submit" name="putNamesOfTeams" value="Siguiente">


 		</form>
	</fieldset>
</body>
</html>