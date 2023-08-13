<?php 

include('connection.php');

if(isset($_POST['submit'])){
    $user = trim($_POST['user']);
    $pass = trim($_POST['pass']);
    $typeU = trim($_POST['typeU']);

    $sql = "INSERT INTO usuarios (id_usuario, usuario, password, tipo_usuario) VALUES (NULL, '$user', SHA1('$pass'), '$typeU')";

    $sql_query = mysqli_query($conn, $sql);
    
    if($sql_query){
        // header("location: ../../pages/conference.html");
        ?>
        <h3>¡Carga exitosa!</h3>
        <?php
    }
}

?>