<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayor de tres números</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container mt-5 col-md-6 bg-success">
		<h1 class="mb-4 text-center">Mayor de tres números</h1>
		<div class="d-flex flex-column align-items-center">
			<form method="post">
				<div class="form-group">
					<label for="numero1">Primer número:</label>
					<input type="number" class="form-control" id="numero1" name="numero1" placeholder="Ingrese un número" required>
				</div>
				<div class="form-group">
					<label for="numero2">Segundo número:</label>
					<input type="number" class="form-control" id="numero2" name="numero2" placeholder="Ingrese un número" required>
				</div>
				<div class="form-group">
					<label for="numero3">Tercer número:</label>
					<input type="number" class="form-control" id="numero3" name="numero3" placeholder="Ingrese un número" required>
				</div>
				<div class="form-group text-center">
					<button type="submit" class="btn btn-primary">Calcular</button>
				</div>
			</form>
			<?php
				if(isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['numero3'])) {
					$num1 = $_POST['numero1'];
					$num2 = $_POST['numero2'];
					$num3 = $_POST['numero3'];
					$mayor = $num1;
					if($num2 > $mayor) {
						$mayor = $num2;
					}
					if($num3 > $mayor) {
						$mayor = $num3;
					}
					echo "<h4 class='mt-4 text-center'>El número mayor es: $mayor</h4>";
				}
			?>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
		integrity="sha384-nJQ31ylYEqzBZC8j+JJz7UuDr6DyV6eELvu6UqSWpihFdBzEYVREUu+TIlfjV7+I"
		crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>