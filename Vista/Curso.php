<?php
  session_start();

  if($_SESSION['usuario']['rol']==="Administrador"){

    header('Location:Administrador.php');
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
                <?php

              

                if($_SESSION['usuario']['rol']==='Estudiante'){

                    echo '

                    <li><a href="Usuario.php">Home</a></li>
                    <li><a href="Inasistencia.php">Inasistencia</a></li>
                    <li><a href="Observacion.php">Observación</a></li>
                    <li><a href="Materia.php">Materia</a></li>
                    <li><a href="Calificacion.php">Calificacion</a></li>

                    ';
                }else if($_SESSION['usuario']['rol']==='Profesor'){

                    echo '

                    <li><a href="Usuario.php">Home</a></li>
				<li><a href="Profesor.php">Profesor</a></li>
				<li><a href="Inasistencia.php">Inasistencia</a></li>
				<li><a href="Observacion.php">Observación</a></li>
				<li><a href="Materia.php">Materia</a></li>
				<li><a href="Calificacion.php">Calificacion</a></li>
                    
                    ';
                }

                ?>
				
				<li class="active"><a href="Index.php">Cerrar Sesión</a></li>
			</ul>
		</div>
		<div class="title">
			<h1>Proyecto Academico General Santander</h1>
		</div>
		<div class="gene">
			<center>
			<img src="Imagenes/logo.jpg" alt="Logo General Santander" class="gene">
		     </center>
		</div>
    </header>
    
    	<!-- Comienzo De Formulario AdminAcademico -->

	 <div class="contenedor">
        <form action="" class="form">
            <div class="form-header">
                <h1 class="form-title">Formulario Curso</h1>
            </div>

            <!--  Fecha Seguimiento  -->

            <label for="fechaseguimiento" class="form-label">Fecha De Seguimiento</label>
            <input type="text" id="fechaseguimiento" class="form-input" placeholder="Escriba La Fecha">

            <!--  Ambiente Salon  -->

            <label for="ambientesalon" class="form-label"> Ambiente Del Salon</label>
            <input type="text" class="form-input" id="ambientesalon" placeholder="Escriba El Ambiente">

            <!--  Button Para Envio De Form  -->

            <input type="submit" class="btn-submit" value="Crear">
            <input type="submit" class="btn-submit" value="Buscar">
            <input type="submit" class="btn-submit" value="Actualizar">
            <input type="submit" class="btn-submit" value="Inabilitar">
        </form>
    </div>
<!--  Comienzo Del FOOTER  -->
   <footer>
           <div class="container-footer-all">
   
           <div class="container-body">
   
               <!--  Primera Columna De Mas Informacion De La Compañia  -->
   
               <div class="colum1">
   
               <h1>Mas Información Sobre El Colegio</h1>
				<p>La institución inicia labores en enero del año 1970 en casetas prefabricadas (ubicadas en el actual terreno de la Sede A), contando para ese entonces con 13 cursos de primero a quinto de básica primaria. “La Concentración Escolar General Santander” (nombre inicial del colegio) se encontraba rodeada de naturaleza. Engativá para ese entonces se tornaba rural, existían cultivos de fresas y otras especies; con el pasar de los años se fueron viendo cambios drásticos y esos cultivos desaparecían para ser reemplazados por construcciones para vivienda de familias desplazadas por la violencia que vivían en Ciudad Bolívar.</p>
   
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