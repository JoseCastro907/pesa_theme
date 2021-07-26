<?php get_header(); ?>


<div class="container-fluid">
    <div class="w-100 m-0 d-flex justify-content-center pt-4">
    <img class="img-about" src="<?php echo get_template_directory_uri() . "/imgs/alto.png"; ?>" alt="servicio" >
    </div>
    <div class="row w-100 m-0 pt-3 pb-4">
        <div class="offset-1 col-10">
            <h1 class="display-1 fw-bold">We build solutions</h1>
            <p class="fs-4 about-member fw-bold">Dedicate exclusively to the client and solve their need through a technological and competitive proposal in the market.
            </p>
        </div>
        
    </div>
    <div class="row w-100 m-0 pt-3">
        <div class="offset-1 col-10 col-md-5">
            <h2 class="display-3">Vision</h2>
            <p class="fs-4 about-member fw-bold">Create a legacy of professional services recognized by our clients that mark a memory in our clients.</p>
        </div>
        <div class="offset-1 col-10 col-md-5">
            <h2 class="display-3">Mision</h2>
            <p class="fs-4 about-member fw-bold">Dedicate exclusively to the client and solve their need through a technological and competitive proposal in the market.</p>
        </div>
    </div>
</div>


<div class="offset-1 pt-5">
    <div class="p-2">
        <div class="pt-5 display-2">
            OUR TEAM
        </div>
    </div>

    <div class="container-fluid pt-5 pb-5">
        <div class="row">
            <div class="col-11 col-md-5">
                <img class="img-about"
                    src="<?php echo get_template_directory_uri() . "/imgs/about/manceo.png"; ?>"
                    alt="miembro_ceo">
            </div>
            <div class="col-11 col-md-7">
                <div class="display-2 about-member pb-2 pt-2">
                    <p>CEO</p>
                </div>
                <div class="about-text">
                Co-founder of Pesa Marketing. <br> <p class="display-5">Esteban José Zúñiga Fallas</p> <br> Computer Science and multimedia technologist <br> Graduated from the UCR in Computer Science and Multimedia Technology.
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5 pb-5">
        <div class="row">

            <div class="col-11 col-md-7">
                <div class="display-2 about-member pb-2 pt-2">
                    <p>Community Manager</p>
                </div>
                <div class="about-text pb-3">
                Co-founder of Pesa Marketing. <br> <p class="display-5">Andres Zúñiga Fallas </p> <br> Digital marketer <br> ST Angel. Student <BR> Social Media specialist.
                </div>
            </div>

            <div class="col-11 col-md-5">
                <img class="img-about"
                    src="<?php echo get_template_directory_uri() . "/imgs/about/manager.png"; ?>"
                    alt="miembro_manager">
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>