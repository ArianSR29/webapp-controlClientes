<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Bienvenido | Administrador Dashboard</title>

    <link rel="stylesheet" href=" <?php base_url();?>assets/css/general.css">
    <link rel="stylesheet" href=" <?php base_url();?>assets/css/__config.css">
    <link rel="stylesheet" href=" <?php base_url();?>assets/css/__admin.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <!-- Libreria Data Tables INIT-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <!-- Libreria Data Tables END-->
    <!-- Material Desing Lite INIT-->
    <link rel="stylesheet" href=" <?php base_url();?>assets/libs/mdl/material.css">
    <script src=" <?php base_url(); ?>assets/libs/mdl/material.js" ></script>
    <!-- Material Desing Lite END-->

</head>
<body>
<header>
    <section class="s-info-user">
        <div class="__info-user monserratR">
            <span> Nombre: <?php echo $this->session->userdata("nombre")?> <?php echo $this->session->userdata("apellidos")?> </span>
                <?php if($this->session->userdata("rol") == 1): ?>
                <?php endif ?>
                <div class="__cerrar-sesion">
                    <a href="<?php base_url(); ?>auth/logout">Cerrar sesión</a>
                </div>
        </div>
    </section>
    <nav>
        <ul class="fs16 monserratSB">
            <li><a href="<?php base_url(); ?>dashboard_admin">Lista de usuarios</a></li>
        </ul>
    </nav>
</header>