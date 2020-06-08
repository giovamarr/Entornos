<html>
        <head>
            <title> Listados completo con PAGINACIÓN </title>
        </head>
    <body>
        <?php
        include("conexion.inc");
        $Cant_por_Pag = 5;
        $pagina = isset ( $_GET['pagina']) ? $_GET['pagina'] : null ;
        if (!$pagina) {
            $inicio = 0;
            $pagina=1;
        }        else {
            $inicio = ($pagina - 1) * $Cant_por_Pag;
        }// total de páginas
        $vSql = "SELECT * FROM ciudad";
        $vResultado = mysqli_query($link, $vSql);
        $total_registros=mysqli_num_rows($vResultado);
        $total_paginas = ceil($total_registros/ $Cant_por_Pag);
        echo "Numero de registros encontrados: " . $total_registros . "<br>";
        echo "Se muestran paginas de " . $Cant_por_Pag . " registros cada una<br>";
        echo "Mostrando la pagina " . $pagina . " de " . $total_paginas . "<p>";
        $vSql = "SELECT * FROM ciudad"." limit " . $inicio . "," . $Cant_por_Pag;
        $vResultado = mysqli_query($link, $vSql);
        if(!empty($vResultado) and mysqli_num_rows($vResultado)>0){
        $total_registros=mysqli_num_rows($vResultado);
        ?>
            <table style="margin-left: auto; margin-right: auto;" border=1>
                <tr>
                <td><b>ID</b></td>
                <td><b>CIUDAD</b></td>
                <td><b>PAIS</b></td>
                <td><b>HABITANTES</b></td>
                <td><b>SUPERFICIE</b></td>
                <td><b>METRO</b></td>
                </tr>
                <?php
                while ($fila = mysqli_fetch_array($vResultado))
                {
                ?>
                <tr>
                <td><?php echo ($fila['id']); ?></td>
                <td><?php echo ($fila['nombre']); ?></td>
                <td><?php echo ($fila['pais']); ?></td>
                <td><?php echo ($fila['habitantes']); ?></td>
                <td><?php echo ($fila['superficie']); ?></td>
                <td><?php echo ($fila['tieneMetro']); ?></td>
                </tr>
                <tr>
                     <td colspan="6">
                         <?php
                         }
                         // Liberar conjunto de resultados
                         mysqli_free_result($vResultado);}
                         // Cerrar la conexion
                         mysqli_close($link);
                         ?>
                     </td>
                </tr>
            </table>
            <p style='text-align: center;'>
            <?php
            if ($total_paginas > 1){
                for ($i=1;$i<=$total_paginas;$i++){
                    if ($pagina == $i)
                    //si muestro el índice de la página actual, no coloco enlace
                    echo $pagina . " ";
                    else
                    //si la página no es la actual, coloco el enlace para ir a esa página
                    echo "<a href='Listado_pag.php?pagina=" . $i ."'>" . $i . "</a> ";}}?>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p align="center"><a href="index.html">Volver al menu</a></p></p>
    </body>
</html>