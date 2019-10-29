
<?php
wp_enqueue_style('blogs', get_template_directory_uri() . '/css/blog.css');
get_header();
?>

<section id="banner">
    <div class="section-wrapper">
        <h2>
            <small>OUR BLOG</small>
            Show me <a href="#">everything.</a>
        </h2>
    </div>
</section>

<section id="blogs">
    <div class="section-wrapper">
        <?php
        $args = array(
            'posts_per_page' => 100,
        );
        $custom_query = new WP_Query($args);
        if ( $custom_query->have_posts() ) : while ($custom_query->have_posts()) : $custom_query->the_post();
            get_template_part( 'partials/content-blog-card-large', get_post_format() );
        endwhile; 
    endif;
    
        ?>
        
    </div>
    
</section>

<?php get_footer(); ?>
