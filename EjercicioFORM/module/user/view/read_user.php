<div id="contenido">
    <h1>Informacion del Usuario</h1>
    <p>
    <table border='2'>
        <tr>
            <td>Usuario: </td>
            <td>
                <?php
                    echo $user['usrnom'];
                ?>
            </td>
        </tr>
    
        <tr>
            <td>Contraseña: </td>
            <td>
                <?php
                    echo $user['pass'];
                ?>
            </td>
        </tr>

        <tr>
            <td>Email: </td>
            <td>
                <?php
                    echo $user['email'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Nombre: </td>
            <td>
                <?php
                    echo $user['nom'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Apellidos: </td>
            <td>
                <?php
                    echo $user['ape'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Sexo: </td>
            <td>
                <?php
                    echo $user['sexo'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Fecha de nacimiento: </td>
            <td>
                <?php
                    echo $user['f_nac'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Direccion: </td>
            <td>
                <?php
                    echo $user['direc'];
                ?>
            </td>
            
        </tr>
        
        <tr>
            <td>Pais: </td>
            <td>
                <?php
                    echo $user['pais'];
                ?>
            </td>
        </tr>
        
    </table>
    </p>
    <p><a href="index.php?page=controller_user&op=list">Volver</a></p>
</div>