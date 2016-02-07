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
							<div id="button">
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
								<label for="chip_animal">Chip Animal: </label>
								<label id="chip_animal">'.$row["chip_animal"].'<br></label>
							</div>
						</td>

						<td>
							<div id="animal">
								<br><a href="index.php?t=modificando&animal='.$row["chip_animal"].'">Modificar </a>'.$row["nombre_animal"].'</br>
							</div>
						</td>
                                                
<td>
							<div id="animal">
								<br><a href="index.php?t=modificar_animal&eliminar=true&user='.$row["chip_animal"].'"> Eliminar </a>'.$row["chip_animal"].'</br>
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

