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
                <h1 class="logo">Restaurante "CG"</h1>
                </div>
                <div class="main-header__contactInfo column column--50 ">
                    <p class="main-header__contactInfo__phone">
                        <span class="icon-celular">0963197829</span>
                        </p> 
                       <p class="main-header__contactInfo__address">
                           <span class="icon-ubicacion">Sauces 2 Mz 43</span>
                    </p>
                </div>
            </div>
        </header>
<nav class="main-nav">
    <div class="container container--flex">
        <span class="icon-barra" id="btnmenu"></span>
        <ul class="menu" id="menu"> 
            <li class="menu__item" ><a href="../validaciones/cerrar.php" class="menu__link menu__link--select">Cerrar Sesion</a></li>
            <li class="menu__item" ><a href="menu.php" class="menu__link">Menu</a></li>
            <li class="menu__item" ><a href="contacto.php" class="menu__link">Contacto</a></li>
            <li class="menu__item" ><a href="#" class="menu__link"><?php echo $_SESSION['usuario']; ?></a></li>
        </ul>
        <div class="social-icon">
            <a href="#" class="social-icon__link"><span class="icon-facebook"></span></a>
            <a href="#" class="social-icon__link"><span class="icon-instagram"></span></a>
            <a href="#" class="social-icon__link"><span class="icon-correo"></span></a>
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
    <h2 class="main__tittle">Bienvenido a restaurante "CG"</h2>
    <p class="main_txt">Somos un restaurante que le gusta hacer feliz a sus clientes con sus deliciosos platos</p>
</div>
    </section>
<section class="group main__about__description">
    <div class="container container--flex">
        <div class="column column--50">
        <img src="../imagenes/platoP.jpg">
        </div>
        <div class="column column--50">
        <h3 class="column__title">Vendemos a cualquier horario</h3>
        <p class="column_txt">Desde un exquisito desayuno, hasta un delicioso almuerzo.</p>

        <a href="" class="btn btn--contact">Contact</a>


        </div>

    </div>

</section>
<!-- seccion de menus  -->
<section class="group today-special">
    <h2 class="group__title">Especiales</h2>
    <div class="container container--flex">
    <div class="column column--50-25">
        <img src="../imagenes/plato1.jpg" class="today-special__img">
        <div class="today-special__title">Menestra y carne</div>
    </div><div class="column column--50-25">
        <img src="../imagenes/plato2.jpg" class="today-special__img">
        <div class="today-special__title">Seco de pollo</div>
    </div><div class="column column--50-25">
        <img src="../imagenes/plato3.jpg" class="today-special__img">
        <div class="today-special__title">Chaulafan</div>
    </div><div class="column column--50-25">
        <img src="../imagenes/plato4.jpg" class="today-special__img">
        <div class="today-special__title">Yapingacho</div>
    </div>
</div>
</section>

    </main>

<footer class="main-footer">
    <div class="container container--flex">
        <div class="column column--33">
            <h2 class="column__title">¿Por que visitarnos?</h2>
            <p class="column__txt">Nos encanta ofrecer el mejor servicio a los clientes</p>
        </div>
        <div class="column column--33">
            <h2 class="column__title">Contactanos</h2>
            <p class="column__txt">"Falta por crear""</p>
            <p class="column__txt">0963197829</p>
            <p class="column__txt">Sauces 2 Mz 43</p>
        </div>
        <div class="column column--33">
            <h2 class="column__title">Siguenos en nuestras redes</h2>
            <p class="column__txt"><a href="" class="icon-facebook">Facebook</a></p>
            <p class="column__txt"><a href="" class="icon-instagram">Instagram</a></p>
            <p class="column__txt"><a href="" class="icon-correo">Email</a></p>
        </div>

        <p class="copy"> © 2021 restaurante "CG" | Todos los derechos reservados</p>

    </div>
</footer>
<script src="../js/menu.js"></script>
    </body>
    </html>