<?php
session_start();
if (!$_SESSION['ya_registrado']){
	header('Location: login.php');
}
$from = $_SESSION['usuario'];
$to = $_GET['to'];
$quantity = $_GET['quantity'];
//Este código es una simplificación 
$BD = "Transferencia realizada de $from a $to; cantidad: $quantity";
$fichero = 'transfers.txt';
// Abre el fichero para obtener el contenido existente
$actual = file_get_contents($fichero);
// Escribe el contenido al fichero
file_put_contents($fichero, $BD, FILE_APPEND);
