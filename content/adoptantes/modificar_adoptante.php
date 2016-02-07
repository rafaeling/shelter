<table>
						
	<tbody>
		

		<?php
                
                        
                        
                        $eliminar = isset($_GET["eliminar"]) ? $_GET["eliminar"] : '';
		
                        
                        include('content/base_datos/conexion_bd.php');
                        
                        if($eliminar == 'true')
                        {
                            $user = isset($_GET["user"]) ? $_GET["user"] : '';
                            
                            $sql = "DELETE FROM adoptante WHERE DNI='".$user."'";
                            
                            $res = mysqli_query($conexion_bd, $sql);
                        }
                        
                        
                        
                        
                     
                        
                        
			$sql = "SELECT * FROM adoptante";
			
			$res = mysqli_query($conexion_bd, $sql);
                        
                        
                        echo '<tr>
                            <td>
							<div id="animal">
								<a href="index.php?t=nuevo_adoptante"> Nuevo adoptante </a>
							</div>
						</td>
			</tr>
                        <tr>
			<td><h2>Adoptantes:</h2></td>
		</tr>';
                        
			while($row = mysqli_fetch_assoc($res))
			{
				echo '<tr>
						

						<td>
							<div id="usuario">

								<label for="name_usuario">Nombre: </label>
								<label id="nombre_usuario">'.$row["nombre"].'<br></label>
                                                                <label for="telefono">Tel: </label>
								<label id="telefono">'.$row["telefono"].'<br></label>
							</div>
						</td>

						<td>
							<div id="animal">
								<a href="index.php?t=adoptante_change&user='.$row["DNI"].'">Ver </a>'.'
							</div>
						</td>
                                                
                                                <td>
							<div id="animal">
								<a href="index.php?t=modificar_adoptante&eliminar=true&user='.$row["DNI"].'"> Eliminar </a>'.'
							</div>
						</td>
					</tr>';
			}

			mysqli_close($conexion_bd);
					
	
		?>

	</tbody>

	

</table>