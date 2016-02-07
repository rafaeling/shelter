<table>
						
	<tbody>
		

		<?php
                
                        
                        
                        $eliminar = isset($_GET["eliminar"]) ? $_GET["eliminar"] : '';
		
                        
                        include('content/base_datos/conexion_bd.php');
                        
                        if($eliminar == 'true')
                        {
                            $user = isset($_GET["user"]) ? $_GET["user"] : '';
                            
                            $sql = "DELETE FROM animal WHERE chip_animal='".$user."'";
                            
                            $res = mysqli_query($conexion_bd, $sql);
                        }
                        
                        
                        
                        
                     
                        
                        
			$sql = "SELECT * FROM animal";
			
			$res = mysqli_query($conexion_bd, $sql);
                        
                        
                        echo '<tr>
                            <td>
							<div id="animal">
								<a href="index.php?t=nuevo_animal"> Nuevo animal </a>
							</div>
						</td>
			</tr>
                        <tr>
			<td><h2>Animales:</h2></td>
		</tr>';
                        
			while($row = mysqli_fetch_assoc($res))
			{
				echo '<tr>
						
						<td>
								<img src="'.$row["foto_animal"].'" alt="Mountain View" style="width:180px;height:180px;">
							
						</td>

						<td>
							<div id="animal">

								<label for="name_animal">Nombre: </label>
								<label id="nombre_animal">'.$row["nombre_animal"].'<br></label>
								<label for="estado_animal">Estado: </label>
								<label id="estado_animal">'.$row["estado_animal"].'<br></label>
							</div>
						</td>

						<td>
							<div id="animal">
								<a href="index.php?t=modificando&animal='.$row["chip_animal"].'">Ver </a>'.'
							</div>
						</td>
                                                
<td>
							<div id="animal">
								<a href="index.php?t=modificar_animal&eliminar=true&user='.$row["chip_animal"].'"> Eliminar </a>'.'
							</div>
						</td>
					</tr>';
			}

			mysqli_close($conexion_bd);
					
	
		?>

	</tbody>

	

</table>