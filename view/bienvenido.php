<?php 
session_start();
if (!isset($_SESSION['usuario'])) {
    echo '<script>alert("Acceso denegado, inicia session")
     window.location = "../index.php";</script>';
   
    session_destroy();
die();

}
 ?>

<!DOCTYPE html>
    <html>
    <head>
        <title>Bienvenido</title>
        <meta name = "viewport" content="width=device=width,user-scalable=yes, initial-scale=1.0, maximun-scale=3.0, minimun-scale=1.0"   >
        <link rel="stylesheet" type="text/css" href="../css/bienvenido.css">
        <link href="https://file.myfontastic.com/C6fjXXQHbwwzLn4pYNbBRK/icons.css" rel="stylesheet">
    </head>
    <body>
        <header class="main-header">
            <div class="container container--flex">
                <div class="logo-container column column--50 ">
                <h1 class="logo">Restaurante</h1>
                </div>
                <div class="main-header__contactInfo column column--50 ">
                    <p class="main-header__contactInfo__phone">
                        <span class="icon-celular">celular</span>
                        </p> 
                       <p class="main-header__contactInfo__address">
                           <span class="icon-ubicacion">Direccion</span>
                           <p class="main-header__contactInfo__cerrar">
                               <a href="../validaciones/cerrar.php">Cerrar session</a>
                           </p>
                    </p>
                </div>
            </div>
        </header>
<nav class="main-nav">
    <div class="container container--flex">
        <span class="icon-menu" id="btnmenu"></span>
        <ul class="menu" id="menu"> 
            <li class="menu__item" ><a href="/" class="menu__link menu__link--select">Inicio</a></li>
            <li class="menu__item" ><a href="nosotros.html" class="menu__link">Nosotros</a></li>
            <li class="menu__item" ><a href="menu.php" class="menu__link">Menu</a></li>
            <li class="menu__item" ><a href="contacto.php" class="menu__link">Contacto</a></li>
        </ul>
        <div class="social-icon">
            <a href="" class="social-icon__link"><span class="icon-facebook"></span></a>
            <a href="" class="social-icon__link"><span class="icon-instagram"></span></a>
            <a href="" class="social-icon__link"><span class="icon-correo"></span></a>

        </div>
    </div>
</nav>

<section class="banner">
    <img  class="banner__img" src="../imagenes/banner.jpg">
    <div class="banner__content">La mejor y mas exquisita comida</div>
</section>
    
    <main class="main">
    <section class="group group--color">   
<div class="container">
    <h2 class="main__tittle">Bienvenido a su restaurante</h2>
    <p class="main_txt">asdadad</p>
</div>
    </section>
<section class="group main__about__description">
    <div class="container container--flex">
        <div class="column column--50">
        <img src="../imagenes/food1.jpg">
        </div>
        <div class="column column--50">
        <h3 class="column__title">Titulo</h3>
        <p class="column_txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <a href="" class="btn btn--contact">Contact</a>


        </div>

    </div>

</section>
<!-- seccion de menus  -->
<section class="group today-sepecial">
    <h2 class="today-sepecial__title">Espesciales de hoy</h2>
    <div class="column column--50-25">
        <img src="../imagenes/food1.jpg" class="today-sepecial__img">
        <div class="today-sepecial__title">Nombre de los platos</div>
    </div><div class="column column--50-25">
        <img src="../imagenes/food1.jpg" class="today-sepecial__img">
        <div class="today-sepecial__title">Nombre de los platos</div>
    </div><div class="column column--50-25">
        <img src="../imagenes/food1.jpg" class="today-sepecial__img">
        <div class="today-sepecial__title">Nombre de los platos</div>
    </div><div class="column column--50-25">
        <img src="../imagenes/food1.jpg" class="today-sepecial__img">
        <div class="today-sepecial__title">Nombre de los platos</div>
    </div>

</section>

    </main>

<footer class="main-footer">
    <div class="container container--flex">
        <div class="column column--33">
            <h2 class="column__title">Por que visitarnos?</h2>
            <p class="column__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="column column--33">
            <h2 class="column__title">Contactanos</h2>
            <p class="column__txt"></p>
            <p class="column__txt"></p>
            <p class="column__txt"></p>
        </div>
        <div class="column column--33">
            <h2 class="column__title">Siguenos en nuestras redes</h2>
            <p class="column__txt"><a href="" class="icon-facebook"></a></p>
            <p class="column__txt"><a href="" class="icon-instagram"></a></p>
            <p class="column__txt"><a href="" class="icon-correo"></a></p>
        </div>

        <p class="copy"> 2021 nombre restaurante | Todos los derechos reservados</p>

    </div>
</footer>

    </body>
    </html>