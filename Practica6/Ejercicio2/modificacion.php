<title>Modificacion</title>
</head>
<boby>
    <?php
    include ("conexion.inc");
    //Captura datos desde el Form anterior
    $vid = $_POST['id'];
    //Arma la instrucción SQL y luego la ejecuta
    $vSql = "SELECT * FROM ciudad  WHERE id ='$vid' ";
    $vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));;
    $fila = mysqli_fetch_array($vResultado);
    if(mysqli_num_rows($vResultado) == 0) {
        echo("<p style='text-align: center;'>Ciudad Inexistente<br /> <a href='FormModificar.html'>Continuar</a></p>");
        }
        else{
    ?>
    <FORM action="Modi.php" method="POST" name="FormModi">
        <table style="margin-left: auto; margin-right: auto;">
        <tr>
                 <td width="103"> ID: </td>
                 <td width="243"> <input  type="number" name="id" value="<?php echo($fila['id']); ?>" readonly>
                 </td>
         </tr>
          <tr>
                 <td width="103"> Ciudad: </td>
                 <td width="243"> <input type="text" name="ciudad" value="<?php echo($fila['ciudad']); ?>">
                 </td>
         </tr>
         <tr>
                 <td width="103"> Pais: </td>
                 <td width="243"> <input type="TEXT" name="pais" size="20" maxlength="20" value="<?php echo($fila['pais']); ?>">
                 </td>
         </tr>
          <tr>
               <td width="103"> Habitantes: </td>
               <td width="243"> <input type="TEXT" name="habitantes" size="20" maxlength="20"  value="<?php echo($fila['habitantes']); ?>">
              </td>
         </tr>
         <tr>
              <td width="103"> Superficie: </td>
             <td width="243"> <input type="TEXT" name="superficie" size="20" maxlength="40"  value="<?php echo($fila['superficie']); ?>">
             </td>
         </tr>
         <tr>
              <td width="103"> Metro (1-si | 0-no ): </td>
             <td width="243"> <input type="TEXT" name="metro" size="20" maxlength="40"  value="<?php echo($fila['tieneMetro']); ?>">
             </td>
         </tr>
          <tr>
               <td colspan="2" align="center"> <input type="SUBMIT" name="Submit" value="Modificar">
             </td>
         </tr>
    </table>
</FORM>
<?php
}
// Liberar conjunto de resultados
mysqli_free_result($vResultado);
// Cerrar la conexion
mysqli_close($link);
?>