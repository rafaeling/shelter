<form action="<?php  $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
<table>

	<?php
						
	$animal = isset($_GET["animal"]) ? $_GET["animal"] : '';
        $adoptante = isset($_GET["adoptante"]) ? $_GET["adoptante"] : '';


		if (isset($_POST['modificar']))
		{
			
			include('content/base_datos/conexion_bd.php');

			$sql = "UPDATE `adopcion` SET fecha='".$_POST['fecha']."' WHERE chip_animal='".$animal."' AND DNI='".$adoptante."'";

			$res = mysqli_query($conexion_bd, $sql);
                        
                        $sql = "UPDATE `adopcion` SET tasas='".$_POST['tasas']."' WHERE chip_animal='".$animal."' AND DNI='".$adoptante."'";

			$res = mysqli_query($conexion_bd, $sql);
                        
                        $sql = "UPDATE `adopcion` SET tasa_abonada='".$_POST['tasa_abonada']."' WHERE chip_animal='".$animal."' AND DNI='".$adoptante."'";

			$res = mysqli_query($conexion_bd, $sql);
                        
                        $sql = "UPDATE `adopcion` SET contrato='".$_POST['contrato']."' WHERE chip_animal='".$animal."' AND DNI='".$adoptante."'";

			$res = mysqli_query($conexion_bd, $sql);
                        
                        $sql = "UPDATE `adopcion` SET notas='".$_POST['notas']."' WHERE chip_animal='".$animal."' AND DNI='".$adoptante."'";

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

			$sql = "SELECT * FROM adopcion,animal,adoptante WHERE adopcion.chip_animal='".$animal."' AND adopcion.DNI='".$adoptante."' AND adopcion.chip_animal=animal.chip_animal AND adopcion.DNI=adoptante.DNI";
			
			$res = mysqli_query($conexion_bd, $sql);

			$row = mysqli_fetch_assoc($res);

			mysqli_close($conexion_bd);
					
	
		?>
                
                <tr>
			<?php echo '<td><h3>'.$row["nombre_animal"].' ->  '.$row["nombre"].'</h3></td>' ?>
		</tr>
                

			<tr>
				<td><label for="fecha">Fecha:</label></td>
				<?php echo  '<td><input type="date" id="fecha" name="fecha" value="'.$row['fecha'].'"></td>'	?>							
			</tr>
                        
                        <tr>
				<td><label for="tasas">Tasas:</label></td>
				<?php echo  '<td><input id="tasas" name="tasas" size="30" maxlength="40" type="text" value="'.$row['tasas'].'"></td>'	?>							
			</tr>
                        
			<tr>
				<?php 

                                    if($row['tasa_abonada']==1)
                                    {
                                        $estado ="Si";
                                    }else
                                    {
                                        $estado="No";
                                    }

				?>						
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



