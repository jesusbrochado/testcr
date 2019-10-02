<?php require RUTA_APP . '/vistas/inc/header.php' ?>

<h2 class="titulos">Agregar programador</h2>

<div class="container">

    <form class="forms" action="<?php echo RUTA_URL; ?>/paginas/agregar" method="POST">
    <div class="row">
        <div class="form-group col-lg-6">
            <label class="labels" for="nombre_programador">Nombre<sup>*</sup>:</label>
            <input type="text" name="nombre_programador" class="form-control  form-control-lg">
        </div>
        <div class="form-group col-lg-6">
            <label class="labels" for="email">Email<sup>*</sup>:</label>
            <input type="text" name="email" class="form-control  form-control-lg">
        </div>
    </div>

<div class="row">
        <div class="form-group col-lg-6">
            <label class="labels" for="estado">Estado<sup>*</sup>:</label>
            <input type="text" name="estado" class="form-control  form-control-lg">
        </div>
    </div>
        <input type="submit" class="btn btn-secondary" value="Agregar Usuario">
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php' ?>