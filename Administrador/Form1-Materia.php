<?php
include('Index-Admin.php');

require ('Materia.php');
require ('../Conexion.php');
require ('Header.php');


$maestro = $_POST['maestro'];

//Creamos un objeto
$materia = new Materia();

$materia->datosMaestro($maestro);

$materia->materiasAsignadas($maestro);

$materia->asignarMateriaMaestro($maestro);



require ('Footer.php');
?>
