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
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/flexboxgrid.min.css">
	<link rel="stylesheet" href="css/flex.css">
	<link rel="stylesheet" href="css/main.css">
	
	<?php
		if(isset($page)){
			echo "<link rel='stylesheet' href='css/$page.css'>";
		}
	?>
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
					<img src="img/logo.png" alt="">
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