<table>
						
	<tbody>
		<tr>
			<td><h2>Casas de acogida:</h2></td>
		</tr>

		<?php

			include('content/base_datos/conexion_bd.php');

			$sql = "SELECT * FROM casa_de_acogida";
			
			$res = mysqli_query($conexion_bd, $sql);

			while($row = mysqli_fetch_assoc($res))
			{
				echo '<tr>
						

						<td>
							<div id="usuario">

								<label for="name_usuario">Nombre: </label>
								<label id="nombre_usuario">'.$row["nombre"].'<br></label>
								<label for="dni_usuario">DNI: </label>
								<label id="dni_user">'.$row["DNI"].'<br></label>
                                                                <label for="direccion">Dirección: </label>
								<label id="direccion">'.$row["direccion"].'<br></label>
							</div>
						</td>

						<td>
							<div id="animal">
								<br><a href="index.php?t=casa_de_acogida_change&user='.$row["DNI"].'">Modificar </a>'.$row["nombre"].'</br>
							</div>
						</td>
					</tr>';
			}

			mysqli_close($conexion_bd);
					
	
		?>

	</tbody>

	

</table>




<div>

	<?php

/*
		include('content/base_datos/conexion_bd.php');

		$sql = "SELECT nombre_animal FROM animal WHERE chip_animal='26820455V'";
		
		$res = mysqli_query($conexion_bd, $sql);

		$row = mysqli_fetch_assoc($res);

		mysqli_close($conexion_bd);
				
		echo '<div> <h1>Bienvenido, '.$row['nombre_animal'].'</h1></div>';
*/
	?>



</div>

