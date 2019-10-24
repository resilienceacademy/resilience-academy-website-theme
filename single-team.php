<?php
wp_enqueue_style('team-detail', get_template_directory_uri() . '/css/team_detail.css');
get_header();

?>

    <section id="banner">
        <div class="section-wrapper position-relative">
            <div id="userDetails">
                <img src="<?php if ( has_post_thumbnail() ) {
                    the_post_thumbnail_url();
                } ?>" alt="">

                <div class="text">
                    <h3><?php echo get_post_meta(get_the_ID(), 'name', true); ?></h3>
                    <h5><?php echo get_post_meta(get_the_ID(), 'title', true); ?></h5>
                    <ul class="team-member-links layout center">
                        <li>
                            <a class="layout center-center" href="<?php echo get_post_meta(get_the_ID(), 'linkedin-profile-url', true); ?>" title="Follow on Linked In" target="_blank">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                            </a>
                        </li>
                        <li id="twitterLink">
                            <a class="layout center-center" href="<?php echo get_post_meta(get_the_ID(), 'twitter-profile-url', true); ?>" title="Follow on Twitter" target="_blank">
                                <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Twitter icon</title><path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"/></svg>
                            </a>
                        </li>
                        <li>
                            <a class="layout center-center" href="<?php echo get_post_meta(get_the_ID(), 'facebook-profile-url', true); ?>" title="Follow on Facebook" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 480"><defs><clipPath clipPathUnits="userSpaceOnUse"><path d="M0 48 48 48 48 0 0 0 0 48Z"/></clipPath><clipPath clipPathUnits="userSpaceOnUse"><path d="M0 48 48 48 48 0 0 0 0 48Z"/></clipPath><clipPath clipPathUnits="userSpaceOnUse"><path d="M0 48 48 48 48 0 0 0 0 48Z"/></clipPath><clipPath clipPathUnits="userSpaceOnUse"><path d="M0 48 48 48 48 0 0 0 0 48Z"/></clipPath><clipPath clipPathUnits="userSpaceOnUse"/><clipPath clipPathUnits="userSpaceOnUse"/><clipPath clipPathUnits="userSpaceOnUse"><path d="M48 48 0 48 0 0 48 0 48 48Z"/></clipPath><clipPath clipPathUnits="userSpaceOnUse"><path d="M0 48 48 48 48 0 0 0 0 48Z"/></clipPath><clipPath clipPathUnits="userSpaceOnUse"/><clipPath clipPathUnits="userSpaceOnUse"/><clipPath clipPathUnits="userSpaceOnUse"><path d="M0 0 48 0 48 48 0 48 0 0Z"/></clipPath></defs><g transform="matrix(1.25 0 0 -1.25 0 480)"><path d="m218 32 0 146 49.5 0 7.4 56.9-56.9 0 0 36.3c0 16.5 4.6 27.7 28.5 27.7l30.5 0 0 50.9C271.6 350.5 253.6 352 232.5 352c-43.9 0-74-26.5-74-75.2l0-42-49.7 0 0-56.9 49.7 0 0-146 59.4 0z"/></g></svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <p>
                <?php echo the_content(); ?>
            </p>

        </div>
    </section>

    <section id="aboutResilience">
        <div class="section-wrapper">
            <div>
                <h2>Our Community</h2>

                <div id="moreAbout" class="layout center-justified wrap">
                    <div>
                        <div class="decorated-inset-box blue-bg">
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

<?php get_footer(); ?>