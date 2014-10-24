<?php
include('Conexion.php');
include('Usuario.php');


$nom=$_GET['usuario'];
$psw=$_GET['password1'];
$usuario=new Usuario();
$usuario->validar($nom,$psw);
?>
