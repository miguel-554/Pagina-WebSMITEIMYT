<?php

include "./connection.php";

$nombre = trim ($_POST['nombre']);
$apellidos = trim ($_POST['apellidos']);
$movil = trim ($_POST['movil']);
$email = trim ($_POST['email']);
$folio = trim ($_POST['folio']);
$date = trim ($_POST['date']);
$type = trim ($_POST['select']);
$file_name = trim ($_FILES['file']['name']);
$file_tmp = $_FILES['file']['tmp_name'];
$description = trim ($_POST['description']);

$route = "../public/files/".$file_name;


move_uploaded_file($file_tmp, $route);

$sql = "INSERT INTO registro(nombre, apellidos, numero_tel, email, no_transferencia, fecha_transferencia, archivo, tipo_inscripcion, descripcion) VALUES ('$nombre','$apellidos','$movil','$email','$folio','$date','$file_name','$type','$description')";

$sql_query = mysqli_query($conn, $sql);

if($sql_query){
    header("location: ../../pages/formulario.html");
    ?>
    <h3>¡Carga exitosa!</h3>
    <?php
}

?>