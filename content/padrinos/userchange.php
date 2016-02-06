<form action="<?php  $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
<table>

	<?php
						
	$user = isset($_GET["user"]) ? $_GET["user"] : '';


		if (isset($_POST['modificar']))
		{
			
			include('content/base_datos/conexion_bd.php');


			$sql = "UPDATE `animal` SET nombre_animal='".$_POST['name_animal']."' WHERE chip_animal='".$_POST['num_chip_animal']."'";

			$res = mysqli_query($conexion_bd, $sql);

			$sql = "UPDATE `animal` SET chip_animal='".$_POST['num_chip_animal']."' WHERE chip_animal='".$animal."'";

			$res = mysqli_query($conexion_bd, $sql);

			$sql = "UPDATE `animal` SET especie_animal='".$_POST['especie_animal']."' WHERE chip_animal='".$_POST['num_chip_animal']."'";

			$res = mysqli_query($conexion_bd, $sql);

			$sql = "UPDATE `animal` SET raza_animal='".$_POST['raza_animal']."' WHERE chip_animal='".$_POST['num_chip_animal']."'";

			$res = mysqli_query($conexion_bd, $sql);

			$sql = "UPDATE `animal` SET sexo_animal='".$_POST['sexo_animal']."' WHERE chip_animal='".$_POST['num_chip_animal']."'";

			$res = mysqli_query($conexion_bd, $sql);

			$sql = "UPDATE `animal` SET fecha_nacimiento_animal='".$_POST['edad_animal']."' WHERE chip_animal='".$_POST['num_chip_animal']."'";

			$res = mysqli_query($conexion_bd, $sql);

			$sql = "UPDATE `animal` SET color_animal='".$_POST['color_animal']."' WHERE chip_animal='".$_POST['num_chip_animal']."'";

			$res = mysqli_query($conexion_bd, $sql);

			$sql = "UPDATE `animal` SET peso_animal='".$_POST['peso_animal']."' WHERE chip_animal='".$_POST['num_chip_animal']."'";

			$res = mysqli_query($conexion_bd, $sql);

			$sql = "UPDATE `animal` SET tamanio_animal='".$_POST['tamanio_animal']."' WHERE chip_animal='".$_POST['num_chip_animal']."'";

			$res = mysqli_query($conexion_bd, $sql);

			$sql = "UPDATE `animal` SET salud_animal='".$_POST['salud_animal']."' WHERE chip_animal='".$_POST['num_chip_animal']."'";

			$res = mysqli_query($conexion_bd, $sql);

			if($_POST['estado_animal'] != "vacio")
			{
				$sql = "UPDATE `animal` SET estado_animal='".$_POST['estado_animal']."' WHERE chip_animal='".$_POST['num_chip_animal']."'";

				$res = mysqli_query($conexion_bd, $sql);
			}

			$sql = "UPDATE `animal` SET reservado_animal='".$_POST['reservado_animal']."' WHERE chip_animal='".$_POST['num_chip_animal']."'";

			$res = mysqli_query($conexion_bd, $sql);

			$sql = "UPDATE `animal` SET medicamentos_animal='".$_POST['medicamentos_animal']."' WHERE chip_animal='".$_POST['num_chip_animal']."'";

			$res = mysqli_query($conexion_bd, $sql);

			$sql = "UPDATE `animal` SET notas_animal='".$_POST['notas_animal']."' WHERE chip_animal='".$_POST['num_chip_animal']."'";

			$res = mysqli_query($conexion_bd, $sql);

			$sql = "UPDATE `animal` SET fecha_llegada_animal='".$_POST['fecha_llegada_animal']."' WHERE chip_animal='".$_POST['num_chip_animal']."'";

			$res = mysqli_query($conexion_bd, $sql);

			$sql = "UPDATE `animal` SET direccion_animal='".$_POST['direccion_animal']."' WHERE chip_animal='".$_POST['num_chip_animal']."'";

			$res = mysqli_query($conexion_bd, $sql);

			$sql = "UPDATE `animal` SET multimedia_animal='".$_POST['multimedia_animal']."' WHERE chip_animal='".$_POST['num_chip_animal']."'";

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
		<tr>
			<?php echo '<td><h2>Modificando</h2></td>' ?>
		</tr>
		<tr>
			<?php echo '<td><h3>'. $user.' </h3></td>' ?>
		</tr>

		
		<?php

			include('content/base_datos/conexion_bd.php');

			$sql = "SELECT * FROM usuario WHERE dni_user='".$user."'";
			
			$res = mysqli_query($conexion_bd, $sql);

			$row = mysqli_fetch_assoc($res);

			mysqli_close($conexion_bd);
					
	
		?>
			<tr>
				<td><label for="nombre_user">Nombre:</label></td>
				<?php echo '<td><input id="nombre_user" name="nombre_user" size="30" maxlength="40" type="text" value="'.$row['nombre_user'].'"></td>'; ?>						
			</tr>

			<tr>
				<td><label for="apellido_user">Apellidos:</label></td>
				<?php echo '<td><input id="apellido_user" name="apellido_user" size="30" maxlength="40" type="text" value="'.$row['apellido_user'].'"></td>'; ?>							
			</tr>

			<tr>
				<td><label for="email_user">Correo electronico:</label></td>
				<?php echo '<td><input id="email_user" name="email_user" size="30" maxlength="40" type="email" value="'.$row['email_user'].'"></td>'; ?>							
			</tr>

			<tr>
				<td><label for="dni_user">DNI:</label></td>
				<?php echo '<td><input id="dni_user" name="dni_user" size="30" maxlength="40" type="text" value="'.$row['dni_user'].'"></td>'; ?>						
			</tr>
			
			<tr>
				<td><label for="telefono_user">Teléfono:</label></td>
				<?php echo '<td><input id="telefono_user" name="telefono_user" size="30" maxlength="40" type="text" value="'.$row['telefono_user'].'"></td>'; ?>							
			</tr>

			<tr>
				<td><label for="dirrecion_user">Dirección:</label></td>
				<?php echo '<td><input id="direccion_user" name="direccion_user" size="30" maxlength="40" type="text" value="'.$row['direccion_user'].'"></td>'; ?>						
			</tr>
		

			<tr class="tipo">
				<td><label for="tipo_user">Tipo Usuario:</label></td>
				<td><select id="tipo_user" name="tipo_user">
						<option value="vacio">Seleccionar</option>
						<option value="voluntario">Voluntario</option>
						<option value="socio">Socio</option>
						<option value="casa">Casa Acogida</option>
						<option value="adoptante">Adoptante</option>
						<option value="padrino">Padrino</option>
					</select>

				</td>							
			</tr>

					
					
	</tbody>
	</table>

</formm>



