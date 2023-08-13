<?php

$correo = $_POST['correo'];
$password = $_POST['password'];
session_start();

$_SESSION['correo'] = $correo;

$conn = mysqli_connect("localhost","root", "sasa","acceso");
$consulta = "SELECT * FROM access WHERE correo = '$correo'";
$resultado = mysqli_query($conn, $consulta);
$filas = mysqli_num_rows($resultado);

if($filas)
{
    header("../index.html");
}

else
{

?>

>?php

include("../index.html");

?>

<h2>Error en autenticación</h2>



<?php
}

mysqli_free_result($resultado);
mysqli_close($conn);

?>