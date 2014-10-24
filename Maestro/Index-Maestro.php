<?php

include ('../Acceso-Maestro.php');
require ('../Usuario.php');
include ('List-Materia.php');
require ('../Conexion.php');
require ('../Administrador/Alumno.php');
require ('Header.php');


//$id = $_GET['id'];


$lista_materias=new lista_materias();

$lista_materias->lmaterias($id);

require ('Footer.php');
?>