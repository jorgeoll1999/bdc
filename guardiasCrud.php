<?php





$conexion = mysqli_connect("sql10.freemysqlhosting.net", "sql10432939", "IBSnzrUE5W","sql10432939");

if (!$conexion) {
exit("error al intentar conectase al servidor MySQL");
}
//vigilantes
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cedula = $_POST['cedula'];
$telefono = $_POST['telefono'];
$usernmae = $_POST['username'];

$consulta = "INSERT INTO `guardia` (`idguardia`, `nombre`, `apellido`, `cedula`, `telefono`, `username`) VALUES (NULL, '$nombre', '$apellido', '$cedula', '$telefono', '$usernmae');";
$resultado = mysqli_query($conexion, $consulta);


//select
$consultaS ="SSELECT * FROM `guardia`;";
 $resultadoS = $conexion ->query($consulta);

  while($row = $resultadoS->fetch_array()) {
        
        $guardia[] = array_map('utf8_encode',$row);
    }

    echo json_encode($guardia);
 

$num = mysqli_affected_rows($conexion);
if($num>0){
    echo "su registro se a completado, gracias";
}else{
    echo "su registro no se a podido completar";
}

mysqli_close($conexion);


?>

