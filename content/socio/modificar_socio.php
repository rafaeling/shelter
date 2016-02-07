<table>
						
	<tbody>
		

		<?php
                
                        
                        
                        $eliminar = isset($_GET["eliminar"]) ? $_GET["eliminar"] : '';
		
                        
                        include('content/base_datos/conexion_bd.php');
                        
                        if($eliminar == 'true')
                        {
                            $user = isset($_GET["user"]) ? $_GET["user"] : '';
                            
                            $sql = "DELETE FROM socio WHERE DNI='".$user."'";
                            
                            $res = mysqli_query($conexion_bd, $sql);
                        }
                        
                        
                        
                        
                     
                        
                        
			$sql = "SELECT * FROM socio";
			
			$res = mysqli_query($conexion_bd, $sql);
                        
                        
                        echo '<tr>
                            <td>
							<div id="animal">
								<a href="index.php?t=nuevo_socio"> Nuevo socio </a>
							</div>
						</td>
			</tr>
                        <tr>
			<td><h2>Socios:</h2></td>
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

							</div>
						</td>

						<td>
							<div id="animal">
								<a href="index.php?t=socio_change&user='.$row["DNI"].'">Ver </a>'.'
							</div>
						</td>
                                                
<td>
							<div id="animal">
								<a href="index.php?t=modificar_socio&eliminar=true&user='.$row["DNI"].'"> Eliminar </a>'.'
							</div>
						</td>
					</tr>';
			}

			mysqli_close($conexion_bd);
					
	
		?>

	</tbody>

	

</table>