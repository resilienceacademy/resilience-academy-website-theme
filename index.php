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

    <link rel="icon" href="logo.png">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/flexboxgrid.min.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/flex.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/main.css">
    <link rel='stylesheet' href='<?php echo get_bloginfo('template_directory'); ?>/css/home.css'>
</head>
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
            <a id="logo" href="index.html" class="layout center">
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
						&nbsp;
						<span>
							<small class="current">taught</small>
							<small>learned</small>
							<small>accessed</small>
							<small>secured</small>
						</span>
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
		<div class="section-wrapper position-relative">
			<div class="overflow-hidden" style="background: #d2d2d2;">
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
							<img src="https://staging.resilienceacademy.ac.tz/wp-content/uploads/2019/08/The-book-1.jpg" alt="">
						</div>
					</div>
				</div>
			</div>

			<div id="projectsMover" class="position-absolute pin-all pointer-events-none layout center justified">
				<button onclick="moveProjects(-1)" class="action-button pointer-events-auto">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
				</button>
				
				<button onclick="moveProjects(1)" class="action-button pointer-events-auto">
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

	<section id="contactUs">
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

	<section id="subscribe">
		<div class="section-wrapper layout wrap center justified">
			<h3>Subscribe to our news letter</h3>
			<div class="layout wrap center flex">
				<input type="text" placeholder="Your email">
				<button class="button">
					SIGN UP
				</button>
			</div>
		</div>
	</section>

	<script>
		var projectsScroller = document.querySelector("#projectsScroller");
		var projectsSlideIndex = 0;
		var projects = document.querySelectorAll('.project-item');
		function moveProjects(dir){
			var newIndex = projectsSlideIndex + dir;
			var canGoForward = newIndex >= 0 && dir === -1;
			var canGoBack = newIndex < projects.length && dir === 1;

			if(canGoBack || canGoForward){
				projectsSlideIndex = newIndex;
				projectsScroller.style.transform = "translateX("+(-100 * newIndex)+"%)";
			}
		}


		var bannerChangingTexts = document.querySelectorAll("#bannerChangingText small");
		var bannerChangingTextsScroller = document.querySelector("#bannerChangingText span");
		var bannerChangingTextIndex = 0;
		var bannerChangingTextHeight = bannerChangingTexts[0].getBoundingClientRect().height;

		setInterval(() => {
			bannerChangingTextIndex = bannerChangingTextIndex === bannerChangingTexts.length - 1 ? 0 : bannerChangingTextIndex + 1;
			bannerChangingTextsScroller.style.transform = "translateY("+(-bannerChangingTextHeight * bannerChangingTextIndex)+"px)";
			document.querySelector("#bannerChangingText .current").classList.remove('current');
			bannerChangingTexts[bannerChangingTextIndex].classList.add('current');
		}, 3000);
	</script>

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