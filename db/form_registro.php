<?php

    require_once('conexion.php');

    if((isset($_POST['firstName'])) && (isset($_POST['lastName'])) && (isset($_POST['username']))){
        if ($_POST['firstName']==""){
            header('Location: ejercicio4.php');
        }elseif ($_POST['lastName']==""){
            header('Location: ejercicio4.php');
        }elseif ($_POST['username']==""){
            header('Location: ejercicio4.php');
        } else {
    
            $insercion= "INSERT INTO `usuarios`(`nombre`, `apellidos`, `usuario`) 
                VALUES ('".$_POST['firstName']."','".$_POST['lastName']."', '".$_POST['username']."')";
                            
            if ($conn->query($insercion)) {
                header("Location: ../tabla.php");
            }
            
            $conn->close(); 
    
        }
    } 

?>