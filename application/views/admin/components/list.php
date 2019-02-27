<section class="s-main-usuarios-list">
    <div class="__usuarios-title">
        <h3 class="monserratSB fs36 verde11">Usuarios <small class="fs16">Listado</small></h3>
            <a href="<?php base_url(); ?>usuarios" class="monserratR fs14 __btn-agregar">Agregar usuario</a>
    </div>
    <hr>
    <div class="s-table-list">
        <table class="monserratR verde11" id="usuarios-table">
            <thead class="monserratSB fs18">
                <tr>
                    <th>RPE</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>E-mail</th>
                    <th>Teléfono</th>
                    <th>Username</th>
                    <th>Rol</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($usuarios)): ?>
                    <?php foreach ($usuarios as $usuario): ?>
                    <?php 
                        if($usuario->rol == 1){
                            $rol = "Administrador";
                        }
                        elseif ($usuario->rol == 2){
                            $rol = "Estandar";
                        }
                    ?>
                        <tr>
                            <th> <?php echo $usuario->rpe; ?> </th>
                            <th> <?php echo $usuario->nombre; ?> </th>
                            <th> <?php echo $usuario->apellidos; ?> </th>
                            <th> <?php echo $usuario->email; ?> </th>
                            <th> <?php echo $usuario->telefono; ?> </th>
                            <th> <?php echo $usuario->username; ?> </th>
                            <th> <?php echo $rol ?> </th>
                            <th>
                                <div class="btn-group">
                                    <a href="<?php echo base_url(); ?>usuarios/editUsuario/<?php echo $usuario->rpe; ?>"><i class="fa fa-pencil-alt"></i></a>
                                    <a href=""><i class="fa fa-times"></a>
                                </div>
                            </th>
                        </tr>
                    <?php endforeach ?>
                    <?php endif ?>
            </tbody>
        </table>
    </div>
</section>