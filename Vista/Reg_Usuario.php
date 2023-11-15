<?php

if(isset($_GET['success'])){

    echo $_GET['success'];
}
if(isset($_GET['error'])){

    echo $_GET['error'];
}
session_start();

if(isset($_SESSION['usuario']['rol']) && $_SESSION['usuario']['rol']==='Administrador'){

    echo '<!DOCTYPE html>
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
                    <li><a href="Usuario.php">Home</a></li>
                    <li><a href="Administrador.php">Administrador</a></li>

                    <li class="active"><a href="../Controlador/cerrar-sesion.php">Cerrar Sesión</a></li>
                </ul>
            </div>
            <div class="title">
                <h1>Proyecto Academico General Santander</h1>
            </div>
        </header>
    <!--  Inicio Para Registrar Usuarios  -->
    
      <!--  Butoons Para Funciones Externas-->
      
      <!--  Formulario De Registro De Usuarios  -->
      <div class="div">
            <button type="button" class="btn-ghost">registrar</button>
            <button type="button" class="btn-ghosttwo">consultar</button>
            <button type="button" class="btn-ghosttree">modificar</button>
            <button type="button" class="btn-ghostfour">eliminar</button>
            <button type="button" class="btn-ghostfive">imprimir</button>
        </div>
    
      <nav class="nav">
            <p><center><h1> I. Datos Basicos Del Usuario</h1></center></p>
            <br>
            <p> Diligence Los Datos Basicos De Forma Correcta</p>
    
            <form action="../Controlador/usuario.php" method="post" class="kill">
    
    
            <label >Tipo documento :</label><br>
    
                <select name="Tipo_Doc">
    
                <option value="Cedula">Cedula</option>
                <option value="T-I">Tarjeta identidad</option>
                </select>
                <br><br>
    
               <label>N° Documento :</label> <br>
               <input type="text" name="Documento_Usuario" maxlength="20">
    
                <br><br>
    
                <label>Nombre :</label><br>
                <input type="text" name="Nombre_Usuario" maxlength="50">
    
                <br><br>
    
                <label >Apellidos :</label><br>
                <input type="text" name="Apellido_Usuario" maxlength="50">
    
                <br><br>
    
                <label >Correo :</label> <br>
                <input type="email" name="Correo_Usuario" maxlength="50">
    
                <br>
                <br>
    
                <label >Contraseña:</label> <br>
                <input type="password" name="Contraseña_Usuario" maxlength="50">
    
                <br>
                <br>
    
    
                <label >Rol :</label><br>
    
                <select name="rol-usuario">
    
                <option value="administrador">Administrador</option>
                <option value="profesor">Profesor</option>
                <option value="estudiante">Estudiante</option>
    
                </select>
    
                <br><br>
    
                <label for="">Estado :</label><br>
                <input type="text" name="estado_usuario">
                <br>
                <br>
    
                <label for="">Especialidad</label><br>
                <input type="text" name="especialidad" id="">
                <br><br>
    
    
    
                <input type="submit" value="Agregar usuario">
            </form>
        </nav>
    
    
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
    </html>';
}else{

    header('Location:index.php?error=Error de autorizacion');
}

?>
