<?php

session_start();
if(!isset($_SESSION['id_usuario'])){
    header("Location: index.php");
}
$usuario = $_SESSION['usuario'];
$nombre = $_SESSION['nombre'];
$tipo_usuario = $_SESSION['tipo_usuario'];

?>
