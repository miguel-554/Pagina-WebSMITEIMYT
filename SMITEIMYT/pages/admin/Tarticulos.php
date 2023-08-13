<?php
include("../../php/connection.php");
include("../../php/sesion.php");
$consulta = "SELECT * FROM articulos";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="indexMiembros.php">SMITEIMYT-Miembros</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>

        <!-- Navbar-->
        <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <?php echo $usuario; ?><i class="fas fa-user fa-fw"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Configuración</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="../../../SMITEIMYT/php/logout.php">Cerrar Sesión</a></li>
                </ul>
            </li>
        </ul>
    </nav>

     <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="../../index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Principal
                            </a>

                            <?php if($tipo_usuario == 'admin'){ ?>

                            <div class="sb-sidenav-menu-heading">Interfaz</div>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></i></div>
                                Tablas (registros)
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="../admin/Tarticulos.php">
                                        Artículos
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>

                                    <a class="nav-link collapsed" href="../admin/Tregistros.php">
                                        Registro
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>

                                    <a class="nav-link collapsed" href="../admin/Tusuarios.php">
                                        Usuarios
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                
                                </nav>
                            </div>
                            <?php } ?>
                            <div class="sb-sidenav-menu-heading">Tareas</div>
                            <a class="nav-link" href="charts.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Generar usuario
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Modificar página
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Artículos</h1>

                    <div class="card mb-4">
                        <div class="card-body">
                            Base de datos con todos los Artículos agregados por los socios.
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Tabla "Artículos"
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>ID del articulo</th>
                                        <th>Titulo</th>
                                        <th>Autores</th>
                                        <th>Dir de adscripción</th>
                                        <th>Institución de adscripción</th>
                                        <th>Resumen</th>
                                        <th>Palabras clave</th>
                                        <th>Archivo</th>
                                        <th>Tipo de trabajo</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $resultado = mysqli_query($conn, $consulta);

                                    while($row = mysqli_fetch_assoc($resultado)){ 

                                    ?>
                                    <tr>


                                        <td>
                                            <?php echo $row['id_articulo']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['titulo_articulo']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['autores']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['dir_adscripción']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['inst_adscripción']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['resumen']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['palabras_clave']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['archivo']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['tipo_trabajo']; ?>
                                        </td>
                                        <?php }?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>