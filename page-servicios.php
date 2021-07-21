<?php get_header(); ?>


<div class="">
    <div class="p-2">

    </div>


    <div class="row justify-content-center pb-3">
    <div class="pt-5 display-3 col-10 offset-1 service_title">
            SERVICIOS DE PESA MARKETING DIGITAL
        </div>

            <div class="col-10 pt-5">
                <div class="row d-flex justify-content-around">

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
                    
                
                    
                    <div class="col-sm-10 col-md-5 pesa-service pb-4  pe-2 pt-4" href="<?php the_permalink(); ?>">
                    <a class="btn_a" href="<?php the_permalink(); ?>">
                        <div class="box p-3">
                            <div class="d-flex justify-content-center" ><img class="pt-2" style="width: 100%;" src="<?php the_field('service_icon'); ?>" alt="instant"></div>
                            
                            <p class="pt-2 fw-bold fs-2" ><?php the_title(); ?></p>
                            <p><?php the_field('service_short_description'); ?></p>
                            </div>
                            <button class="btn btn-light mt-4" aria-label="Justify"><a class="btn_a" href="<?php the_permalink(); ?>">Ver producto</a></button>
                        </div>

                        <?php endwhile;
                        else :
                            echo "<p>no content to show here</p>";
                        endif; ?>
                    </a>
                    </div>
                    
                </div>
            </div>





<?php get_footer(); ?>