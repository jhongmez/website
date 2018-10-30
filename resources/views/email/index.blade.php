<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Correo Electronico</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 class="text-center">¡Hemos recibido un nuevo correo!</h3>
				<div class="form-group">
					<p><strong>Nombre Completo: </strong>{{$nombre}}</p>
				</div>
				<div class="form-group">
					<p><strong>Correo Electrónico: </strong>{{$correo}}}</p>
				</div>
				<div class="form-group">
					<p><strong>Contacto: </strong>{{$celular}}</p>
				</div>
				<div class="form-group">
					<p><strong>Mensaje: </strong>{{$mensaje}}</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>