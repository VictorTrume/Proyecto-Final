<?php

$conexion = new mysqli("localhost","root","","contactos"); /*SE VERIFICAN LOS DATOS*/
    if($conexion){
        echo "la gestion due exitosa!!";
        /* header("Location: index.php"); */
    }else{
        echo "Fallo la gestion";
    }
?> 