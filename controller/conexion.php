<?php
    $SERVER = "localhost";
    $USER = "tiendaFDB";
    $PWD = "@admin";
    $DB = "tienda";
    $con = new mysqli($SERVER, $USER, $PWD, $DB);
    
    if(!$con){
        echo "La conexión fue rechazada";
    }
?> 