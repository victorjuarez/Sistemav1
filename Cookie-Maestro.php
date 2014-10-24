<?php
$user=$_GET['idu'];
if ($user =='')
{
    $msg="No iniciaste sesion";
    header("location:Index.php?msg=$msg");
    exit;
}
setCookie(usuario,$user);
setCookie(acceso,2);
setCookie(tipo,'Maestro');
SESSION_start();
$_SESSION['usuario']=$user;
$_SESSION['acceso']=2;
header ("location:Maestro/Index-Maestro.php");
exit;
