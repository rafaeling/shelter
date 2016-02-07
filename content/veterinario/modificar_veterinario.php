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
								<a href="index.php?t=nuevo_veterinario"> Nuevo veterinario </a>
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
                                                                <label for="notas">Notas: </label>
								<label id="notas">'.$row["notas"].'<br></label>
							</div>
						</td>

						<td>
							<div id="animal">
								<a href="index.php?t=veterinario_change&user='.$row["nombre"].'">Ver </a>'.'
							</div>
						</td>
                                                
<td>
							<div id="animal">
								<a href="index.php?t=modificar_veterinario&eliminar=true&user='.$row["nombre"].'"> Eliminar </a>'.'
							</div>
						</td>
					</tr>';
			}

			mysqli_close($conexion_bd);
					
	
		?>

	</tbody>

	

</table>