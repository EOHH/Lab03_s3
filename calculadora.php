<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/calculadora.css">
    <title>Calculadora</title>
</head>
<body>
	<h1>Calculadora de suma - producto</h1>
	<form method="post" action="">
		<label>Ingrese el primer número:</label>
		<input type="number" name="numero1" required>
		<br>
		<label>Ingrese el segundo número:</label>
		<input type="number" name="numero2" required>
		<br>
		<label>Ingrese el tercer número:</label>
		<input type="number" name="numero3" required>
		<br>
		<label>Ingrese el cuarto número:</label>
		<input type="number" name="numero4" required>
		<br>
		<input type="submit" value="Calcular">
	</form>

	<?php
	if(isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['numero3']) && isset($_POST['numero4'])) {
		$numero1 = $_POST['numero1'];
		$numero2 = $_POST['numero2'];
		$numero3 = $_POST['numero3'];
		$numero4 = $_POST['numero4'];
		$suma = $numero1 + $numero2;
		$producto = $numero3 * $numero4;
		echo "<p>La suma de los dos primeros números es: $suma</p>";
		echo "<p>El producto del tercer y cuarto número es: $producto</p>";
		echo "<div class='nextpage'><a href='Calculadora2.php'>Ir a la calculadora 2</a></div>";
	}
	?>
</body>
</html>