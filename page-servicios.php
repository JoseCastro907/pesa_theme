<?php get_header(); ?>


<div class="">
    <div class="p-2">

    </div>


    <div class="row justify-content-center pb-3">
    <div class="pt-5 display-3 offset-1 service_title">
            SERVICIOS DE PESA MARKETING DIGITAL
        </div>

                <div class="col-10 pt-5">
                    <div class="row">

                    <?php
                        //get services preracion de consulta
                        $args = array(
                            'post_type' => 'page',
                            'posts_per_page' => -1,
                            'post_parent' => $post->ID,
                            'order' => 'ASC',
                            'orderby' => 'menu_order'
                        );

                        $the_query = new WP_Query($args);

                        if( $the_query->have_posts() ) :

                            while( $the_query-> have_posts() ) : $the_query->the_post();
                        ?>

                    <div class="col-sm pesa-service pb-2 pe-2 pt-4 ">
                        <div class="box ps-3">
                            <img class="pt-2" style="width: 100px;" src="<?php the_field('service_icon'); ?>" alt="instant">
                            <p><?php the_title(); ?></p>
                            <p><?php the_field('service_short_description'); ?></p>
                         </div>
                         <button class="btn btn-light mt-4" aria-label="Justify"><a class="btn_a" href="<?php the_permalink(); ?>">Ver producto</a></button>
                        </div>

                        <?php endwhile;
                        else :
                            echo "<p>no content to show here</p>";
                        endif; ?>

                </div>

            </div>
        </div>





<?php get_footer(); ?>