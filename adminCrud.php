<?php
//insert
$usuario = $_POST['usuario'];
$password = $_POST['password'];


$consulta = "INSERT INTO `administrador` (`idadmin`, `usuario`, `password`) VALUES (NULL, '$usuario', '$password');";
$resultado = mysqli_query($conexion, $consulta);

//select
$consultaS ="SELECT * FROM `administrador`;";
 $resultadoS = $conexion ->query($consulta);

  while($row = $resultadoS->fetch_array()) {
        
        $administrador[] = array_map('utf8_encode',$row);
    }

    echo json_encode($administrador);
 

$num = mysqli_affected_rows($conexion);
if($num>0){
    echo "su registro se a completado, gracias";
}else{
    echo "su registro no se a podido completar";
}

mysqli_close($conexion);


?>
