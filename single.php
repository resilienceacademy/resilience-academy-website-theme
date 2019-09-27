
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
<!---->
<?php
//if ( have_posts() ) : while ( have_posts() ) : the_post();
//
//    get_template_part( 'partials/content-blog-detail', get_post_format());
//
//endwhile; endif;
//?>
<!---->
<!--<section id="otherBlogs">-->
<!--    <h2>Show me <a href="#" class="blue-text">more.</a></h2>-->
<!--    <div class="section-wrapper">-->
<!--        <div id="blogItemList" class="layout">-->
<!--            <div class="blog-item">-->
<!--                <div class="layout vertical">-->
<!--                    <div class="image">-->
<!--                        <img src="https://staging.resilienceacademy.ac.tz/wp-content/uploads/2019/06/Handbook-for-Community-Urban-Risk-Mapping-2019_2-400x250.jpg" alt="">-->
<!--                    </div>-->
<!---->
<!--                    <div class="text flex layout vertical">-->
<!--                        <small>PRESS</small>-->
<!---->
<!--                        <h3>A Handbook for Community Urban Risk Mapping</h3>-->
<!---->
<!--                        <p>-->
<!--                            He activities undertaken by Ramani Huria over the last four years stood as a model...-->
<!--                        </p>-->
<!---->
<!--                        <span class="blue-text text-upper text-bold">June 2019</span>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="blog-item">-->
<!--                <div class="layout vertical">-->
<!--                    <div class="image">-->
<!--                        <img src="https://staging.resilienceacademy.ac.tz/wp-content/uploads/2019/06/ourcomunity-local-400x250.jpg" alt="">-->
<!--                    </div>-->
<!---->
<!--                    <div class="text flex layout vertical">-->
<!--                        <small>PRESS</small>-->
<!---->
<!--                        <h3>Welcome to the Resilience Academy</h3>-->
<!---->
<!--                        <p>-->
<!--                            ⅔ of African residents are in slum areas which are not planned. Since the cities are growi...-->
<!--                        </p>-->
<!---->
<!--                        <span class="blue-text text-upper text-bold">June 2019</span>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="blog-item">-->
<!--                <div class="layout vertical">-->
<!--                    <div class="image">-->
<!--                        <img src="https://staging.resilienceacademy.ac.tz/wp-content/uploads/2019/06/about-page-digital-opt-400x250.jpg" alt="">-->
<!--                    </div>-->
<!---->
<!--                    <div class="text flex layout vertical">-->
<!--                        <small>PRESS</small>-->
<!---->
<!--                        <h3>Community Flood Response Mapping and Damage Assessment</h3>-->
<!---->
<!--                        <p>-->
<!--                            As a means of emergency response after a flooding event or inland inundation, flo...-->
<!--                        </p>-->
<!---->
<!--                        <span class="blue-text text-upper text-bold">June 2019</span>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->


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

            <div id="clapArea" class="position-relative layout center-center">
                <button id="clapButton" onmousedown="incrementClapCount()" onmouseup="stopIncrementingClapCount()">
                    <svg fill="#676767" width="33" height="33" viewBox="0 0 29 29"><g fill-rule="evenodd"><path d="M13.74 1l.76 2.97.76-2.97zM18.63 2.22l-1.43-.47-.4 3.03zM11.79 1.75l-1.43.47 1.84 2.56zM24.47 14.3L21.45 9c-.29-.43-.69-.7-1.12-.78a1.16 1.16 0 0 0-.91.22c-.3.23-.48.52-.54.84l.05.07 2.85 5c1.95 3.56 1.32 6.97-1.85 10.14a8.46 8.46 0 0 1-.55.5 5.75 5.75 0 0 0 3.36-1.76c3.26-3.27 3.04-6.75 1.73-8.91M14.58 10.89c-.16-.83.1-1.57.7-2.15l-2.5-2.49c-.5-.5-1.38-.5-1.88 0-.18.18-.27.4-.33.63l4.01 4z"></path><path d="M17.81 10.04a1.37 1.37 0 0 0-.88-.6.81.81 0 0 0-.64.15c-.18.13-.71.55-.24 1.56l1.43 3.03a.54.54 0 1 1-.87.61L9.2 7.38a.99.99 0 1 0-1.4 1.4l4.4 4.4a.54.54 0 1 1-.76.76l-4.4-4.4L5.8 8.3a.99.99 0 0 0-1.4 0 .98.98 0 0 0 0 1.39l1.25 1.24 4.4 4.4a.54.54 0 0 1 0 .76.54.54 0 0 1-.76 0l-4.4-4.4a1 1 0 0 0-1.4 0 .98.98 0 0 0 0 1.4l1.86 1.85 2.76 2.77a.54.54 0 0 1-.76.76L4.58 15.7a.98.98 0 0 0-1.4 0 .99.99 0 0 0 0 1.4l5.33 5.32c3.37 3.37 6.64 4.98 10.49 1.12 2.74-2.74 3.27-5.54 1.62-8.56l-2.8-4.94z"></path></g></svg>
                </button>

                <div id="clapCount" class="layout center-center">
                    +0
                </div>
            </div>
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

    <div id="shareOptions" class="for-mob layout center justified">
        <div class="layout center">
            <div id="clapArea" class="position-relative layout center-center">
                <button id="clapButton" ontouchstart="incrementClapCount(true)" ontouchend="stopIncrementingClapCount()">
                    <svg fill="#676767" width="33" height="33" viewBox="0 0 29 29"><g fill-rule="evenodd"><path d="M13.74 1l.76 2.97.76-2.97zM18.63 2.22l-1.43-.47-.4 3.03zM11.79 1.75l-1.43.47 1.84 2.56zM24.47 14.3L21.45 9c-.29-.43-.69-.7-1.12-.78a1.16 1.16 0 0 0-.91.22c-.3.23-.48.52-.54.84l.05.07 2.85 5c1.95 3.56 1.32 6.97-1.85 10.14a8.46 8.46 0 0 1-.55.5 5.75 5.75 0 0 0 3.36-1.76c3.26-3.27 3.04-6.75 1.73-8.91M14.58 10.89c-.16-.83.1-1.57.7-2.15l-2.5-2.49c-.5-.5-1.38-.5-1.88 0-.18.18-.27.4-.33.63l4.01 4z"></path><path d="M17.81 10.04a1.37 1.37 0 0 0-.88-.6.81.81 0 0 0-.64.15c-.18.13-.71.55-.24 1.56l1.43 3.03a.54.54 0 1 1-.87.61L9.2 7.38a.99.99 0 1 0-1.4 1.4l4.4 4.4a.54.54 0 1 1-.76.76l-4.4-4.4L5.8 8.3a.99.99 0 0 0-1.4 0 .98.98 0 0 0 0 1.39l1.25 1.24 4.4 4.4a.54.54 0 0 1 0 .76.54.54 0 0 1-.76 0l-4.4-4.4a1 1 0 0 0-1.4 0 .98.98 0 0 0 0 1.4l1.86 1.85 2.76 2.77a.54.54 0 0 1-.76.76L4.58 15.7a.98.98 0 0 0-1.4 0 .99.99 0 0 0 0 1.4l5.33 5.32c3.37 3.37 6.64 4.98 10.49 1.12 2.74-2.74 3.27-5.54 1.62-8.56l-2.8-4.94z"></path></g></svg>
                </button>

                <div id="clapCount" class="clapCountMob layout center-center">
                    +0
                </div>
            </div>
        </div>
        <ul class="layout center">
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
    </div>
</section>

<section id="otherBlogs">
    <h2>Show me <a href="#" class="blue-text">more.</a></h2>
    <div class="section-wrapper">
        <div class="overflow-hidden">
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

        <div id="blogsMover" class="for-lg position-absolute pin-all pointer-events-none layout center justified">
            <button onclick="moveBlogs(-1)" class="action-button pointer-events-auto">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
            </button>

            <button onclick="moveBlogs(1)" class="action-button pointer-events-auto">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </button>
        </div>
    </div>
</section>

<section id="comments">
    <div class="section-wrapper">
        <h3>Comments</h3>

        <form id="newComment" method="POST" onsubmit="postComment(event)">
            <div class="layout">
                <div id="dpWrapper">
                    <div class="dp">
                        <img class="position-absolute pin-all" src="img/dp.png" alt="">
                    </div>
                </div>
                <textarea required class="flex" name="comment" cols="30" rows="4"
                          placeholder="Be the first to comment on this post"></textarea>
            </div>

            <div style="border-top: 1px solid #eee; padding: 0.6em">
                <button type="submit" class="button">
                    SUBMIT COMMENT
                </button>
            </div>
        </form>

        <div id="commentList">
            <div class="comment-item">
                <div class="layout center">
                    <div class="dp">
                        <img class="position-absolute pin-all" src="https://upload.wikimedia.org/wikipedia/commons/7/7e/Boys-profile-pics-806.jpg" alt="">
                    </div>

                    <div class="text">
                        <strong>Julius Masika</strong>
                        The well established fact after years of trial and error is simply that, "No one will commit to this". It's just too expensive.
                    </div>
                </div>
            </div>

            <div class="comment-item">
                <div class="layout center">
                    <div class="dp">
                        <img class="position-absolute pin-all" src="https://www.whatsappprofiledpimages.com/wp-content/uploads/2019/01/Stylish-Girls-Whatsapp-DP-Profile-Images-3.jpg" alt="">
                    </div>

                    <div class="text">
                        <strong>Antanelle Shizda</strong>
                        😄😄 Dude!!!! Cynical much?
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    var blogsScroller = document.querySelector("#blogItemList");
    var blogsSlideIndex = 0;
    var blogItems = document.querySelectorAll('.blog-item');
    function moveBlogs(dir){
        var newIndex = blogsSlideIndex + dir;
        var canGoBack = newIndex >= 0 && dir === -1;
        var canGoForward = newIndex <= blogItems.length - 2 && dir === 1;

        if(canGoBack || canGoForward){
            blogsSlideIndex = newIndex;
            blogsScroller.style.transform = "translateX("+(-50 * newIndex)+"%)";
        }
    }

    var clapCountTimer;
    var clapCount = 0;
    var clapCountEl = document.querySelector("#clapCount");

    function incrementClapCount(onMobile){
        if(onMobile)
            clapCountEl = document.querySelector(".clapCountMob");
        else
            clapCountEl = document.querySelector("#clapCount");


        if(clapCount == 0){
            clapCount++;
            clapCountEl.textContent = "+" + clapCount;
        }

        setTimeout(() => {
            clapCountTimer = setInterval(() => {
                if(clapCount < 50){
                    clapCount++;
                    clapCountEl.textContent = "+" + clapCount;
                }
            }, 320);
        }, 150);
    }

    function stopIncrementingClapCount(){
        clearInterval(clapCountTimer);
    }

    function newCommentTemplate(dp, name, comment){
        return `
            <div class="comment-item">
                <div class="layout center">
                    <div class="dp">
                        <img class="position-absolute pin-all" src="${dp}" alt="">
                    </div>

                    <div class="text">
                        <strong>${name}</strong>
                        ${comment}
                    </div>
                </div>
            </div>
        `;
    }

    var commentList = document.querySelector("#commentList")
    function postComment(e) {
        e.preventDefault();
        var form = e.target;
        var submitButton = form.querySelector('button');
        var formData = new FormData(form);
        form.classList.add('saving');
        submitButton.textContent = "SAVING COMMENT...";

        fetch('post_comment.php', {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then((res) => {
                console.log("Response: ", res);
                form.classList.remove('saving');
                form.querySelector('textarea').value = "";

                var newComment = newCommentTemplate('img/dp.png', 'Juma Mapera', formData.get('comment'));
                commentList.innerHTML += newComment;
                submitButton.textContent = "SUBMIT COMMENT";
            })
            .catch(error => console.error(error))
    }
</script>



<?php get_footer(); ?>