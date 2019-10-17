<?php
//wp_enqueue_style('repository', get_template_directory_uri() . '/css/repository.css');
get_header();
?>
<section id="repository">
    <h2>Research Repository</h2>
    <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();

        get_template_part( 'partials/content-article', get_post_format() );

    endwhile; endif;
    ?>
</section>

<?php get_footer(); ?>
