<?php require RUTA_APP . '/vistas/inc/header.php' ?>

<h2 class="titulos">Programadores registrados</h2>
<div class="container">
    <table class="table">

        <thead class="table thead">
            <tr>
                <th class="tprin id">ID</th>
                <th class="tprin ">NOMBRE</th>
                <th class="tprin ">EMAIL</th>
                <th class="tprin "> ESTADO</th>
                <th class="action-links tprin ">ACCIONES</th>
            </tr>
        </thead>
        <tbody class="table tbody">
            <?php foreach ($datos['usuarios'] as $usuario) :  ?>

                <tr>

                    <td class="tprin "><?php echo $usuario->id_programador; ?></td>
                    <td><?php echo $usuario->nombre_programador; ?></td>
                    <td ><?php echo $usuario->email; ?></td>
                    <td ><?php echo $usuario->estado; ?></td>
                    <td class="action-links ">
                        <a class="action" href="<?php echo RUTA_URL; ?>paginas/editar/<?php echo $usuario->id_programador; ?>">Editar</a> &nbsp;
                        <a class="action" href="<?php echo RUTA_URL; ?>paginas/borrar/<?php echo $usuario->id_programador; ?>">Borrar</a>
                    </td>



                </tr>

            <?php endforeach; ?>
        </tbody>

    </table>
</div>

<?php require RUTA_APP . '/vistas/inc/footer.php' ?>