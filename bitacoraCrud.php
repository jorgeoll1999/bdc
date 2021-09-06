<?php


$empresa = $_POST['empresa'];
$fechaAprovacion = $_POST['fechaAprovacion'];
$fechaVigencia = $_POST['fechaVigencia'];
$fecha = $_POST['fecha'];
$agencia = $_POST['agencia'];
$codigo = $_POST['codigo'];
$idapertura = $_POST['idapertura'];
$idcierre = $_POST['idcierre'];

$consulta = "INSERT INTO `bitacora` (`idbitacora`, `empresa`, `fechaAprovacion`, `fechaVigencia`, `fecha`, `agencia`, `codigo`, `idapertura`, `idcierre`) VALUES (NULL, '$empresa', '$fechaAprovacion', '$fechaVigencia', '$fecha', '$agencia', '$codigo', '$idapertura', '$idcierre');";
$resultado = mysqli_query($conexion, $consulta);

//select
$consultaS ="SELECT * FROM `bitacora`;";
 $resultadoS = $conexion ->query($consulta);

  while($row = $resultadoS->fetch_array()) {
        
        $bitacora[] = array_map('utf8_encode',$row);
    }

    echo json_encode($bitacora);
 

$num = mysqli_affected_rows($conexion);
if($num>0){
    echo "su registro se a completado, gracias";
}else{
    echo "su registro no se a podido completar";
}

mysqli_close($conexion);


?>

