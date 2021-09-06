<?php

$vigilantes = $_POST['vigilantes'];
$encargadoActivarAlarma = $_POST['encargadoActivarAlarma'];
$encargadoCierre = $_POST['encargadoCierre'];
$observaciones = $_POST['observaciones'];


$consulta = "INSERT INTO `cierre` (`idcierre`, `vigilantes`, `encargadoActivarAlarma`, `encargadoCierre`, `observaciones`) VALUES (NULL, '$vigilantes', '$encargadoActivarAlarma', '$encargadoCierre', '$observaciones');";
$resultado = mysqli_query($conexion, $consulta);

//select
$consultaS ="SELECT * FROM `cierre`;";
 $resultadoS = $conexion ->query($consulta);

  while($row = $resultadoS->fetch_array()) {
        
        $cierre[] = array_map('utf8_encode',$row);
    }

    echo json_encode($cierre);
 

$num = mysqli_affected_rows($conexion);
if($num>0){
    echo "su registro se a completado, gracias";
}else{
    echo "su registro no se a podido completar";
}

mysqli_close($conexion);


?>
