<?php
$link = mysqli_connect("localhost", "root") or die ("Problemas de conexión a la base dedatos");
mysqli_select_db($link, "ciudades");
?>