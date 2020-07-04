<?php
session_start();
?>
<html>

<head>
    <title>CrearSesiones</title>
</head>

<body>
    <?php
    if (isset($_POST['Usuario']) and isset($_POST['Clave'])) {
        $_SESSION['Usuario'] = $_POST['Usuario'];
        $_SESSION['Clave'] = $_POST['Clave'];
    }
    ?>
    <h1>Sesiones creadas</h1>
    <a href="devuelvesesiones.php">Datos de las sesiones</a>
</body>

</html>
