<?php get_header(); ?>
<section style="margin-top: 10%">
    <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();

        get_template_part( 'partials/content-feed', get_post_format() );

    endwhile; endif;
    ?>
</section>

<?php get_footer(); ?>
