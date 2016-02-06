<form id="formulario_usuario" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
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
                                    <label for="name_animal">Chip Animal: </label>
                                    <label id="nombre_animal">'.$animal.'<br></label>
                                </td>
                                <td>
                                    <label for="name_animal">DNI Adoptante: </label>
                                    <label id="nombre_animal">'.$adoptante.'<br></label>
                                </td>
                        </tr>';
                        
                    ?>
					
		<tr>
			<td><label for="fecha">Fecha:</label></td>
			<td><input id="fecha" name="fecha" size="30" maxlength="40" type="date"></td>							
		</tr>
                
                <tr>
			<td><label for="tasas">Tasas:</label></td>
			<td><input id="tasas" name="tasas" size="30" maxlength="40" type="text"></td>							
		</tr>
                
                <tr>
			<td><label for="tasa_abonada">Tasa Abonada:</label></td>
			<td><input id="tasa_abonada" name="tasa_abonada" size="30" maxlength="40" type="text"></td>							
		</tr>
                
                <tr>
			<td><label for="contrato">Contrato:</label></td>
			<td><input id="contrato" name="contrato" size="30" maxlength="40" type="text"></td>							
		</tr>
                
                <tr>
			<td><label for="notas">Notas:</label></td>
			<td><input id="notas" name="notas" size="30" maxlength="40" type="text"></td>							
		</tr>
                
                <tr>
			<td align="center" colspan="2"> 
			<input type="submit" id="insertar" name="insertar" value="Insertar"/>
			</td>
		</tr>
                
	</tbody>

	

</table>
</form>

<?php

	if (isset($_POST['insertar']))
	{
			
            include('content/base_datos/conexion_bd.php');

            $sql = "INSERT INTO `shelter`.`adopcion` (`DNI`, `chip_animal`, `fecha`, `tasas`, `tasa_abonada`, `contrato`, `notas`) VALUES ('".$adoptante."', '".$animal."', '".$_POST['fecha']."', '".$_POST['tasas']."', '".$_POST['tasa_abonada']."', '".$_POST['contrato']."', '".$_POST['notas']."');";

            $res = mysqli_query($conexion_bd, $sql);

            if($res == 1)
            {
                    echo "Insercion Correcta";
            }else
            {
                    echo "Insercion falillda";
            }
        }

?>