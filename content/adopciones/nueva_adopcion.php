<table>
						
	<tbody>
		<tr>
			<td><h2>Nueva Adopción</h2></td>
		</tr>
		
                    <?php
                        
                        $animal = isset($_GET["animal"]) ? $_GET["animal"] : '';
                        
                        if ($animal == "") //No se ha seleccionado animal: Selecciona animal
                        {
                        
                            include('content/base_datos/conexion_bd.php');

                            $sql = "SELECT * FROM animal WHERE chip_animal NOT IN (SELECT chip_animal FROM adopcion)";

                            $res = mysqli_query($conexion_bd, $sql);
                            
                            echo '<tr>
                                    <td><h2>Selecciona Animal:</h2></td>
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
                                                                    <br><a href="index.php?t=nueva_adopcion&animal='.$row["chip_animal"].'">Seleccionar </a>'.$row["nombre_animal"].'</br>
                                                            </div>
                                                    </td>
                                            </tr>';
                            }

                            mysqli_close($conexion_bd);
                        }
                        
                        else //Animal seleccionado: Seleccionar adoptante
                        {
                            
                            include('content/base_datos/conexion_bd.php');

                            $sql = "SELECT * FROM adoptante";

                            $res = mysqli_query($conexion_bd, $sql);
                            
                             echo '<tr>
                                    <td><h2>Selecciona Adoptante:</h2></td>
                                </tr>';
                            
                            while($row = mysqli_fetch_assoc($res))
                            {
                                    echo '<tr>

                                                    <td>
                                                            <div id="adoptante">

                                                                    <label for="name_adoptante">Nombre: </label>
                                                                    <label id="nombre_adoptante">'.$row["nombre"].'<br></label>
                                                                    <label for="DNI">DNI: </label>
                                                                    <label id="DNI_adoptante">'.$row["DNI"].'<br></label>
                                                            </div>
                                                    </td>

                                                    <td>
                                                            <div id="animal">
                                                                    <br><a href="index.php?t=crea_adopcion&animal='.$animal.'&adoptante='.$row["DNI"].'">Seleccionar </a>'.$row["DNI"].'</br>
                                                            </div>
                                                    </td>
                                            </tr>';
                            }

                            mysqli_close($conexion_bd);
                            
                        }
                        
                    ?>
					
					
	</tbody>

	

</table>
