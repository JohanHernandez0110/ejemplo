<?php
    $conexion= new mysqli('localhost', 'root', '' , 'id20738424_universidad');
    if($conexion){
        echo "CONEXION EXITOSA";
    }else {
        echo "NO FUNCIONO LA CONEXION";
    }
?>