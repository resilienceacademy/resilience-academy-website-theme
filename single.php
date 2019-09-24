
<?php
wp_enqueue_style('blog_detail', get_template_directory_uri() . '/css/blog_detail.css');
get_header();
?>
<!--<style>-->
<!--    .underconstruction {-->
<!--        display: flex;-->
<!--        justify-content: center;-->
<!--        align-items: center;-->
<!--        margin: 10% auto 20% auto;-->
<!--    }-->
<!--    .underconstruction h1 {-->
<!--        font-size: 4em;-->
<!--        padding: 20px;-->
<!--        text-align: center;-->
<!--        letter-spacing: 2px;-->
<!--    }-->
<!---->
<!--    .underconstruction p {-->
<!--        text-align: center;-->
<!--        line-height: 2;-->
<!--    }-->
<!--</style>-->
<!---->
<!--<div class="underconstruction">-->
<!--    <div>-->
<!--        <h1>Under Construction</h1>-->
<!--        <p>This page is underconstruction, our team of web developers are working hard to bring this page up as soon as possible  </p>-->
<!--        <p>Please continue to visit other pages on our site!</p>-->
<!--    </div>-->
<!--</div>-->

<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();

    get_template_part( 'partials/content-blog-detail', get_post_format());

endwhile; endif;
?>

<section id="otherBlogs">
    <h2>Show me <a href="#" class="blue-text">more.</a></h2>
    <div class="section-wrapper">
        <div id="blogItemList" class="layout">
            <div class="blog-item">
                <div class="layout vertical">
                    <div class="image">
                        <img src="https://staging.resilienceacademy.ac.tz/wp-content/uploads/2019/06/Handbook-for-Community-Urban-Risk-Mapping-2019_2-400x250.jpg" alt="">
                    </div>

                    <div class="text flex layout vertical">
                        <small>PRESS</small>

                        <h3>A Handbook for Community Urban Risk Mapping</h3>

                        <p>
                            He activities undertaken by Ramani Huria over the last four years stood as a model...
                        </p>

                        <span class="blue-text text-upper text-bold">June 2019</span>
                    </div>
                </div>
            </div>

            <div class="blog-item">
                <div class="layout vertical">
                    <div class="image">
                        <img src="https://staging.resilienceacademy.ac.tz/wp-content/uploads/2019/06/ourcomunity-local-400x250.jpg" alt="">
                    </div>

                    <div class="text flex layout vertical">
                        <small>PRESS</small>

                        <h3>Welcome to the Resilience Academy</h3>

                        <p>
                            ⅔ of African residents are in slum areas which are not planned. Since the cities are growi...
                        </p>

                        <span class="blue-text text-upper text-bold">June 2019</span>
                    </div>
                </div>
            </div>

            <div class="blog-item">
                <div class="layout vertical">
                    <div class="image">
                        <img src="https://staging.resilienceacademy.ac.tz/wp-content/uploads/2019/06/about-page-digital-opt-400x250.jpg" alt="">
                    </div>

                    <div class="text flex layout vertical">
                        <small>PRESS</small>

                        <h3>Community Flood Response Mapping and Damage Assessment</h3>

                        <p>
                            As a means of emergency response after a flooding event or inland inundation, flo...
                        </p>

                        <span class="blue-text text-upper text-bold">June 2019</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>