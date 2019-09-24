
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



<section id="banner">
    <div class="image">
        <img src="https://images.pexels.com/photos/773471/pexels-photo-773471.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
    </div>
</section>

<section id="content">
    <div class="section-wrapper layout justified wrap">
        <div id="extraInfo" class="for-lg">
            <ul id="blogMeta">
                <li>
                    <small>PERSPECTIVE</small>
                    <strong>Points of View</strong>
                </li>

                <li>
                    <small>AUTHOR</small>
                    <strong>Theresia Mmasi</strong>
                </li>

                <li>
                    <small>DATE</small>
                    <strong>January 2019</strong>
                </li>
            </ul>

            <ul id="shareOptions">
                <li class="layout center-center">
                    <a class="layout center-center" href="https://twitter.com/Tanzania_RA" title="Follow on Twitter" target="_blank">
                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Twitter icon</title><path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"/></svg>
                    </a>
                </li>

                <li class="layout center-center">
                    <a class="layout center-center" href="https://www.facebook.com/ututanzania/" title="Follow on Facebook" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 480"><defs><clipPath clipPathUnits="userSpaceOnUse"><path d="M0 48 48 48 48 0 0 0 0 48Z"/></clipPath><clipPath clipPathUnits="userSpaceOnUse"><path d="M0 48 48 48 48 0 0 0 0 48Z"/></clipPath><clipPath clipPathUnits="userSpaceOnUse"><path d="M0 48 48 48 48 0 0 0 0 48Z"/></clipPath><clipPath clipPathUnits="userSpaceOnUse"><path d="M0 48 48 48 48 0 0 0 0 48Z"/></clipPath><clipPath clipPathUnits="userSpaceOnUse"/><clipPath clipPathUnits="userSpaceOnUse"/><clipPath clipPathUnits="userSpaceOnUse"><path d="M48 48 0 48 0 0 48 0 48 48Z"/></clipPath><clipPath clipPathUnits="userSpaceOnUse"><path d="M0 48 48 48 48 0 0 0 0 48Z"/></clipPath><clipPath clipPathUnits="userSpaceOnUse"/><clipPath clipPathUnits="userSpaceOnUse"/><clipPath clipPathUnits="userSpaceOnUse"><path d="M0 0 48 0 48 48 0 48 0 0Z"/></clipPath></defs><g transform="matrix(1.25 0 0 -1.25 0 480)"><path d="m218 32 0 146 49.5 0 7.4 56.9-56.9 0 0 36.3c0 16.5 4.6 27.7 28.5 27.7l30.5 0 0 50.9C271.6 350.5 253.6 352 232.5 352c-43.9 0-74-26.5-74-75.2l0-42-49.7 0 0-56.9 49.7 0 0-146 59.4 0z"/></g></svg>
                    </a>
                </li>
            </ul>
        </div>

        <div id="blogBody" class="flex">
            <h2>The Rising Tide</h2>
            <small class="for-mob">
                By <strong>Theresia Mmasi</strong>, <small>January 2019</small>
            </small>
            <h3>Projected to be a megacity by 2025, Dar es Salaam is facing some harsh realities with the changing climate and the country's industrial growth.</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus
                ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer
            </p>
            <p>
                Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
                Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus
                in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.
                Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget
                dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper
                libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar,
                hendrerit id, lorem. Maecena  s nec odio et ante tincidunt tempus. Donec vitae sapien ut libero
                venenatis faucibus.
            </p>
            <p>
                Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris
                sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue
                velit cursus nunc.tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.  Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.  Aenean imperdiet. Etiam ultricies nisi vel augu.
            </p>
            <p>
                Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
                Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus
                in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.
                Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget
                dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper
                libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar,
                hendrerit id, lorem. Maecena  s nec odio et ante tincidunt tempus. Donec vitae sapien ut libero
                venenatis faucibus.
            </p>
        </div>
    </div>

    <ul id="shareOptions" class="for-mob layout center-center">
        <span>SHARE:</span>
        <li class="layout center-center">
            <a class="layout center-center" href="https://twitter.com/Tanzania_RA" title="Follow on Twitter" target="_blank">
                <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Twitter icon</title><path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"/></svg>
            </a>
        </li>

        <li class="layout center-center">
            <a class="layout center-center" href="https://www.facebook.com/ututanzania/" title="Follow on Facebook" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 480"><defs><clipPath clipPathUnits="userSpaceOnUse"><path d="M0 48 48 48 48 0 0 0 0 48Z"/></clipPath><clipPath clipPathUnits="userSpaceOnUse"><path d="M0 48 48 48 48 0 0 0 0 48Z"/></clipPath><clipPath clipPathUnits="userSpaceOnUse"><path d="M0 48 48 48 48 0 0 0 0 48Z"/></clipPath><clipPath clipPathUnits="userSpaceOnUse"><path d="M0 48 48 48 48 0 0 0 0 48Z"/></clipPath><clipPath clipPathUnits="userSpaceOnUse"/><clipPath clipPathUnits="userSpaceOnUse"/><clipPath clipPathUnits="userSpaceOnUse"><path d="M48 48 0 48 0 0 48 0 48 48Z"/></clipPath><clipPath clipPathUnits="userSpaceOnUse"><path d="M0 48 48 48 48 0 0 0 0 48Z"/></clipPath><clipPath clipPathUnits="userSpaceOnUse"/><clipPath clipPathUnits="userSpaceOnUse"/><clipPath clipPathUnits="userSpaceOnUse"><path d="M0 0 48 0 48 48 0 48 0 0Z"/></clipPath></defs><g transform="matrix(1.25 0 0 -1.25 0 480)"><path d="m218 32 0 146 49.5 0 7.4 56.9-56.9 0 0 36.3c0 16.5 4.6 27.7 28.5 27.7l30.5 0 0 50.9C271.6 350.5 253.6 352 232.5 352c-43.9 0-74-26.5-74-75.2l0-42-49.7 0 0-56.9 49.7 0 0-146 59.4 0z"/></g></svg>
            </a>
        </li>
    </ul>
</section>

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