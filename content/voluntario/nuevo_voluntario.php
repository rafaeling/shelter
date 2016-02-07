<form id="formulario_usuario" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
	<table>
							
		<tbody>
			<tr>
				<td><h2>Nuevo voluntario</h2></td>
			</tr>
				<tr>
					<td><label for="nombre_user">Nombre:</label></td>
					<td><input id="nombre_user" name="nombre_user" size="30" maxlength="40" type="text"></td>							
				</tr>

				<tr>
					<td><label for="email_user">Correo electronico:</label></td>
					<td><input id="email_user" name="email_user" size="30" maxlength="40" type="email"></td>							
				</tr>

				<tr>
					<td><label for="dni_user">DNI:</label></td>
					<td><input id="dni_user" name="dni_user" size="30" maxlength="40" type="text"></td>							
				</tr>
				
				<tr>
					<td><label for="telefono_user">Teléfono:</label></td>
					<td><input id="telefono_user" name="telefono_user" size="30" maxlength="40" type="text"></td>							
				</tr>

				<tr>
					<td><label for="direcion_user">Dirección:</label></td>
					<td><input id="direccion_user" name="direccion_user" size="30" maxlength="40" type="text"></td>							
				</tr>

				<tr>
					<td align="center" colspan="2">
						<input type="submit" id="insertar" name="insertar" value="Insertar"/>
					</td>
				</tr>

		</tbody>

		

	</table>
</form>



	<?php

		if (isset($_POST['insertar']))
		{
			
			include('content/base_datos/conexion_bd.php');

			$sql = "INSERT INTO `shelter`.`voluntario` (`DNI`, `nombre`, `correo`, `direccion`, `telefono`) VALUES ('".$_POST['dni_user']."', '".$_POST['nombre_user']."', '".$_POST['email_user']."', '".$_POST['direccion_user']."', '".$_POST['telefono_user']."');";

			$res = mysqli_query($conexion_bd, $sql);

			if($res == 1)
			{
				header('Location: index.php?t=voluntario');
			}else
			{
				echo "Insercion falillda";
			}

		
		}

	?>
