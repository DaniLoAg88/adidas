<?php
    session_start();

/* AGREGAR PRODUCTO AL CARRITO */
if(isset($_POST["agregar"])){ //SI SE HA PULSADO EL BOTÓN 'agregar'.....
        $idProducto = $_POST["id-producto"];
        $nombreProducto = $_POST["nombre-producto"];
        $precioProducto = $_POST["precio"];
        $cantidadProducto = $_POST["cantidad"];


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

    actualizarCesta();
    header("Location: index.php");
}


/* VACIAR CARRITO*/
if(isset($_POST["eliminarCarrito"])){ //SI SE HA PULSADO EL BOTÓN 'eliminarCarrito'.....
    unset($_SESSION["carrito"]); //unset elimina un array
    actualizarCesta();
    header("Location: mostrarCarrito.php");
}


/* ACTUALIZAR CANTIDAD ARTÍCULO */
if(isset($_POST["actualizarCarrito"])){

    $id = $_POST["id"]; //Porque lo mando con el input hidden
    $cantidad = $_POST["cantidad"]; //Porque lo mando con el input hidden

    if(isset($_SESSION["carrito"][$id])){ // Busca si el ID que hemos pasado está en el carrito
        $_SESSION["carrito"][$id]["cantidad"] = $cantidad; // Sustituye la cantidad dentro del array por la que hemos pasado
    }

    actualizarCesta();
    header("Location: mostrarCarrito.php");
}


/* ELIMINAR LÍNEA DEL PRODUCTO */
if(isset($_POST["eliminarProducto"])){

    $id = $_POST["id"];

    if(isset($_SESSION["carrito"][$id])){
        unset($_SESSION["carrito"][$id]);
    }

    actualizarCesta();
    header("Location: mostrarCarrito.php");
}


/** FUNCIÓN QUE CUENTA LOS ARTÍCULOS QUE ESTÁN EN LA CESTA PARA MOSTRARLO EN EL HEADER */
function actualizarCesta(){

    //Contamos el total de productos que tenemos en el carrito
    $_SESSION["totalProductos"] = 0;
    foreach ($_SESSION["carrito"] as $idProducto => $producto){
        $_SESSION["totalProductos"] += $producto["cantidad"];
    }

}


?>
