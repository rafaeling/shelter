<form action="<?php  $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
<table>

	<?php
						
	$evento = isset($_GET["id_evento"]) ? $_GET["id_evento"] : '';
        $eliminar = isset($_GET["eliminar"]) ? $_GET["eliminar"] : '';

            if($eliminar == 'true')
            {
                include('content/base_datos/conexion_bd.php');
                
                $id_evento = isset($_GET["id_evento"]) ? $_GET["id_evento"] : '';

                $sql = "DELETE FROM evento WHERE id_evento='".$id_evento."'";

                $res = mysqli_query($conexion_bd, $sql);
                
                header('Location: index.php?t=eventos');
            }
            
            else if (isset($_POST['modificar']))
            {

                    include('content/base_datos/conexion_bd.php');

                    $sql = "UPDATE `evento` SET id_evento='".$_POST['id_evento']."' WHERE id_evento='".$evento."'";

                    $res = mysqli_query($conexion_bd, $sql);

                    $sql = "UPDATE `evento` SET fecha='".$_POST['fecha']."' WHERE id_evento='".$evento."'";

                    $res = mysqli_query($conexion_bd, $sql);

                    $sql = "UPDATE `evento` SET tipo='".$_POST['tipo']."' WHERE id_evento='".$evento."'";

                    $res = mysqli_query($conexion_bd, $sql);

                    $sql = "UPDATE `evento` SET realizado='".$_POST['realizado']."' WHERE id_evento='".$evento."'";

                    $res = mysqli_query($conexion_bd, $sql);

                    $sql = "UPDATE `evento` SET notas='".$_POST['notas']."' WHERE id_evento='".$evento."'";

                    $res = mysqli_query($conexion_bd, $sql);

                    $sql = "UPDATE `evento` SET lista_correos='".$_POST['lista_correos']."' WHERE id_evento='".$evento."'";

                    $res = mysqli_query($conexion_bd, $sql);

                    if($res == 1)
                    {
                            echo "Modificación Correcta";
                    }else
                    {
                            echo "Modificación falillda";
                    }


            }

	?>

	<tbody>
		<?php

			include('content/base_datos/conexion_bd.php');

			$sql = "SELECT * FROM evento WHERE id_evento='".$evento."'";
			
			$res = mysqli_query($conexion_bd, $sql);

			$row = mysqli_fetch_assoc($res);
                        
                        echo '<td><h3>'. $row['nombre_animal'].' </h3></td>';
			
                        mysqli_close($conexion_bd);
					
	
		?>


			<tr>
				<td><label for="id_evento">ID_evento: </label></td>
				<?php echo '<td><input id="id_evento" name="id_evento" size="30" maxlength="40" type="text" value="'.$row['id_evento'].'"readonly></td>'	?>						
			</tr>

			<tr>
				<td><label for="fecha">Fecha:</label></td>
				<?php echo  '<td><input type="date" id="fecha" name="fecha" value="'.$row['fecha'].'"></td>'	?>								
			</tr>


			<tr>
				<?php echo  '<td><label for="tipo">Tipo: '.$row['tipo'].'</label></td>'	?>	
				<td><select id="tipo" name="tipo">
						<option value="vacio">Seleccionar</option>
						<option value="vacuna">Vacuna</option>
						<option value="caduca">Caduca collar</option>
						<option value="reunion">Reunión</option>
						<option value="esteril">Esterilización</option>
						<option value="chip">Chip</option>
						<option value="prueba">Prueba</option>
						<option value="otros">Otros</option>
					</select>

				</td>							
			</tr>


			<tr>
				<?php 

					if($row['realizado']==1)
					{
						$realizado ="Si";
					}else
					{
						$realizado="No";
					}

				echo  '<td><label for="realizado">Realizado: '.$realizado.'</label></td>'	?>	
				<td><select id="realizado" name="realizado">
						<option value="vacio">Seleccionar</option>
						<option value="1">Sí</option>
						<option value="0">No</option>
					</select>
				</td>							
			</tr>

			<tr>
				<td><label for="notas">Notas:</label></td>
				<?php echo  '<td><input id="notas" name="notas" size="30" maxlength="40" type="text" value="'.$row['notas'].'"></td>'	?>								
			</tr>

			<tr>
				<td><label for="lista_correos">Lista de correos:</label></td>
				<?php echo  '<td><input id="lista_correos" name="lista_correos" size="30" maxlength="40" type="text" value="'.$row['lista_correos'].'"></td>'	?>								
			</tr>

                        <tr>
				<td align="center" colspan="2"> 
					<input type="submit" id="modificar" name="modificar" value="Modificar"/>
				</td>
			</tr>
					
	</tbody>
	</table>

</formm>


