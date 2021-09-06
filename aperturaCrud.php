<?php



$conexion = mysqli_connect("sql10.freemysqlhosting.net", "sql10432939", "IBSnzrUE5W","sql10432939");

if (!$conexion) {
exit("error al intentar conectase al servidor MySQL");
}



//insert
$vigilantes = $_POST['vigilantes'];
$encargadoDesarme = $_POST['encargadoDesarmarAlarma'];
$encargadoApertura = $_POST['encargadoApertura'];
$observaciones = $_POST['observaciones'];

$consulta = "INSERT INTO apertura (idapertura, vigilantes, encargadoDesarmarAlarma, encargadoApertura, observaciones) VALUES (NULL, ' $vigilantes ',' $encargadoDesarme ','$encargadoApertura ',' $observaciones ');";
$resultado = mysqli_query($conexion, $consulta);


//select
$consultaS ="SELECT * FROM `apertura`;";
 $resultadoS = $conexion ->query($consulta);

  while($row = $resultadoS->fetch_array()) {
        
        $apertura[] = array_map('utf8_encode',$row);
    }

    echo json_encode($apertura);
 

$num = mysqli_affected_rows($conexion);
if($num>0){
    echo "su registro se a completado, gracias";
}else{
    echo "su registro no se a podido completar";
}

mysqli_close($conexion);


?>







