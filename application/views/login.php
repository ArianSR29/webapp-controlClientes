<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio de sesión</title>

    <link rel="stylesheet" href=" <?php echo base_url(); ?>assets/css/__config.css ">
    <link rel="stylesheet" href=" <?php echo base_url(); ?>assets/css/login.css ">
    <!-- Material Desing CSS  -->
    <link rel="stylesheet" href=" <?php echo base_url(); ?>assets/libs/mdl/material.min.css">


</head>
<body>
    <section class="c-main-login">
        <div class="c-login-form">
            <form action="<?php echo base_url();?>auth/login" method="POST">
                <img src=" <?php echo base_url();?>assets/img/login/login-bgr.jpg " alt="user-img">
                <div class="c-message-error">
                    <?php if($this->session->flashdata("error")): ?>
                        <div class="c-alert">
                            <span> <?php echo $this->session->flashdata("error")?> </span>
                        </div>
                    <?php endif ?>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="tb-user" name="tb_user" required>
                    <label class="mdl-textfield__label" for="tb-user">Usuario</label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="password" id="tb-user" name="tb_password" required>
                    <label class="mdl-textfield__label" for="tb-password">Contraseña</label>
                </div>
                <button>ENTRAR</button>
            </form>
        </div>
        <p class="footer">Página renderizada en <strong>{elapsed_time}</strong> segundos.</p>
    </section>

    
    <!-- Carga de scripts -->
    <!-- Material Desing JS  -->
    <script src=" <?php echo base_url(); ?>assets/libs/mdl/material.min.js"></script>

</body>
</html>