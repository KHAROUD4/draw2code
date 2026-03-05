<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<base href="{{ url('/') }}/">
        <meta name="description" content="Draw2Code engineering case studies. See our full-lifecycle packaging and product engineering projects -- from concept through global deployment.">
		<title>Engineering Case Studies | Draw2Code</title>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Gilda+Display&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="addons/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link href="css/icomoon.css" rel="stylesheet">
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="fonts/icomoon/style.css">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="addons/Magnific-Popup/magnific-popup.css" rel="stylesheet">
		<script src="js/plugins/jquery-3.2.1.min.js"></script>
    <link href="css/template.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="addons/revolution/css/settings.css">
		<script src="addons/revolution/js/jquery.themepunch.tools.min.js"></script>
		<script src="addons/revolution/js/jquery.themepunch.revolution.min.js"></script>
		<script src="addons/revolution/js/extensions/revolution.extension.actions.min.js"></script>
		<script src="addons/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
		<script src="addons/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
		<script src="addons/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
		<script src="addons/revolution/js/extensions/revolution.extension.migration.min.js"></script>
		<script src="addons/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
		<script src="addons/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
		<script src="addons/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
		<script src="addons/revolution/js/extensions/revolution.extension.video.min.js"></script>
          <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="f44dbb12-2da2-4798-94fb-f77efdc49897";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-81178783-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-81178783-1');
</script>
</head>

<body>
<div id="page_wrapper">
	<!-- Responsive menu -->
	<ul class="cg__resMenu">
		<li class="cg__resMenu-back">
			<span class="cg__resMenu-backIcon glyphicon glyphicon-chevron-left"></span><a href="#" class="cg__resMenu-backLink">Back</a>
		</li>
		<li><a href="{{ route('home') }}"><span>Home</span></a></li>
		<li><a href="{{ route('studio') }}"><span>Studio</span></a></li>
		<li><a href="{{ route('our-process') }}"><span>Our Process</span></a></li>
		<li><a class="active" href="{{ route('work') }}"><span>Work</span></a></li>
		<li><a href="{{ route('contact') }}"><span>Contact</span></a></li>
	</ul>

	<header id="header" class="site-header site-header--absolute">
		<div class="container siteheader-container large-container">
			<div class="fxb-col fxb-basis-auto">
				<div class="fxb-row site-header-row site-header-main">
					<div class="fxb-col fxb fxb-start-x fxb-center-y fxb-basis-auto fxb-grow-0 fxb-sm-half">
						<div id="logo-container" class="logo-container">
							<h1 class="site-logo logo" id="logo">
								<a href="{{ route('home') }}" class="site-logo-anch">
									<img class="logo-img site-logo-img" src="img-assets/logo.png" alt="Draw2Code" title="Draw2Code">
								</a>
							</h1>
							<p class="logo-tagline">Packaging &amp; Product Engineering Powerhouse.</p>
						</div>
					</div>
					<div class="fxb-col fxb fxb-end-x fxb-center-y fxb-basis-auto fxb-sm-half site-header-col-right site-header-main-right">
						<div class="fxb-col fxb fxb-end-x fxb-center-y fxb-basis-auto fxb-sm-half site-header-main-right-top">
							<div class="sh-component menu-wrapper">
								<div class="cg__menuWrapper">
									<div class="cg__mainMenu-trigger">
										<a href="#" class="cg__menuBurger"><span></span><span></span><span></span></a>
									</div>
									<ul class="cg__mainMenu clearfix">
										<li><a href="{{ route('home') }}"><span>Home</span></a></li>
										<li><a href="{{ route('studio') }}"><span>Studio</span></a></li>
										<li><a href="{{ route('our-process') }}"><span>Our Process</span></a></li>
										<li><a class="active" href="{{ route('work') }}"><span>Work</span></a></li>
										<li><a href="{{ route('contact') }}"><span>Contact</span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- HERO -->
	<div class="ag-subheader">
		<div class="media-wrapper">
			<div class="media-container media-header">
				<div class="container-overlay">
					<div class="bg-source bg-source--image" style="background-image: url(images/hero_03.jpg);"></div>
					<div class="bg-source img-overlay"></div>
				</div>
				<div class="media-container-title txt-center">
					<span class="hero-slide__label" style="margin-bottom:20px;">Engineering Portfolio</span>
					<h1 class="txt-light">From Concept to Global Deployment</h1>
					<p class="work-hero-subtext">A showcase of engineer-led packaging and digital product case studies -- built for performance, compliance, and market readiness.</p>
				</div>
			</div>
		</div>
		<div class="ag-mask"><div class="skew-mask"></div></div>
	</div>

	<!-- CASE STUDIES GRID -->
	<div class="container large-container pb-80 pt-80">
		<div class="portfolio-filter">

			@php
				$caseStudies = [
					[
						'image' => 'images/portf_07.jpg',
						'title' => 'Premium Corrugated Display',
						'scope' => 'Structural Engineering + Graphic Design + Production',
						'category' => 'packaging',
					],
					[
						'image' => 'images/test2.jpg',
						'title' => 'E-Commerce Fulfillment System',
						'scope' => 'Packaging Architecture + ISTA Compliance + Logistics',
						'category' => 'engineering',
					],
					[
						'image' => 'images/portf_05.jpg',
						'title' => 'Retail Brand Identity System',
						'scope' => 'Brand Strategy + Visual Identity + Packaging Suite',
						'category' => 'branding',
					],
					[
						'image' => 'images/portf_04.jpg',
						'title' => 'Subscription Box Engineering',
						'scope' => 'Structural Prototyping + Unboxing UX + Production',
						'category' => 'packaging',
					],
					[
						'image' => 'images/portf_03.jpg',
						'title' => 'Digital Product Platform',
						'scope' => 'UX Engineering + Frontend Development + API Integration',
						'category' => 'digital',
					],
					[
						'image' => 'images/portf_01.jpg',
						'title' => 'Global CPG Packaging Refresh',
						'scope' => 'Dieline Engineering + Color Management + Global Rollout',
						'category' => 'packaging',
					],
				];
			@endphp

			<ul class="grid" data-isotope='{ "itemSelector": ".ptf-item", "layoutMode": "fitRows"}'>
				@foreach ($caseStudies as $study)
				<li class="ptf-item {{ $study['category'] }}" data-category="{{ $study['category'] }}">
					<div class="grid-item-wrapper">
						<a class="portfolio-link" href="#"></a>
						<div class="ag-gridGallery__img-container">
							<img src="{{ $study['image'] }}" alt="{{ $study['title'] }}" title="{{ $study['title'] }}">
						</div>
						<div class="portfolio-overlay">
							<div class="portfolio-inner">
								<i class="ag-icon glyphicon glyphicon-link ag-icon__circled-icon"></i>
							</div>
						</div>
						<div class="case-study-meta">
							<h3 class="case-study-meta__title">{{ $study['title'] }}</h3>
							<p class="case-study-meta__scope">{{ $study['scope'] }}</p>
							<div class="project-flow-labels">
								<span>Designed</span>
								<span>Built</span>
								<span>Deployed</span>
							</div>
						</div>
					</div>
				</li>
				@endforeach
			</ul>
		</div>
	</div>

	<!-- CTA -->
	<section class="sidermargins pb-80 pt-80 color-overlay--grey scroll-reveal">
		<div class="container large-container">
			<div class="row">
				<div class="col-md-9 col-sm-9">
					<div class="column-wrapper--left">
						<div class="bl-quote call-to-action">
							<h2 class="call-to-action__subtitle">Ready to Build Something Extraordinary?</h2>
							<p class="call-to-action__title">Share your project brief and our engineering team will deliver a comprehensive proposal within 24 hours.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="column-wrapper--right">
						<div class="bl-quote">
							<a href="{{ route('contact') }}" class="d2c-btn d2c-btn--dark">Start Your Project</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer>
		<div class="row gutter-0">
			<div class="col-md-8 col-sm-8 pt-100 pb-100">
				<div class="footer-first-col">
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<p>
								Draw2Code, Block-D<br>
								DLF IT Park, Chandigarh, 160101, India<br>
								Copyright &copy; 2025 Draw2Code. All Rights Reserved.
							</p>
							<p style="color:rgba(255,255,255,0.45);font-size:11px;text-transform:uppercase;letter-spacing:.05em;margin-top:10px;">Designed &amp; Developed by Engineers</p>
						</div>
						<div class="col-md-6 col-sm-6">
							<p>
								<a href="tel:+919377120007"><span>+(91) 93-771-20007</span></a><br>
								<span><a href="mailto:draw2code@gmail.com"><span>draw2code@gmail.com</span></a></span>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 pt-100 pb-100 dark-bg">
				<div class="footer-last-col social-container">
					<ul class="footer-social">
						<li class="footer-social__item"><a href="https://www.facebook.com/draw2code" aria-label="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="footer-social__item"><a href="https://twitter.com/draw2code" aria-label="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="footer-social__item"><a href="https://plus.google.com/u/0/100554868355797924341" aria-label="Google Plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

</div>

<a href="#" class="totop">TOP</a>

<script src="js/plugins/bootstrap.min.js"></script>
<script src="addons/isotope/isotope.pkgd.min.js"></script>
<script src="addons/imagesloaded.pkgd.min.js"></script>
<script src="addons/Magnific-Popup/jquery.magnific-popup.js"></script>
<script src="addons/jquery.countTo.js"></script>
<script src="js/script.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
	var revealElements = document.querySelectorAll('.scroll-reveal');
	if (revealElements.length && 'IntersectionObserver' in window) {
		var observer = new IntersectionObserver(function(entries) {
			entries.forEach(function(entry) {
				if (entry.isIntersecting) {
					entry.target.classList.add('is-revealed');
					observer.unobserve(entry.target);
				}
			});
		}, { threshold: 0.12 });
		revealElements.forEach(function(el) { observer.observe(el); });
	}
});
</script>

</body>
</html>
