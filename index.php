<?php
    include_once "header.php";

    //LEEMOS LO QUE SE AÑADE AL CARRITO
    //$_SERVER["PHP_SELF"]; ÉSTO SIGNIFICA QUE VA A LEER LA EJECUCIÓN EN LA PROPIA PÁGINA
?>

    <div>
        <video src="media/adidas-basket-promocion.mp4" class="video" loop muted autoplay></video>
    </div>

    <div id="mujer"> <!-- SECCIÓN MUJER -->
        <!-- Es muy utilizado en php input type=hidden -> Pasa parámetros pero no los muestra -> Método POSt o GET -->
        <div class="responsive">
            <div class="galeria">

                <a href="media/conjunto-rosa-mujer-adidas.webp">
                    <img src="media/conjunto-rosa-mujer-adidas.webp" alt="Conjunto adidas" class="galeria-item">
                </a>
                <div class="descripcion">85€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="1">
                    <input type="hidden" name="nombre-producto" value="conjunto rosa mujer adidas">
                    <input type="hidden" name="precio" value="85">
                    <p class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" value="1" min="1">
                    </p>
                    <input type="submit" name="agregar" value="Comprar" class="boton">
                </form>

            </div>
        </div>

        <div class="responsive">
            <div class="galeria">

                <a href="media/conjunto-rosa-mujer-adidas.webp">
                    <img src="media/conjunto-rosa-mujer-adidas.webp" alt="Conjunto adidas" class="galeria-item">
                </a>
                <div class="descripcion">85€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="1">
                    <input type="hidden" name="nombre-producto" value="conjunto rosa mujer adidas">
                    <input type="hidden" name="precio" value="85">
                    <p class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" value="1" min="1">
                    </p>
                    <input type="submit" name="agregar" value="Comprar" class="boton">
                </form>

            </div>
        </div>

        <div class="responsive">
            <div class="galeria">

                <a href="media/conjunto-rosa-mujer-adidas.webp">
                    <img src="media/conjunto-rosa-mujer-adidas.webp" alt="Conjunto adidas" class="galeria-item">
                </a>
                <div class="descripcion">85€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="1">
                    <input type="hidden" name="nombre-producto" value="conjunto rosa mujer adidas">
                    <input type="hidden" name="precio" value="85">
                    <p class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" value="1" min="1">
                    </p>
                    <input type="submit" name="agregar" value="Comprar" class="boton">
                </form>

            </div>
        </div>

        <div class="responsive">
            <div class="galeria">

                <a href="media/conjunto-rosa-mujer-adidas.webp">
                    <img src="media/conjunto-rosa-mujer-adidas.webp" alt="Conjunto adidas" class="galeria-item">
                </a>
                <div class="descripcion">85€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="1">
                    <input type="hidden" name="nombre-producto" value="conjunto rosa mujer adidas">
                    <input type="hidden" name="precio" value="85">
                    <p class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" value="1" min="1">
                    </p>
                    <input type="submit" name="agregar" value="Comprar" class="boton">
                </form>

            </div>
        </div>

    </div>

    <div id="hombre"> <!-- SECCIÓN HOMBRE -->

        <div class="responsive">
            <div class="galeria">

                <a href="media/bañador-corto-hombre.webp">
                    <img src="media/bañador-corto-hombre.webp" alt="Bañador adidas" class="galeria-item">
                </a>
                <div class="descripcion">25€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="5">
                    <input type="hidden" name="nombre-producto" value="bañador corto hombre adidas">
                    <input type="hidden" name="precio" value="25">
                    <p class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" value="1" min="1">
                    </p>
                    <input type="submit" name="agregar" value="Comprar" class="boton">
                </form>

            </div>
        </div>

        <div class="responsive">
            <div class="galeria">

                <a href="media/bañador-corto-hombre.webp">
                    <img src="media/bañador-corto-hombre.webp" alt="Bañador adidas" class="galeria-item">
                </a>
                <div class="descripcion">25€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="5">
                    <input type="hidden" name="nombre-producto" value="bañador corto hombre adidas">
                    <input type="hidden" name="precio" value="25">
                    <p class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" value="1" min="1">
                    </p>
                    <input type="submit" name="agregar" value="Comprar" class="boton">
                </form>

            </div>
        </div>

        <div class="responsive">
            <div class="galeria">

                <a href="media/bañador-corto-hombre.webp">
                    <img src="media/bañador-corto-hombre.webp" alt="Bañador adidas" class="galeria-item">
                </a>
                <div class="descripcion">25€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="5">
                    <input type="hidden" name="nombre-producto" value="bañador corto hombre adidas">
                    <input type="hidden" name="precio" value="25">
                    <p class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" value="1" min="1">
                    </p>
                    <input type="submit" name="agregar" value="Comprar" class="boton">
                </form>

            </div>
        </div>

        <div class="responsive">
            <div class="galeria">

                <a href="media/bañador-corto-hombre.webp">
                    <img src="media/bañador-corto-hombre.webp" alt="Bañador adidas" class="galeria-item">
                </a>
                <div class="descripcion">25€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="5">
                    <input type="hidden" name="nombre-producto" value="bañador corto hombre adidas">
                    <input type="hidden" name="precio" value="25">
                    <p class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" value="1" min="1">
                    </p>
                    <input type="submit" name="agregar" value="Comprar" class="boton">
                </form>

            </div>
        </div>

    </div>

    <div id="infantil"> <!-- SECCIÓN INFANTIL -->

        <div class="responsive">
            <div class="galeria">

                <a href="media/ninos-chandal-ajax-adidas.avif">
                    <img src="media/ninos-chandal-ajax-adidas.avif" alt="Ajax adidas" class="galeria-item">
                </a>
                <div class="descripcion">25€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="9">
                    <input type="hidden" name="nombre-producto" value="chandal Ajax ninos adidas">
                    <input type="hidden" name="precio" value="65">
                    <p class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" value="1" min="1">
                    </p>
                    <input type="submit" name="agregar" value="Comprar" class="boton">
                </form>

            </div>
        </div>

        <div class="responsive">
            <div class="galeria">

                <a href="media/ninos-chandal-ajax-adidas.avif">
                    <img src="media/ninos-chandal-ajax-adidas.avif" alt="Ajax adidas" class="galeria-item">
                </a>
                <div class="descripcion">25€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="9">
                    <input type="hidden" name="nombre-producto" value="chandal Ajax ninos adidas">
                    <input type="hidden" name="precio" value="65">
                    <p class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" value="1" min="1">
                    </p>
                    <input type="submit" name="agregar" value="Comprar" class="boton">
                </form>

            </div>
        </div>

        <div class="responsive">
            <div class="galeria">

                <a href="media/ninos-chandal-ajax-adidas.avif">
                    <img src="media/ninos-chandal-ajax-adidas.avif" alt="Ajax adidas" class="galeria-item">
                </a>
                <div class="descripcion">25€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="9">
                    <input type="hidden" name="nombre-producto" value="chandal Ajax ninos adidas">
                    <input type="hidden" name="precio" value="65">
                    <p class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" value="1" min="1">
                    </p>
                    <input type="submit" name="agregar" value="Comprar" class="boton">
                </form>

            </div>
        </div>

        <div class="responsive">
            <div class="galeria">

                <a href="media/ninos-chandal-ajax-adidas.avif">
                    <img src="media/ninos-chandal-ajax-adidas.avif" alt="Ajax adidas" class="galeria-item">
                </a>
                <div class="descripcion">25€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="9">
                    <input type="hidden" name="nombre-producto" value="chandal Ajax ninos adidas">
                    <input type="hidden" name="precio" value="65">
                    <p class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" value="1" min="1">
                    </p>
                    <input type="submit" name="agregar" value="Comprar" class="boton">
                </form>

            </div>
        </div>

    </div>
    <div id="zapatillas"> <!-- SECCIÓN ZAPATILLAS -->

        <div class="responsive">
            <div class="galeria">

                <a href="media/zapatilla-stan-smith.webp">
                    <img src="media/zapatilla-stan-smith.webp" alt="Stan Smith adidas" class="galeria-item">
                </a>
                <div class="descripcion">65€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="14">
                    <input type="hidden" name="nombre-producto" value="Zapatillas Stan Smith adidas">
                    <input type="hidden" name="precio" value="65">
                    <p class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" value="1" min="1">
                    </p>
                    <input type="submit" name="agregar" value="Comprar" class="boton">
                </form>

            </div>
        </div>

        <div class="responsive">
            <div class="galeria">

                <a href="media/zapatilla-stan-smith.webp">
                    <img src="media/zapatilla-stan-smith.webp" alt="Stan Smith adidas" class="galeria-item">
                </a>
                <div class="descripcion">65€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="14">
                    <input type="hidden" name="nombre-producto" value="Zapatillas Stan Smith adidas">
                    <input type="hidden" name="precio" value="65">
                    <p class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" value="1" min="1">
                    </p>
                    <input type="submit" name="agregar" value="Comprar" class="boton">
                </form>

            </div>
        </div>

        <div class="responsive">
            <div class="galeria">

                <a href="media/zapatilla-stan-smith.webp">
                    <img src="media/zapatilla-stan-smith.webp" alt="Stan Smith adidas" class="galeria-item">
                </a>
                <div class="descripcion">65€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="14">
                    <input type="hidden" name="nombre-producto" value="Zapatillas Stan Smith adidas">
                    <input type="hidden" name="precio" value="65">
                    <p class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" value="1" min="1">
                    </p>
                    <input type="submit" name="agregar" value="Comprar" class="boton">
                </form>

            </div>
        </div>

        <div class="responsive">
            <div class="galeria">

                <a href="media/zapatilla-stan-smith.webp">
                    <img src="media/zapatilla-stan-smith.webp" alt="Stan Smith adidas" class="galeria-item">
                </a>
                <div class="descripcion">65€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="14">
                    <input type="hidden" name="nombre-producto" value="Zapatillas Stan Smith adidas">
                    <input type="hidden" name="precio" value="65">
                    <p class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" value="1" min="1">
                    </p>
                    <input type="submit" name="agregar" value="Comprar" class="boton">
                </form>

            </div>
        </div>

    </div>

    <div id="contacto"></div>

</body>
</html>