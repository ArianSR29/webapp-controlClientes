<main>
    <section class="c-main-consumibles agregar-consumible">
        <div class="c-main-title">
            <span>Consumibles</span>
            <small>Actualizar</small>
        </div>
        <div class="c-main-form">
            <?php if($this->session->flashdata("error")): ?>
                <div class="c-error-message">
                    <p> <?php echo $this->session->flashdata("error"); ?> </p>
                </div>
    |       <?php endif; ?>
            <form action="<?php echo base_url();?>usuarios/updateUsuario" method="post">

                <input type="hidden" value="<?php echo $usuarios->rpe ?>" name="tb_rpe">

                <div class="c-input-group">
                    <label for="tb_nombre">Nombre</label>
                    <input type="text" id="tb_nombre" name="tb_nombre" value=" <?php echo $usuarios->nombre ?> ">
                </div>
                <div class="c-input-group">
                    <label for="tb_apellidos">Apellidos</label>
                    <input type="text" id="tb_apellidos" name="tb_apellidos" value="<?php echo $usuarios->apellidos ?>">
                </div>
                <div class="c-input-group">
                    <label for="tb_email">E-mail</label>
                    <input type="text" id="tb_email" name="tb_email" value="<?php echo $usuarios->email ?>">
                </div>
                <div class="c-input-group">
                    <label for="tb_telefono">Telefono</label>
                    <input type="number" id="tb_telefono" name="tb_telefono" value="<?php echo $usuarios->telefono ?>">
                </div>
                <div class="c-input-group">
                    <label for="tb_username">Username</label>
                    <input type="text" id="tb_username" name="tb_username" value="<?php echo $usuarios->username ?>">
                </div>
                <div class="s-rol">
				<select name="rol" id="rol" value="<?php echo $usuarios->rol?>">
                    <option value="1">Administrador</option>
                    <option value="2">Usuario</option>
                </select>
			</div>
                <button>Actualizar Usuario</button>
            </form>
        </div>
    </section>
</main>