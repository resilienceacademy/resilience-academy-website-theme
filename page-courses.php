<?php
wp_enqueue_style('courses', get_template_directory_uri() . '/css/courses.css');
get_header();

?>


<section id="banner">
    <div class="section-wrapper position-relative">
        <div class="overflow-hidden" style="background: #dbd10f;">
            <h1 class="section-subtitle text-center">OUR COURSES</h1>
            <div id="courseTabList">
                <div class="layout center">
                    <a href="#" onclick="movebannerTo(event, 0)" class="active course-tab flex text-center">THEME 1</a>
                    <a href="#" onclick="movebannerTo(event, 1)" class="course-tab flex text-center">THEME 2</a>
                    <a href="#" onclick="movebannerTo(event, 2)" class="course-tab flex text-center">THEME 3</a>
                    <a href="#" onclick="movebannerTo(event, 3)" class="course-tab flex text-center">THEME 4</a>
                </div>
            </div>
            <div id="bannerScroller" class="layout center">
                <div class="banner-item">
                    <h2 class="layout start">
                        <strong>1</strong>
                        Open Data<br>
                        for Resilience
                    </h2>

                    <div class="module-items layout wrap">
                        <a href="#" class="module-item">
                            <div>
                                <h3>Module 1</h3>
                                <p>
                                    Geonode installation, tailoring and maintainance
                                </p>
                            </div>
                        </a>
                        <a href="#" class="module-item">
                            <div>
                                <h3>Module 2</h3>
                                <p>
                                    Geospatial data quality, data management and sharing via Genocode
                                </p>
                            </div>
                        </a>
                        <a href="#" class="module-item">
                            <div>
                                <h3>Module 3</h3>
                                <p>
                                    Data visualization for resilience
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="banner-item">
                    <h2 class="layout start">
                        <strong>2</strong>
                        Quick Study<br>
                        for Data Viz
                    </h2>

                    <div class="module-items layout wrap">
                        <a href="#" class="module-item">
                            <div>
                                <h3>Module 1</h3>
                                <p>
                                    Geonode installation, tailoring and maintainance
                                </p>
                            </div>
                        </a>
                        <a href="#" class="module-item">
                            <div>
                                <h3>Module 2</h3>
                                <p>
                                    Geospatial data quality, data management and sharing via Genocode
                                </p>
                            </div>
                        </a>
                        <a href="#" class="module-item">
                            <div>
                                <h3>Module 3</h3>
                                <p>
                                    Data visualization for resilience
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="banner-item">
                    <h2 class="layout start">
                        <strong>3</strong>
                        Resilience Data<br>
                        for Open
                    </h2>

                    <div class="module-items layout wrap">
                        <a href="#" class="module-item">
                            <div>
                                <h3>Module 1</h3>
                                <p>
                                    Geonode installation, tailoring and maintainance
                                </p>
                            </div>
                        </a>
                        <a href="#" class="module-item">
                            <div>
                                <h3>Module 2</h3>
                                <p>
                                    Geospatial data quality, data management and sharing via Genocode
                                </p>
                            </div>
                        </a>
                        <a href="#" class="module-item">
                            <div>
                                <h3>Module 3</h3>
                                <p>
                                    Data visualization for resilience
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="banner-item">
                    <h2 class="layout start">
                        <strong>4</strong>
                        Data Viz<br>
                        for Study
                    </h2>

                    <div class="module-items layout wrap">
                        <a href="#" class="module-item">
                            <div>
                                <h3>Module 1</h3>
                                <p>
                                    Geonode installation, tailoring and maintainance
                                </p>
                            </div>
                        </a>
                        <a href="#" class="module-item">
                            <div>
                                <h3>Module 2</h3>
                                <p>
                                    Geospatial data quality, data management and sharing via Genocode
                                </p>
                            </div>
                        </a>
                        <a href="#" class="module-item">
                            <div>
                                <h3>Module 3</h3>
                                <p>
                                    Data visualization for resilience
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div id="bannerMover" class="position-absolute pin-all pointer-events-none layout center justified">
            <button onclick="movebanner(-1)" class="action-button pointer-events-auto">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
            </button>

            <button onclick="movebanner(1)" class="action-button pointer-events-auto">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </button>
        </div>
    </div>
</section>

<section class="course-section">
    <div class="section-wrapper">
        <div class="course-section-title">
            <div class="course-theme">
                <h3>
                    <strong>THEME 1</strong>
                    <span>Open Data Resilience</span>
                </h3>
            </div>

            <div class="course-module">
                <h3 class="layout">
                    <strong>MODULE 1</strong>
                    <span>
                        Geonode Installation,
                        Tailoring And Maintainance
                    </span>
                </h3>
            </div>
        </div>

        <div class="course-section-info">
            <div class="layout">
                <div class="course-section-details">
                    <div>
                        <strong>COURSE DATE</strong>
                        Oct 17, 2019
                    </div>
                    <div>
                        <strong>LECTURER</strong>
                        Dr. Jamison Penques
                    </div>
                    <div>
                        <strong>TIME</strong>
                        08:00 AM - 12:30 PM
                    </div>
                </div>
                <div class="image flex">
                    <img src="https://images.unsplash.com/photo-1504807959081-3dafd3871909?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1355&q=80" alt="">
                </div>
            </div>
        </div>

        <div class="course-section-about">
            <h3>ABOUT</h3>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim quibusdam est velit sed asperiores iste exercitationem deleniti quae tempore doloribus omnis mollitia corrupti, nisi cupiditate pariatur, adipisci esse, culpa iusto.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim quibusdam est velit sed asperiores iste exercitationem deleniti
            </p>
            <p>
                Quae tempore doloribus omnis mollitia corrupti, nisi cupiditate pariatur, adipisci esse, culpa iusto.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim quibusdam est velit sed asperiores iste exercitationem deleniti quae tempore doloribus omnis mollitia corrupti, nisi cupiditate pariatur, adipisci esse, culpa iusto.
            </p>
        </div>
    </div>
</section>

<section class="course-section coloured-bg">
    <div class="section-wrapper">
        <div class="course-section-title">
            <div class="course-theme">
                <h3>
                    <strong>THEME 1</strong>
                    <span>Open Data Resilience</span>
                </h3>
            </div>

            <div class="course-module">
                <h3 class="layout">
                    <strong>MODULE 1</strong>
                    <span>
                        Geospatial Data Quality,
                        Data and Management And
                        Sharing Via Genocode
                    </span>
                </h3>
            </div>
        </div>

        <div class="course-section-info">
            <div class="layout">
                <div class="course-section-details">
                    <div>
                        <strong>COURSE DATE</strong>
                        Oct 17, 2019
                    </div>
                    <div>
                        <strong>LECTURER</strong>
                        Dr. Jamison Penques
                    </div>
                    <div>
                        <strong>TIME</strong>
                        08:00 AM - 12:30 PM
                    </div>
                </div>
                <div class="image flex">
                    <img src="https://images.unsplash.com/photo-1474628687204-f02100043011?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="">
                </div>
            </div>
        </div>

        <div class="course-section-about">
            <h3>ABOUT</h3>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim quibusdam est velit sed asperiores iste exercitationem deleniti quae tempore doloribus omnis mollitia corrupti, nisi cupiditate pariatur, adipisci esse, culpa iusto.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim quibusdam est velit sed asperiores iste exercitationem deleniti
            </p>
            <p>
                Quae tempore doloribus omnis mollitia corrupti, nisi cupiditate pariatur, adipisci esse, culpa iusto.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim quibusdam est velit sed asperiores iste exercitationem deleniti quae tempore doloribus omnis mollitia corrupti, nisi cupiditate pariatur, adipisci esse, culpa iusto.
            </p>
        </div>
    </div>
</section>

<section class="course-section">
    <div class="section-wrapper">
        <div class="course-section-title">
            <div class="course-theme">
                <h3>
                    <strong>THEME 1</strong>
                    <span>Open Data Resilience</span>
                </h3>
            </div>

            <div class="course-module">
                <h3 class="layout">
                    <strong>MODULE 1</strong>
                    <span>
                        Data Visualization For Resilience
                    </span>
                </h3>
            </div>
        </div>

        <div class="course-section-info">
            <div class="layout">
                <div class="course-section-details">
                    <div>
                        <strong>COURSE DATE</strong>
                        Oct 17, 2019
                    </div>
                    <div>
                        <strong>LECTURER</strong>
                        Dr. Jamison Penques
                    </div>
                    <div>
                        <strong>TIME</strong>
                        08:00 AM - 12:30 PM
                    </div>
                </div>
                <div class="image flex">
                    <img src="https://images.unsplash.com/photo-1478095062770-b2e8f2af3ed1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="">
                </div>
            </div>
        </div>

        <div class="course-section-about">
            <h3>ABOUT</h3>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim quibusdam est velit sed asperiores iste exercitationem deleniti quae tempore doloribus omnis mollitia corrupti, nisi cupiditate pariatur, adipisci esse, culpa iusto.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim quibusdam est velit sed asperiores iste exercitationem deleniti
            </p>
            <p>
                Quae tempore doloribus omnis mollitia corrupti, nisi cupiditate pariatur, adipisci esse, culpa iusto.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim quibusdam est velit sed asperiores iste exercitationem deleniti quae tempore doloribus omnis mollitia corrupti, nisi cupiditate pariatur, adipisci esse, culpa iusto.
            </p>
        </div>
    </div>
</section>

<section id="moreCourses">
    <div class="section-wrapper">
        <h2>Show me <a href="#" class="blue-text">more</a></h2>

        <div class="layout">
            <a href="#" class="more-course-item">
                <div class="blue-bg layout start">
                    <strong>2</strong>
                    <span class="flex">
                        Flood Resilience In A Changing Climate
                    </span>
                </div>
            </a>
            <a href="#" class="more-course-item">
                <div class="green-bg layout start">
                    <strong>3</strong>
                    <span class="flex">
                        Community Mapping for Improved Spatial Planning
                    </span>
                </div>
            </a>
            <a href="#" class="more-course-item">
                <div class="layout start">
                    <strong>4</strong>
                    <span class="flex">
                        Earth Observation for Resilience
                    </span>
                </div>
            </a>
        </div>
    </div>
</section>

<section id="contactUsSection">
    <div class="section-wrapper">
        <div class="layout start justified">
            <div id="contactUsForm">
                <h3>Have a question?</h3>
                <form action="">
                    <div class="form-group">
                        <label>Name</label>
                        <input placeholder="Name" type="email" name="your-email" value="" aria-required="true" aria-invalid="false" />
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input placeholder="Email Address" type="email" name="your-email" value="" aria-required="true" aria-invalid="false" />
                    </div>

                    <div class="form-group">
                        <label> Your Message</label>
                        <textarea placeholder="Your Message" name="your-message" cols="40" rows="5" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea>
                    </div>

                    <button type="submit" class="button text-upper">Send Message</button>
                </form>
            </div>

            <div id="connect">
                <h3>Connect</h3>
                <ul class="layout center justified">
                    <li class="layout center-center">
                        <a href="https://twitter.com/Tanzania_RA" title="Follow on Twitter" target="_blank">
                            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Twitter icon</title><path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"/></svg>
                        </a>
                    </li>
                    <li class="layout center-center">
                        <a href="#" title="Follow on Instagram" target="_blank">
                            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram icon</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                        </a>
                    </li>
                    <li class="layout center-center">
                        <a href="https://www.facebook.com/ututanzania/" title="Follow on Facebook" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 480"><defs><clipPath clipPathUnits="userSpaceOnUse"><path d="M0 48 48 48 48 0 0 0 0 48Z"/></clipPath><clipPath clipPathUnits="userSpaceOnUse"><path d="M0 48 48 48 48 0 0 0 0 48Z"/></clipPath><clipPath clipPathUnits="userSpaceOnUse"><path d="M0 48 48 48 48 0 0 0 0 48Z"/></clipPath><clipPath clipPathUnits="userSpaceOnUse"><path d="M0 48 48 48 48 0 0 0 0 48Z"/></clipPath><clipPath clipPathUnits="userSpaceOnUse"/><clipPath clipPathUnits="userSpaceOnUse"/><clipPath clipPathUnits="userSpaceOnUse"><path d="M48 48 0 48 0 0 48 0 48 48Z"/></clipPath><clipPath clipPathUnits="userSpaceOnUse"><path d="M0 48 48 48 48 0 0 0 0 48Z"/></clipPath><clipPath clipPathUnits="userSpaceOnUse"/><clipPath clipPathUnits="userSpaceOnUse"/><clipPath clipPathUnits="userSpaceOnUse"><path d="M0 0 48 0 48 48 0 48 0 0Z"/></clipPath></defs><g transform="matrix(1.25 0 0 -1.25 0 480)"><path d="m218 32 0 146 49.5 0 7.4 56.9-56.9 0 0 36.3c0 16.5 4.6 27.7 28.5 27.7l30.5 0 0 50.9C271.6 350.5 253.6 352 232.5 352c-43.9 0-74-26.5-74-75.2l0-42-49.7 0 0-56.9 49.7 0 0-146 59.4 0z"/></g></svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<script>
    var bannerScroller = document.querySelector("#bannerScroller");
    var bannerSlideIndex = 0;
    var bannerItems = document.querySelectorAll('.banner-item');
    var courseTabs = document.querySelectorAll('.course-tab');
    function movebanner(dir){
        var newIndex = bannerSlideIndex + dir;
        var canGoForward = newIndex >= 0 && dir === -1;
        var canGoBack = newIndex < bannerItems.length && dir === 1;

        if(canGoBack || canGoForward){
            doBannerMovement(newIndex);
        }
    }

    function doBannerMovement(newIndex){
        bannerSlideIndex = newIndex;
        bannerScroller.style.transform = "translateX("+(-100 * newIndex)+"%)";

        document.querySelector('.course-tab.active').classList.remove('active');
        courseTabs[newIndex].classList.add('active');
    }

    function movebannerTo(e, index){
        e.preventDefault();
        doBannerMovement(index);
    }
</script>

<?php get_footer(); ?>
