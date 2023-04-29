<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Datos del usuario</title>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<h1>Datos del usuario</h1>
	<?php
		if(isset($_POST['nombre']) && isset($_POST['email'])) {
			$nombre = $_POST['nombre'];
			$email = $_POST['email'];
			echo "<div class='datos'>";
			echo "<p>Nombre: $nombre</p>";
			echo "<p>Email: $email</p>";
			echo "</div>";
			echo "<div class='nextpage'><a href='Calculadora.php'>Ir a la calculadora</a></div>";
		}
		else {
			echo "<p class='p_error'>Error: Debe ingresar un nombre y un email.</p>";
		}
	?>
</body>
</html>
