<?php
/*Template Name: English Pack */ 
get_header(); ?>

/* Template for SERVICIO MODELO PESA */ 

<div class="">
    <div class="p-2">
        
</div>

    <?php while( have_posts() ) : the_post(); ?>

    <div class="row">
        <div class="col-11 offset-1">
        <div class="pt-5 display-3">
        PESA: Service      
        </div>
        
            <h2 class="wh-border"><?php the_title(); ?></h2>
        </div>
    </div>

    <div class="row justify-content-center pt-3">

                <div class="col-10">
                    <div class="row justify-content-center">
                    <div class="col-10 col-sm"><img class="img_pack" src="<?php the_field('service_icon'); ?>" alt="instant"></div>
                    <div class="col-10 col-sm"><p><?php the_content(); ?></p></div>
                    
                    
                    </div>
                </div>
                
            </div>
            <?php endwhile; ?>
        <!-- services -->

       <?php get_footer(); ?>

    

