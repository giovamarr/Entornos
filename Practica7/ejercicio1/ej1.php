<!--Crear una página que puede configurarse con distintos estilos CSS. El usuario es quien decide qué
aspecto desea que tenga la página, por medio de un formulario. Luego la página es capaz de
recordar, entre los distintos accesos que realice el usuario, el aspecto que había elegido para
mostrar la web. -->

<?php
//Veo si recibo datos del formulario
    if(isset($_POST["estilo"]))
    {
        //es que estoy recibiendo un estilo nuevo, lo tengo que meter en las cookies
        $estilo = $_POST["estilo"];
        //meto el estilo en una cookie
        setcookie("estilo", $estilo, time() + (60 * 60 * 24 * 90));
    }else{
        //si no he recibido el estilo que desea el usuario en la página, miro si hay una cookie creada
        if (isset($_COOKIE["estilo"])){
        //es que tengo la cookie
        $estilo = $_COOKIE["estilo"];
    }
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
    <head>
    <title>Selector</title>
    <?php
        //miro si he tengo un estilo definido, porque entonces tengo que cargar la correspondiente hoja de estilos
        if (isset($estilo)){
            echo '<link rel="STYLESHEET" type="text/css" href="'. $estilo .'.css">';
            }
    ?>
    </head>
    <body>
        
    
    <p>
        <form action="ej1.php" method="post"> 
        <h1>Selector de Estilos</h1><br><br>
        <h3>Seleccione el estilo que prefieres en la página:</h3>
        <br>
        <select name="estilo">
            <option value="boca">Boquita
            <option value="violeta">Violeta
            <option value="negro">Negro
            <option value="fluo">Fluo
        </select>
        <br>
        <input type="submit" value="Actualizar el estilo">
        </form>
    </p>
    </body>
</html>

