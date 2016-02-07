<form action="<?php  $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
<table>

	<?php
						
	$animal = isset($_GET["animal"]) ? $_GET["animal"] : '';
        $casa_de_acogida = isset($_GET["casa_de_acogida"]) ? $_GET["casa_de_acogida"] : '';
        $fecha_inicio = isset($_GET["fecha_inicio"]) ? $_GET["fecha_inicio"] : '';


		if (isset($_POST['modificar']))
		{
			
			include('content/base_datos/conexion_bd.php');

			$sql = "UPDATE `acogida` SET fecha_fin='".$_POST['fecha_fin']."' WHERE chip_animal='".$animal."' AND dni_casa_acogida='".$casa_de_acogida."' AND fecha_inicio='".$fecha_inicio."'";

			$res = mysqli_query($conexion_bd, $sql);
                        
                        $sql = "UPDATE `acogida` SET contrato='".$_POST['contrato']."' WHERE chip_animal='".$animal."' AND dni_casa_acogida='".$casa_de_acogida."' AND fecha_inicio='".$fecha_inicio."'";

			$res = mysqli_query($conexion_bd, $sql);
                        
                        $sql = "UPDATE `acogida` SET notas='".$_POST['notas']."' WHERE chip_animal='".$animal."' AND dni_casa_acogida='".$casa_de_acogida."' AND fecha_inicio='".$fecha_inicio."'";

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

			$sql = "SELECT * FROM acogida,animal,casa_de_acogida WHERE acogida.chip_animal='".$animal."' AND acogida.dni_casa_acogida='".$casa_de_acogida."' AND acogida.chip_animal=animal.chip_animal AND acogida.dni_casa_acogida=casa_de_acogida.dni";
			
			$res = mysqli_query($conexion_bd, $sql);

			$row = mysqli_fetch_assoc($res);

			mysqli_close($conexion_bd);
					
	
		?>
                
                <tr>
			<?php echo '<td><h3>'.$row["nombre_animal"].' ->  '.$row["nombre"].' : '.$row["fecha_inicio"].'</h3></td>' ?>
		</tr>
                

			<tr>
				<td><label for="fecha_fin">Fecha FIn:</label></td>
				<?php echo  '<td><input type="date" id="fecha_fin" name="fecha_fin" value="'.$row['fecha_fin'].'"></td>'	?>							
			</tr>

			<tr>
				<td><label for="contrato">Contrato:</label></td>
				<?php echo  '<td><input id="contrato" name="contrato" size="30" maxlength="5000" type="text" value="'.$row['contrato'].'"></td>'	?>							
			</tr>
                        
                        <tr>
				<td><label for="notas">Notas:</label></td>
				<?php echo  '<td><input id="notas" name="notas" size="30" maxlength="500" type="text" value="'.$row['notas'].'"></td>'	?>							
			</tr>
			
			<tr>
				<td align="center" colspan="2"> 
					<input type="submit" id="modificar" name="modificar" value="Modificar"/>
				</td>
			</tr>
					
					
	</tbody>
	</table>

</formm>



