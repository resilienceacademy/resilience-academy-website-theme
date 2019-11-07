<?php
wp_enqueue_style('institutions', get_template_directory_uri() . '/css/institutions.css');
get_header();

?>

    <section id="banner" class="yellow-bg">
        <div class="blue-bg">
            <div class="section-wrapper">
                <h2>
                    Resilient teams have members and institutions behind them.
                </h2>
            </div>
        </div>
    </section>

    <section id="featured">
        <div class="section-wrapper">
            <div class="layout wrap">
                <?php
                $args = array(
                    'post_type' => 'institutions',
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                    'posts_per_page' => 100,
                );
                $custom_query = new WP_Query($args);
                while ($custom_query->have_posts()) : $custom_query->the_post();
                    get_template_part('partials/content-partner', get_post_format());
                endwhile; ?>
            </div>
        </div>
    </section>

    <section id="quotes" class="yellow-bg">
        <div class="section-wrapper position-relative">
            <div id="quotesContainer" class="layout vertical center-justified"
                 style="background-image: url(https://resilienceacademy.ac.tz/wp-content/uploads/2019/06/R0002852-Copy.png?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1825&q=80)">
                <div id="quotesScrim" class="position-absolute pin-all"></div>
                <div id="largeQuote">
                <?php
                $args = array(
                    'post_type' => 'annotations',
                    'orderby' => 'menu_order',
                    'meta_query'	=> array(
                        array(
                            'key'	  	=> 'position',
                            'value'	  	=> 'First',
                            'compare' 	=> '=',
                        ),
                    ),
                    'order' => 'ASC',
                    'posts_per_page' => 1,
                );
                $custom_query = new WP_Query($args);
                while ($custom_query->have_posts()) : $custom_query->the_post();
                    get_template_part('partials/content-institution', get_post_format());
                endwhile; ?>
                </div>
                <div id="smallQuote">
                <?php
                $args = array(
                    'post_type' => 'annotations',
                    'orderby' => 'menu_order',
                    'meta_query'	=> array(
                        array(
                            'key'	  	=> 'position',
                            'value'	  	=> 'Second',
                            'compare' 	=> '=',
                        ),
                    ),
                    'order' => 'ASC',
                    'posts_per_page' => 1,
                    

                );
                $custom_query = new WP_Query($args);
                while ($custom_query->have_posts()) : $custom_query->the_post();
                    get_template_part('partials/content-institution', get_post_format());
                endwhile; ?>
                </div>
            </div>
        </div>
    </section>

    <section id="aboutResilience">
        <div class="section-wrapper">
            <div>
                <h2>Our Community</h2>

                <div id="moreAbout" class="layout center-justified wrap">
                    <div>
                        <div class="decorated-inset-box green-bg">
                            <div>
                                <h3>Team</h3>
                                <p>Get to know us</p>
                                <a href="<?php echo get_home_url(); ?>/team" class="button">
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="decorated-inset-box yellow-bg">
                            <div>
                                <h3>Partners</h3>
                                <p>Meet our partners</p>
                                <a href="<?php echo get_home_url(); ?>/partners" class="button">
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        var methodsScroller = document.querySelector("#methodsScroller");
        var methodsSlideIndex = 0;
        var methodItems = document.querySelectorAll('.method-item');
        var methodTabs = document.querySelectorAll('.method-tab');
        function moveMethods(dir){
            var newIndex = methodsSlideIndex + dir;
            var canGoForward = newIndex >= 0 && dir === -1;
            var canGoBack = newIndex < methodItems.length && dir === 1;
            if(canGoBack || canGoForward){
                doMethodsMovement(newIndex);
            }
        }
        function doMethodsMovement(newIndex){
            methodsSlideIndex = newIndex;
            methodsScroller.style.transform = "translateX("+(-100 * newIndex)+"%)";
            document.querySelector('.method-tab.active').classList.remove('active');
            methodTabs[newIndex].classList.add('active');
        }

        function moveMethodsTo(e, index){
            e.preventDefault();
            doMethodsMovement(index);
        }
    </script>

<?php get_footer(); ?>