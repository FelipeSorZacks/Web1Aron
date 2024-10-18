<?php

    $host_db="127.0.0.1:3308";
    $user_name="root";
    $user_pass="Sharilamejor1";
    $db_name="fes_aragon";

    $conexion=new mysqli($host_db, $user_name, $user_pass, $db_name);
    
    if($conexion->connect_error){
        echo "error de conexion"
    }

?>