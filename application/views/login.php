<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio de sesión</title>

    <!-- Material Desing Lite INIT-->
    <link rel="stylesheet" href=" <?php base_url();?>assets/libs/mdl/material.css">
    <script src=" <?php base_url(); ?>assets/libs/mdl/material.js" ></script>
    <!-- Material Desing Lite END-->

    <link rel="stylesheet" href=" <?php base_url();?>assets/css/__config.css ">
    <link rel="stylesheet" href=" <?php base_url();?>assets/css/login.css ">
</head>
<body>
    <section class="s-formulario">
        <div class="__image-login">
        </div>
        <div class="__error_message">
            <?php if($this->session->flashdata('error')):?>
                <p class="fs18"><?php echo $this->session->flashdata('error') ?></p>
            <?php endif ?>
        </div>
        <form action=" <?php echo base_url(); ?>auth/login " method="POST"> 
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="tb-user" name="login_tb_user" required>
                <label class="mdl-textfield__label" for="tb-user">Usuario</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="password" id="tb-user" name="login_tb_password" required>
                <label class="mdl-textfield__label" for="tb-user">Contraseña</label>
            </div>
            <button>ENTRAR</button>
        </form>
    </section>
</body>
</html>