<?php
session_start();
$prueba = 1;
$mensaje = "";

    if (empty($_POST["nombre"]) || empty($_POST["apellidos"]) || empty($_POST["direccion"])) {
        $mensaje = "Debes introducir todos los campos";
        enviarMensajeError($mensaje);
    } else {
        $_SESSION["nombre"] = $_POST["nombre"];
        $_SESSION["apellidos"] = $_POST["apellidos"];
        $_SESSION["direccion"] = $_POST["direccion"];
?>
        <!doctype html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Adidas Shop</title>
            <link rel="stylesheet" href="css/style.css">
            <script src="js/script.js"></script>
        </head>
        <body>
            <div class="containerPago">
                <div class="izquierda divDatosOperacion">
                    <h2>Datos de la operación</h2>
                    <hr>
                    <p><b>Importe <?php echo $_SESSION["importeTotal"] ?>€</b></p>
                    <hr>
                    <p><b>Comercio </b>Adidas</p>
                    <hr>
                    <p><b>Terminal </b>531765-8</p>
                    <hr>
                    <p><b>Pedido </b>87035</p>
                    <hr>
                    <p><b>Fecha </b><?php echo date("d-m-h - H:i:s"); ?></p>
                    <hr>
                    <p><b>Descripción </b>Compra online</p>
                </div>

                <div class="derecha divPago">
                    <h2>Pagar con tarjeta</h2>
                    <form action="validarTarjeta.php" method="post">
                        <p><label for="numTarjeta">Nº Tarjeta:</label></p>
                        <input type="text" id="numTarjeta" name="numTarjeta" class="inputTarjeta">
                        <p><label for="caducidad">Caducidad:</label></p>
                        <input type="number" id="mes" name="mes" placeholder="mm" min="1" max="12">
                        <input type="number" id="anio" name="anio" placeholder="aa">
                        <p><label for="cvv">CVV:</label></p>
                        <input type="password" id="cvv" name="cvv" class="inputCVV">
                        <button name="cancelar" value="Cancelar" class="btnCancelar"><a href="tramitarPedido.php">Cancelar</a></button>
                        <input type="submit" name="pagar" value="Pagar" class="btnPagar">
                    </form>
                </div>
            </div>

<?php
    }

function enviarMensajeError($mensaje)
{
    header("Location: tramitarPedido.php?mensaje=" . $mensaje);
}