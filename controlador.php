<?php
session_start();

$mensaje="";

if(empty($_POST["usuario"]) || empty($_POST["password"])){
    $mensaje = "Debe introducir ambos campos para iniciar sesion";
    enviarMensajeError($mensaje);
}else{
    if(validarUsuario($_POST["usuario"], $_POST["password"])){
        $_SESSION["usuario"] = $_POST["usuario"];
        header("Location: index.php");
    }else{
        $mensaje = "Los datos introducidos no son correctos";
        enviarMensajeError($mensaje);
    }
}


function enviarMensajeError($mensaje){
    header("Location: login.php?mensaje=".$mensaje);
}

function validarUsuario($usuario, $password){
    $login = ["Dani"=>"1234","Irina"=>"1234", "Random"=>"1234"];

    if(array_key_exists($usuario, $login)){
        if($login[$usuario] == $password){
            return true;
        }else{
            return false;
        }
    }
}