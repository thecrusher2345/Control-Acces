<?php include('../templates/cabecera.php'); ?>
<?php include('../secciones/cursos.php'); ?>
<div class="col-5">
    <form action="" method="post">
        <div class="card">
            <div class="card-header">
                Ingreso de Curso
            </div>
            <div class="card-body">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="id_curso" id="id_curso" value="<?php echo $id; ?>" placeholder="">
                    <label for="formId1">ID</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="nombre_curso" id="nombre_curso" value="<?php echo $nombre_curso ?>" placeholder="">
                    <label for="formId1">Nombre</label>
                </div>
                <div class="btn-group" role="group" aria-label="Button group name">
                    <button type="submit" class="btn btn-primary" value="agregar" name="accion">Agregar</button>
                    <button type="submit" class="btn btn-warning" value="editar"  name="accion">Editar</button>
                    <button type="submit" class="btn btn-danger" value="eliminar"  name="accion">Eliminar</button>
                </div>

            </div>
            
        </div>


</div>
</form>
<div class="col-7">
    <div class="table-responsive">
        <table class="table table-striped
        table-hover	
        table-borderless
        table-primary
        align-middle">
            <thead class="table-light">
                <caption>Table Name</caption>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php foreach($listaCursos as $curso) {?>
                    <tr class="table-primary" >
                        <td scope="row"> <?php echo $curso['idcursos']; ?> </td>
                        <td>  <?php echo $curso['nombre_curso']; ?> </td>
                        <td>
                            <form action="" method="post">
                                <input type="hidden" name="id_curso" id="id_curso" value="<?php echo $curso['idcursos']; ?>">
                                <input type="submit" value="Seleccionar" name="accion" class="btn btn-info">
                            </form>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    
                </tfoot>
        </table>
    </div>
    
</div>

<?php include('../templates/pie.php'); ?>