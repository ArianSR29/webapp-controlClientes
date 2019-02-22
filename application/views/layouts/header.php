<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Bienvenido : Dashboard</title>

    <link rel="stylesheet" href=" <?php base_url();?>assets/css/general.css">
    <link rel="stylesheet" href=" <?php base_url();?>assets/css/__config.css">
</head>
<body>
<header>
    <section class="s-info-user">
        <div class="__info-user">
            <span> Nombre: <?php echo $this->session->userdata("nombre")?> <?php echo $this->session->userdata("apellidos")?> </span>
                <?php if($this->session->userdata("rol") == 1): ?>
                    <span>Sesión de Administrador</span>
                <?php endif ?>
                <div class="__cerrar-sesion">
                    <a href="<?php base_url(); ?>auth/logout ">Cerrar sesión</a>
                </div>
        </div>
    </section>
    <nav>
        <ul>
            <li><a href="http://" target="_blank" rel="noopener noreferrer">Generar Reportes</a></li>
        </ul>
    </nav>
</header>