<?php get_header(); ?>

<!-- offset de fixed menu -->
<div class="containerpadding">
    <span class="m-1"></span>
</div>

<!-- Hero H1 BTN IMAGE -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="hero">
                <div class="row h-100 d-flex justify-content-center">
                    <div class="col-10 col-md" style="padding-bottom: 114px;">
                        <div class="hero-paragraph">
                            <div class="align-middle h-100 mb-3">
                                <h1>Un buen negocio incluye un buen producto digital y un buen precio.</h1>
                                <button class="btn btn-light mt-4" style="font-weight: 600" aria-label="Justify"> Saber mas</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-10 col-md">
                        <img class="img-fluid w-100"
                            src="<?php echo get_template_directory_uri() . "/imgs/pesahero.png"; ?>"
                            alt="Home">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Carrousel -->
<div class="container-fluid pt-5 pb-5">

    <div class="row justify-content-center">

        <div class="col-md-10">
            <h2 class="subTitle pt-2 pb-3">Proyectos Recientes</h2>
            <div id="carouselIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="img-fluid w-100"
                            src="<?php echo get_template_directory_uri() . "/imgs/carusel_PESA/1_5.png"; ?>"
                            alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid w-100"
                            src="<?php echo get_template_directory_uri() . "/imgs/carusel_PESA/2_5.png"; ?>"
                            alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid w-100"
                            src="<?php echo get_template_directory_uri() . "/imgs/carusel_PESA/3.png"; ?>"
                            alt="Third slide">
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- link de servicios padding 50px-->
<div class="containerpadding" id="servicios">
    <span class="m-1"></span>
</div>

<!-- services PESA -->
<div class="container-fluid pt-5 pb-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="subTitle pt-2 pb-3">Nuestros Servicios</h2>
            <div class="row d-flex justify-content-evenly">

                <div class="col-7 col-md-5 col-lg-2 ml-auto mr-auto card-price">

                    <div class="row">

                        <div class="col-12">
                            <img class="img-services"
                                src="<?php echo get_template_directory_uri() . "/imgs/comunicacion.png"; ?>"
                                alt="servicio">
                        </div>
                        <div class="col-12">
                            <h5 class="price-title">Marketing Redes</h5>
                        </div>
                        <div class="col-12">

                            <ul class="list-group text-truncate">
                                <li class="item-group">de plan de negocios</li>
                                <li class="item-group">Mercadeo de negocios</li>
                                <li class="item-group">estudio de plan de negocios</li>
                                <li class="item-group">Mercadeo de negocios</li>
                                <li class="item-group">estudio de plan de negocios</li>
                                <li class="item-group">Mercadeo de negocios</li>
                                <li class="item-group">Principios UX-UI</li>
                            </ul>
                        </div>
                        <div class="col-12">
                            <div class="col d-flex">
                                <h5 class="price-from">Desde:</h5>
                                <h5 class="price-cost">$700</h5>
                            </div>
                        </div>
                        <div class="col-12">
                            <a href="https://dev-tm7200.pantheonsite.io/product/marketing-social-media/"> <button type="button" aria-label="Justify" class="btn btnContact">Comprar ahora</button></a>
                        </div>
                    </div>
                </div>

                <div class="col-7 col-md-5 col-lg-2 ml-auto mr-auto card-price">

                    <div class="row">

                        <div class="col-12">
                            <img class="img-services"
                                src="<?php echo get_template_directory_uri()."/imgs/comision.png"; ?>" alt="servicio">
                        </div>
                        <div class="col-12">
                            <h5 class="price-title">Aplicaciones Web</h5>
                        </div>
                        <div class="col-12">
                            <ul class="list-group">
                                <li class="item-group">en linea</li>
                                <li class="item-group">appliaciones web</li>
                                <li class="item-group">control en linea</li>
                                <li class="item-group">appliaciones web</li>
                                <li class="item-group">control en linea</li>
                                <li class="item-group">appliaciones web</li>
                                <li class="item-group">Principios UX-UI</li>
                            </ul>
                        </div>
                        <div class="col-12">
                            <div class="col d-flex">
                                <h5 class="price-from">Desde:</h5>
                                <h5 class="price-cost">$1200</h5>
                            </div>
                        </div>
                        <div class="col-12">
                            <a href="https://dev-tm7200.pantheonsite.io/product/desarrollo-aplicacion-movil/"> <button type="button" aria-label="Justify" class="btn btnContact">Comprar ahora</button></a>
                        </div>
                    </div>
                </div>

                <div class="col-7 col-md-5 col-lg-2 ml-auto mr-auto card-price">

                    <div class="row">

                        <div class="col-12">
                            <img class="img-services"
                                src="<?php echo get_template_directory_uri() . "/imgs/metas.png"; ?>" alt="servicio">
                        </div>
                        <div class="col-12">
                            <h5 class="price-title">Tienda Virtual</h5>
                        </div>
                        <div class="col-12">
                            <ul class="list-group">
                                <li class="item-group">tienda ecommerce</li>
                                <li class="item-group">seguimiento de su proyecto</li>
                                <li class="item-group">plan de seguimiento</li>
                                <li class="item-group">tienda ecommerce</li>
                                <li class="item-group">seguimiento de su proyecto</li>
                                <li class="item-group">plan de seguimiento</li>
                                <li class="item-group">Principios UX-UI</li>
                            </ul>
                        </div>
                        <div class="col-12">
                            <div class="col d-flex">
                                <h5 class="price-from">Desde:</h5>
                                <h5 class="price-cost">$1500</h5>
                            </div>
                        </div>
                        <div class="col-12">
                            <a href="https://dev-tm7200.pantheonsite.io/product/desarrollo-tienda-online/   "> <button type="button" aria-label="Justify" class="btn btnContact">Comprar ahora</button></a>
                        </div>
                    </div>
                </div>

                <div class="col-7 col-md-5 col-lg-2 ml-auto mr-auto card-price">

                    <div class="row">

                        <div class="col-12">
                            <img class="img-services"
                                src="<?php echo get_template_directory_uri() . "/imgs/conexion.png"; ?>" alt="servicio">
                        </div>
                        <div class="col-12">
                            <h5 class="price-title">Soluciones Digitales</h5>
                        </div>
                        <div class="col-12">
                            <ul class="list-group">
                                <li class="item-group">comercio electronico</li>
                                <li class="item-group">seguimiento de su proyecto</li>
                                <li class="item-group">plan de seguimiento</li>
                                <li class="item-group">tienda ecommerce</li>
                                <li class="item-group">seguimiento de su proyecto</li>
                                <li class="item-group">plan de seguimiento</li>
                                <li class="item-group">Principios UX-UI</li>
                            </ul>
                        </div>
                        <div class="col-12">
                            <div class="col d-flex">
                                <h5 class="price-from">Desde:</h5>
                                <h5 class="price-cost">$2200</h5>
                            </div>
                        </div>
                        <div class="col-12">
                            <a href="#tienda"> <button type="button" aria-label="Justify" class="btn btnContact">Comprar ahora</button></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- offset de fixed menu -->
<div class="containerpadding" id="tecnologias">
    <span class="m-1"></span>
</div>

<!-- cards languagues-programming -->
<div class="container-fluid row">
    <div class="languagues-code col-md-10">
        <div class="row mb-2">
            <div class="col lang-card d-flex justify-content-center">
                <img class="code-img p-2"
                    src="<?php echo get_template_directory_uri()."/imgs/code-tech/angularjs-original.svg"; ?>" alt="">
            </div>
            <div class="col lang-card d-flex justify-content-center">
                <img class="code-img p-2"
                    src="<?php echo get_template_directory_uri()."/imgs/code-tech/vuejs-original.svg"; ?>" alt="">
            </div>
            <div class="col lang-card d-flex justify-content-center">
                <img class="code-img p-2"
                    src="<?php echo get_template_directory_uri()."/imgs/code-tech/mongodb-original.svg"; ?>" alt="">
            </div>
            <div class="col lang-card d-flex justify-content-center">
                <img class="code-img p-2"
                    src="<?php echo get_template_directory_uri()."/imgs/code-tech/laravel-plain.svg"; ?>" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col lang-card d-flex justify-content-center">
                <img class="code-img p-2"
                    src="<?php echo get_template_directory_uri()."/imgs/code-tech/oracle-original.svg"; ?>" alt="">
            </div>
            <div class="col lang-card d-flex justify-content-center">
                <img class="code-img p-2"
                    src="<?php echo get_template_directory_uri()."/imgs/code-tech/woocommerce-original.svg"; ?>" alt="">
            </div>
            <div class="col lang-card d-flex justify-content-center">
                <img class="code-img p-2"
                    src="<?php echo get_template_directory_uri()."/imgs/code-tech/wordpress-plain.svg"; ?>" alt="">
            </div>
            <div class="col lang-card d-flex justify-content-center">
                <img class="code-img p-2"
                    src="<?php echo get_template_directory_uri()."/imgs/code-tech/bootstrap-plain.svg"; ?>" alt="">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row justify-content-center text-center">
        <div class="col-md-10">

            <div class="display-4 banner-frase1">
                Lo Ultimo en Tecnologias Digitales
            </div>
            <h3 class="banner-frase2 mt-2">
                Productos Profesionales
            </h3>
            <div class="boton-contacto pt-5 pb-5 text-center">
                <button class="btn btn-light pt-2 pb-2 " style="font-weight: 600" type="button" aria-label="Justify">Saber mas</button>
            </div>
        </div>
    </div>
</div>

<!-- frase -->
<div class="container-fluid pt-5 pb-5 fraseBanner" id="frase">
    <div class="row justify-content-center text-center">
        <div class="col-md-10">
            <h1 class="frase-1 pt-2">
                Un gran diseño nace de <br>
                una historia aún mejor
            </h1>
            <h3 class="frase-2 pt-2">
                Comencemos un proyecto juntos
            </h3>
        </div>
    </div>
</div>

<!-- contactanos  -->
<div class="container-fluid pt-5 pb-5" id="contacto">
    <div class="row justify-content-center">

        <div class="principal-contact col-md-10 d-flex">
            <div class="cantact1 col-sm-6 justify-content-center text-center" style="padding-right: 0;">
                <div class="contacta">
                    <h3 class="cantact2 pt-2 pb-1 align_left">Contacta con nosotros</h3>
                </div>
                <div class="comment-text">
                    <p class="comment-contact pb-4 text-left">envíanos tus requerimientos a nuestro correo describiendo
                        a<br>detalle tu proyecto a desarrollar o agenda una llamada con<br>nosotros.
                    </p>
                </div>
            </div>

            <div class="recibe1 col-sm-6 justify-content-center text-center" style="padding-left: 0;">
                <div class="Recibe">
                    <h3 class="recibe2 pt-2 pb-1 align_left">Recibe tu cotización</h3>
                </div>
                <div class="recibe-text">
                    <p class="comment-receive pb-4 text-left">te enviaremos una cotización a tu correo electronico<br>lo
                        antes posible con caracteristicas, costos y tiempo<br>de desarrollo de tu proyecto.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="boton-contacto pt-5 pb-5 text-center">
        <button class="btn btn-light pt-2 pb-2" aria-label="Justify" style="font-weight: 600" type="button" id="get_in_touch">Ponte en
            contacto con nuestros
            expertos</button>
    </div>
</div>

<?php get_footer(); ?>