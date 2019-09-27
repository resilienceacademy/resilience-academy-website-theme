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
