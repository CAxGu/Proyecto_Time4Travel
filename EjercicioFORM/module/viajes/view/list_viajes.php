<div id="contenido">
    <div class="container">
    	<div class="row">
    			<h3>LISTA DE VIAJES</h3>
    	</div>
    	<div class="row">
    		<p><a href="index.php?page=controller_viajes&op=create"><img src="view/img/traveladd.png" height=50px weight=50px></a></p>
    		
    		<table>
                <tr>
                    <td><b>ID</b></th>
                    <td><b>Destino</b></th>
                    <td><b>Tipo de Viaje</b></th>
                    <th><b>Accion</b></th>
                </tr>
                <?php
                    if ($rdo->num_rows === 0){
                        echo '<tr>';
                        echo '<td align="center"  colspan="4">NO HAY NINGUN VIAJE</td>';
                        echo '</tr>';
                    }else{
                        foreach ($rdo as $row) {
                       		echo '<tr>';
                    	   	echo '<td>'. $row['codviaje'] . '</td>';
                    	   	echo '<td>'. $row['destino'] . '</td>';
                    	   	echo '<td>'. $row['tipo'] . '</td>';
                    	   	echo '<td align="center">';
                    	   	echo '<a href="index.php?page=controller_viajes&op=read&id='.$row['codviaje'].'"><img src="view/img/read.png" height=30px weight=30px></a>';
                    	   	echo '&nbsp;';
                            echo '&nbsp;';
                            echo '&nbsp;';
                            echo '&nbsp;';
                            echo '&nbsp;';
                    	   	echo '<a href="index.php?page=controller_viajes&op=update&id='.$row['codviaje'].'"><img src="view/img/update.png" height=30px weight=30px></a>';
                    	   	echo '&nbsp;';
                            echo '&nbsp;';
                            echo '&nbsp;';
                            echo '&nbsp;';
                            echo '&nbsp;';
                    	   	echo '<a href="index.php?page=controller_viajes&op=delete&id='.$row['codviaje'].'"><img src="view/img/delete.png" height=30px weight=30px></a>';
                    	   	echo '</td>';
                    	   	echo '</tr>';
                        }
                    }
                ?>
            </table>
    	</div>
    </div>
</div>