<?php
if (isset($_POST["tipoNot"])) {
    $titular = $_POST["tipoNot"];
    setcookie("titular", $titular, time() + (60 * 60 * 24 * 90));
} else {
    if (isset($_COOKIE["titular"])) {
        $titular = $_COOKIE["titular"];
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>

<head>
    <title>Cookies en PHP</title>
    <?php
    if (isset($titular)) {

        echo "<meta http-equiv='refresh' content='0;URL=tipotitular.php'>";
    }
    ?>

</head>

<body>
    <form action="perio.php" method="post"> Selecciona que tipo de titular que prefieres:
        <br>
        <input type="radio" id="np" name="tipoNot" value="Noticia politica">
        <label for="male">Noticia politica</label><br>
        <input type="radio" id="ne" name="tipoNot" value="Noticia economica">
        <label for="female">Noticia economica</label><br>
        <input type="radio" id="nd" name="tipoNot" value="Noticia deportiva">
        <label for="other">Noticia deportiva</label>
        <input type="submit" value="Actualizar el titular">
    </form>
</body>

</html>