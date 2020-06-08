<html>
    <head>
    <title>Baja</title>
    </head>
<body>
    <?php
    include ("conexion.inc");
    $vID = $_POST ['id'];
    $vSql = "SELECT * FROM ciudad WHERE id='$vID' ";
    $vResultado = mysqli_query($link, $vSql);
    if(mysqli_num_rows($vResultado) == 0)
     {
          echo ("Ciudad Inexistente<br>");
         echo ("<A href='FormBaja.html'>Continuar</A>");
     }else{
         //Arma la instrucción SQL y luego la ejecuta
         $vSql= "DELETE FROM ciudad WHERE id='$vID' ";
         mysqli_query($link, $vSql);
          echo("<p style='text-align: center;'>Ciudad Borrada<br /> <a href='index.html'>Volver al Menu</a></p>");


     }
     // Liberar conjunto de resultados
     mysqli_free_result($vResultado);
     // Cerrar la conexion
     mysqli_close($link);
     ?>
</body>
</html>