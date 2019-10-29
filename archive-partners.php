<?php
wp_enqueue_style('partners', get_template_directory_uri() . '/css/partners.css');
get_header();

?>

    <section id="banner" class="yellow-bg">
        <div class="blue-bg">
            <div class="section-wrapper">
                <h2>
                    Resilience comes from building strong partnership.
                </h2>
            </div>
        </div>
    </section>

    <section id="featured">
        <div class="section-wrapper">
            <div class="layout wrap">
                <?php
                $args = array(
                    'post_type' => 'partners',
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

    <section id="methods" class="yellow-bg">
        <div class="section-wrapper position-relative">
            <div class="overflow-hidden" style="background: #d2d2d2;">
                <div id="methodsScroller" class="layout center">
                    <?php
                    $featured = [
                        [
                            "bg" => "https://images.unsplash.com/photo-1512917774080-9991f1c4c750?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
                            "image" => "https://upload.wikimedia.org/wikipedia/en/thumb/a/ab/University_of_Turku.svg/1200px-University_of_Turku.svg.png",
                            "text" => "A Multidisciplinary, International, Research, Uninversity",
                            "link" => "https://www.utu.fi/en"
                        ],
                    ];

                    for ($i=0; $i < count($featured); $i++) {
                        $item = $featured[$i];
                        echo '
                            <div class="method-item" style="background-image: url('.$item['bg'].')">
                                <div class="image">
                                    <img src="'.$item['image'].'" alt="">
                                </div>
                                <div class="text layout vertical center-center">
                                    <h3>
                                        '.$item['text'].'
                                    </h3>
                                    <a class="button" href="'.$item['link'].'">
                                        LEARN MORE
                                    </a>
                                </div>
                            </div>
                        ';
                    }
                    ?>
                </div>
            </div>

            <div id="methodsMover" class="position-absolute pin-all pointer-events-none layout center justified">
                <button onclick="moveMethods(-1)" class="action-button pointer-events-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                </button>

                <button onclick="moveMethods(1)" class="action-button pointer-events-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </button>
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
                                <h3>Institutions</h3>
                                <p>Meet our members</p>
                                <a href="<?php echo get_home_url(); ?>/institutions" class="button">
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="decorated-inset-box yellow-bg">
                            <div>
                                <h3>Team</h3>
                                <p>Get to know us</p>
                                <a href="<?php echo get_home_url(); ?>/team" class="button">
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