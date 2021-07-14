<?php
/*Template Name: Pack */ 
get_header(); ?>

/* Template for SERVICIO MODELO PESA */ 

<div class="">
    <div class="p-2">
        <div class="pt-5 display-3">
            PESA: KIWI Servicio 
        </div>
</div>

    <?php while( have_posts() ) : the_post(); ?>

    <div class="row">
        <div class="col-11 offset-1">
            <h2 class="wh-border"><?php the_title(); ?></h2>
        </div>
    </div>

    <div class="row justify-content-center">

                <div class="col-10">
                    <div class="row">
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
                
            </div>
            <?php endwhile; ?>
        <!-- services -->

       <?php get_footer(); ?>

    

