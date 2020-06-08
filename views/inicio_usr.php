<?php session_start(); require_once "../controller/conexion.php"; ?> 
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | TecnoVentas</title>
  </head>
  <body>
    <?php echo $_SESSION['nombre'];?>
  </body>
</html>