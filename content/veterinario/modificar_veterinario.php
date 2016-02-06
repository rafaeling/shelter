<table>
						
	<tbody>
		

		<?php
                
                        
                        
                        $eliminar = isset($_GET["eliminar"]) ? $_GET["eliminar"] : '';
		
                        
                        include('content/base_datos/conexion_bd.php');
                        
                        if($eliminar == 'true')
                        {
                            $user = isset($_GET["user"]) ? $_GET["user"] : '';
                            
                            $sql = "DELETE FROM veterinario WHERE nombre='".$user."'";
                            
                            $res = mysqli_query($conexion_bd, $sql);
                        }
                        
                        
                        
                        
                     
                        
                        
			$sql = "SELECT * FROM veterinario";
			
			$res = mysqli_query($conexion_bd, $sql);
                        
                        
                        echo '<tr>
                            <td>
							<div id="animal">
								<br><a href="index.php?t=nuevo_veterinario"> Nuevo veterinario </a></br>
							</div>
						</td>
			</tr>
                        <tr>
			<td><h2>Veterinarios:</h2></td>
		</tr>';
                        
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
								<br><a href="index.php?t=veterinario_change&user='.$row["nombre"].'">Modificar </a>'.$row["nombre"].'</br>
							</div>
						</td>
                                                
<td>
							<div id="animal">
								<br><a href="index.php?t=modificar_veterinario&eliminar=true&user='.$row["nombre"].'"> Eliminar </a>'.$row["nombre"].'</br>
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

