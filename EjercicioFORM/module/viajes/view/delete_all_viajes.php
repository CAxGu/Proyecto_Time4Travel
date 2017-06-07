<div id="contenido">
    <form autocomplete="on" method="post" name="delete_viaje" id="delete_viaje" action="index.php?page=controller_viajes&op=deleteAll">
        <table border='0'>
            <tr>
                <td align="center"  colspan="2"><h3>¿Seguro que quiere borrar todos los viajes</h3></td>
                
            </tr>
            <tr>
                <td align="center"><button type="submit" name="delete" id="delete"><img src="view/img/ok.png" height=45px weight=45px></button></td>
                <td align="center"><a class="button" href="index.php?page=controller_viajes&op=list"><img src="view/img/cancel.png" height=55px weight=55px></a></td>
            </tr>
        </table>
    </form>
</div>