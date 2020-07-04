<html>

<head>

</head>

<body>
    <?php
    if (isset($_COOKIE['titular'])) {
        $tit = $_COOKIE['titular'];
        echo "<h1>" . $tit . "</h1>";
    }
    ?>
    <a href="borrarCookie.php">Borrar Cookie</a>
</body>

</html>