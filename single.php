<?php
//wp_enqueue_style('blog', get_template_directory_uri() . '/css/blog.css');
get_header();

?>

<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();

    get_template_part( 'content-single', get_post_format() );

endwhile; endif;
?>

<?php get_footer(); ?>
