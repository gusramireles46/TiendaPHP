<?php
    $SERVER = "localhost";
    $USER = "tiendaFDB";
    $PWD = "@admin";
    $DB = "tienda";
    $con = new mysqli($SERVER, $USER, $PWD, $DB);
    
    /*if(!$con)
        echo "No se pudo establecer conexión";
    else
        echo "Se ha conextado a <b>".$DB."</b> exitosamente.";
    */
?> 