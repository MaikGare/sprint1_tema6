<?php 

$nombre = htmlspecialchars($_POST["nombre"]);

$_SESSION["nombre"] = $nombre;

echo $_SESSION["nombre"];

?>