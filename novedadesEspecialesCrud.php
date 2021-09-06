<?php

$hora = $_POST['hora'];
$descripcion = $_POST['descripcion'];
$idbitacora = $_POST['idbitacora'];


$consulta = "INSERT INTO `novedadesespeciales` (`idnovedadesEspeciales`, `hora`, `descripcion`, `idbitacora`) VALUES (NULL, '$hora', '$descripcion', '$idbitacora');";
$resultado = mysqli_query($conexion, $consulta);


//select
$consultaS ="SELECT * FROM `novedadesespeciales`;";
 $resultadoS = $conexion ->query($consulta);

  while($row = $resultadoS->fetch_array()) {
        
        $novedades[] = array_map('utf8_encode',$row);
    }

    echo json_encode($novedades);
 

$num = mysqli_affected_rows($conexion);
if($num>0){
    echo "su registro se a completado, gracias";
}else{
    echo "su registro no se a podido completar";
}

mysqli_close($conexion);


?>
