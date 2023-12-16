<?php include('../templates/cabecera.php'); ?>
<?php include('../secciones/alumnos.php'); ?>


<div class="container">
    <div class="glass effect">
        <header class="header">
            <div class="contenido-header">
                <div class="contenedor-logo"><img class="logo" src="../src/img/logo-CAN-removebg-preview.png" alt=""></div>

                <h1>Control de Acceso</h1>
                <div class="contenedor-user-count"><a href="../index.php" class="user-count"><i class='bx bxs-user-circle '></i></a></div>
            </div>
            <nav class="nav">
                <div class="nav-text">
                    <a href="index.php" class="index">Inicio</a>
                    <a href="vista_alumnos.php" class="empleado">Empleado</a>
                    <a href="" class="entrada">Entrada</a>

                </div>
            </nav>
        </header>
        <div class="contenido">
            <div class="information">
                <div class="text">
                    <p>Ingrese los datos del empleado</p>
                </div>
                <form class="form-information">
                    <div class="input">
                        <label for="exampleInputEmail1" class="label-input-form">Nombres:</label>
                        <input type="email" class="input-form" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="input">
                        <label for="exampleInputPassword1" class="label-input-form">Puesto:</label>
                        <input type="password" class="input-form" id="exampleInputPassword1">
                    </div>
                    <div class="input-checkbox">
                        <input type="checkbox" class="checkbox" id="exampleCheck1">
                        <label class="" for="exampleCheck1">Tiene tarjeta de identificacion? Si no reguistre una <a href="#">aqui</a></label>
                    </div>
                    <button type="submit" class="submit-form">Enviar</button>
                </form>
            </div>
            <div class="table">

                <div id="myModal" class="modal">

                    <div class="modal-content">
                        <span class="close" id="closeModalBtn">&times;</span>
                        <div>
                            <h3>Edite los datos del empleado</h3>
                        <form class="form-information">
                    <div class="input">
                        <label for="exampleInputEmail1" class="label-input-form">Nombres:</label>
                        <input type="email" class="input-form" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="input">
                        <label for="exampleInputPassword1" class="label-input-form">Puesto:</label>
                        <input type="password" class="input-form" id="exampleInputPassword1">
                    </div>
                    <div class="input-checkbox">
                        <input type="checkbox" class="checkbox" id="exampleCheck1">
                        <label class="" for="exampleCheck1">Tiene tarjeta de identificacion? Si no reguistre una <a href="#">aqui</a></label>
                    </div>
                    <button type="submit" class="submit-form">Enviar</button>
                </form>
                        </div>
                    </div>
                </div>

                <div class="text">
                    <p>Listado de Empleados</p>
                    <input type="text-buscar" placeholder="Buscar por nombre, puesto, etc.">
                </div>

                <div class="table-information">

                    <table class="table-bordered table-spaced table-shadow ">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Puesto</th>

                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>Nombre1</td>
                                <td>Puesto1</td>

                                <td class="acciones">
                                    <button id="openModalBtn" class="editar"><i class='bx bxs-edit-alt'></i>Editar</button>
                                    <button class="eliminar"><i class='bx bxs-x-circle'></i>Eliminar</button>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>

            </div>


        </div>

    </div>
    <!--
<div class="information ">
    <div class="text">
        <p>Ingrese los datos del empleado</p>
    </div>
    <form class="form-information">
        <div class="input">
            <label for="exampleInputEmail1" class="label-input-form">Nombres:</label>
            <input type="email" class="input-form" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="input">
            <label for="exampleInputPassword1" class="label-input-form">Puesto:</label>
            <input type="password" class="input-form" id="exampleInputPassword1">
        </div>
        <div class="input-checkbox">
            <input type="checkbox" class="checkbox" id="exampleCheck1">
            <label class="" for="exampleCheck1">Tiene tarjeta de identificacion? Si no reguistre una <a href="#">aqui</a></label>
        </div>
        <button type="submit" class="submit-form">Submit</button>
    </form>
</div>


<div id="myModal" class="modal">

    <div class="modal-content">
      <span class="close" id="closeModalBtn">&times;</span>
      <div></div>
    </div>
</div>

<div class="table">
<div class="text">
    <button id="openModalBtn" class="añadir" type="button">Añadir</button>

    <input type="text-buscar" placeholder="Buscar por nombre, puesto, etc.">



</div>

<div class="table-information">

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Puesto</th>

                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>Nombre1</td>
                <td>Puesto1</td>

                <td class="acciones">
                    <button class="editar">Editar</button>
                    <button class="eliminar">Eliminar</button>
                </td>
            </tr>
            

        </tbody>
    </table>
</div>
</div>
-->

    </body>

    </html>





    <!--

<div class="col-5">
    <form action="" method="post">
        <div class="card">
            <div class="card-header">
                Ingreso de Alumnos
            </div>
            <div class="card-body">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="idalumnos" id="idalumnos" value="<?php echo $id; ?>" placeholder="">
                    <label for="formId1">ID</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $nombre ?>" placeholder="">
                    <label for="formId1">Nombre</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="apellido" id="apellido" value="<?php echo $apellido ?>" placeholder="">
                    <label for="formId1">Apellido</label>
                </div>
                <div class="form-floating mb-3">
                    <div class="mb-3">
                        <label for="" class="form-label">Cursos Alumnos:</label>
                        <select multiple class="form-control" name="cursos[]" id="cursos" name="cursos" value="<?php echo $cursos ?>">
                            <?php foreach ($cursos as $curso) { ?>
                            <option
                            <?php
                                if (!empty($arregloCursos)) :
                                    if (in_array($curso['idcursos'], $arregloCursos)) :
                                        echo 'selected';
                                    endif;
                                endif

                            ?> 
                            value="<?php echo $curso['idcursos']; ?> "><?php echo $curso['idcursos']; ?> - <?php echo $curso['nombre_curso']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
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
                    <?php foreach ($listaAlumnos as $alumnos) { ?>
                    <tr class="table-primary" >
                        <td scope="row"> <?php echo $alumnos['idalumnos']; ?> </td>
                        <td>  
                            <?php echo $alumnos['nombre']; ?>
                            <?php echo $alumnos['apellido']; ?>
                            <br>
                            <?php foreach ($alumnos['cursos'] as $curso) { ?>
                                - <a href="#"> <?php echo $curso['nombre_curso']; ?> </a><br/>

                                <?php } ?>
                            
                        </td>
                        

                        <td>
                            <form action="" method="post">
                                <input type="hidden" name="idalumnos" id="idalumnos" value="<?php echo $alumnos['idalumnos']; ?>">
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

<link href="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/css/tom-select.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script>

<script>
new TomSelect("#cursos",{
		plugins: ['remove_button'],
		create: true,
		onItemAdd:function(){
			this.setTextboxValue('');
			this.refreshOptions();
		},
		render:{
			option:function(data,escape){
				return '<div class="d-flex"><span>' + escape(data.text) + '</span><span class="ms-auto text-muted">' + escape(data.date) + '</span></div>';
			},
			item:function(data,escape){
				return '<div>' + escape(data.text) + '</div>';
			}
		}
	});
	
</script>
-->

    <?php include('../templates/pie.php'); ?>