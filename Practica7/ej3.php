<!--Crear un formulario que solicite la carga del nombre de usuario. Cuando se presione un botón
crear una cookie para dicho usuario. Luego cada vez que ingrese al formulario mostrar el último
nombre de usuario ingresado. -->

<?php
    if(isset($_POST["nombre"]))
    {
        $nombre = $_POST["nombre"];
        setcookie("nombre", $nombre, time() + (60 * 60 * 24 * 90));
    }else{
        if (isset($_COOKIE["nombre"])){
        $nombre = $_COOKIE["nombre"];
    }
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
    <head>
    <title>Nombres</title>
    
    </head>
    <body>
        <form action="ej3.php" method="post"> 
        <br><br>
        <h3>Ingrese un nombre:</h3>
        <INPUT TYPE="TEXT" name="nombre" size="20" maxlength="20">        
        <input type="submit" value="Aceptar">
        <?php
        if (empty($nombre)){
            echo "<br><h2>Ningun nombre ingresado</h2>";
        }else{
            echo "<br><h2>El ultimo nombre ingresado fue " .$_COOKIE['nombre']. " </h2>";}
        ?>
        </form>
    </body>
</html>

