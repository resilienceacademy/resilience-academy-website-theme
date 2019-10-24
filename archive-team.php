<?php
wp_enqueue_style('team', get_template_directory_uri() . '/css/team.css');
get_header();

?>
    <section id="banner">
        <img src="https://images.pexels.com/photos/1181355/pexels-photo-1181355.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
        <div class="position-absolute pin-all text layout center-center">
            <h2>
                Our local team is made up of dedicated and brilliant problem solvers.
            </h2>
        </div>
    </section>

    <section id="team">
        <div class="section-wrapper">
            <div class="layout wrap">
                <?php
                $args = array(
                    'post_type' => 'team',
                    'orderby' => 'menu_order',
                    'order' => 'ASC'
                );
                $custom_query = new WP_Query($args);
                while ($custom_query->have_posts()) : $custom_query->the_post();
                    get_template_part('partials/content-team', get_post_format());
                endwhile; ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>