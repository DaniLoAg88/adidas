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
                <input type="hidden" id="comprando" name="comprando">
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
}else{
?>

<div class="container-3">

    <h2>Introduzca sus datos:</h2>
    <form action="pago.php" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" id="nombre" name="nombre">
        <label for="apellidos">Apellidos: </label>
        <input type="text" id="apellidos" name="apellidos">
        <label for="direccion">Dirección: </label>
        <input type="text" id="direccion" name="direccion">

        <?php
        if (!empty($_GET["mensaje"])) {
            echo $_GET["mensaje"]; //DARLE ESTILO DE ERROR EN LA SALIDA!!!
        }
        ?>

        <h2>Seleccione el método de pago:</h2>
        <input type="image" src="media/logo-tarj.jpg" class="metodoPago" name="btnTarjeta">
        <a href="https://www.paypal.com/paypalme/" target="_blank"><img src="media/logo-paypal.jpg" class="metodoPago"></a>
    </form>
</div>

<?php
}