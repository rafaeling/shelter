<form id="formulario_usuario" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
<table>
						
	<tbody>
		<tr>
			<td><h2>Nueva Acogida</h2></td>
		</tr>
		
                    <?php
                        
                        $animal = isset($_GET["animal"]) ? $_GET["animal"] : '';
                        $casa_de_acogida = isset($_GET["casa_de_acogida"]) ? $_GET["casa_de_acogida"] : '';
                        
                        
                        echo '<tr>

                                <td>
                                    <label for="name_animal">Chip Animal: </label>
                                    <label id="nombre_animal">'.$animal.'<br></label>
                                </td>
                                <td>
                                    <label for="name_animal">DNI Casa_De_acogida: </label>
                                    <label id="nombre_animal">'.$casa_de_acogida.'<br></label>
                                </td>
                        </tr>';
                        
                    ?>
					
		<tr>
			<td><label for="fecha_inicio">Fecha:</label></td>
			<td><input id="fecha_inicio" name="fecha_inicio" size="30" maxlength="40" type="date"></td>							
		</tr>
                
                <tr>
			<td><label for="fecha_fin">Fecha:</label></td>
			<td><input id="fecha_fin" name="fecha_fin" size="30" maxlength="40" type="date"></td>							
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

            $sql = "INSERT INTO `shelter`.`acogida` (`DNI`, `chip_animal`, `fecha`, `tasas`, `tasa_abonada`, `contrato`, `notas`) VALUES ('".$casa_de_acogida."', '".$animal."', '".$_POST['fecha_inicio']."', '".$_POST['fecha_fin']."', '".$_POST['contrato']."', '".$_POST['notas']."');";

            $res = mysqli_query($conexion_bd, $sql);

            if($res == 1)
            {
                    header('Location: index.php?t=acogidas');
            }else
            {
                    echo "Insercion falillda";
            }
        }

?>