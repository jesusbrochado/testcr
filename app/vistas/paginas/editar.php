<?php require RUTA_APP . '/vistas/inc/header.php' ?>

    <h2 class="titulos">Editar programador</h2>
    <form class="forms" action="<?php echo RUTA_URL;?>/paginas/editar/<?php echo $datos['id_programador']?>" method="POST">
        <div class="form-group">
            <label class="labels" for="nombre_programador">Nombre<sup>*</sup>:</label>
            <input type="text" name="nombre_programador" class="form-control  form-control-lg" value="<?php echo $datos['nombre_programador'];?>">
        </div>
        <div class="form-group">
            <label  class="labels" for="email">Email<sup>*</sup>:</label>
            <input type="text" name="email" class="form-control  form-control-lg" value="<?php echo $datos['email'];?>">
        </div>
        <div class="form-group">
            <label  class="labels" for="estado">Estado<sup>*</sup>:</label>
            <input type="text" name="estado" class="form-control  form-control-lg" value="<?php echo $datos['estado'];?>">
        </div>
        <input type="submit" class="btn btn-secondary" value="Editar Usuario">
    </form>
<?php require RUTA_APP . '/vistas/inc/footer.php' ?>