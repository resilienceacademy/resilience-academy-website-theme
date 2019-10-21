<?php
wp_enqueue_style('repository', get_template_directory_uri() . '/css/repository.css');
get_header();
?>
<section id="repository">
    <h2>Research Repository</h2>
    <div class="articles-content">
    <?php echo do_shortcode('[gravityview id=15881]'); ?>
    </div>
</section>

<?php get_footer(); ?>
