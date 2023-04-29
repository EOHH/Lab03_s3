<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular promedio</title>
	<!-- Agregamos los enlaces de los archivos de Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<!-- Agregamos nuestro archivo CSS personalizado -->
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container mt-5 col-md-6 bg-info">
		<h1 class="text-center">Calcular promedio</h1>
		<div class="row justify-content-center">
			<div class="col-md-6">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<div class="form-group">
						<label for="nota1">Nota 1:</label>
						<input type="number" class="form-control" name="nota1" required>
					</div>
					<div class="form-group">
						<label for="nota2">Nota 2:</label>
						<input type="number" class="form-control" name="nota2" required>
					</div>
					<div class="form-group">
						<label for="nota3">Nota 3:</label>
						<input type="number" class="form-control" name="nota3" required>
					</div>
					<button type="submit" class="btn btn-success btn-block">Calcular promedio</button>
				</form>
			</div>
		</div>

		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$nota1 = $_POST["nota1"];
			$nota2 = $_POST["nota2"];
			$nota3 = $_POST["nota3"];
			$promedio = ($nota1 + $nota2 + $nota3) / 3;
			if ($promedio >= 13) {
				echo "<div class='alert alert-success mt-3' role='alert'>El alumno aprobó con un promedio de $promedio.</div>";
				echo "<div class='text-center mt-3'><a href='num_mayor.php' class='btn btn-primary'>Ir a ver el mayor de 3 números</a></div>";
			} else {
				echo "<div class='alert alert-danger mt-3' role='alert'>El alumno reprobó con un promedio de $promedio.</div>";
                echo "<div class='text-center mt-3'><a href='num_mayor.php' class='btn btn-primary'>Ir a ver el mayor de 3 números</a></div>";
			}
		}
		?>

	</div>
</body>
</html>
