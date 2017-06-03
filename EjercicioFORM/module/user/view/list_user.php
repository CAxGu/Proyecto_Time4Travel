<div id="contenido">
    <div class="container">
    	<div class="row">
    			<h3>LISTA DE USUARIOS</h3>
    	</div>
    	<div class="row">
    		<p><a href="index.php?page=controller_user&op=create"><img src="view/img/add.png" height=45px weight=45px></a></p>
    		
    		<table>
                <tr>
                    <td><b>Usuario</b></th>
                    <td><b>Nombre</b></th>
                    <td><b>Apellidos</b></th>
                    <th><b>Accion</b></th>
                </tr>
                <?php
                    if ($rdo->num_rows === 0){
                        echo '<tr>';
                        echo '<td align="center"  colspan="4">NO HAY NINGUN USUARIO</td>';
                        echo '</tr>';
                    }else{
                        foreach ($rdo as $row) {
                       		echo '<tr>';
                    	   	echo '<td>'. $row['usuario'] . '</td>';
                    	   	echo '<td>'. $row['nombre'] . '</td>';
                    	   	echo '<td>'. $row['apellidos'] . '</td>';
                    	   	echo '<td align="center">';
                    	   	echo '<a href="index.php?page=controller_user&op=read&id='.$row['usuario'].'"><img src="view/img/read.png" height=30px weight=30px></a>';
                    	   	echo '&nbsp;';
                            echo '&nbsp;';
                            echo '&nbsp;';
                            echo '&nbsp;';
                            echo '&nbsp;';
                    	   	echo '<a href="index.php?page=controller_user&op=update&id='.$row['usuario'].'"><img src="view/img/update.png" height=30px weight=30px></a>';
                    	   	echo '&nbsp;';
                            echo '&nbsp;';
                            echo '&nbsp;';
                            echo '&nbsp;';
                            echo '&nbsp;';
                    	   	echo '<a href="index.php?page=controller_user&op=delete&id='.$row['usuario'].'"><img src="view/img/delete.png" height=30px weight=30px></a>';
                    	   	echo '</td>';
                    	   	echo '</tr>';
                        }
                    }
                ?>
            </table>
    	</div>
    </div>
</div>