<?php

	
			
    include('conexion_bd.php');

    $sql = "SELECT * from evento";

    $res = mysqli_query($conexion_bd, $sql);

    $row = mysqli_fetch_assoc($res);
    $row = mysqli_fetch_assoc($res);
    
    $return = $row['notas'];
    
    echo $return;
        

?>

