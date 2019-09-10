
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tanzania Resilience Academy</title>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#003a75">
    <meta name="apple-mobile-web-app-status-bar-style" content="#003a75">
    <meta name="theme-color" content="#003a75">
    <meta name="apple-mobile-web-app-status-bar-style" content="#003a75">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="Walter Kimaro">


    <link rel="icon" href="<?php echo get_bloginfo('template_directory'); ?>/logo.png">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/flexboxgrid.min.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/flex.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/main.css">

    <link rel='stylesheet' href='<?php echo get_bloginfo('template_directory'); ?>/css/home.css'></head>
<body class="show-na">
<header class="layout vertical">
    <div class="flex">
        <div class="section-wrapper">
            <nav>
                <ul class="layout start justified">
                    <li>
                        <a href="#" class="layout center">Home</a>
                        <a href="#" class="layout center">Contact</a>
                    </li>
                    <li>
                        <a href="#" class="layout inline center-center">About</a>
                        <ul>
                            <li><a href="#">Our Focus</a></li>
                            <li><a href="#">Our Methods</a></li>
                            <li><a href="#">Our Community</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="layout inline center-center">Courses</a>
                        <ul>
                            <li><a href="#">Resources</a></li>
                            <li><a href="#">Online Courses</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="layout inline center-center">Data</a>
                        <ul>
                            <li><a href="#">Geonode</a></li>
                            <li><a href="#">Tools</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="layout inline center-center">Research</a>
                        <ul>
                            <li><a href="#">Share your work</a></li>
                            <li><a href="#">Repository</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="layout inline center-center">News</a>
                        <ul>
                            <li><a href="#">Our Blog</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="#">Social Media</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <div id="logoAndMenuTrigger">
        <div class="layout center justified section-wrapper">
            <a id="logo" href="<?php echo get_bloginfo('template_directory'); ?>/index.php" class="layout center">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/logo.png" alt="">
            </a>

            <button onclick="toggleMenu()" id="menuOpener" class="layout center-center">
                <span>MENU</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </button>

            <button onclick="toggleMenu()" id="menuCloser" class="layout center-center">
                <span>CLOSE</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </button>
        </div>
    </div>
</header>
<main>
    <div style="position: relative;">
        <div id="banner">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/banner.jpg" alt="">
            <div class="text layout vertical center-center">
                <h2>
                    Urban Resilience is
                    <span id="bannerChangingText">
						taught
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
                <a href="#" class="button text-upper">
                    Learn More
                </a>
            </div>
        </div>
    </section>

    <section id="courses" class="cta-section">
        <div class="text layout vertical center-center text-center">
            <h3>Resilient solutions begin with education</h3>
            <a href="#" class="button text-upper">
                View Our Courses
            </a>
        </div>
    </section>

    <section id="projects">
        <div class="section-wrapper position-relative overflow-hidden">
            <div id="projectsScroller" class="layout center">
                <div class="project-item">
                    <div class="layout start justified">
                        <div class="text">
                            <h3 class="blue-text">Data Visualization Challenge</h3>
                            <p>
                                The Resilience Academy invites students to participate in a Data Visualization Challenge using data collected through the programme.<br>
                                More information on the challenge can be found on the Research page.
                            </p>

                            <a href="#" class="button text-upper">
                                More Information
                            </a>
                        </div>

                        <div class="image">
                            <img src="https://staging.resilienceacademy.ac.tz/wp-content/uploads/2019/08/Dat-Visualisation-Challenge-2019_2.jpg" alt="">
                        </div>
                    </div>
                </div>

                <div class="project-item layout start justified">
                    <div class="text">
                        <h3 class="blue-text">
                            Community Mapping for Resilience
                        </h3>
                        <p>
                            Ramani Huria is a community-based mapping project that began in Dar es Salaam, Tanzania, training university students and citizens to create highly accurate maps of the most flood-prone areas of their city.<br>
                            Lessons learned and methods used have been compiled into a ‘cookbook’ for risk mapping – now available online.
                        </p>

                        <a href="#" class="button text-upper">
                            Download The Handbook
                        </a>
                    </div>

                    <div class="image">
                        <img src="https://staging.resilienceacademy.ac.tz/wp-content/uploads/2019/08/Dat-Visualisation-Challenge-2019_2.jpg" alt="">
                    </div>
                </div>
            </div>

            <div id="projectsMover" class="position-absolute pin-all pointer-events-none layout center justified">
                <button class="action-button pointer-events-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                </button>

                <button class="action-button pointer-events-auto">
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
                    Show me <a href="#" class="blue-text">everything</a>
                </h2>
            </div>

            <div class="layout">
                <div class="news-item">
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


                <div class="news-item">
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


                <div class="news-item">
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

    <section id="events">
        <div class="section-wrapper">
            <div class="section-title">
                <small>Our Events</small>
                <h2>
                    Show me the <a href="#">calendar</a>
                </h2>
            </div>

            <div class="layout wrap justified">
                <div class="event-item">
                    <div class="layout vertical">
                        <div class="image">
                            <img src="https://staging.resilienceacademy.ac.tz/wp-content/uploads/2019/08/official-launch-of-the-elia-biennial-1-Copy.png" alt="">

                            <div class="event-date position-absolute pin-top pin-left">
                                <span>OCT</span>
                                <span>02</span>
                            </div>
                        </div>

                        <div class="text flex layout vertical">
                            <h3>URTZ 2019 Conference</h3>
                            <p>
                                2 - 4 October 9 AM - 4 PM, National Museaum
                            </p>
                        </div>
                    </div>
                </div>

                <div class="event-item">
                    <div class="layout vertical">
                        <div class="image">
                            <img src="https://staging.resilienceacademy.ac.tz/wp-content/uploads/2019/06/img-20180915-wa0139_44116338715_o.jpg" alt="">

                            <div class="event-date position-absolute pin-top pin-left">
                                <span>AUG</span>
                                <span>05</span>
                            </div>
                        </div>

                        <div class="text flex layout vertical">
                            <h3>World Clean Up Day</h3>
                            <p>
                                5 August 10 AM - 4 PM, Coco Beach
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="climateRisk" class="cta-section">
        <div class="text layout vertical center-center text-center">
            <h3>
                Accurate climate risk data informs <span class="for-lg"><br/></span>
                resilient decision-making
            </h3>
            <a href="#" class="button text-upper">
                View Our Repository
            </a>
        </div>
    </section>

</main>

<footer>
    <div class="section-wrapper text-center text-bold layout center-center">
        All content licensed under CC-BY-SA, Tanzania Resilience Academy 2019
    </div>
</footer>

<script>
    var header = document.querySelector('header');
    var body = document.body;
    function toggleMenu(){
        if(!header.classList.contains('nav-open')){
            header.classList.add('nav-open');
            body.classList.add('locked');
        }
        else{
            header.classList.remove('nav-open');
            body.classList.remove('locked');
        }
    }
</script>
</body>
</html>