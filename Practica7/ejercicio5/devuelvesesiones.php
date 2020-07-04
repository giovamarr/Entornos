<?php
session_start();
echo "Usuario: " . $_SESSION['Usuario'];
echo ". Clave: " . $_SESSION['Clave'];
?>