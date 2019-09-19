
<?php
wp_enqueue_style('data', get_template_directory_uri() . '/css/data.css');
get_header();

?>

<section id="banner">
    <img src="https://images.unsplash.com/photo-1446776899648-aa78eefe8ed0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1352&q=80" alt="">
</section>

<section id="about">
    <div class="section-wrapper">
        <p>
            Resilience Academy's Climate Risk Database(CRD) is
            a digital geospatial data repository that supports
            research, education and disaster-risk management
            practices. It contains a rich archive of data sets
            that can be accessed publicly via the Resilience Academy
            Geonode hosted at the university of Turku Geonode.
        </p>
    </div>
</section>

<section id="data">
    <div class="section-wrapper">
        <h2>DATA</h2>

        <div class="layout justified">
            <div class="data-item">
                <div class="decorated-inset-box blue-bg">
                    <div>
                        <h3>Tools</h3>
                        <a href="<?php echo get_home_url(); ?>/tools" class="button">
                            VIEW
                        </a>
                    </div>
                </div>
            </div>
            <div class="data-item">
                <div class="decorated-inset-box green-bg">
                    <div>
                        <h3>Our Geonode</h3>
                        <a href="https://geonode.resilienceacademy.ac.tz" class="button">
                            VIEW
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part( 'includes/contact-us' ); ?>
<?php get_footer(); ?>


