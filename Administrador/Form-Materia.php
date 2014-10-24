<?php
/*$acceso= $_COOKIE['acceso'];
$tipo= $_COOKIE['tipo'];
$id=$_COOKIE['usuario'];
if($acceso !='1')
{
    header('location:../acceso.php');
    exit;
}*/
include('Index-Admin.php');
/*include('accadmin.php');*/

require ('Materia.php');
require ('../Conexion.php');
require ('Header.php');


if(isset($_REQUEST['accion'])){
    $accion = $_REQUEST['accion'];
    $materia = $_REQUEST['materia'];
    $maestro = $_REQUEST['maestro'];

    if($materia != 0){
        $sql = "INSERT INTO maestro_materia (id_maestro, id_materia) VALUES ($maestro, $materia)";
        $consulta = mysql_query($sql)or die("Error de inserción");
    }

}

//Creamos un objeto
$materia = new Materia();
$materia->seleccionaMaestro();
require ('Footer.php');
?>