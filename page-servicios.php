<?php get_header(); ?>


<div class="">
    <div class="p-2">
        <div class="pt-5 display-3">
            SERVICIOS DE PESA MARKETING DIGITAL
        </div>
    </div>


    <div class="row justify-content-center offset-1">

                <div class="col-10">
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

                        <div class="col-sm">

                        <img style="width: 100px;" src="<?php the_field('service_icon'); ?>" alt="instant">
                        <p><?php the_title(); ?></p>
                        <p><?php the_field('service_short_description'); ?></p>
                        <p><a href="<?php the_permalink(); ?>">Read more...</a></p>
                        </div>

                        <?php endwhile;
                        else :
                            echo "<p>no content to show here</p>";
                        endif; ?>

                </div>
                
            </div>
        </div>

                       


       
<?php get_footer(); ?>