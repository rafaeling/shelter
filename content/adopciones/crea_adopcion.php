<table>
						
	<tbody>
		<tr>
			<td><h2>Nueva Adopción</h2></td>
		</tr>
		
                    <?php
                        
                        $animal = isset($_GET["animal"]) ? $_GET["animal"] : '';
                        $adoptante = isset($_GET["adoptante"]) ? $_GET["adoptante"] : '';
                        
                        
                        echo '<tr>

                                <td>
                                    <label for="name_animal">Nombre Animal: </label>
                                    <label id="nombre_animal">'.$animal.'<br></label>
                                </td>
                                <td>
                                    <label for="name_animal">DNI Adoptante: </label>
                                    <label id="nombre_animal">'.$adoptante.'<br></label>
                                </td>
                        </tr>';
                        
                    ?>
					
		<tr>
			<td><label for="name_animal">Nombre:</label></td>
			<td><input id="name_animal" name="name_animal" size="30" maxlength="40" type="text"></td>							
		</tr>
                
	</tbody>

	

</table>
