<?php
wp_enqueue_style('home', get_template_directory_uri() . '/css/home.css');
get_header();

?>


<div style="position: relative;">
    <div id="banner">
        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/banner.jpg" alt="">
        <div class="text layout vertical center-center">
            <h2>
                Urban Resilience is
                <span id="bannerChangingText">
						&nbsp;
						<span>
							<small class="current">taught</small>
							<small>learned</small>
							<small>accessed</small>
							<small>secured</small>
						</span>
					</span>
            </h2>
        </div>
    </div>

    <a href="#sectionEvAn" id="bannerScroller" class="layout center-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
    </a>
</div>

<section id="aboutUs">
    <div class="section-wrapper">
        <p class="text-center">
            The Resilience Academy aims to equip young people with the<span class="for-lg"><br></span>
            <span class="blue-text text-italic">tools, knowledge, and skills </span>
            to address the world’s most pressing<span class="for-lg"><br></span>
            urban challenges and ensure resilient urban development.
        </p>

        <hr>

        <p class="text-center">
            An initiative led by dedicated faculty of five academic institutions: Ardhi University (Tanzania),
            University of Dar es Salaam (Tanzania), Sokoine University of Agriculture (Tanzania), State University of Zanzibar (Zanzibar),
            and University of Turku (Finland)Supported by the Tanzania Urban Resilience Program (TURP), a partnership between the
            Government of Tanzania, the World Bank, and the UK Department for International Development
        </p>

        <div class="layout center-center">
            <a href="<?php echo get_home_url(); ?>/about" class="button text-upper">
                Learn More
            </a>
        </div>
    </div>
</section>

<section id="courses" class="cta-section">
    <div class="text layout vertical center-center text-center">
        <h3>Resilient solutions begin with education</h3>
        <a href="<?php echo get_home_url(); ?>/courses" class="button text-upper">
            View Our Courses
        </a>
    </div>
</section>

<section id="projects">
    <div class="section-wrapper position-relative">
        <div class="overflow-hidden" style="background: #d2d2d2;">
            <div id="projectsScroller" class="layout center">
                <?php
                $args = array(
                    'post_type' => 'announcements',
                    'orderby' => 'menu_order',
                    'order' => 'ASC'
                );
                $custom_query = new WP_Query($args);
                while ($custom_query->have_posts()) : $custom_query->the_post();
                    get_template_part('content-announcement', get_post_format());
                endwhile; ?>
            </div>
        </div>

        <div id="projectsMover" class="position-absolute pin-all pointer-events-none layout center justified">
            <button onclick="moveProjects(-1)" class="action-button pointer-events-auto">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
            </button>

            <button onclick="moveProjects(1)" class="action-button pointer-events-auto">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </button>
        </div>
    </div>
</section>

<section id="news">
    <div class="section-wrapper">
        <div class="section-title">
            <small>Our News</small>
            <h2>
                Show me <a href="<?php echo get_home_url(); ?>/blogs" class="blue-text">everything</a>
            </h2>
        </div>

        <div class="layout">
            <?php
            $args = array(
                'posts_per_page' => 3,
            );
            $custom_query = new WP_Query($args);
            if ( $custom_query->have_posts() ) : while ($custom_query->have_posts()) : $custom_query->the_post();
                get_template_part( 'content', get_post_format() );
            endwhile; endif;
            ?>
        </div>
    </div>
</section>

<section id="events">
    <div class="section-wrapper">
        <div class="section-title">
            <small>Our Events</small>
            <h2>
                Show me the <a href="<?php echo get_home_url(); ?>/events">calendar</a>
            </h2>
        </div>

        <div class="layout wrap justified">
            <?php
            $args = array(
                'post_type' => 'events',
                'orderby' => 'menu_order',
                'posts_per_page' => 2,
                'order' => 'ASC'
            );
            $custom_query = new WP_Query($args);
            while ($custom_query->have_posts()) : $custom_query->the_post();
                get_template_part('content-event', get_post_format());
            endwhile; ?>
        </div>
    </div>
</section>

<section id="climateRisk" class="cta-section">
    <div class="text layout vertical center-center text-center">
        <h3>
            Accurate climate risk data informs <span class="for-lg"><br/></span>
            resilient decision-making
        </h3>
        <a href="<?php echo get_home_url(); ?>/research" class="button text-upper">
            View Our Repository
        </a>
    </div>
</section>
<?php get_template_part( 'includes/contact-us' ); ?>

<?php get_footer(); ?>
