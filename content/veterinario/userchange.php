<form action="<?php  $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
<table>

	<?php
						
	$user = isset($_GET["user"]) ? $_GET["user"] : '';


		if (isset($_POST['modificar']))
		{
			
			include('content/base_datos/conexion_bd.php');


                        
			$sql = "UPDATE `veterinario` SET nombre='".$_POST['nombre_user']."' WHERE nombre='".$_POST['nombre_user']."'";
                        
			$res = mysqli_query($conexion_bd, $sql);
                                          
                        
                        $sql = "UPDATE `veterinario` SET notas='".$_POST['notas']."' WHERE nombre='".$_POST['nombre_user']."'";

                        
			$res = mysqli_query($conexion_bd, $sql);
                        
                        $sql = "UPDATE `veterinario` SET direccion='".$_POST['direccion_user']."' WHERE nombre='".$_POST['nombre_user']."'";

                        
			$res = mysqli_query($conexion_bd, $sql);
                        
                        $sql = "UPDATE `veterinario` SET telefono='".$_POST['telefono_user']."' WHERE nombre='".$_POST['nombre_user']."'";

                       
			$res = mysqli_query($conexion_bd, $sql);


			if($res == 1)
			{
				echo "Modificación Correcta";
			}else
			{
				echo "Modificación falillda";
			}
                        mysqli_close($conexion_bd);
		
		}

	?>

	<tbody>

		<?php

			include('content/base_datos/conexion_bd.php');

			$sql = "SELECT * FROM veterinario WHERE nombre='".$user."'";
                        
			$res = mysqli_query($conexion_bd, $sql);
                        
			$row = mysqli_fetch_assoc($res);
echo '<td><h3>'. $row['nombre'].' </h3></td>';

                        
			mysqli_close($conexion_bd);		
	
		?>
			<tr>
				<td><label for="nombre_user">Nombre:</label></td>
				<?php echo '<td><input id="nombre_user" name="nombre_user" size="30" maxlength="40" type="text" value="'.$row['nombre'].'"readonly></td>'; ?>						
			</tr>


			<tr>
				<td><label for="telefono_user">Teléfono:</label></td>
				<?php echo '<td><input id="telefono_user" name="telefono_user" size="30" maxlength="40" type="text" value="'.$row['telefono'].'"></td>'; ?>							
			</tr>

			<tr>
				<td><label for="dirrecion_user">Dirección:</label></td>
				<?php echo '<td><input id="direccion_user" name="direccion_user" size="30" maxlength="40" type="text" value="'.$row['direccion'].'"></td>'; ?>						
			</tr>
		
			<tr>
				<td><label for="notas">Notas:</label></td>
				<?php echo '<td><input id="notas" name="notas" size="30" maxlength="500" type="text" value="'.$row['notas'].'"></td>'; ?>							
			</tr>
			
                        <tr>
                                <td align="center" colspan="2">
                                        <input type="submit" id="modificar" name="modificar" value="Modificar"/>
                                </td>
			</tr>

					
					
	</tbody>
	</table>

</formm>



