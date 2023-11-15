<?php

if(isset($_GET['error'])){
	echo '<h1>'.$_GET['error'].'</h1>';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Proyecto Sena</title>
	<link rel="stylesheet" href="css/Estilos.css">
</head>
<body>
	<header>
		<div class="main">
			<div class="logo">
			</div>
			<ul>
				<li class="active"><a href="Login.php">Ingresar</a></li>
				<li><a href="#">Fotos</a></li>
				<li><a href="#">Acerca del Colegio</a></li>
				<li><a href="Contactenos.php">Contactenos</a></li>
			</ul>
		</div>
		<div class="title">
			<h1>Proyecto Academico General Santander</h1>
		</div>
		<div class="button">
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<p>El nombre del colegio surge en honor al prócer de la independencia; Francisco de Paula Santander (Cúcuta, 2 de abril de 1792 - Bogotá, 6 de mayo de 1840), estadista, revolucionario y político, prócer de la Independencia de Colombia. Es conocido como “El Hombre de las Leyes”. Y el ”Organizador de la Victoria”. Fue Vicepresidente de la Gran Colombia en el periodo de 1819-1826 (encargado del poder ejecutivo) y Presidente de Nueva Granada entre 1832 y 1837.</p>
		</div>

	</header>



	<!--  Comienzo Del FOOTER  -->
	<footer>
		<div class="container-footer-all">

		<div class="container-body">

			<!--  Primera Columna De Mas Informacion De La Compañia  -->

			<div class="colum1">

				<h1>Mas Información De La Compañia</h1>
				<p>Esta compañia se dedica a la venta de software integrado con un conjunto de cosas que no se lo que estoy escribiendo, este texto es solo para llenara informacion en el cuadro de informacion de la compañia.</p>

			</div>
			
			<!--  Empieza La Segunda Columna De Redes Sociales F,T,I,G,P  -->

			<div class="colum2">
				<h1>Redes Sociales</h1>
        <!--  Logo E Informacion De Facebook  -->
				<div class="row">
					<img src="Imagenes/facebook.png">
					<label>Siguenos En Facebook</label>
				</div>
		<!--  Logo E Informacion De Twitter  -->
		         <div class="row">
				    <img src="Imagenes/twitter.png">
				    <label>Siguenos En Twitter</label>
			     </div>
		<!--  Logo E Informacion De Instagram-->
		        <div class="row">
				    <img src="Imagenes/instagram.png">
					<label>Siguenos En Instagram</label>
		        </div>
		<!--  Logo E Informacion De GooglePlus  -->
		        <div class="row">
				    <img src="Imagenes/google-plus.png">
				    <label>Siguenos En GooglePlus</label>
				</div>
		<!-- Logo E Informacion De Pinterest-->
		        <div class="row">
				    <img src="Imagenes/pinterest.png">
				    <label>Siguenos En Facebook</label>
				</div>

			    </div>
		<!--  Comienzo De La Comuna 3 Informacion De Contacto  -->
				<div class="colum3">

					<h1>Informacion Contactos</h1>
        <!--  Primer Dato De Contacto  -->
					<div class="row2">
						<img src="Imagenes/house.png">
						<label>Barrio Engativa Pueblo Cra. 123 #65A-03, Bogotá</label>
					</div>
		<!--  Segundo Dato De Contacto  -->
				    <div class="row2">
						<img src="Imagenes/smartphone.png">
						<label> +57 313 5990382</label>
					</div>
		<!--  Tercer Dato De Contacto  -->
		            <div class="row2">
						<img src="Imagenes/contact.png">
						<label>sebastquinter87@gmail.com</label>
					</div>			
				</div>
			</div>

		<!--  Datos Adicionales Del FOOTER  -->
		 <div class="container-footer">
			 <div class="copyright">
					© 2019 Todos los Derechos Reservados | <a href="">Sebastian</a>
			 </div>
			 <div class="information">
					<a href="">Información Compañia</a> | <a href="">Privación y Politica</a> | <a href="">Terminos y Condiciones</a>
			 </div>
		 </div>	
		</div>
	</footer>
</body>
</html>