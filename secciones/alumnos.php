<?php
include_once '../configuraciones/bdrd.php';
$conectionBD=BD::crearInstancia();
$pdo = BD::crearInstancia();
$pdo->exec("USE canfc"); // Seleccionar la base de datos "aplicacion"

$id=isset($_POST['idalumnos'])?$_POST['idalumnos']:'';
$nombre=isset($_POST['nombre'])?$_POST['nombre']:'';
$apellido= isset($_POST['apellido'])? $_POST['apellido']:'';
$cursos=isset($_POST['cursos'])?$_POST['cursos']:'';
$accion=isset($_POST['accion'])?$_POST['accion']:'';

/*


if($accion!=''){
    switch($accion) {
        case 'agregar':
            $sql="INSERT INTO alumnos (idalumnos,nombre, apellido) VALUES (NULL,:nombre, :apellido)";
            $resultado=$conectionBD->prepare($sql);
            $resultado->bindParam(':nombre',$nombre);
            $resultado->bindParam(':apellido', $apellido);
            $resultado->execute();

            $idAlumno=$conectionBD->lastInsertId();

            foreach($cursos as $curso){
                $sql="INSERT INTO alumno_curso (idalumnos, idcursos) VALUES (:idalumnos,:idcursos)";
                $consulta=$conectionBD->prepare($sql);
                $consulta->bindParam(':idalumnos',$idAlumno);
                $consulta->bindParam(':idcursos',$curso);
                $consulta->execute();
            }
            
            break;
        case 'editar':
            $sql="UPDATE alumnos SET nombre='$nombre', apellido = '$apellido' WHERE idalumnos='$id'";
            $resultado=$conectionBD->prepare($sql);
            $resultado->bindParam(':id',$id);
            $resultado->bindParam(':nombre',$nombre);
            $resultado->bindParam(':apellido',$apellido);
            $resultado->execute();

            $sql="SELECT cursos.idcursos FROM alumno_curso 
            JOIN cursos ON cursos.idcursos = alumno_curso.idcursos WHERE
            alumno_curso.idalumnos = '$id'";
            $consulta=$conectionBD->prepare($sql);
            $consulta->bindParam(':id',$id);
            $consulta->execute();
            $cursosAlumno=$consulta->fetchAll();

            foreach($cursosAlumno as $curso){
                $arregloCursos[]=$curso['idcursos'];
            }
            print_r($resultado);
            break;
        case 'eliminar':
            $sql="DELETE FROM alumnos WHERE idalumnos=:id";
            $resultado=$conectionBD->prepare($sql);
            $resultado->bindParam(':id',$id);
            $resultado->execute();
            
            break;
        case "Seleccionar":
            $sql="SELECT * FROM alumnos WHERE idalumnos='$id'";
            $resultado=$conectionBD->prepare($sql);
            $resultado->bindParam(':id',$id);
            $resultado->execute();
            $alumno = $resultado->fetch(PDO::FETCH_ASSOC);
            $nombre = $alumno['nombre'];
            $apellido = $alumno['apellido'];

            $sql="SELECT cursos.idcursos FROM alumno_curso 
            JOIN cursos ON cursos.idcursos = alumno_curso.idcursos WHERE
            alumno_curso.idalumnos = '$id'";
            $consulta=$conectionBD->prepare($sql);
            $consulta->bindParam(':id',$id);
            $consulta->execute();
            $cursosAlumno=$consulta->fetchAll();

            foreach($cursosAlumno as $curso){
                $arregloCursos[]=$curso['idcursos'];
            }
            break;
        default:
    }
}



$consulta=$conectionBD->prepare("SELECT * FROM alumnos");
$consulta->execute();
$listaAlumnos=$consulta->fetchAll();

foreach($listaAlumnos as $clave =>$listaAlumno){
    $sql="SELECT * FROM cursos WHERE idcursos IN (SELECT idcursos FROM alumno_curso WHERE idalumnos=:idalumno)";

    $consulta=$conectionBD->prepare($sql);
    $consulta->bindParam(':idalumno',$listaAlumno['idalumnos']);
    $consulta->execute();
    $cursosAlumno=$consulta->fetchAll();
    $listaAlumnos[$clave]['cursos']=$cursosAlumno;




}

$sql="SELECT * FROM cursos";
$listaCursos=$conectionBD->query($sql);
$cursos=$listaCursos->fetchAll();
*/


?>