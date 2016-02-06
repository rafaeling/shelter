<form action="<?php  $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
<table>

	<?php
						
	$user = isset($_GET["user"]) ? $_GET["user"] : '';


		if (isset($_POST['modificar']))
		{
			
			include('content/base_datos/conexion_bd.php');


                        
			$sql = "UPDATE `adoptante` SET nombre='".$_POST['nombre_user']."' WHERE DNI='".$_POST['dni_user']."'";
                        
			$res = mysqli_query($conexion_bd, $sql);
                                          
                        
                        $sql = "UPDATE `adoptante` SET correo='".$_POST['email_user']."' WHERE DNI='".$_POST['dni_user']."'";

                        
			$res = mysqli_query($conexion_bd, $sql);
                        
                        $sql = "UPDATE `adoptante` SET direccion='".$_POST['direccion_user']."' WHERE DNI='".$_POST['dni_user']."'";

                        
			$res = mysqli_query($conexion_bd, $sql);
                        
                        $sql = "UPDATE `adoptante` SET telefono='".$_POST['telefono_user']."' WHERE DNI='".$_POST['dni_user']."'";

                       
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
		<tr>
			<?php echo '<td><h2>Modificando</h2></td>' ?>
		</tr>
		<tr>
			<?php echo '<td><h3>'.$user.' </h3></td>' ?>
		</tr>

		
		<?php

			include('content/base_datos/conexion_bd.php');

			$sql = "SELECT * FROM adoptante WHERE DNI='".$user."'";
                        
			$res = mysqli_query($conexion_bd, $sql);
                        
			$row = mysqli_fetch_assoc($res);

                        
			mysqli_close($conexion_bd);		
	
		?>
			<tr>
				<td><label for="nombre_user">Nombre:</label></td>
				<?php echo '<td><input id="nombre_user" name="nombre_user" size="30" maxlength="40" type="text" value="'.$row['nombre'].'"></td>'; ?>						
			</tr>

			

			<tr>
				<td><label for="email_user">Correo electronico:</label></td>
				<?php echo '<td><input id="email_user" name="email_user" size="30" maxlength="40" type="email" value="'.$row['correo'].'"></td>'; ?>							
			</tr>

			<tr>
				<td><label for="dni_user">DNI:</label></td>
				<?php echo '<td><input id="dni_user" name="dni_user" size="30" maxlength="40" type="text" value="'.$row['DNI'].'" readonly></td>'; ?>						
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
                                <td align="center" colspan="2">
                                        <input type="submit" id="modificar" name="modificar" value="Modificar"/>
                                </td>
			</tr>

					
					
	</tbody>
	</table>

</formm>



