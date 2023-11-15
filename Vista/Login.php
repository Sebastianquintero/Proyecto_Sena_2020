<?php
if(isset($_GET['error'])){
	echo '<h1>'.$_GET['error'].'</h1>';
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>El Login :V</title>
	<link rel="stylesheet" href="css/Style.css">
	<script type="text/javascript"></script>
</head>
<body>

	<div class="login-box">
		<img class="avatar" src="Imagenes/logo.jpg" alt="Logo de Grado">
		<h1>Ingresar</h1>
		<form action="../Controlador/usuario.php" method="post">
			<!--    Usuario   -->
			<label for="username">Correo </label>
			<input type="text" name="correo_usuario" placeholder="Digitar Usuario" required>

			

			<!-- Password  -->
			<label for="password">Contraseña</label>
			<input type="password" name="contraseña_usuario" placeholder="Digitar Contraseña" required pattern="[a-z A-Z]{3}[0-9]{4}"> 

			<div class="selet">
			    <select name="rol">
				     <option value="Administrador">Administrador</option>
					 <option value="Profesor">Profesor</option>
					 <option value="Estudiante">Estudiante</option>
				</select>
			</div>

			<!-- Enter Button Ingresar -->
			<input type="submit" class="btn-ghost" value="Ingresar" name="">

		</form>
		
	</div>
</body>
</html>