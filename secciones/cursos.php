<?php
include_once '../configuraciones/bdrd.php';
$conectionBD=BD::crearInstancia();
$pdo = BD::crearInstancia();
$pdo->exec("USE canfc"); // Seleccionar la base de datos "aplicacion"
 

/*
$id=isset($_POST['id_curso'])?$_POST['id_curso']:'';
$nombre_curso=isset($_POST['nombre_curso'])?  $_POST['nombre_curso']:'';
$accion=isset($_POST['accion'])? $_POST['accion']:'';

if($accion!=''){
    switch($accion) {
        case 'agregar':
            $sql="INSERT INTO cursos (idcursos,nombre_curso) VALUES (NULL,:nombre_curso)";
            $resultado=$conectionBD->prepare($sql);
            $resultado->bindParam(':nombre_curso',$nombre_curso);
            $resultado->execute();
            break;
        case 'editar':
            $sql="UPDATE cursos SET nombre_curso='$nombre_curso' WHERE idcursos='$id'";
            $resultado=$conectionBD->prepare($sql);
            $resultado->bindParam(':id',$id);
            $resultado->execute();
            break;
        case 'eliminar':
            $sql="DELETE FROM cursos WHERE idcursos='$id'";
            $resultado=$conectionBD->prepare($sql);
            $resultado->bindParam(':id',$id);
            $resultado->execute();
            break;
        case "Seleccionar":
            $sql="SELECT * FROM cursos WHERE idcursos='$id'";
            $resultado=$conectionBD->prepare($sql);
            $resultado->bindParam(':id',$id);
            $resultado->execute();
            $curso = $resultado->fetch(PDO::FETCH_ASSOC);
            $nombre_curso = $curso['nombre_curso'];
            break;
        default:
    }
}



$consulta=$conectionBD->prepare("SELECT * FROM cursos");
$consulta->execute();
$listaCursos=$consulta->fetchAll();





*/
?>