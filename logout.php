<?php
session_start();
// session_destroy(); // Elimina la sesión creada (y todas sus variables)

unset($_SESSION["usuario"]);
unset($_SESSION["carrito"]);

header("Location: index.php");
