<?php

    $hn = 'localhost'; //Local Host
    $un = 'root'; //username
    $pw = ''; //Password
    $bd = 'proyecto_php';

    //Nuevo objeto de clase mySQLI - conexión BD
    $conn = new mysqli($hn, $un, $pw, $bd);

    if($conn->connect_error){
        echo "Fatal Error ".$conn->connect_errno.": ".$conn->connect_error;
    } else{
        echo "conectado!";
        echo $conn->host_info . "\n";
    }

?>