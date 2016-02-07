<form id="formulario_usuario" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
	<table>
							
		<tbody>
			<tr>
				<td><h2>Nuevo veterinario</h2></td>
			</tr>
				<tr>
					<td><label for="nombre_user">Nombre:</label></td>
					<td><input id="nombre_user" name="nombre_user" size="30" maxlength="40" type="text"></td>							
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
					<td><label for="notas">Notas:</label></td>
					<td><input id="notas" name="notas" size="30" maxlength="500" type="text"></td>							
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

			//$sql = "INSERT INTO `usuario` (`chip_animal`, `nombre_animal`, `foto_animal`, `especie_animal`, `raza_animal`, `sexo_animal`, `fecha_nacimiento_animal`, `color_animal`, `peso_animal`, `tamanio_animal`, `salud_animal`, `estado_animal`, `reservado_animal`, `medicamentos_animal`, `notas_animal`, `fecha_llegada_animal`, `direccion_animal`, `multimedia_animal`) VALUES ('".$_POST['num_chip_animal']."','".$_POST['name_animal']."','".$target_file."','".$_POST['especie_animal']."','".$_POST['raza_animal']."','".$_POST['sexo_animal']."','".$_POST['edad_animal']."','".$_POST['color_animal']."', ".$_POST['peso_animal'].", '".$_POST['tamanio_animal']."', '".$_POST['salud_animal']."', '".$_POST['estado_animal']."', ".$_POST['reservado_animal'].", '".$_POST['medicamentos_animal']."', '".$_POST['notas_animal']."', '".$_POST['fecha_llegada_animal']."', '".$_POST['direccion_animal']."', '".$_POST['multimedia_animal']."');";
                        $sql = "INSERT INTO `shelter`.`veterinario` (`nombre`, `telefono`, `direccion`, `notas`) VALUES ('".$_POST['nombre_user']."', '".$_POST['telefono']."', '".$_POST['direccion_user']."', '".$_POST['notas']."');";

			$res = mysqli_query($conexion_bd, $sql);

			if($res == 1)
			{
				header('Location: index.php?t=veterinario');
			}else
			{
				echo "Insercion falillda";
			}

			//echo 'CHIP: '.$_POST['num_chip_animal'].' NOMBRE ANIMAL: '.$_POST['name_animal'].' FOTO ANIMAL: '.$_POST['foto_animal'].' ESPECIE ANIMAL: '.$_POST['especie_animal'].' RAZA ANIMAL: '.$_POST['raza_animal'].' SEXO ANIMAL: '.$_POST['sexo_animal'].' FECHA NACIMIENTO: '.$_POST['edad_animal'].' COLOR ANIMAL: '.$_POST['color_animal'].' PESO ANIMAL: '.$_POST['peso_animal'].' TAMAÑO ANIMAL: '.$_POST['tamaño_animal'].' SALUD ANIMAL: '.$_POST['salud_animal'].' ESTADO ANIMAL: '.$_POST['estado_animal'].' RESERVADO ANIMAL: '.$_POST['reservado_animal'].' MEDICAMENTOS ANIMAL: '.$_POST['medicamentos_animal'].' NOTAS ANIMAL: '.$_POST['notas_animal'].' FECHA LLEGADA ANIMAL: '.$_POST['fecha_llegada_animal'].' DIRECCION ANIMAL: '.$_POST['direccion_animal'].' MULTIMEDIA ANIMAL: '.$_POST['multimedia_animal'].' ';
		
		}

	?>



<script>
$(document).ready(function(){
	$(".pass").hide();
	$(".pass_c").hide();
});
</script>

<script>


$(document).ready(function(){

	$("#tipo_user").change(function(){
    	if ($("#tipo_user").val() === "voluntario")
	    {
	    	$(".pass").show();
			$(".pass_c").show();

	    }else
	    {
	    	$(".pass").hide();
			$(".pass_c").hide();
	    }
	});
  
});


</script>

