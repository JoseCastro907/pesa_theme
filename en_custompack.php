<?php
/*Template Name: English Pack */ 
get_header(); ?>


<div class="">
    <div class="p-2">
        
</div>

    <?php while( have_posts() ) : the_post(); ?>

    <div class="row">
        <div class="col-11 offset-1">
        <div class="pt-5 display-5 service_title">
        PESA: Service      
        </div>
        
        <p class="wh-border display-1"><?php the_title(); ?></p>
        </div>
    </div>

    <div class="row justify-content-center pt-3 pb-4">

                <div class="col-10">
                    <div class="row service_box justify-content-center p-4">
                    <div class="col-10 col-sm pe-5"><img class="img_pack" src="<?php the_field('service_icon'); ?>" alt="instant"></div>
                    <div class="col-10 col-sm service_p_col"><p><?php the_content(); ?></p></div>
                    
                    
                    </div>
                </div>
                
            </div>
            <?php endwhile; ?>
        <!-- services -->

       <?php get_footer(); ?>

    

