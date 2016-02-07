<form id="formulario_usuario" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
<table>
						
	<tbody>
		<tr>
			<td><h2>Crear Evento</h2></td>
		</tr>
                        
                        <tr>
                                <td><label for="fecha">Fecha:</label></td>
                                <td><input id="fecha" name="fecha" size="30" maxlength="40" type="date"></td>							
                        </tr>
                        
                        <tr>
				<td><label for="tipo">Tipo:</label></td>
				<td><select id="tipo" name="tipo">
						<option value="vacio">Seleccionar</option>
						<option value="vacuna">Vacuna</option>
						<option value="caduca">Caduca</option>
						<option value="reunion">Reunion</option>
						<option value="esteril">Estéril</option>
                                                <option value="chip">Chip</option>
                                                <option value="prueba">Prueba</option>
                                                <option value="otros">Otros</option>
					</select>

				</td>							
			</tr>


			<tr>
				<td><label for="realizado">Realizado:</label></td>
				<td><select id="realizado" name="realizado">
						<option value="vacio">Seleccionar</option>
						<option value="1">Si</option>
						<option value="0">No</option>
					</select>
				</td>							
			</tr>
                        
                        <tr>
                                <td><label for="notas">Notas:</label></td>
                                <td><input id="notas" name="notas" size="30" maxlength="500" type="text"></td>							
                        </tr>
                        
			<tr>
                                <td><label for="lista_correos">Lista de Correos:</label></td>
                                <td><input id="lista_correos" name="lista_correos" size="30" maxlength="500" type="text"></td>							
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

            $sql = "INSERT INTO `shelter`.`evento` (`id_evento`, `fecha`, `tipo`, `realizado`, `notas`, `lista_correos`) VALUES ('','".$_POST['fecha']."', '".$_POST['tipo']."', '".$_POST['realizado']."', '".$_POST['notas']."', '".$_POST['lista_correos']."');";

            $res = mysqli_query($conexion_bd, $sql);

            if($res == 1)
            {
                    header('Location: index.php?t=eventos');
            }else
            {
                    echo "Insercion falillda";
            }
        }

?>