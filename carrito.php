<?php
    session_start();

    if(isset($_POST["agregar"])){ //Si se ha pulsado el botón 'agregar'.....
        $idProducto = $_POST["id-producto"];
        $nombreProducto = $_POST["nombre-producto"];
        $precioProducto = $_POST["precio"];
        $cantidadProducto = $_POST["cantidad"];
    }

    //El carrito será una variable de sesión, comprobamos si existe, si no la creamos
    if(!isset($_SESSION["carrito"])){
        $_SESSION["carrito"] = array();
    }

    //Si está creado el carrito, y ya incluye el producto, aumentaremos la cantidad
    if(isset($_SESSION["carrito"][$idProducto])){
        $_SESSION["carrito"][$idProducto]["cantidad"] += $cantidadProducto;
    }else{ //Como no existe dentro del carrito lo metemos
        $_SESSION["carrito"][$idProducto] = array(
            "nombre" => $nombreProducto,
            "precio" => $precioProducto,
            "cantidad" => $cantidadProducto
        );
    }

    //Contamos el total de productos que tenemos en el carrito
    $_SESSION["totalProductos"] = 0;
    foreach ($_SESSION["carrito"] as $idProducto => $producto){
        $_SESSION["totalProductos"] += $producto["cantidad"];
    }

    header("Location: index.php");
?>
