<?php

require "connection.php";

session_start();

if($_POST){
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario'";
    $resultado = $conn->query($sql);
    $num = $resultado->num_rows;

    if($num > 0){

        $row = $resultado->fetch_assoc();
        $password_bd = $row['password'];
        $pass_c = sha1($password);

        if($password_bd == $pass_c){

            $_SESSION['id_usuario'] = $row['id_usuario'];
            $_SESSION['usuario'] = $row['usuario'];
            $_SESSION['nombre'] = $row['nombre'];
            $_SESSION['tipo_usuario'] = $row['tipo_usuario'];

            header("Location: ../pages/admin/indexMiembros.php");

        } else{
            echo "La contraseña no coincide";
        }

    } else{
        echo "No existe usuario";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../SMITEIMYT/pages/CSS/acceso.css">
    <title>Ingresa</title>
</head>
<body>
     <!-- Colocamos el menú de navegación creado en nuestro componente -->
     <main-navbar></main-navbar>

    <section class="access">
        <div class="container-form sign-in">
            <div class="welcome-back">
                <div class="message">
                    <h1>Bienvenido a SMITEIMYT</h1>
                    <h2 class="acceder">Acceder</h2>
                </div>
                <div class="form">
                    <form class="form-access" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                        <label for="usuario">Usuario:</label>
                        <input class="form-input" type="text" name="usuario" id="usuario">
                        <label for="password">Contraseña:</label>
                        <input class="form-input" type="password" name="password" id="password">
                        <button type="submit" class="btn-acceder">Iniciar sesión</button>
                    </form>
                </div>
                <div class="create-account">
                    <p class="create-account__item"><a href="../pages/crearCuenta.html">¿Olvidaste tu contraseña?</a></p>
                    <p class="create-account__item">¿No tienes una cuenta?</p>
                    <button class="create-account__item btn-create"><a href="../pages/membresia.html">Crear cuenta</a></button>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        © Todos los derechos reservados. SMITEIMYT México
    </footer>

    <script src="../index.js" type="module"></script>
</body>
</html>