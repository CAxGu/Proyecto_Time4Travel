<div id="contenido">
    <h1>Informacion del Viaje</h1>
    <p>
    <table>
        <tr>
            <td>ID: </td>
            <td>
                <?php
                    echo $user['codviaje'];
                ?>
            </td>
        </tr>
    
        <tr>
            <td>Destino: </td>
            <td>
                <?php
                    echo $user['destino'];
                ?>
            </td>
        </tr>

        <tr>
            <td>Precio: </td>
            <td>
                <?php
                    echo $user['precio'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Oferta: </td>
            <td>
                <?php
                    echo $user['oferta'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Tipo: </td>
            <td>
                <?php
                    echo $user['tipo'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Fecha de Salida: </td>
            <td>
                <?php
                    echo $user['f_salida'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Fecha de Vuelta: </td>
            <td>
                <?php
                    echo $user['f_vuelta'];
                ?>
            </td>
        </tr>
        
    </table>
    </p>
    <p><a href="index.php?page=controller_viajes&op=list">Volver</a></p>
</div>