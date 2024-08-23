<?php
include_once "header.php";

if (!isset($_SESSION["usuario"])){
?>

<div class="container-2">
    <div class="izquierda">
        <h2>Inicio de sesión</h2>
        <form action="controlador.php" method="post">
            <label for="usuario">Usuario </label>
            <input type="text" id="usuario" name="usuario">
            <label for="password">Contraseña </label>
            <input type="password" id="password" name="password">
            <input type="submit" name="iniciarSesion" value="Iniciar sesión" class="boton">
        </form>
    </div>

    <div class="derecha">
        <h2>Crear nuevo usuario</h2>
        <form action="controlador.php" method="post">
            <label for="usuario2">Usuario </label>
            <input type="text" id="usuario2" name="usuario2">
            <label for="password1">Contraseña </label>
            <input type="password" id="password1" name="password1">
            <label for="password2">Repetir contraseña </label>
            <input type="password" id="password2" name="password2">
            <input type="submit" name="crearUsuario" value="Crear usuario" class="boton">
        </form>
    </div>

</div>

    <?php

    if (!empty($_GET["mensaje"])) {
        echo $_GET["mensaje"]; //DARLE ESTILO DE ERROR EN LA SALIDA!!!
    }

}
?>