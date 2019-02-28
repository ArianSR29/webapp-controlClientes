<div class="s-main-llamada">
    <div class="title-llamada">
        <h3 class="fs36 verde11 monserratSB">Llamada</h3>
    </div>
    <hr>
    <div class="s-form-llamada">
        <form action="<?php echo base_url();?>dashboard_user/guardarLlamada" method="POST">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input 
                class="mdl-textfield__input" 
                type="text" id="tb_user" 
                name="tb_rpu" 
                required>
                <label class="mdl-textfield__label" for="tb_rpu">RPU*</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="tb-rpe" name="tb_rpe" required>
                <label class="mdl-textfield__label" for="tb-rpe">RPE de quien atiende*</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="tb-importe" name="tb_importe" required>
                <label class="mdl-textfield__label" for="tb-importe">Importe vigente*</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="tb-solucion" name="tb_solucion" required>
                <label class="mdl-textfield__label" for="tb-solucion">Solución*</label>
            </div>
            <!-- Falta Solución, comentario, Rating de cliente -->

            <button class="monserratR fs14 __btn-guardar">Registrar llamada</button>
        </form>
    </div>
</div>