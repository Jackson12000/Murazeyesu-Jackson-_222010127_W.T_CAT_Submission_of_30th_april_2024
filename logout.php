<?php
session_start();

 
$_SESSION = array();


session_destroy();


header("Location:/tourismcat/log.php");
exit();
?>