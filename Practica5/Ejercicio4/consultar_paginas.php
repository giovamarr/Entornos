<?php
session_start();
?>


<html>
<head>
 <title>Contador de paginas</title>
</head>
<body>

<?php 
echo "Has visitado ". $_SESSION['contador'];
?>

</body>
</html>
