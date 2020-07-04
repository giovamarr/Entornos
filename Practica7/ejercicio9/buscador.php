<!DOCTYPE html PUBLIC "‐//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1‐transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http‐equiv="Content‐Type" content="text/html; charset=utf‐8" />
    <title>Untitled Document</title>
</head>
<body>
    <?php
    include("Conexion.inc");
    $pal=$_POST['Palabra'];
    if($pal){
            $resp = mysqli_query($link,"select * from buscador where canciones LIKE '%".$pal."%'") or die(mysqli_error($link));
    if(mysqli_num_rows($resp) == "0") {
             echo "No hay resultados respecto a la palabra que busca.";
            } else {
             echo "<center><strong>RESULTADOS DE BUSQUEDA</strong></center><br>";
             ?> <table style="margin-left: auto; margin-right: auto;" border=1>
             <tr>
             <td><b>Nmobre</b></td>
             </tr>
             <?php
             while($cat = mysqli_fetch_array($resp)) {
    ?>
            <tr>
                <td><?php echo ($cat['canciones']);  ?></td>                
                </tr>
                
    <?php                
          }}}else{
          echo "<form name='FormBuscador' method='post' action=''><input name='Palabra' type='text'
          id='Palabra'><input type='submit' name='Submit' value='Buscar!'></form>";
    }?>
    </TR>
                        <TD colspan="2" align="center"> 
                          <p><a href="FormBuscador.html">Volver al Buscador; de Canciones</a></p>  
                        </TD>
                </TR>
</body>
</html>