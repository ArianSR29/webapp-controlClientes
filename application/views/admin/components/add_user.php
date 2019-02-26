<div class="s-add-user">
	<div class="title-user">
		<h3 class="fs36 verde11 monserratSB">Agregar Usuario</h3>
	</div>
	<hr>
	<div class="s-form-user">
		<form action="<?php echo base_url();?>usuarios/guardarUsuario" method="POST">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="tb-rpe" name="tb_rpe" required>
				<label class="mdl-textfield__label" for="tb-rpe">RPE*</label>
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
				<input class="mdl-textfield__input" type="email" id="tb-email" name="tb_email" required>
				<label class="mdl-textfield__label" for="tb-email">Email*</label>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="tb-telefono" name="tb_telefono" required>
				<label class="mdl-textfield__label" for="tb-telefono">Teléfono*</label>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="tb-username" name="tb_username" required>
				<label class="mdl-textfield__label" for="tb-username">Username*</label>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="password" id="tb-password" name="tb_password" required>
				<label class="mdl-textfield__label" for="tb-password">Password*</label>
			</div>
			<div class="s-rol">
				<select name="rol" id="rol">
                    <option value="1">Administrador</option>
                    <option value="2">Usuario</option>
                </select>
			</div>
			<button class="monserratR fs14 __btn-guardar">Guardar</button>
		</form>
	</div>
</div>
