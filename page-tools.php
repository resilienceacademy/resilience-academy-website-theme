
<?php
wp_enqueue_style('tools', get_template_directory_uri() . '/css/tools.css');
get_header();

?>

<section id="tools">
    <div class="section-wrapper">
        <h2>
            Show me more <a href="#" class="blue-text">tools</a>
        </h2>

        <div class="tool-item">
            <div class="layout">
                <div class="for-lg tool-info blue-bg">
                    <div>
                        <strong>FOCUS</strong>
                        MAP MAKING
                    </div>
                    <div>
                        <strong>TEXT</strong>

                    </div>
                    <div>
                        <strong>TEXT</strong>

                    </div>
                </div>
                <div>
                    <div class="image flex">
                        <img src="https://images.unsplash.com/photo-1551901651-05e54fa40d93?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="">
                    </div>
                    <div class="for-mob tool-info">
                        <div class="blue-bg">
                            <strong>FOCUS</strong>
                            MAP MAKING
                        </div>
                    </div>
                    <div class="tool-details">
                        <h3>GIS/Map Making</h3>
                        <p>
                            Under map making, Quantum Geographic Information System
                            is the tool which is an open source tools with large community
                            plugins and with a lot of integration of other tools.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="tool-item">
            <div class="layout">
                <div class="for-lg tool-info yellowish-bg">
                    <div>
                        <strong>FOCUS</strong>
                        DRONES
                    </div>
                    <div>
                        <strong>TEXT</strong>

                    </div>
                    <div>
                        <strong>TEXT</strong>

                    </div>
                </div>
                <div>
                    <div class="image flex">
                        <img src="https://images.unsplash.com/photo-1521405924368-64c5b84bec60?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1267&q=80" alt="">
                    </div>
                    <div class="for-mob tool-info">
                        <div class="yellowish-bg">
                            <strong>FOCUS</strong>
                            DRONES
                        </div>
                    </div>
                    <div class="tool-details">
                        <h3>Unmanned Vehicles - Drones</h3>
                        <p>
                            is the unmanned aerial vehicle innovation which capture very high
                            resolution and updated imageries with low cost Drone technology
                            can be applied to many applications.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="data">
    <div class="section-wrapper">
        <h2>DATA</h2>
        <div class="data-item layout">
            <div class="image">
                <img src="https://images.unsplash.com/photo-1546790971-8888748e8054?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="">
            </div>
            <div class="flex decorated-inset-box green-bg">
                <div>
                    <h3>Our Geonode</h3>
                    <a href="https://geonode.resilienceacademy.ac.tz" class="button">
                        VIEW
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part( 'includes/contact-us' ); ?>
<?php get_footer(); ?>


