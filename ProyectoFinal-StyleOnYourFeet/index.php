<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Style on Your Feet - Inicio</title>
    <link type="text/css" rel="stylesheet" href="./src/css/webHeader.css">
    <link type="text/css" rel="stylesheet" href="./src/css/webFooter.css">
    <link type="text/css" rel="stylesheet" href="./src/css/startPage.css">
    
</head>
<body>
    <header class="webHeader"> <!-- Header, parte superior de la página !-->
        <img src="./src/resources/logo.svg" alt="no logo found!" id="logo">
        <input type="search" class="search" id="searchBox" placeholder="Buscar Artículos">
        <button type="submit" name="searchSubmit" id="searchBtn">Buscar</button>
    </header>

    <nav id="navArea"> <!-- Barra de navegación !-->
        <button class="dealBtn" id="most_soldBtn">Lo más vendido</button>
        <button class="dealBtn" id="dealsBtn">Promociones</button>
        <button class="dealBtn" id="recentBtn">Lo más nuevo</button>
        <button class="userBtn" id="logBtn">Identifícate, Iniciar Sesión</button>
        <a href="./purchasePage.php">
            <button class="userBtn" id="carBtn">
                <img src="./src/resources/shopping-cart.svg" alt="no icon found!" id="shopCar_svg">
                    Carrito
            </button>
        </a>
    </nav>

    <main class="contentBody"> <!-- Contenido principal de la página !-->
        <section class="productLine"> <!-- Aquí irán los productos !-->
            <h3>Los más populares</h3>
            <div class="products">
            <a href="./article1.php" target="_blank"><img src="./src/imgs/P1_portal.jpg" alt="no image found!" class="articles"></a>
            <a href="" target="_blank"><img src="./src/imgs/P2_portal.jpg" alt="no image found!" class="articles"></a>
            <a href="" target="_blank"><img src="./src/imgs/P3_portal.jpg" alt="no image found!" class="articles"></a>
            </div>
        </section>
        <section class="productLine"> <!-- Aquí irán los productos !-->
            <h3>Ofertas más vendidas</h3>
            <div class="products">
            <a href="" target="_blank"><img src="./src/imgs/P1_portal.jpg" alt="no image found!" class="articles"></a>
            <a href="" target="_blank"><img src="./src/imgs/P2_portal.jpg" alt="no image found!" class="articles"></a>
            <a href="" target="_blank"><img src="./src/imgs/P3_portal.jpg" alt="no image found!" class="articles"></a>
            </div>
        </section>
    </main>

    <footer class="webFooter"> <!-- Footer de la página !-->
        <div id="linksDiv">
            <section class="footerColums">
                <h3>Acerca de Style on Your Feet</h3>
                <ul class="footerLinks">
                    <li>
                        <a href="">Información de la empresa</a>
                    </li>
                    <li>
                        <a href="">Inversionistas</a>
                    </li>
                    <li>
                        <a href="">Noticias</a>
                    </li>
                    <li>
                        <a href="">Trabajos</a>
                    </li>
                    <li>
                        <a href="">Políticas</a>
                    </li>
                </ul>
            </section>
            <section class="footerColums">
                <h3>Ayuda y contacto</h3>
                <ul class="footerLinks">
                    <li>
                        <a href="">Centro de resoluciones</a>
                    </li>
                </ul>
            </section>
            <section class="footerColums">
                <h3>Redes sociales</h3>
                <ul class="footerLinks">
                    <li>
                        <a href="">Foros de discusión</a>
                    </li>
                    <li>
                        <a href="">Facebook</a>
                    </li>
                    <li>
                        <a href="">Twitter</a>
                    </li>
                    <li>
                        <a href="">Instagram</a>
                    </li>
                </ul>
            </section>
        </div>
        <h5 id="copyright">Copyright © 2020-2025 StyleIt Inc. Todos los derechos reservados.</h5>
    </footer>
</body>
</html>