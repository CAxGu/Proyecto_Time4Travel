<div id="contenido">
    <div class="container">
    	<div class="row">
    			<h3>LISTA DE VIAJES</h3>
    	</div>
    	<div class="row">
    		<table>
                <tr>
                    <td align="left">
                        <a href="index.php?page=controller_viajes&op=create"><img src="view/img/traveladd.png" height=50px weight=50px></a>
                        &nbsp;&nbsp;&nbsp;
                        <a href="index.php?page=controller_viajes&op=deleteAll"><img src="view/img/deleteall.png" height=45px weight=45px></a>
                    </td>
                    <td align="right">
                        <a href="index.php?page=controller_viajes&op=list" align="right"><img src="view/img/up.png" height=15px weight=15px></a>
                        <a href="index.php?page=controller_viajes&op=listDesc" align="right"><img src="view/img/down.png" height=15px weight=15px></a>
                    </td>
                </tr>
            </table>
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