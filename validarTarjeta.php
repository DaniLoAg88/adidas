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
<?php
session_start();

if (!empty($_POST["numTarjeta"])) {
$numeroTarjeta = $_POST["numTarjeta"];
$expReg = '/^(?:4[0-9]{12}(?:[0-9]{3})?           # Visa
                       |  5[1-5][0-9]{14}                    # MasterCard
                       |  3[47][0-9]{13}                     # American Express
                       |  3(?:0[0-5]|[68][0-9])[0-9]{11}     # Diners Club
                       |  6(?:011|5[0-9]{2})[0-9]{12}        # Discover
                       |  (?:2131|1800|35\d{3})\d{11}        # JCB
                       )$/x';
if (preg_match($expReg, $numeroTarjeta)) {
    ?>
    <div class="container">
        <h1>Pedido realizado correctamente</h1>
        <p><?php echo $_SESSION["nombre"] . " " . $_SESSION["apellidos"] . " su pedido será enviado a la dirección " . $_SESSION["direccion"] . " en los próximos días." ?></p>
        <p>Gracias por confiar en nosotros.</p>
        <?php unset($_SESSION["carrito"]) ?>
        <p><button class="boton"><a href="index.php">Volver a Inicio</a></button></p>
    </div>

    <?php
}else{
?>
<div class="container">
    <h1>Número de tarjeta NO válido</h1>
    <p><button class="boton"><a href="tramitarPedido.php">Volver a tramitar pedido</a></button></p>
</div>
<?php
}

} else {
    ?>
    <div class="container">
        <h1>Debe introducir los datos de pago</h1>
        <p><button class="boton"><a href="tramitarPedido.php">Volver a tramitar pedido</a></button></p>
    </div>

<?php
}