<?php
$destinatario = "giovamartin@gmail.com";
$asunto = "Prueba";
$cuerpo = '
<html>
<head>
 <title>Envio de mail</title>
</head>
<body>
<h1>Hola!</h1>
<p>
<b>Esto es una prueba</b>.
xxxxxxxxxxxxxxxxxxxxxxxxxxx
</p>
</body>
</html>'
;
$headers = "MIME-Version:1.0\r\n";
$headers .= "Content-type:text/html; charset=iso-8859- 1\r\n";
mail($destinatario,$asunto,$cuerpo,$headers);
?>
