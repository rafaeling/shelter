<?php

    $fecha = isset($_GET["fecha"]) ? $_GET["fecha"] : '';

			
    include('conexion_bd.php');

    $sql = "SELECT * FROM evento WHERE fecha='".$fecha."'";

    $res = mysqli_query($conexion_bd, $sql);
    
    while($row = mysqli_fetch_assoc($res))
    {
        echo '<tr>

            <td>
                    <div id="Evento">
                    
                            <label for="tipo">Tipo: </label>
                            <label id="tipo">'.$row["tipo"].'<br></label>
                    </div>
            </td>
            
            <td>
                    <div id="ver">
                            <a href="index.php?t=modificar_evento&id_evento='.$row["id_evento"].'"> Ver </a>'.'
                    </div>
            </td>
                                                
            <td>
                    <div id="eliminar">
                            <a href="index.php?t=modificar_evento&eliminar=true&id_evento='.$row["id_evento"].'"> Eliminar </a>'.'
                    </div>
            </td>
        </tr>';
    }    

?>

