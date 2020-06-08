<?php
session_start();
?>

<html>
<head>
 <title>Contador de paginas</title>
</head>
<body>
<h1>Hola!</h1>
<p>

<?php 
if (!isset($_SESSION['contador'])){
 $_SESSION['contador'] = 1;
}else{
 $_SESSION['contador']++;
}
?>
<a href="consultar_paginas.php"> Consultar paginas visitadas </a> 
</body>
</html>