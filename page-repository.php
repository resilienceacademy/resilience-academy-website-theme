<section>
    <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();

        get_template_part( 'partials/content-feed', get_post_format() );

    endwhile; endif;
    ?>
</section>