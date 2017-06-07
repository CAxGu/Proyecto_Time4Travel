<form autocomplete="on" method="post" name="update_viaje" id="update_viaje" onsubmit="return validate_viaje();" action="index.php?page=controller_viajes&op=update">
		<?php
				if(isset($check['error'])){
				print ("<br><span class='error' color: #ff0000;>" . "* ".$check['error'] . "</span></br>");
		}?>	
		<br><br>	
		<div>
            <label>ID VIAJE:</label>
           	<input size="30" name="idviaje" id="idviaje" type="text" placeholder="Introduce el ID del viaje" value="<?php echo $user['codviaje'];?>" readonly >	
			<span  id="e_idviaje" class="styerror">
				<?php
				echo($e_idviaje);
				?>
			</span>
        </div>
		<div class="boxes">
			<label>Destino:</label>
			<select name="destino" id="destino" >
				<option value="España" <?php if($user['destino']==="España") echo 'selected'?>>España</option>
				<option value="Francia" <?php if($user['destino']==="Francia") echo 'selected'?>>Francia</option>
				<option value="Portugal"<?php if($user['destino']==="Portugal") echo 'selected'?>>Portugal</option>
				<option value="Andorra" <?php if($user['destino']==="Andorra") echo 'selected'?>>Andorra</option>
                <option value="Argentina" <?php if($user['destino']==="Argentina") echo 'selected'?>>Argentina</option>
                <option value="Bélgica" <?php if($user['destino']==="Bélgica") echo 'selected'?>>Bélgica</option>
                <option value="China" <?php if($user['destino']==="China") echo 'selected'?>>China</option>
			</select>
			<span id="e_destino" class="styerror">
				<?php
				echo($e_destino);
				?>
			</span>
		</div>
		<div class="boxes">
			<label>Precio:</label>
			<input size="30" type='number' min="70" max="4000" name="precio" id="precio" placeholder="€" value="<?php echo $user['precio'];?>" >
			<span id="e_precio" class="styerror">
				<?php
					echo($e_precio);
				?>
			</span>
		</div>
        <div class="boxes">
			<label>Oferta:</label>
			  <?php
                        if ($user['oferta']==="No"){
                ?>
				<input name="oferta" id="oferta" type="radio" <?php if (isset($oferta) && $oferta=="No")?> value="No" checked>NO
				<input name="oferta" id="oferta" type="radio" <?php if (isset($oferta) && $oferta=="Si")?> value="Si">SI
			 <?php    
                        }else{
            	?>
				<input name="oferta" id="oferta" type="radio" <?php if (isset($oferta) && $oferta=="No")?> value="No">NO
				<input name="oferta" id="oferta" type="radio" <?php if (isset($oferta) && $oferta=="Si")?> value="Si" checked>SI
			<?php
						}
				?>
		
		</div>
		 <div class="boxes">
			<label>Tipo:</label>
			<input name="tipo[]" id="tipo[]" type="checkbox" value="Crucero" <?php if(in_array("Crucero", explode(":", $user['tipo']))) echo 'checked'?>>Crucero
			<input name="tipo[]" id="tipo[]" type="checkbox" value="Tour" <?php if(in_array("Tour", explode(":", $user['tipo']))) echo 'checked'?>>Tour
            <input name="tipo[]" id="tipo[]" type="checkbox" value="Visita Guiada" <?php if(in_array("Visita Guiada", explode(":", $user['tipo']))) echo 'checked'?>>Visita Guiada
            <span id="e_tipo" class="styerror">
				<?php
					echo($tipo);
				?>
			</span>
		</div>
		<div class="boxes">
			<label>Fecha de Salida:</label>
			<input size="30" type="text" name= "f_sal" id="f_sal" placeholder="Ingrese la fecha de salida" readonly value="<?php echo $user['f_salida'];?>" >
			<span id="e_f_nac" class="styerror">
				<?php
					echo($e_f_sal);
				?>
			</span>
		</div>
		<div class="boxes">
			<label>Fecha de Vuelta:</label>
			<input size="30" type="text" name= "f_lleg" id="f_lleg" placeholder="Ingrese la fecha de vuelta" readonly value="<?php echo $user['f_vuelta'];?>" >
			<span id="e_f_nac" class="styerror">
				<?php
					echo($e_f_lleg);
				?>
			</span>
		</div>

	    <br><br><div><input type="submit" name="update" id="update" value="Registro"/></div></br></br>
        <br><br><div><a href="index.php?page=controller_viajes&op=list" align="left"><img src="view/img/back.png" height=20px weight=20px></a></div></br></br>		
	</form>