<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="action.php" method="post">
        <p>Nombre: <input type="text" name="nombre"/></p>
        <p>Apellido: <input type="text" name="apellido"/></p>
        <p>Municipio de residencia: <input type="text" name="municipio"/></p>
        <p><input type="submit"/></p> 
    </form>
</body>
</html>
