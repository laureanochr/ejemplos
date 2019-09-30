<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Formulario 01</title>
	<link rel="stylesheet" hreft="">
</head>
<body>
	<center>
   <h3>Registro de datos</h3>

	<form action="formulario01_post.php" method="POST">
		<p>
			<label>Nombre:</label>
			<input type="text" name="nombre" placeholder=" Ingresar nombre..." required="">
		</p>
		<p>
			<label>Apellido:</label>
			<input type="text" name="apellido" placeholder=" Ingresar apellido..." required="">
		</p>
		<p>
			<label>Email:</label>
			<input type="email" name="email" placeholder=" Ingresar email..." required="">
		</p>
		<p>
			<label>DNI:</label>
			<input type="text" name="dni" maxlenght="8" placeholder=" Ingresar dni..." required="">
		</p>
		<p>
			<label>Localidad:</label>
			<select name="ubicacion" required="">
				<option value="">--Seleccione--</option>
				<option value="">Capital Federal</option>
				<option value="">Provincia Bs As</option>
				<option value="">zona norte</option>
				<option value="">zona sur</option>
				<option value="">Interior</option>
			</select>
		</p>
		<p>
			<label>Cuenta con: </label><br>
			<input type="checkbox" name="movil[]" value="Auto">Auto<br>
			<input type="checkbox" name="movil[]" value="Camioneta">Camioneta<br>
			<input type="checkbox" name="movil[]" value="Ninguno">Ninguno<br>
		</p>
		<p>
			<input type="submit" value="Registrar">
		</p>
	</form>
	</center>
</body>
</html>