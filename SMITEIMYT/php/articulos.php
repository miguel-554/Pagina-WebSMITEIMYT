<?php 

include('connection.php');

if(isset($_POST['submit'])){
    $tittle = trim($_POST['tittle']);
    $author = trim($_POST['author']);
    $address = trim($_POST['address']);
    $institution = trim($_POST['institution']);
    $abstract = trim($_POST['abstract']);
    $keywords = trim($_POST['keywords']);
    $file_name = trim ($_FILES['file']['name']);
    $file_tmp = $_FILES['file']['tmp_name'];
    $option = trim($_POST['option']);

    $route = "../public/files/".$file_name;
    move_uploaded_file($file_tmp, $route);

    $sql = "INSERT INTO articulos (titulo_articulo, autores, dir_adscripción, inst_adscripción, resumen, palabras_clave, archivo, tipo_trabajo) VALUES ('$tittle','$author','$address','$institution','$abstract','$keywords','$file_name', '$option')";

    $sql_query = mysqli_query($conn, $sql);
    
    if($sql_query){
        // header("location: ../../pages/conference.html");
        ?>
        <h3>¡Carga exitosa!</h3>
        <?php
    }
}

?>