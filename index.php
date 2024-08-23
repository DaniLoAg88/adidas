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
                    <input type="hidden" name="id-producto" value="2">
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
                    <input type="hidden" name="id-producto" value="3">
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
                    <input type="hidden" name="id-producto" value="4">
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
                    <input type="hidden" name="id-producto" value="5">
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
                    <input type="hidden" name="id-producto" value="6">
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
                    <input type="hidden" name="id-producto" value="7">
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
                    <input type="hidden" name="id-producto" value="8">
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
                    <input type="hidden" name="id-producto" value="9">
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
                    <input type="hidden" name="id-producto" value="10">
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
                    <input type="hidden" name="id-producto" value="11">
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
                    <input type="hidden" name="id-producto" value="12">
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
                    <input type="hidden" name="id-producto" value="13">
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
                    <input type="hidden" name="id-producto" value="14">
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
                    <input type="hidden" name="id-producto" value="15">
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
                    <input type="hidden" name="id-producto" value="16">
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
                    <input type="hidden" name="id-producto" value="17">
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
                    <input type="hidden" name="id-producto" value="18">
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
                    <input type="hidden" name="id-producto" value="19">
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
                    <input type="hidden" name="id-producto" value="20">
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
                    <input type="hidden" name="id-producto" value="21">
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
                    <input type="hidden" name="id-producto" value="22">
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
                    <input type="hidden" name="id-producto" value="23">
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
                    <input type="hidden" name="id-producto" value="24">
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
                    <input type="hidden" name="id-producto" value="25">
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
                    <input type="hidden" name="id-producto" value="26">
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
                    <input type="hidden" name="id-producto" value="27">
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
                    <input type="hidden" name="id-producto" value="28">
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
                    <input type="hidden" name="id-producto" value="29">
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
                <a href="media/ninos-sudadera-rosa-adidas.avif">
                    <img src="media/ninos-sudadera-rosa-adidas.avif" alt="Sudadera adidas" class="galeria-item">
                </a>
                <div class="descripcion">35€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="30">
                    <input type="hidden" name="nombre-producto" value="sudadera rosa ninos adidas">
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
                <a href="media/ninos-sudadera-negra-micky-mouse.avif">
                    <img src="media/ninos-sudadera-negra-micky-mouse.avif" alt="Sudadera adidas" class="galeria-item">
                </a>
                <div class="descripcion">35€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="31">
                    <input type="hidden" name="nombre-producto" value="sudadera negra ninos adidas">
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
                <a href="media/ninos-pijama-micky-mouse-adidas.avif">
                    <img src="media/ninos-pijama-micky-mouse-adidas.avif" alt="Pijama adidas" class="galeria-item">
                </a>
                <div class="descripcion">20€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="32">
                    <input type="hidden" name="nombre-producto" value="pijama ninos adidas">
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
                <a href="media/ninos-gorra-hello-kitty-adidas.avif">
                    <img src="media/ninos-gorra-hello-kitty-adidas.avif" alt="Gorra adidas" class="galeria-item">
                </a>
                <div class="descripcion">25€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="33">
                    <input type="hidden" name="nombre-producto" value="gorra kitty ninos adidas">
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
                <a href="media/ninos-chandal-negro-rosa-adidas.avif">
                    <img src="media/ninos-chandal-negro-rosa-adidas.avif" alt="Chandal adidas" class="galeria-item">
                </a>
                <div class="descripcion">50€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="34">
                    <input type="hidden" name="nombre-producto" value="chandal negro ninos adidas">
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
                <a href="media/ninos-conjunto-chaqueta-pantalon.avif">
                    <img src="media/ninos-conjunto-chaqueta-pantalon.avif" alt="Chaqueta adidas" class="galeria-item">
                </a>
                <div class="descripcion">55€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="35">
                    <input type="hidden" name="nombre-producto" value="chaqueta pantalon ninos adidas">
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
                <a href="media/ninos-chandal-multicolor-adidas.avif">
                    <img src="media/ninos-chandal-multicolor-adidas.avif" alt="Chandal adidas" class="galeria-item">
                </a>
                <div class="descripcion">65€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="36">
                    <input type="hidden" name="nombre-producto" value="chandal multicolor ninos adidas">
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
                <a href="media/ninos-chandal-marvel-adidas.avif">
                    <img src="media/ninos-chandal-marvel-adidas.avif" alt="Chandal adidas" class="galeria-item">
                </a>
                <div class="descripcion">65€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="37">
                    <input type="hidden" name="nombre-producto" value="chandal marvel ninos adidas">
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
                <a href="media/ninos-chandal-futbol-mickey-adidas.avif">
                    <img src="media/ninos-chandal-futbol-mickey-adidas.avif" alt="Chandal adidas" class="galeria-item">
                </a>
                <div class="descripcion">65€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="38">
                    <input type="hidden" name="nombre-producto" value="chandal futbol ninos adidas">
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
                <div class="descripcion">65€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="39">
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
                <a href="media/ninos-chandal-bayern-adidas.avif">
                    <img src="media/ninos-chandal-bayern-adidas.avif" alt="Bayern adidas" class="galeria-item">
                </a>
                <div class="descripcion">65€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="40">
                    <input type="hidden" name="nombre-producto" value="chandal Bayern ninos adidas">
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
                <a href="media/ninos-cazadora-negra-adidas.avif">
                    <img src="media/ninos-cazadora-negra-adidas.avif" alt="Cazadora adidas" class="galeria-item">
                </a>
                <div class="descripcion">75€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="41">
                    <input type="hidden" name="nombre-producto" value="cazadora ninos adidas">
                    <input type="hidden" name="precio" value="75">
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
                <a href="media/ninos-chandal-100-diney-adidas.avif">
                    <img src="media/ninos-chandal-100-diney-adidas.avif" alt="Chandal adidas" class="galeria-item">
                </a>
                <div class="descripcion">55€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="42">
                    <input type="hidden" name="nombre-producto" value="chandal 100 ninos adidas">
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
                <a href="media/ninos-camiseta-mandril-adidas.avif">
                    <img src="media/ninos-camiseta-mandril-adidas.avif" alt="Camiseta adidas" class="galeria-item">
                </a>
                <div class="descripcion">60€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="43">
                    <input type="hidden" name="nombre-producto" value="camiseta madrid ninos adidas">
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
                <a href="media/ninos-camiseta-verde-adidas.avif">
                    <img src="media/ninos-camiseta-verde-adidas.avif" alt="Camiseta adidas" class="galeria-item">
                </a>
                <div class="descripcion">25€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="44">
                    <input type="hidden" name="nombre-producto" value="camiseta verde ninos adidas">
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
                <a href="media/ninos-calcetines-spiderman-adidas.avif">
                    <img src="media/ninos-calcetines-spiderman-adidas.avif" alt="Calcetines adidas" class="galeria-item">
                </a>
                <div class="descripcion">15€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="45">
                    <input type="hidden" name="nombre-producto" value="calcetines ninos adidas">
                    <input type="hidden" name="precio" value="15">
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
                <a href="media/zapatilla-ultraboost-naranja.webp">
                    <img src="media/zapatilla-ultraboost-naranja.webp" alt="Zapatillas adidas" class="galeria-item">
                </a>
                <div class="descripcion">65€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="46">
                    <input type="hidden" name="nombre-producto" value="Zapatillas ultraboost adidas">
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
                <a href="media/zapatilla-zx-boost-blanco.webp">
                    <img src="media/zapatilla-zx-boost-blanco.webp" alt="Zapatillas adidas" class="galeria-item">
                </a>
                <div class="descripcion">65€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="47">
                    <input type="hidden" name="nombre-producto" value="Zapatillas zx adidas">
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
                <a href="media/zapatilla-superstar.webp">
                    <img src="media/zapatilla-superstar.webp" alt="Zapatillas adidas" class="galeria-item">
                </a>
                <div class="descripcion">65€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="48">
                    <input type="hidden" name="nombre-producto" value="Zapatillas superstar adidas">
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
                <a href="media/zapatilla-r1-burgundy.webp">
                    <img src="media/zapatilla-r1-burgundy.webp" alt="Zapatillas adidas" class="galeria-item">
                </a>
                <div class="descripcion">65€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="49">
                    <input type="hidden" name="nombre-producto" value="Zapatillas burgundy adidas">
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
                    <input type="hidden" name="id-producto" value="50">
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
                <a href="media/zapatilla-broomfield-verde.webp">
                    <img src="media/zapatilla-broomfield-verde.webp" alt="Zapatillas adidas" class="galeria-item">
                </a>
                <div class="descripcion">65€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="51">
                    <input type="hidden" name="nombre-producto" value="Zapatillas broomfield adidas">
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
                <a href="media/zapatilla-continental-80.webp">
                    <img src="media/zapatilla-continental-80.webp" alt="Zapatillas adidas" class="galeria-item">
                </a>
                <div class="descripcion">65€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="52">
                    <input type="hidden" name="nombre-producto" value="Zapatillas continental adidas">
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
                <a href="media/zapatilla-basket-profi.webp">
                    <img src="media/zapatilla-basket-profi.webp" alt="Zapatillas adidas" class="galeria-item">
                </a>
                <div class="descripcion">65€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="53">
                    <input type="hidden" name="nombre-producto" value="Zapatillas basket adidas">
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
                <a href="media/zapatilla-adizero-boston-9.webp">
                    <img src="media/zapatilla-adizero-boston-9.webp" alt="Zapatillas adidas" class="galeria-item">
                </a>
                <div class="descripcion">65€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="54">
                    <input type="hidden" name="nombre-producto" value="Zapatillas adizero adidas">
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
                <a href="media/deportivas-hombre-verdes-adidas.webp">
                    <img src="media/deportivas-hombre-verdes-adidas.webp" alt="Zapatillas adidas" class="galeria-item">
                </a>
                <div class="descripcion">60€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="55">
                    <input type="hidden" name="nombre-producto" value="Deportivas verdes adidas">
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
                <a href="media/deportiva-roja-mujer-adidas.webp">
                    <img src="media/deportiva-roja-mujer-adidas.webp" alt="Zapatillas adidas" class="galeria-item">
                </a>
                <div class="descripcion">60€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="56">
                    <input type="hidden" name="nombre-producto" value="Deportivas rojas adidas">
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
                <a href="media/deportiva-hombre-negra-adidas.webp">
                    <img src="media/deportiva-hombre-negra-adidas.webp" alt="Zapatillas adidas" class="galeria-item">
                </a>
                <div class="descripcion">60€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="57">
                    <input type="hidden" name="nombre-producto" value="Deportivas negras adidas">
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
                <a href="media/ninos-deportivas-lego-adidas.avif">
                    <img src="media/ninos-deportivas-lego-adidas.avif" alt="Zapatillas adidas" class="galeria-item">
                </a>
                <div class="descripcion">50€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="58">
                    <input type="hidden" name="nombre-producto" value="Deportivas lego adidas">
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
                <a href="media/ninos-deportivas-kitty-adidas.avif">
                    <img src="media/ninos-deportivas-kitty-adidas.avif" alt="Zapatillas adidas" class="galeria-item">
                </a>
                <div class="descripcion">50€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="59">
                    <input type="hidden" name="nombre-producto" value="Deportivas kitty adidas">
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
                <a href="media/ninos-deportivas-dalmata-adidas.avif">
                    <img src="media/ninos-deportivas-dalmata-adidas.avif" alt="Zapatillas adidas" class="galeria-item">
                </a>
                <div class="descripcion">50€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="60">
                    <input type="hidden" name="nombre-producto" value="Deportivas dalmata adidas">
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
                <a href="media/ninos-deportiva-blanca-rosa-adidas.avif">
                    <img src="media/ninos-deportiva-blanca-rosa-adidas.avif" alt="Zapatillas adidas" class="galeria-item">
                </a>
                <div class="descripcion">50€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="61">
                    <input type="hidden" name="nombre-producto" value="Deportivas blancaRosa adidas">
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
                <a href="media/ninos-deportiva-blanca-azul-adidas.avif">
                    <img src="media/ninos-deportiva-blanca-azul-adidas.avif" alt="Zapatillas adidas" class="galeria-item">
                </a>
                <div class="descripcion">50€</div>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="62">
                    <input type="hidden" name="nombre-producto" value="Deportivas blancaAzul adidas">
                    <input type="hidden" name="precio" value="50">
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