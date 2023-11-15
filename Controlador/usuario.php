<?php

//var_dump($_POST);

class Usuario{

	public $id_usuario;
	public $usuario;
	public $contraseña;

	public function __construct($id_usuario,$usuario,$contraseña)
	{
		$this->id=$id_usuario;
		$this->user=$usuario;
		$this->pass=$contraseña;
	}

	public function CrearUsuario($data){

    var_dump($data);

	$query='insert into usuario values(null,"'.$data['rol-usuario'].'","'.$data['Contraseña_Usuario'].'","'.$data['Nombre_Usuario'].'","'.$data['Apellido_Usuario'].'","'.$data['Correo_Usuario'].'","'.$data['Tipo_Doc'].'","'.$data['Documento_Usuario'].'","'.$data['estado_usuario'].'","'.$data['especialidad'].'");';
	require_once '../Modelo/conexion.php';
	$consulta=mysqli_query($miconexion->Conectando(),$query);

	if($consulta){

		header('Location:../Vista/Reg_Usuario.php?success=Usuario creado correctamente');
	}else{

		header('Location:../Vista/Reg_Usuario.php?error=Fallo al crear usuario');
	}

}

	public function ModificarUsuario($usuer, $password){

	}

	public function ConsultaAccesso($user, $password,$rol){

		require_once '../Modelo/conexion.php';

		$consulta=mysqli_query($miconexion->Conectando(),'select idUsuario, correoUsuario, Password from usuario where correoUsuario="'.$user.'" and Password="'.$password.'";');

		if($consulta){

			//datos d ela consulta usuario
			$datos=mysqli_fetch_assoc($consulta);

			var_dump($datos);

			if($user===$datos['correoUsuario'] && $password===$datos['Password']){

			
				$nueva_consulta=mysqli_query($miconexion->Conectando(),'select idCargo from cargoUsuario where idUsuario="'.$datos['idUsuario'].'" ;');
				
				if($nueva_consulta){

					//datos consulta cargo
					$datos_Cargo=mysqli_fetch_assoc($nueva_consulta);

					var_dump($datos_Cargo);
					//die();



					session_start();

						
					if($datos_Cargo['idCargo']==='2' && $rol==='Administrador'){

						
							$_SESSION['usuario']['rol']=$rol;
						header('Location:../Vista/Administrador.php');

					}
					else if($datos_Cargo['idCargo']==='3' && $rol==='Estudiante'){
						$_SESSION['usuario']['rol']=$rol;
						header('Location:../Vista/Estudiante.php');

					}else if($datos_Cargo['idCargo']==='1' && $rol==='Profesor'){
						$_SESSION['usuario']['rol']=$rol;
						header('Location:../Vista/Profesor.php');
					}else{
						header('Location:../Vista/Login.php?error=Error en el rol seleccionado ');
					}

					
				}else{

					header('Location:../Vista/Login.php?error=Error en el rol seleccionado ');
				}






		}else{
			header('Location:../Vista/Login.php?error=Error de autorizacion');
		}

	}
}

}
		if(isset($_POST['correo_usuario']) && isset($_POST['contraseña_usuario']) ){

			$nuevo_usuario=new Usuario('',$_POST['correo_usuario'],$_POST['contraseña_usuario']) ;
			$nuevo_usuario->ConsultaAccesso($_POST['correo_usuario'],$_POST['contraseña_usuario'],$_POST['rol']);

		}
		
		if(isset($_POST['rol-usuario'])){
			$nuevo_usuario=new Usuario('','','');
			$nuevo_usuario->CrearUsuario($_POST);
		}
		
?>
