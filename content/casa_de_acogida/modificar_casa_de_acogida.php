<table>
						
	<tbody>
		<tr>
			<td><h2>Casa de acogida:</h2></td>
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
								<label id="nombre_usuario">'.$row["nombre_user"].'<br></label>
								<label for="apellido_usuario">Apellido Usuario: </label>
								<label id="apellido_user">'.$row["apellido_user"].'<br></label>
								<label for="dni_usuario">DNI Usuario: </label>
								<label id="dni_user">'.$row["dni_user"].'<br></label>
							</div>
						</td>

						<td>
							<div id="animal">
								<br><a href="index.php?t=userchange&user='.$row["dni_user"].'">Modificar </a>'.$row["nombre_user"].'</br>
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

