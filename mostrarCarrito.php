<?php
include_once "header.php";
?>

<div class="container-3">
    <h2 class="textoCentrado">Resumen de tu carrito</h2>
    <?php
    if(!empty($_SESSION["carrito"])){
    ?>

        <table>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Total</th>
                <th>Acciones</th>
            </tr>

            <?php
            /* Hay que llamar a $_SESSION["carrito"] y recorrerlo con un foreach para mostrar los datos de los productos,
               y a su vez calcular los subtotales y total general.
               También crearemos botones de actualizar para poder cambiar el total de artículos por línea, eliminar toda la línea del
               producto y eliminar la cesta*/

            $total = 0; //Iniciamos el total en cero
            foreach($_SESSION["carrito"] as $productoID=>$producto){
                $subtotal = $producto["precio"] * $producto["cantidad"];
                $total = $total + $subtotal;
            ?>

            <tr>
                <td>
                    <?php echo $producto["nombre"] ?>
                </td>
                <td>
                    <form action="carrito.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $productoID ?>">
                        <input type="number" name="cantidad" value="<?php echo $producto["cantidad"] ?>" min="1">
                        <!-- Permitir actualizar el número de productos desde carrito.php -->
                        <input type="submit" name="actualizarCarrito" value="Actualizar">
                    </form>
                </td>
                <td>
                    <?php echo $producto["precio"] ?>€
                </td>
                <td>
                    <?php echo $subtotal ?>€
                </td>
                <td>
                    <form action="carrito.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $productoID ?>">
                        <input type="submit" name="eliminarProducto" value="Eliminar">
                    </form>
                </td>
            </tr>
            <?php
            } //Cierre del foreach
            ?>
            <tr>
                <td colspan="3"><b>Total</b></td>
                <td><b><?php echo $total ?>€</b></td>
                <td>
                    <form action="carrito.php" method="post">
                        <input type="submit" name="eliminarCarrito" value="Vaciar cesta">
                    </form>
                </td>
            </tr>

        </table>

        <a href="tramitarPedido.php" class="btnTramitar">Tramitar pedido</a>

    <?php
        $_SESSION["importeTotal"] = $total;

    }else{
        echo "Tu carrito está vacío";
    }
    ?>

</div>
