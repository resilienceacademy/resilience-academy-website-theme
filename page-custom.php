<?php get_header(); ?>
        <?php
        $args =  array(
            'post_type' => 'announcements',
            'orderby' => 'menu_order',
            'order' => 'ASC'
        );
        $custom_query = new WP_Query( $args );
        while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

        <div class="blog-post">
            <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
            <?php endwhile; ?>

<?php get_footer(); ?>