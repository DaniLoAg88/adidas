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
                <a href="media/yoga-mujer-adidas.webp">
                    <img src="media/yoga-mujer-adidas.webp" alt="Conjunto yoga adidas" class="galeria-item">
                </a>
                <div class="descripcion">65€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="1">
                    <input type="hidden" name="nombre-producto" value="conjunto yoga mujer adidas">
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
                <a href="media/panuelo-mujer-adidas.webp">
                    <img src="media/panuelo-mujer-adidas.webp" alt="Pañuelo adidas" class="galeria-item">
                </a>
                <div class="descripcion">25€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="1">
                    <input type="hidden" name="nombre-producto" value="panuelo mujer adidas">
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
                <a href="media/mujer-cinta-elastica-adidas.webp">
                    <img src="media/mujer-cinta-elastica-adidas.webp" alt="Cinta mujer adidas" class="galeria-item">
                </a>
                <div class="descripcion">20€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="1">
                    <input type="hidden" name="nombre-producto" value="cinta mujer adidas">
                    <input type="hidden" name="precio" value="20">
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
                <a href="media/mujer-balon-medicinal-adidas.webp">
                    <img src="media/mujer-balon-medicinal-adidas.webp" alt="Balon medicinal adidas" class="galeria-item">
                </a>
                <div class="descripcion">30€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="1">
                    <input type="hidden" name="nombre-producto" value="balon medicinal adidas">
                    <input type="hidden" name="precio" value="30">
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
                <a href="media/dos-mujeres-camiseta-adidas.webp">
                    <img src="media/dos-mujeres-camiseta-adidas.webp" alt="Camisetas mujer adidas" class="galeria-item">
                </a>
                <div class="descripcion">25€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="1">
                    <input type="hidden" name="nombre-producto" value="camisetas mujer adidas">
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
                <a href="media/conjunto-rosa-tenis-mujer-adidas.webp">
                    <img src="media/conjunto-rosa-tenis-mujer-adidas.webp" alt="Conjunto tenis adidas" class="galeria-item">
                </a>
                <div class="descripcion">55€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="1">
                    <input type="hidden" name="nombre-producto" value="conjunto tenis mujer adidas">
                    <input type="hidden" name="precio" value="55">
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
                <a href="media/conjunto-rojo-mujer-adidas.webp">
                    <img src="media/conjunto-rojo-mujer-adidas.webp" alt="Conjunto rojo adidas" class="galeria-item">
                </a>
                <div class="descripcion">60€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="1">
                    <input type="hidden" name="nombre-producto" value="conjunto rojo mujer adidas">
                    <input type="hidden" name="precio" value="60">
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
                <a href="media/chandal-verde-mujer-adidas.webp">
                    <img src="media/chandal-verde-mujer-adidas.webp" alt="Chandal verde adidas" class="galeria-item">
                </a>
                <div class="descripcion">85€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="1">
                    <input type="hidden" name="nombre-producto" value="chandal verde mujer adidas">
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
                <a href="media/chandal-negro-mujer-adidas.webp">
                    <img src="media/chandal-negro-mujer-adidas.webp" alt="Chandal negro adidas" class="galeria-item">
                </a>
                <div class="descripcion">85€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="1">
                    <input type="hidden" name="nombre-producto" value="chandal negro mujer adidas">
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
                <a href="media/cazadora-negra-mujer-adidas.webp">
                    <img src="media/cazadora-negra-mujer-adidas.webp" alt="Cazadora adidas" class="galeria-item">
                </a>
                <div class="descripcion">110€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="1">
                    <input type="hidden" name="nombre-producto" value="cazadora negra mujer adidas">
                    <input type="hidden" name="precio" value="110">
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
                <a href="media/calcetines-rosas-verdes-mujer.jpg">
                    <img src="media/calcetines-rosas-verdes-mujer.jpg" alt="Calcetines adidas" class="galeria-item">
                </a>
                <div class="descripcion">15€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="1">
                    <input type="hidden" name="nombre-producto" value="calcetines mujer adidas">
                    <input type="hidden" name="precio" value="15">
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
                <a href="media/pantalon-corto-azul-mujer-adidas.webm">
                    <video src="media/pantalon-corto-azul-mujer-adidas.webm" alt="Conjunto adidas" class="galeria-item">
                </a>
                <div class="descripcion">35€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="1">
                    <input type="hidden" name="nombre-producto" value="pantalon azul mujer adidas">
                    <input type="hidden" name="precio" value="35">
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
                <a href="media/chandal-azul-marino-mujer-adidas.webm">
                    <video src="media/chandal-azul-marino-mujer-adidas.webm" alt="Chandal azul adidas" class="galeria-item">
                </a>
                <div class="descripcion">35€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="1">
                    <input type="hidden" name="nombre-producto" value="chandal azul mujer adidas">
                    <input type="hidden" name="precio" value="35">
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
                <a href="media/cazadora-terrez-mujer-adidas.webm">
                    <video src="media/cazadora-terrez-mujer-adidas.webm" alt="Cazadora adidas" class="galeria-item">
                </a>
                <div class="descripcion">110€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="1">
                    <input type="hidden" name="nombre-producto" value="cazadora terrez mujer adidas">
                    <input type="hidden" name="precio" value="110">
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
                <a href="media/sudadera-marron-hombre-adidas.webp">
                    <img src="media/sudadera-marron-hombre-adidas.webp" alt="Sudadera adidas" class="galeria-item">
                </a>
                <div class="descripcion">50€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="5">
                    <input type="hidden" name="nombre-producto" value="sudadera marron hombre adidas">
                    <input type="hidden" name="precio" value="50">
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
                <a href="media/pantalones-negros-hombre-adidas.webp">
                    <img src="media/pantalones-negros-hombre-adidas.webp" alt="Pantalon adidas" class="galeria-item">
                </a>
                <div class="descripcion">40€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="5">
                    <input type="hidden" name="nombre-producto" value="pantalon negro hombre adidas">
                    <input type="hidden" name="precio" value="40">
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
                <a href="media/pantalones-azules-hombre-adidas.webp">
                    <img src="media/pantalones-azules-hombre-adidas.webp" alt="Pantalon adidas" class="galeria-item">
                </a>
                <div class="descripcion">40€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="5">
                    <input type="hidden" name="nombre-producto" value="pantalon azul hombre adidas">
                    <input type="hidden" name="precio" value="40">
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
                <a href="media/gorro-hombre-adidas.webp">
                    <img src="media/gorro-hombre-adidas.webp" alt="Gorro adidas" class="galeria-item">
                </a>
                <div class="descripcion">25€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="5">
                    <input type="hidden" name="nombre-producto" value="gorro hombre adidas">
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
                <a href="media/chandal-verde-hombre-adidas.webp">
                    <img src="media/chandal-verde-hombre-adidas.webp" alt="Chandal adidas" class="galeria-item">
                </a>
                <div class="descripcion">80€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="5">
                    <input type="hidden" name="nombre-producto" value="chandal verde hombre adidas">
                    <input type="hidden" name="precio" value="80">
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
                <a href="media/chandal-rosa-hombre-adidas.webp">
                    <img src="media/chandal-rosa-hombre-adidas.webp" alt="Chandal adidas" class="galeria-item">
                </a>
                <div class="descripcion">80€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="5">
                    <input type="hidden" name="nombre-producto" value="chandal rosa hombre adidas">
                    <input type="hidden" name="precio" value="80">
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
                <a href="media/chandal-negro-hombre-adidas.webp">
                    <img src="media/chandal-negro-hombre-adidas.webp" alt="Chandal adidas" class="galeria-item">
                </a>
                <div class="descripcion">80€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="5">
                    <input type="hidden" name="nombre-producto" value="chandal negro hombre adidas">
                    <input type="hidden" name="precio" value="80">
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
                <a href="media/cazadora-juventus-hombre-adidas.webp">
                    <img src="media/cazadora-juventus-hombre-adidas.webp" alt="Cazadora adidas" class="galeria-item">
                </a>
                <div class="descripcion">125€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="5">
                    <input type="hidden" name="nombre-producto" value="cazadora juventus hombre adidas">
                    <input type="hidden" name="precio" value="125">
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
                <a href="media/bañador-hojas-hombre-adidas.webp">
                    <img src="media/bañador-hojas-hombre-adidas.webp" alt="Bañador adidas" class="galeria-item">
                </a>
                <div class="descripcion">30€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="5">
                    <input type="hidden" name="nombre-producto" value="bañador hojas hombre adidas">
                    <input type="hidden" name="precio" value="30">
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
                <a href="media/bañador-verde-hombre-adidas.webp">
                    <img src="media/bañador-verde-hombre-adidas.webp" alt="Bañador adidas" class="galeria-item">
                </a>
                <div class="descripcion">30€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="5">
                    <input type="hidden" name="nombre-producto" value="bañador verde hombre adidas">
                    <input type="hidden" name="precio" value="30">
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
                <a href="media/chaqueta-rosa-hombre-adidas.webm">
                    <video src="media/chaqueta-rosa-hombre-adidas.webm" alt="Chaqueta adidas" class="galeria-item">
                </a>
                <div class="descripcion">60€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="1">
                    <input type="hidden" name="nombre-producto" value="chaqueta rosa hombre adidas">
                    <input type="hidden" name="precio" value="60">
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
                <a href="media/chaqueta-negra-hombre-adidas.webm">
                    <video src="media/chaqueta-negra-hombre-adidas.webm" alt="Chaqueta adidas" class="galeria-item">
                </a>
                <div class="descripcion">60€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="1">
                    <input type="hidden" name="nombre-producto" value="chaqueta negra hombre adidas">
                    <input type="hidden" name="precio" value="60">
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
                <a href="media/chandal-burdeos-hombre-adidas.webm">
                    <video src="media/chandal-burdeos-hombre-adidas.webm" alt="Chandal adidas" class="galeria-item">
                </a>
                <div class="descripcion">90€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="1">
                    <input type="hidden" name="nombre-producto" value="chandal burdeos hombre adidas">
                    <input type="hidden" name="precio" value="90">
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