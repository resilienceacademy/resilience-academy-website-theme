<?php
wp_enqueue_style('research', get_template_directory_uri() . '/css/research.css');
get_header();

?>

<section id="banner">
    <div class="section-wrapper">
        <h2>
            <small>RESEARCH</small>
            Resilient cities can be achieved through research <span class="for-lg"><br/></span>
            and collaboration.
            <span class="text-italic">
                Want to get involved?
            </span>
        </h2>

        <div class="layout center-center">
            <a href="#" class="button">SHARE YOUR RESEARCH</a>
            <span class="for-lg" style="width: 50px"></span>
            <a href="<?php echo esc_url( __( '/repository', 'repository' ) ); ?>" class="button">VIEW OUR REPOSITORY</a>
        </div>
    </div>
</section>

<section id="infoItems">
    <div class="section-wrapper">
        <div class="info-item">
            <div class="image">
                <img src="https://resilienceacademy.ac.tz/wp-content/uploads/2019/06/MG_5389-Copy.png?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1351&q=80" alt="">
            </div>

            <div class="position-absolute pin-top pin-left">
                <div class="decorated-inset-box blue-bg">
                    <div>
                        <h3>Our Projects</h3>
                        <p>
                            Take a look at our local and international projects
                        </p>
                        <a href="#" class="button">
                            View Projects
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="info-item">
            <div class="image">
                <img src="https://resilienceacademy.ac.tz/wp-content/uploads/2019/06/newimg.jpg?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="">
            </div>

            <div class="position-absolute pin-top pin-left">
                <div class="decorated-inset-box green-bg">
                    <div>
                        <h3>
                            Call for <span class="for-lg"><br/></span>
                            Student's Thesis
                        </h3>
                        <p>
                            Submit or explore some of our existing work
                        </p>
                        <a href="#" class="button">
                            Submit Project
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="info-item">
            <div class="image">
                <img src="https://resilienceacademy.ac.tz/wp-content/uploads/2019/06/homapage.jpg?ixlib=rb-1.2.1&auto=format&fit=crop&w=1600&q=80" alt="">
            </div>

            <div class="position-absolute pin-top pin-left">
                <div class="decorated-inset-box yellow-bg">
                    <div>
                        <h3>Scholarships</h3>
                        <p>
                            Explore our network of opportunities
                        </p>
                        <a href="#" class="button">
                            Explore Opportunities
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
