<table>
						
	<tbody>
		

		<?php
                
                        
                        
                        $eliminar = isset($_GET["eliminar"]) ? $_GET["eliminar"] : '';
		
                        
                        include('content/base_datos/conexion_bd.php');
                        
                        if($eliminar == 'true')
                        {
                            $animal = isset($_GET["animal"]) ? $_GET["animal"] : '';
                            $adoptante = isset($_GET["adoptante"]) ? $_GET["adoptante"] : '';
                            
                            $sql = "DELETE FROM adopcion WHERE chip_animal='".$animal."' AND DNI='".$adoptante."'";
                            
                            $res = mysqli_query($conexion_bd, $sql);
                        }
                        
                        
                        
                        
                     
                        
                        
			$sql = "SELECT * FROM adopcion, animal, adoptante WHERE adopcion.DNI=adoptante.DNI AND animal.chip_animal= adopcion.chip_animal";
			
			$res = mysqli_query($conexion_bd, $sql);
                        
                        
                        echo '<tr>
                            <td>
							<div id="adopcion">
								<a href="index.php?t=nueva_adopcion"> Nueva adopcion </a>
							</div>
						</td>
			</tr>
                        <tr>
			<td><h2>Adopciones:</h2></td>
		</tr>';
                        
			while($row = mysqli_fetch_assoc($res))
			{
				echo '<tr>
						
						<td>
								<img src="'.$row["foto_animal"].'" alt="Mountain View" style="width:180px;height:180px;">
							
						</td>

						<td>
							<div id="animal">

								<label id="nombre_animal">'.$row["nombre_animal"].'<br></label>

							</div>
						</td>
                                                
						<td>
							<div id="usuario">

								<label for="name_usuario">Nombre: </label>
								<label id="nombre_usuario">'.$row["nombre"].'<br></label>
								<label for="telefono">Tel: </label>
								<label id="telefono">'.$row["telefono"].'<br></label>
                                                                <label for="direccion">Dirección: </label>
								<label id="direccion">'.$row["direccion"].'<br></label>
							</div>
						</td>

						<td>
							<div id="ver">
								<a href="index.php?t=adopcion_change&animal='.$row["chip_animal"].'&adoptante='.$row["DNI"].'">Ver </a>'.'
							</div>
						</td>
                                                
<td>
							<div id="eliminar">
								<a href="index.php?t=modificar_adopcion&eliminar=true&animal='.$row["chip_animal"].'&adoptante='.$row["DNI"].'"> Eliminar </a>'.'
							</div>
						</td>
					</tr>';
			}

			mysqli_close($conexion_bd);
					
	
		?>

	</tbody>

	

</table>