<?php
wp_enqueue_style('news', get_template_directory_uri() . '/css/news.css');
get_header();

?>


<section id="banner">
    <div class="section-wrapper">
        <h2>
            <small>OUR NEWS</small>
            Show me <a href="#">everything.</a>
        </h2>
    </div>
</section>

<section id="blogs">
    <div class="section-wrapper">
        <?php
        $args = array(
            'posts_per_page' => 1,
        );
        $custom_query = new WP_Query($args);
        if ( $custom_query->have_posts() ) : while ($custom_query->have_posts()) : $custom_query->the_post();
            get_template_part( 'partials/content-blog-card-large', get_post_format() );
        endwhile; endif;
        ?>
    </div>
</section>

<section>

    <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();

        get_template_part( 'partials/content-feed', get_post_format() );

    endwhile; endif;
    ?>
</section>

<?php get_footer(); ?>
