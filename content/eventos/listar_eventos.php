<?php

    $fecha = isset($_GET["fecha"]) ? $_GET["fecha"] : '';

			
    include('conexion_bd.php');

    $sql = "SELECT * FROM evento WHERE fecha='".$fecha."'";

    $res = mysqli_query($conexion_bd, $sql);

    $row = mysqli_fetch_assoc($res);
    
    $return = $row['lista_correos'];

    
    echo $return;
        

?>

