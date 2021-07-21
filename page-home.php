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
                                <h1>We are a company Powered by Technology and Driven by Talent.</h1>
                                <button class="btn btn-light mt-4" style="font-weight: 600" aria-label="Justify">Learn more</button>
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
            <h2 class="subTitle pt-2 pb-3">Some of our latest projects</h2>
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
            <h2 class="subTitle pt-2 pb-3">Our Services</h2>
            <div class="row d-flex justify-content-evenly">

                <div class="col-7 col-md-5 col-lg-2 ml-auto mr-auto card-price">

                    <div class="row">

                    <div class="col-12">
                            <img class="w-100 p-3"
                                src="<?php echo get_template_directory_uri() . "/imgs/marketing.png"; ?>"
                                alt="servicio">
                        </div>
                        <div class="col-12">
                            <h5 class="price-title">Digital Marketing</h5>
                        </div>
                        <div class="col-12">

                            <ul class="list-group text-truncate">
                                <li class="item-group">Weekly posts</li>
                                <li class="item-group">Custom design for your business</li>
                                <li class="item-group">Weekly management</li>
                                <li class="item-group">Monthly reports</li>
                                <li class="item-group">Interaction with customers</li>
                                <li class="item-group">Designs included</li>
                                <li class="item-group">Optional: social media store</li>
                            </ul>
                        </div>
                        <div class="col-12">
                            <div class="col d-flex">
                                <h5 class="price-from">Starting at:</h5>
                                <h5 class="price-cost">$700</h5>
                            </div>
                        </div>
                        <div class="col-12">
                            <a href="https://dev-tm7200.pantheonsite.io/product/marketing-social-media/"> <button type="button" aria-label="Justify" class="btn btnContact">SHOW NOW</button></a>
                        </div>
                    </div>
                </div>

                <div class="col-7 col-md-5 col-lg-2 ml-auto mr-auto card-price">

                    <div class="row">

                    <div class="col-12">
                            <img class="w-100 p-3"
                                src="<?php echo get_template_directory_uri()."/imgs/grafico.png"; ?>" alt="servicio">
                        </div>
                        <div class="col-12">
                            <h5 class="price-title">Graphic Design</h5>
                        </div>
                        <div class="col-12">
                            <ul class="list-group">
                                <li class="item-group">Modern and personalized design</li>
                                <li class="item-group">Unlimited extension</li>
                                <li class="item-group">Contact optimization</li>
                                <li class="item-group">.com or .cr domain included</li>
                                <li class="item-group">Cloud integration</li>
                                <li class="item-group">Continuous advice</li>
                                <li class="item-group">UX-UI principles</li>
                            </ul>
                        </div>
                        <div class="col-12">
                            <div class="col d-flex">
                                <h5 class="price-from">Starting at:</h5>
                                <h5 class="price-cost">$1200</h5>
                            </div>
                        </div>
                        <div class="col-12">
                            <a href="https://dev-tm7200.pantheonsite.io/product/desarrollo-web/"> <button type="button" aria-label="Justify" class="btn btnContact">SHOW NOW</button></a>
                        </div>
                    </div>
                </div>

                <div class="col-7 col-md-5 col-lg-2 ml-auto mr-auto card-price">

                    <div class="row">

                        <div class="col-12">
                            <img class="w-100 p-3"
                                src="<?php echo get_template_directory_uri() . "/imgs/phone.png"; ?>" alt="servicio">
                        </div>
                        <div class="col-12">
                            <h5 class="price-title">Mobile App</h5>
                        </div>
                        <div class="col-12">
                            <ul class="list-group">
                                <li class="item-group">Modern and personalized design</li>
                                <li class="item-group">Unlimited product quantity</li>
                                <li class="item-group">Purchase flow optimization</li>
                                <li class="item-group">Product categorization</li>
                                <li class="item-group">Inventory management</li>
                                <li class="item-group">Monitoring plan</li>
                                <li class="item-group">UX-UI principles</li>
                            </ul>
                        </div>
                        <div class="col-12">
                            <div class="col d-flex">
                                <h5 class="price-from">Starting at:</h5>
                                <h5 class="price-cost">$1500</h5>
                            </div>
                        </div>
                        <div class="col-12">
                            <a href="https://dev-tm7200.pantheonsite.io/product/desarrollo-tienda-online/"> <button type="button" aria-label="Justify" class="btn btnContact">SHOW NOW</button></a>
                        </div>
                    </div>
                </div>

                <div class="col-7 col-md-5 col-lg-2 ml-auto mr-auto card-price">

                    <div class="row">

                        <div class="col-12">
                            <img class="w-100 p-3"
                                src="<?php echo get_template_directory_uri() . "/imgs/web.png"; ?>" alt="servicio">
                        </div>
                        <div class="col-12">
                            <h5 class="price-title">Web Design</h5>
                        </div>
                        <div class="col-12">
                            <ul class="list-group">
                                <li class="item-group">Modern and personalized design</li>
                                <li class="item-group">Automated QA and testing</li>
                                <li class="item-group">Best technological solutions</li>
                                <li class="item-group">Cross-platform</li>
                                <li class="item-group">Cloud integration</li>
                                <li class="item-group">Monitoring plan</li>
                                <li class="item-group">UX-UI principles</li>
                            </ul>
                        </div>
                        <div class="col-12">
                            <div class="col d-flex">
                                <h5 class="price-from">Starting at:</h5>
                                <h5 class="price-cost">$2200</h5>
                            </div>
                        </div>
                        <div class="col-12">
                            <a href="https://dev-tm7200.pantheonsite.io/product/desarrollo-aplicacion-movil/"> <button type="button" aria-label="Justify" class="btn btnContact">SHOW NOW</button></a>
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
            Areas of Expertise
            </div>
            <h3 class="banner-frase2 mt-2">
            Based on many years of experience
            </h3>
            <div class="boton-contacto pt-5 pb-5 text-center">
                <button class="btn btn-light pt-2 pb-2 " style="font-weight: 600" aria-label="Justify" type="button">Learn more</button>
            </div>
        </div>
    </div>
</div>

<!-- frase -->
<div class="container-fluid pt-5 pb-5 fraseBanner" id="frase">
    <div class="row justify-content-center text-center">
        <div class="col-md-10">
            <h1 class="frase-1 pt-2">
                A great design begins with <br>
                even a better story
            </h1>
            <h3 class="frase-2 pt-2">
                Let’s start a project together!
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
                    <h3 class="cantact2 pt-2 pb-1 align_left">Contact Us</h3>
                </div>
                <div class="comment-text">
                    <p class="comment-contact pb-4 text-left">Once you let us know your requirements,<br>
                        our technical expert will schedule a call and discuss your ideas in detail.
                    </p>
                </div>
            </div>

            <div class="recibe1 col-sm-6 justify-content-center text-center" style="padding-left: 0;">
                <div class="Recibe">
                    <h3 class="recibe2 pt-2 pb-1 align_left">Get a Cost Estimate</h3>
                </div>
                <div class="recibe-text">
                    <p class="comment-receive pb-4 text-left">Based on the project requirements,<br>
                        we share a project proposal with a budget and timeline estimates.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="boton-contacto pt-5 pb-5 text-center">
        <button class="btn btn-light pt-2 pb-2" style="font-weight: 600" type="button" aria-label="Justify" id="get_in_touch">Talk to our team</button>
    </div>
</div>

<?php get_footer(); ?>