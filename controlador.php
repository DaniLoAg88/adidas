<?php
session_start();

$mensaje = "";

// Parte de Inicio de Sesión
if (isset($_POST["iniciarSesion"])) { // Si se ha pulsado el botón Iniciar Sesión.....

    if (empty($_POST["usuario"]) || empty($_POST["password"])) {
        $mensaje = "Debe introducir ambos campos para iniciar sesion";
        enviarMensajeError($mensaje);
    } else {
        if (validarUsuario($_POST["usuario"], $_POST["password"])) {
            $_SESSION["usuario"] = $_POST["usuario"];
            if(!isset($_POST["comprando"])){
                header("Location: index.php");
            }else{
                header("Location:tramitarPedido.php");
            }

        } else {
            $mensaje = "Los datos introducidos no son correctos";
            enviarMensajeError($mensaje);
        }
    }
}

// Parte de creación de nuevo usuario
if(isset($_POST["crearUsuario"])){ // Si se ha pulsado el botón de Crear nuevo usuario.....

    if (empty($_POST["usuario2"]) || empty($_POST["password1"]) || empty($_POST["password2"])) {
        $mensaje = "Debe introducir todos los campos para crear un usuario";
        enviarMensajeError($mensaje);
    } elseif($_POST["password1"] != $_POST["password2"]) {
        $mensaje = "Las contraseñas introducidas no coinciden";
        enviarMensajeError($mensaje);
    }else{
        if(!isset($_SESSION["listaUsuarios"])){
            $_SESSION["listaUsuarios"] = array();
        }else {
            $_SESSION["listaUsuarios"][$_POST["usuario2"]] = $_POST["password1"];
            $mensaje = "Usuario creado correctamente";
            enviarMensajeError($mensaje);
        }
    }

}

function enviarMensajeError($mensaje)
{
    header("Location: login.php?mensaje=" . $mensaje);
}

function validarUsuario($usuario, $password)
{
    // $login = ["Dani" => "1234", "Irina" => "1234", "Random" => "1234"];

    //if (array_key_exists($usuario, $login)) {
    if (array_key_exists($usuario, $_SESSION["listaUsuarios"])) {
        if ($_SESSION["listaUsuarios"][$usuario] == $password) {
            return true;
        } else {
            return false;
        }
    }
}