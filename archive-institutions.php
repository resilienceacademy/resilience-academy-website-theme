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
                    'order' => 'ASC'
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
                    <h3>
                        <svg fill="currentColor" viewBox="0 0 95.333 95.332"><path d="M30.512 43.939c-2.348-.676-4.696-1.019-6.98-1.019-3.527 0-6.47.806-8.752 1.793 2.2-8.054 7.485-21.951 18.013-23.516a2.501 2.501 0 002.04-1.799l2.301-8.23a2.5 2.5 0 00-2.068-3.15 17.477 17.477 0 00-2.354-.16c-12.637 0-25.152 13.19-30.433 32.076-3.1 11.08-4.009 27.738 3.627 38.223 4.273 5.867 10.507 9 18.529 9.313l.098.002c9.898 0 18.675-6.666 21.345-16.209a22.032 22.032 0 00-2.032-16.851c-2.875-5.105-7.61-8.826-13.334-10.473zM92.471 54.413c-2.875-5.106-7.61-8.827-13.334-10.474-2.348-.676-4.696-1.019-6.979-1.019a21.94 21.94 0 00-8.753 1.793c2.2-8.054 7.485-21.951 18.014-23.516a2.503 2.503 0 002.04-1.799l2.301-8.23a2.5 2.5 0 00-2.068-3.15 17.455 17.455 0 00-2.354-.16c-12.637 0-25.152 13.19-30.434 32.076-3.099 11.08-4.008 27.738 3.629 38.225 4.272 5.866 10.507 9 18.528 9.312l.099.002c9.897 0 18.675-6.666 21.345-16.209a22.045 22.045 0 00-2.034-16.851z"/></svg>
                        It is important that this program receives our government’s support to achieve its goals because this will be our government’s legacy.
                    </h3>
                    <p>&mdash;&emsp;Honorable Selemani Jafo, Minister of State in the President’s Office</p>
                </div>
                <div id="smallQuote">
                    <h3>
                        <svg fill="currentColor" viewBox="0 0 95.333 95.332"><path d="M30.512 43.939c-2.348-.676-4.696-1.019-6.98-1.019-3.527 0-6.47.806-8.752 1.793 2.2-8.054 7.485-21.951 18.013-23.516a2.501 2.501 0 002.04-1.799l2.301-8.23a2.5 2.5 0 00-2.068-3.15 17.477 17.477 0 00-2.354-.16c-12.637 0-25.152 13.19-30.433 32.076-3.1 11.08-4.009 27.738 3.627 38.223 4.273 5.867 10.507 9 18.529 9.313l.098.002c9.898 0 18.675-6.666 21.345-16.209a22.032 22.032 0 00-2.032-16.851c-2.875-5.105-7.61-8.826-13.334-10.473zM92.471 54.413c-2.875-5.106-7.61-8.827-13.334-10.474-2.348-.676-4.696-1.019-6.979-1.019a21.94 21.94 0 00-8.753 1.793c2.2-8.054 7.485-21.951 18.014-23.516a2.503 2.503 0 002.04-1.799l2.301-8.23a2.5 2.5 0 00-2.068-3.15 17.455 17.455 0 00-2.354-.16c-12.637 0-25.152 13.19-30.434 32.076-3.099 11.08-4.008 27.738 3.629 38.225 4.272 5.866 10.507 9 18.528 9.312l.099.002c9.897 0 18.675-6.666 21.345-16.209a22.045 22.045 0 00-2.034-16.851z"/></svg>
                        Innovation can begin when we start to reimagine how we build our cities and realizing that the strongest  solutions come from the communities and their residents.
                    </h3>
                    <p>&mdash;&emsp;Theresia Mmasi, world bank tanzania</p>
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