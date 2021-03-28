<?php
session_start();
if (!$_SESSION['ya_registrado']){
	header('Location: autenticacion.php');
}
if ($_SESSION['ROL'] != "ADMIN"){
	header('Location: no-autorizado.php');
}
?>
<h1>Página de administración del sitio</h1>
