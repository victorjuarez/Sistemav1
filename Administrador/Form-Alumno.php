<?php
include('../Acceso-Admin.php');
error_reporting(0);
include('Index-Admin.php');
//Incluímos librerías y archivos necesarios.
require ('../Usuario.php');
require ('../Conexion.php');
require ('Alumno.php');
require ('Header.php');


//Creamos un objeto.
$alumno = new Alumno();

//Sólo si recibe el elemento del formulario 'add_alu_grup'.
if(isset($_REQUEST['add_alu_grup'])){

    //Recibimos la cantidad de alumnos.
    $numero = $_REQUEST['cuantos'];
    //Repetimos el proceso hasta $cuantos.
    for($y = 0; $y < $numero; $y++){
        //Recibimos el checkbox de la posición [$y].

        $al = $_REQUEST["al$y"];
        //Va a llamar al método asignaGrupos sólo si el checkbox está lleno.
        if($al != ""){
            $alumno->asignaGrupos($al, $_REQUEST['grupo']);
        }

    }
}

//Sólo si recibe el id a eliminar 'desasignar'.
if(isset($_REQUEST['id'])){
    //Mandamos llamar al método desasignaGrupos.
    $alumno->desasignaGrupos($_REQUEST['id']);
}

//Creamos un formulario en el cual mostramos los alumnos y el combo dinámico de los grupos.
echo"<form action=Form-Alumno.php method=POST>";
//Mostramos los alumnos ya sea asignados o desasignados de un grupo.
$alumno->muestraAlumnosGrupos();
//Mostramos el combo dinámico.
$alumno->muestraGrupos();
//Elemento del formulario 'add_alu_grup'.
echo"<input type=hidden name=add_alu_grup>";
echo"<input type=submit value=Agregar class=button_sok>";
echo"</form>";

require ('Footer.php');
?>