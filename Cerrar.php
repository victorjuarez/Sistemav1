<?php
setCookie('acceso','');
setCookie('usuario','');
setCookie ('tipo','');
session_start();
session_unset();
session_destroy();
header('location:Index.php');
exit;
?>