<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
<table>
						
	<tbody>
		<tr>
			<td><h2>Nuevo Animal</h2></td>
		</tr>

		
			<tr>
				<td><label for="name_animal">Nombre:</label></td>
				<td><input id="name_animal" name="name_animal" size="30" maxlength="40" type="text"></td>							
			</tr>

			<tr>
				<td><label for="num_chip_animal">Número Chip:</label></td>
				<td><input id="num_chip_animal" name="num_chip_animal" size="30" maxlength="40" type="text"></td>							
			</tr>

			<tr>
				<td><label for="foto_animal">Foto:</label></td>
				<td><input id="foto_animal" name="foto_animal" size="30" maxlength="40" type="text"></td>							
			</tr>
			
			<tr>
				<td><label for="especie_animal">Especie:</label></td>
				<td><input id="especie_animal" name="especie_animal" size="30" maxlength="40" type="text"></td>							
			</tr>

			<tr>
				<td><label for="raza_animal">Raza:</label></td>
				<td><input id="raza_animal" name="raza_animal" size="30" maxlength="40" type="text"></td>							
			</tr>

			<tr>
				<td><label for="sexo_animal">Sexo:</label></td>
				<td><input id="sexo_animal" name="sexo_animal" size="30" maxlength="40" type="text"></td>							
			</tr>

			<tr>
				<td><label for="edad_animal">Edad:</label></td>
				<td><input id="edad_animal" name="edad_animal" size="30" maxlength="40" type="text"></td>							
			</tr>

			<tr>
				<td><label for="color_animal">Color:</label></td>
				<td><input id="color_animal" name="color_animal" size="30" maxlength="40" type="text"></td>							
			</tr>
			
			<tr>
				<td><label for="peso_animal">Peso:</label></td>
				<td><input id="peso_animal" name="peso_animal" size="30" maxlength="40" type="text"></td>							
			</tr>

			<tr>
				<td><label for="tamanio_animal">Tamaño Animal:</label></td>
				<td><input id="tamanio_animal" name="tamanio_animal" size="30" maxlength="40" type="text"></td>							
			</tr>
					
			<tr>
				<td><label for="salud_animal">Salud:</label></td>
				<td><input id="salud_animal" name="salud_animal" size="30" maxlength="40" type="text"></td>							
			</tr>

			<tr>
				<td><label for="estado_animal">Estado:</label></td>
				<td><input id="estado_animal" name="estado_animal" size="30" maxlength="40" type="text"></td>							
			</tr>


			<tr>
				<td><label for="reservado_animal">Reservado:</label></td>
				<td><input id="reservado_animal" name="reservado_animal" size="30" maxlength="40" type="text"></td>							
			</tr>

			<tr>
				<td><label for="medicamentos_animal">Medicamentos:</label></td>
				<td><input id="medicamentos_animal" name="medicamentos_animal" size="30" maxlength="40" type="text"></td>							
			</tr>

			<tr>
				<td><label for="notas_animal">Notas:</label></td>
				<td><input id="notas_animal" name="notas_animal" size="30" maxlength="40" type="text"></td>							
			</tr>


			<tr>
				<td><label for="fecha_llegada_animal">Fecha llegada:</label></td>
				<td><input id="fecha_llegada_animal" name="fecha_llegada_animal" size="30" maxlength="40" type="text"></td>							
			</tr>


			<tr>
				<td><label for="direccion_animal">Dirección Encontrado:</label></td>
				<td><input id="direccion_animal" name="direccion_animal" size="30" maxlength="40" type="text"></td>							
			</tr>
			
			<tr>
				<td><label for="multimedia_animal">Multimedia:</label></td>
				<td><input id="multimedia_animal" name="multimedia_animal" size="30" maxlength="40" type="text"></td>							
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
	/*
		include('content/base_datos/conexion_bd.php');

		$sql = "SELECT nombre_animal FROM animal WHERE chip_animal='26820455V'";
		
		$res = mysqli_query($conexion_bd, $sql);

		$row = mysqli_fetch_assoc($res);

		mysqli_close($conexion_bd);
				
		echo '<div> <h1>Bienvenido, '.$row['nombre_animal'].'</h1></div>';
	*/

		if (isset($_POST['insertar']))
		{
			
			include('content/base_datos/conexion_bd.php');

		

			$sql = "INSERT INTO `animal` (`chip_animal`, `nombre_animal`, `foto_animal`, `especie_animal`, `raza_animal`, `sexo_animal`, `fecha_nacimiento_animal`, `color_animal`, `peso_animal`, `tamanio_animal`, `salud_animal`, `estado_animal`, `reservado_animal`, `medicamentos_animal`, `notas_animal`, `fecha_llegada_animal`, `direccion_animal`, `multimedia_animal`) VALUES ('".$_POST['num_chip_animal']."','".$_POST['name_animal']."','".$_POST['foto_animal']."','".$_POST['especie_animal']."','".$_POST['raza_animal']."','".$_POST['sexo_animal']."','".$_POST['edad_animal']."','".$_POST['color_animal']."', ".$_POST['peso_animal'].", '".$_POST['tamanio_animal']."', '".$_POST['salud_animal']."', '".$_POST['estado_animal']."', ".$_POST['reservado_animal'].", '".$_POST['medicamentos_animal']."', '".$_POST['notas_animal']."', '".$_POST['fecha_llegada_animal']."', '".$_POST['direccion_animal']."', '".$_POST['multimedia_animal']."');";
			echo $sql;

			$res = mysqli_query($conexion_bd, $sql);

			echo "OK";

			echo $res;

			//echo 'CHIP: '.$_POST['num_chip_animal'].' NOMBRE ANIMAL: '.$_POST['name_animal'].' FOTO ANIMAL: '.$_POST['foto_animal'].' ESPECIE ANIMAL: '.$_POST['especie_animal'].' RAZA ANIMAL: '.$_POST['raza_animal'].' SEXO ANIMAL: '.$_POST['sexo_animal'].' FECHA NACIMIENTO: '.$_POST['edad_animal'].' COLOR ANIMAL: '.$_POST['color_animal'].' PESO ANIMAL: '.$_POST['peso_animal'].' TAMAÑO ANIMAL: '.$_POST['tamaño_animal'].' SALUD ANIMAL: '.$_POST['salud_animal'].' ESTADO ANIMAL: '.$_POST['estado_animal'].' RESERVADO ANIMAL: '.$_POST['reservado_animal'].' MEDICAMENTOS ANIMAL: '.$_POST['medicamentos_animal'].' NOTAS ANIMAL: '.$_POST['notas_animal'].' FECHA LLEGADA ANIMAL: '.$_POST['fecha_llegada_animal'].' DIRECCION ANIMAL: '.$_POST['direccion_animal'].' MULTIMEDIA ANIMAL: '.$_POST['multimedia_animal'].' ';
		
		}

	?>


