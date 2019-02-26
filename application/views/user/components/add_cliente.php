<div class="s-add-clientes">
	<div class="title-clientes">
		<h3 class="fs36 verde11 monserratSB">Agregar Cliente</h3>
	</div>
	<hr>
	<div class="s-form-clientes">
		<form action="<?php echo base_url();?>clientes/guardarCliente" method="POST">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="tb-rpu" name="tb-rpu" required>
				<label class="mdl-textfield__label" for="tb-rpu">RPU*</label>
			</div>
			<div class="s-raiting">
				<input class="star star-1" id="star-1" type="radio" name="star" value="1" />
				<label class="star star-1" for="star-1"></label>
				<input class="star star-2" id="star-2" type="radio" name="star" value="2" />
				<label class="star star-2" for="star-2"></label>
				<input class="star star-3" id="star-3" type="radio" name="star" value="3" />
				<label class="star star-3" for="star-3"></label>
				<input class="star star-4" id="star-4" type="radio" name="star" value="4" />
				<label class="star star-4" for="star-4"></label>
				<input class="star star-5" id="star-5" type="radio" name="star" value="5" />
				<label class="star star-5" for="star-5"></label>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="tb-nombre" name="tb_nombre" required>
				<label class="mdl-textfield__label" for="tb-nombre">Nombre*</label>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="tb-apellidos" name="tb_apellidos" required>
				<label class="mdl-textfield__label" for="tb-apellidos">Apellidos*</label>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="tb-direccion" name="tb_direccion" required>
				<label class="mdl-textfield__label" for="tb-direccion">Dirección*</label>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="tb-colonia" name="tb_colonia" required>
				<label class="mdl-textfield__label" for="tb-colonia">Colonia*</label>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="tb-cp" name="tb_cp" required>
				<label class="mdl-textfield__label" for="tb-cp">Código Postal*</label>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="tb-telefono" name="tb_telefono" required>
				<label class="mdl-textfield__label" for="tb-telefono">Teléfono*</label>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="tb-cuenta" name="tb_cuenta" required>
				<label class="mdl-textfield__label" for="tb-cuenta">Cuenta*</label>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="tb-tarifa" name="tb_tarifa" required>
				<label class="mdl-textfield__label" for="tb-tarifa">Tarífa*</label>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="date" id="tb-fecha-alta" name="tb_fecha-alta" required>
				<label class="mdl-textfield__label" for="tb-fecha-alta">Fecha de alta*</label>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="tb-hilos" name="tb_hilos" required>
				<label class="mdl-textfield__label" for="tb-hilos">Hilos*</label>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="tb-sts" name="tb_sts" required>
				<label class="mdl-textfield__label" for="tb-sts">STS de Servicio*</label>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="tb-email" name="tb_email" required>
				<label class="mdl-textfield__label" for="tb-email">Email*</label>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="tb-rfc" name="tb_rfc" required>
				<label class="mdl-textfield__label" for="tb-rfc">RFC*</label>
			</div>
			<button class="monserratR fs14 __btn-guardar">Guardar</button>
		</form>
	</div>
</div>
