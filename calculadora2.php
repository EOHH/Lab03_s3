<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/calculadora2.css">
	<title>Calculadora +/</title>
</head>
<body>
	<h1>Calculadora 2</h1>
	<form method="post">
		<label>Ingrese el primer número:</label>
		<input type="number" name="num1" required><br><br>
		<label>Ingrese el segundo número:</label>
		<input type="number" name="num2" required><br><br>
		<input type="submit" value="Calcular">
	</form>
	<?php
		if($_POST){
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			if($num2 != 0){
				if($num1 > $num2){
					$suma = $num1 + $num2;
					$diferencia = $num1 - $num2;
					echo "<p>La suma de los dos números es: $suma </p>";
					echo "<p>La diferencia de los dos números es: $diferencia </p>";
                    echo "<div class='nextpage'><a href='Average_note.php'>Ir a la calculadora de promedios</a></div>";
				}else{
					$producto = $num1 * $num2;
					$division = $num1 / $num2;
					echo "<p>El producto de los dos números es: $producto </p>";
					echo "<p>La división de los dos números es: $division </p>";
                    echo "<div class='nextpage'><a href='Average_note.php'>Ir a la calculadora de promedios</a></div>";
				}
			}else{
				echo "Error: El segundo número no puede ser cero.";
			}
		}
	?>
</body>
</html>