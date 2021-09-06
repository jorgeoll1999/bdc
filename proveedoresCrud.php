<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include './conexion.php';

$horaIngreso=$_POST['horaIngreso'];
$horaSalida=$_POST['horaSalida'];
$nombre=$_POST['nombre'];
$empresa=$_POST['empresa'];
$foto= addslashes(file_get_contents($_FILES['foto']));
$idbitacora=$_POST['idbitacora'];


$consulta = "INSERT INTO `proveedoresvisitas` (`idproveedores`, `horaIngreso`, `horaSalida`, `nombre`, `empresa`, `foto`, `idbitacora`) VALUES (NULL, '$horaIngreso', '$horaSalida', '$nombre', '$empresa', '', '$idbitacora');";
$resultado = mysqli_query($conexion, $consulta);



//select
$consultaS ="SELECT * FROM `proveedoresvisitas`;";
 $resultadoS = $conexion ->query($consulta);

  while($row = $resultadoS->fetch_array()) {
        
        $proveedoresVisitas[] = array_map('utf8_encode',$row);
    }

    echo json_encode($proveedoresVisitas);
 

$num = mysqli_affected_rows($conexion);
if($num>0){
    echo "su registro se a completado, gracias";
}else{
    echo "su registro no se a podido completar";
}

mysqli_close($conexion);


?>
