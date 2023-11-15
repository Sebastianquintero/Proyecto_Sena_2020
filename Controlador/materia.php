<?php

function Guardar_materia($materia,$horas_semanales){

    require_once '../Modelo/conexion.php';

    $query='insert into Materia values(null,"'.$materia.'","'.$horas_semanales.'");';

    $insert=mysqli_query($miconexion->Conectando(),$query);

    if($insert){

        header('Location:../Vista/Materia.php?success=Datos agregados correctamente');
    }else{
        header('Location:../Vista/Materia.php?error=No se puedieron subir los datos');
    }
    
}

Guardar_materia($_POST['nombre-materia'],$_POST['horas-materia']);

?>