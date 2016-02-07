<table>
						
	<tbody>
		<tr>
			<td><h2>Socios:</h2></td>
		</tr>

		<?php

			include('content/base_datos/conexion_bd.php');

			$sql = "SELECT * FROM socio";
			
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
                                                                <label for="direccion">Direccion: </label>
								<label id="direccion">'.$row["direccion"].'<br></label>
							</div>
						</td>

						<td>
							<div id="animal">
								<br><a href="index.php?t=userchange&user='.$row["DNI"].'"> Eliminar </a>'.$row["nombre"].'</br>
							</div>
						</td>
					</tr>';
			}

			mysqli_close($conexion_bd);
					
	
		?>

	</tbody>

	

</table>