<form action="<?php  $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
<table>

	<?php
						
	$animal = isset($_GET["animal"]) ? $_GET["animal"] : '';


		if (isset($_POST['modificar']))
		{
			
			include('content/base_datos/conexion_bd.php');

			if(strlen(basename($_FILES["fileToUpload"]["name"])) > 2)
			{

				$target_dir = "content/animal/uploads/";

				$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

				move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

				$sql = "UPDATE `animal` SET foto_animal='".$target_file."' WHERE chip_animal='".$_POST['num_chip_animal']."'";

				$res = mysqli_query($conexion_bd, $sql);

			}

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

		
		<?php

			include('content/base_datos/conexion_bd.php');

			$sql = "SELECT * FROM animal WHERE chip_animal='".$animal."'";
			
			$res = mysqli_query($conexion_bd, $sql);

			$row = mysqli_fetch_assoc($res);
echo '<td><h3>'. $row['nombre_animal'].' </h3></td>';
			mysqli_close($conexion_bd);
					
	
		?>
			<tr>
				<td>

					<?php echo  '<img src="'.$row["foto_animal"].'" alt="Mountain View" style="width:180px;height:180px;">' ?>

				</td>
			</tr>

			<tr>
				<td><label for="name_animal">Nombre: </label></td>
				<?php echo '<td><input id="name_animal" name="name_animal" size="30" maxlength="40" type="text" value="'.$row['nombre_animal'].'"></td>'	?>						
			</tr>

			<tr>
				<td><label for="num_chip_animal">Número Chip:</label></td>
				<?php echo  '<td><input id="num_chip_animal" name="num_chip_animal" size="30" maxlength="40" type="text" value="'.$row['chip_animal'].'"readonly></td>'	?>						
			</tr>

			<tr>

				<td><label for="foto_animal">Cambiar Foto:</label></td>
				<td><input type="file" name="fileToUpload" id="fileToUpload"></td>			

			</tr>
			
			<tr>
				<td><label for="especie_animal">Especie:</label></td>
				<?php echo  '<td><input id="especie_animal" name="especie_animal" size="30" maxlength="40" type="text" value="'.$row['especie_animal'].'"></td>'	?>								
			</tr>

			<tr>
				<td><label for="raza_animal">Raza:</label></td>
				<?php echo  '<td><input id="raza_animal" name="raza_animal" size="30" maxlength="40" type="text" value="'.$row['especie_animal'].'"></td>	'	?>							
			</tr>

			<tr>
				<td><label for="sexo_animal">Sexo:</label></td>
				<?php echo  '<td><input id="sexo_animal" name="sexo_animal" size="30" maxlength="40" type="text" value="'.$row['sexo_animal'].'"></td>'	?>								
			</tr>

			<tr>
				<td><label for="edad_animal">Edad:</label></td>
				<?php echo  '<td><input type="date" id="edad_animal" name="edad_animal" value="'.$row['fecha_nacimiento_animal'].'"></td>'	?>								
			</tr>

			<tr>
				<td><label for="color_animal">Color:</label></td>
				<?php echo  '<td><input id="color_animal" name="color_animal" size="30" maxlength="40" type="text" value="'.$row['color_animal'].'"></td>'	?>								
			</tr>
			
			<tr>
				<td><label for="peso_animal">Peso:</label></td>
				<?php echo  '<td><input id="peso_animal" name="peso_animal" size="30" maxlength="40" type="text" value="'.$row['peso_animal'].'"></td>'	?>								
			</tr>

			<tr>
				<td><label for="tamanio_animal">Tamaño Animal:</label></td>
				<?php echo  '<td><input id="tamanio_animal" name="tamanio_animal" size="30" maxlength="40" type="text" value="'.$row['tamanio_animal'].'"></td>'	?>								
			</tr>
					
			<tr>
				<td><label for="salud_animal">Salud:</label></td>
				<?php echo  '<td><input id="salud_animal" name="salud_animal" size="30" maxlength="40" type="text" value="'.$row['salud_animal'].'"></td>'	?>								
			</tr>

			<tr>
				<?php echo  '<td><label for="estado_animal">Estado: '.$row['estado_animal'].'</label></td>'	?>	
				<td><select id="estado_animal" name="estado_animal">
						<option value="vacio">Seleccionar</option>
						<option value="refugio">Refugio</option>
						<option value="acogido">Acogido</option>
						<option value="adoptado">Adoptado</option>
						<option value="difunto">Difunto</option>
					</select>

				</td>							
			</tr>


			<tr>
				<?php 

					if($row['reservado_animal']==1)
					{
						$estado ="Si";
					}else
					{
						$estado="No";
					}

				echo  '<td><label for="reservado_animal">Reservado: '.$estado.'</label></td>'	?>	
				<td><select id="reservado_animal" name="reservado_animal">
						<option value="vacio">Seleccionar</option>
						<option value="1">Si</option>
						<option value="0">No</option>
					</select>
				</td>							
			</tr>

			<tr>
				<td><label for="medicamentos_animal">Medicamentos:</label></td>
				<?php echo  '<td><input id="medicamentos_animal" name="medicamentos_animal" size="30" maxlength="40" type="text" value="'.$row['medicamentos_animal'].'"></td>'	?>								
			</tr>

			<tr>
				<td><label for="notas_animal">Notas:</label></td>
				<?php echo  '<td><input id="notas_animal" name="notas_animal" size="30" maxlength="40" type="text" value="'.$row['notas_animal'].'"></td>'	?>								
			</tr>


			<tr>
				<td><label for="fecha_llegada_animal">Fecha llegada:</label></td>
				<?php echo  '<td><input type="date" id="fecha_llegada_animal" name="fecha_llegada_animal" value="'.$row['fecha_llegada_animal'].'"></td>'	?>							
			</tr>


			<tr>
				<td><label for="direccion_animal">Dirección Encontrado:</label></td>
				<?php echo  '<td><input id="direccion_animal" name="direccion_animal" size="30" maxlength="40" type="text" value="'.$row['direccion_animal'].'"></td>	'	?>							
			</tr>
			
			<tr>
				<td><label for="multimedia_animal">Multimedia:</label></td>
				<?php echo  '<td><input id="multimedia_animal" name="multimedia_animal" size="30" maxlength="40" type="text" value="'.$row['multimedia_animal'].'"></td>	'	?>							
			</tr>
			<tr>
				<td align="center" colspan="2"> 
					<input type="submit" id="modificar" name="modificar" value="Modificar"/>
				</td>
			</tr>
					
					
	</tbody>
	</table>

</formm>



