
<?php get_header(); ?>

<div class="row">
    <div class="col-sm-12">

        <?php
        $args = array(
            'posts_per_page' => 100,
        );
        $custom_query = new WP_Query($args);
        if ( $custom_query->have_posts() ) : while ($custom_query->have_posts()) : $custom_query->the_post();
            get_template_part( 'content', get_post_format() );
        endwhile; endif;
        ?>

    </div> <!-- /.col -->
</div> <!-- /.row -->

<?php get_footer(); ?>
