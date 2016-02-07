<table>
						
	<tbody>
		

		<?php
                
                        
                        
                        $eliminar = isset($_GET["eliminar"]) ? $_GET["eliminar"] : '';
		
                        
                        include('content/base_datos/conexion_bd.php');
                        
                        if($eliminar == 'true')
                        {
                            $animal = isset($_GET["animal"]) ? $_GET["animal"] : '';
                            $casa_de_acogida = isset($_GET["casa_de_acogida"]) ? $_GET["casa_de_acogida"] : '';
                            $fecha_inicio = isset($_GET["fecha_inicio"]) ? $_GET["fecha_inicio"] : '';
                            
                            $sql = "DELETE FROM acogida WHERE chip_animal='".$animal."' AND dni_casa_acogida='".$casa_de_acogida."' AND fecha_inicio='".$fecha_inicio."'";
                            
                            $res = mysqli_query($conexion_bd, $sql);
                        }
                        
                        
                        
                        
                     
                        
                        
			$sql = "SELECT * FROM acogida, animal, casa_de_acogida WHERE acogida.dni_casa_acogida=casa_de_acogida.dni AND animal.chip_animal= acogida.chip_animal";
			
			$res = mysqli_query($conexion_bd, $sql);
                        
                        
                        echo '<tr>
                            <td>
							<div id="animal">
								<br><a href="index.php?t=nueva_acogida"> Nueva acogida </a></br>
							</div>
						</td>
			</tr>
                        <tr>
			<td><h2>Acogidas:</h2></td>
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
								<label for="chip_animal">Chip Animal: </label>
								<label id="chip_animal">'.$row["chip_animal"].'<br></label>
							</div>
						</td>
                                                
						<td>
							<div id="usuario">

								<label for="name_usuario">Nombre: </label>
								<label id="nombre_usuario">'.$row["nombre"].'<br></label>
								<label for="dni_usuario">DNI: </label>
								<label id="dni_user">'.$row["dni_casa_acogida"].'<br></label>
                                                                <label for="direccion">Dirección: </label>
								<label id="direccion">'.$row["direccion"].'<br></label>
							</div>
						</td>

						<td>
							<div id="ver">
								<a href="index.php?t=acogida_change&animal='.$row["chip_animal"].'&casa_de_acogida='.$row["dni_casa_acogida"].'&fecha_inicio='.$row["fecha_inicio"].'">Ver </a>'.'
							</div>
						</td>
                                                
<td>
							<div id="eliminar">
								<a href="index.php?t=modificar_acogida&eliminar=true&animal='.$row["chip_animal"].'&casa_de_acogida='.$row["dni_casa_acogida"].'&fecha_inicio='.$row["fecha_inicio"].'"> Eliminar </a>'.'
							</div>
						</td>
					</tr>';
			}

			mysqli_close($conexion_bd);
					
	
		?>

	</tbody>

	

</table>