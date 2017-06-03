<div id="contenido">
<form autocomplete="on" method="post" name="alta_viaje" id="alta_viaje" onsubmit="return validate_viaje();" action="index.php?page=controller_viajes&op=create">
		<?php
				if(isset($check['error'])){
				print ("<br><span class='error' color: #ff0000;>" . "* ".$check['error'] . "</span></br>");
		}?>	
		<br><br>	
		<div>
            <label>ID VIAJE:</label>
           	<input size="30" name="idviaje" id="idviaje" type="text" placeholder="Introduce el ID del viaje" value="<?php echo $_POST?$_POST['idviaje']:""; ?>" >	
			<span  id="e_idviaje" class="styerror">
				<?php
				echo($e_idviaje);
				?>
			</span>
        </div>
		<div class="boxes">
			<label>Destino:</label>
			<select name="destino" id="destino" >
				<option value="" selected>-- Seleccione el Destino --</option>
				<option value="España" <?php if($_POST['destino']==="España") echo 'selected'?>>España</option>
				<option value="Francia" <?php if($_POST['destino']==="Francia") echo 'selected'?>>Francia</option>
				<option value="Portugal" <?php if($_POST['destino']==="Portugal") echo 'selected'?>>Portugal</option>
				<option value="Andorra" <?php if($_POST['destino']==="Andorra") echo 'selected'?>>Andorra</option>
                <option value="Argentina" <?php if($_POST['destino']==="Argentina") echo 'selected'?>>Argentina</option>
                <option value="Bélgica" <?php if($_POST['destino']==="Bélgica") echo 'selected'?>>Bélgica</option>
                <option value="China" <?php if($_POST['destino']==="China") echo 'selected'?>>China</option>
			</select>
			<span id="e_destino" class="styerror"></span>
				<?php
				echo($e_destino);
				?>
			</span>
		</div>
		<div class="boxes">
			<label>Precio:</label>
			<input size="30" maxlength="4" type='number' min="70" max="4000" name="precio" id="precio" placeholder="€" value="<?php echo $_POST?$_POST['precio']:""; ?>" >
			<span id="e_precio" class="styerror">
				<?php
					echo($e_precio);
				?>
			</span>
		</div>
        <div class="boxes">
			<label>Oferta:</label>
			<input name="oferta" id="oferta" type="radio" <?php if (isset($oferta) && $oferta=="No")?> value="No" checked>NO
			<input name="oferta" id="oferta" type="radio" <?php if (isset($oferta) && $oferta=="Si")?> value="Si">SI
		</div>
		 <div class="boxes">
			<label>Tipo:</label>
			<input name="tipo[]" id="tipo[]" type="checkbox" value="Crucero">Crucero
			<input name="tipo[]" id="tipo[]" type="checkbox" value="Tour">Tour
            <input name="tipo[]" id="tipo[]" type="checkbox" value="Visita Guiada">Visita Guiada
            <span id="e_tipo" class="styerror">
				<?php
					echo($tipo);
				?>
			</span>
		</div>
		<div class="boxes">
			<label>Fecha de Salida:</label>
			<input size="30" type="date" name= "f_sal" id="f_sal" placeholder="Ingrese la fecha de salida" readonly value="<?php echo $_POST?$_POST['f_sal']:""; ?>" >
			<span id="e_f_sal" class="styerror">
				<?php
					echo($e_f_sal);
				?>
			</span>
		</div>
		<div class="boxes">
			<label>Fecha de Vuelta:</label>
			<input size="30" type="date" name= "f_lleg" id="f_lleg" placeholder="Ingrese la fecha de vuelta" readonly value="<?php echo $_POST?$_POST['f_lleg']:""; ?>" >
			<span id="e_f_lleg" class="styerror">
				<?php
					echo($e_f_lleg);
				?>
			</span>
		</div>
											 
		<br><br><div><input type="submit" name="create" id="create"/></div></br></br>
        <br><br><div align="left"><a href="index.php?page=controller_viajes&op=list">Volver</a></div></br></br>
	</form>
    </div>