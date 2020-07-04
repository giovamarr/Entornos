<!--Crear una cookie llamada “contador” que lleve la cuenta en el lado cliente del número de veces que
se ha accedido a la página contador.php. Si es la primera vez que se accede, la página dará la
bienvenida al usuario. Si ya se ha accedido anteriormente, la página hará uso de la cookie para
mostrar el número de veces que se ha visitado dicha página. -->

<?php
    if (!isset($_COOKIE['visitas'])){
        $visitas = 1;
        setcookie("visitas", $visitas , time()+ 3600*24*365);
    }else
    {
        $visitas = $_COOKIE['visitas'] + 1;
        setcookie("visitas", $visitas , time()+ 3600*24*365);
    }
?>
<html>
    <body>
        <?php
        if ($visitas >= 1){
            echo "<br><br><h2>Visitaste la pagina un total de " .$_COOKIE['visitas']. " veces</h2>";
        }else{
            echo "<br><br><h2>Bienvenido</h2>";
            echo $visitas;
        }
        ?>
    </body>
</html>