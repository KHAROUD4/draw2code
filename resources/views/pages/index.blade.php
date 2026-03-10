<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<base href="{{ url('/') }}/">
        <meta name="description" content="Draw2Code is a global packaging and product engineering powerhouse. We design, build, and deploy engineer-led packaging solutions for international and US-based markets.">
		<title>Draw2Code | Global Packaging &amp; Product Engineering</title>
    <!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Gilda+Display&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="addons/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
		  <!-- Icons -->
    <link href="css/icomoon.css" rel="stylesheet">
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="fonts/icomoon/style.css">
    <!-- CSS assets -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="addons/Magnific-Popup/magnific-popup.css" rel="stylesheet">
    <!-- LOAD JQUERY LIBRARY-->
		<script src="js/plugins/jquery-3.2.1.min.js"></script>
    <!-- Main theme stylesheet -->
    <link href="css/template.css" rel="stylesheet" type="text/css">

		<!-- REVOLUTION STYLE SHEETS -->
		<link rel="stylesheet" type="text/css" href="addons/revolution/css/settings.css">

		<!-- REVOLUTION JS FILES -->
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
		<script>function setREVStartSize(e){
				try{ var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
					if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})
				}catch(d){console.log("Failure at Presize of Slider:"+d)}
			};</script>
          <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="f44dbb12-2da2-4798-94fb-f77efdc49897";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
        
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-81178783-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-81178783-1');
</script>

</head>

<body class="page-home">
    
   
<div id="page_wrapper">
	<!-- Responsive menu start -->
	<ul class="cg__resMenu">
		<li class="cg__resMenu-back">
			<span class="cg__resMenu-backIcon glyphicon glyphicon-chevron-left"></span><a href="#" class="cg__resMenu-backLink">Back</a>
		</li>
		<li><a class="active" href="{{ route('home') }}"><span>Home</span></a></li>
		<li><a href="{{ route('studio') }}"><span>Studio</span></a></li>
		<li><a href="{{ route('our-process') }}"><span>Our Process</span></a></li>
		<li><a href="{{ route('work') }}"><span>Work</span></a></li>
		<li><a href="{{ route('contact') }}"><span>Contact</span></a></li>
	</ul>
	<!-- Responsive menu end -->

	<header id="header" class="site-header site-header--absolute">
		<div class="container siteheader-container large-container">
			<div class="fxb-col fxb-basis-auto">
				<div class="fxb-row site-header-row site-header-main ">
					  <!-- Logo column -->
					<div class="fxb-col fxb fxb-start-x fxb-center-y fxb-basis-auto fxb-grow-0 fxb-sm-half ">
						<div id="logo-container" class="logo-container">
							<h1 class="site-logo logo " id="logo">
								<a href="{{ route('home') }}" class="site-logo-anch">
									<img class="logo-img site-logo-img" src="img-assets/logo.png" alt="Draw2Code" title="Draw2Code">
								</a>
							</h1>
						</div>
					</div>
					 <!-- Right column with navigation -->
					 <div class="fxb-col fxb fxb-end-x fxb-center-y fxb-basis-auto fxb-sm-half site-header-col-right site-header-main-right">
						 <div class="fxb-col fxb fxb-end-x fxb-center-y fxb-basis-auto fxb-sm-half site-header-main-right-top">
									 <div class="sh-component menu-wrapper">
											<div class="cg__menuWrapper">
												<div class="cg__mainMenu-trigger">
													<a href="#" class="cg__menuBurger">
														<span></span>
														<span></span>
														<span></span>
													</a>
												</div>
												<ul class="cg__mainMenu clearfix">
													<li><a class="active" href="{{ route('home') }}"><span>Home</span></a></li>
													<li><a href="{{ route('studio') }}"><span>Studio</span></a></li>
													<li><a href="{{ route('our-process') }}"><span>Our Process</span></a></li>
													<li><a href="{{ route('work') }}"><span>Work</span></a></li>
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

	@php
		$heroSlides = [
			[
				'heading' => 'Global Packaging Solutions. Engineered to Scale.',
				'subheading' => 'From concept to container, shelf to shipment. We design and manufacture high-impact packaging built for the US and international markets.',
				'image' => 'images/hero_01A.jpg',
			],
			[
				'heading' => 'We Design. We Build. We Deploy.',
				'subheading' => 'We don\'t just create visuals. We engineer the entire product lifecycle -- from structural design to production-ready files to global fulfillment.',
				'image' => 'images/hero_01C.jpg',
			],
			[
				'heading' => 'Engineer-Led. Precision-Built.',
				'subheading' => 'Every product we ship is designed and developed by engineers. Technical viability meets world-class aesthetics -- no handoff gaps, no compromises.',
				'image' => 'images/hero_01D.jpg',
			],
		];
	@endphp

	<!-- HERO SLIDER -->
	<section class="hero-carousel" aria-label="Hero slideshow">
		@foreach ($heroSlides as $index => $slide)
			<div class="hero-slide {{ $index === 0 ? 'active' : '' }}" style="background-image: linear-gradient(160deg, rgba(2, 12, 27, 0.45), rgba(2, 12, 27, 0.24)), url('{{ $slide['image'] }}'); background-position:center center;" role="group" aria-label="Slide {{ $index + 1 }}">
				<div class="hero-slide__content">
					<h1 class="hero-slide__title">{{ $slide['heading'] }}</h1>
					<p class="hero-slide__subtitle">{{ $slide['subheading'] }}</p>
					<div class="hero-slide__actions">
						<a href="#services-overview" class="d2c-btn d2c-btn--primary js-scroll-services">Explore Our Services</a>
						<button type="button" class="d2c-btn d2c-btn--outline js-open-quote-modal">Request a Quote</button>
					</div>
					<div class="trust-badge glass-panel">
						<span class="trust-badge__icon">
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
						</span>
						Engineered for Global Standards &mdash; Designed &amp; Developed by Engineers
					</div>
				</div>
			</div>
		@endforeach
		<!-- Slide progress indicators -->
		<div class="hero-indicators" aria-label="Slide navigation">
			@foreach ($heroSlides as $index => $slide)
				<button class="hero-indicator {{ $index === 0 ? 'active' : '' }}" data-slide="{{ $index }}" aria-label="Go to slide {{ $index + 1 }}"></button>
			@endforeach
		</div>
	</section>

	<!-- ABOUT / CAPABILITIES STRIPE -->
	<section class="ag-about-section small-section scroll-reveal">
		<div class="row">
			<div class="col-sm-12">
				<div class="ag-about pl-90 pr-90 pt-60 d2c-dark-surface">
					<div class="row">
						<div class="col-md-4 col-sm-12">
							<div class="title-block">
								<h4 class="title-block__subtitle txt-light-transparent txt-thin">What We Do</h4>
								<h2 class="txt-large txt-light what-we-do-lines">
									<span><em>&rarr;</em> Branding &amp; Packaging</span>
									<span><em>&rarr;</em> UI UX</span>
									<span><em>&rarr;</em> Development</span>
									<span><em>&rarr;</em> Marketing</span>
								</h2>
							</div>
						</div>
						<div class="col-md-8 col-sm-12">
							<div class="quote-wrapper">
								<div class="bl-quote">
										<p class="bl-quote__title transparent-light">We design and produce custom packaging solutions for modern brands. From packaging design to final production, we help businesses create packaging that protects their products and strengthens their brand identity.</p>
										<p class="bl-quote__title transparent-light">Our services include packaging design and production for corrugated shipping boxes, retail product packaging, and custom branded boxes. We work closely with trusted manufacturing partners to deliver high-quality packaging with efficient turnaround times.</p>
										<p class="bl-quote__title transparent-light operational-readiness">Based in Chandigarh and working with clients globally, we combine design expertise with reliable production to deliver packaging that meets modern logistics and branding needs.</p>
								</div>
								<div class="row home-page-first">
									<div class="col-md-3 col-sm-6">
										<div class="ag-iconbox ag-iconbox--style1 clearfix">
											<div class="ag-iconbox__icon-wrapper">
												<span class="ag-iconbox__icon icon-webdesign"></span>
											</div>
											<div class="ag-iconbox__content-wrapper">
												<h3 class="ag-iconbox__title txt-light">Branding &amp; Packaging</h3>
											</div>
										</div>
									</div>
									<div class="col-md-3 col-sm-6">
										<div class="ag-iconbox ag-iconbox--style1 clearfix">
											<div class="ag-iconbox__icon-wrapper">
												<span class="ag-iconbox__icon icon-layers"></span>
											</div>
											<div class="ag-iconbox__content-wrapper">
												<h3 class="ag-iconbox__title txt-light">UI UX</h3>
											</div>
										</div>
									</div>
									<div class="col-md-3 col-sm-6">
										<div class="ag-iconbox ag-iconbox--style1 clearfix">
											<div class="ag-iconbox__icon-wrapper">
												<span class="ag-iconbox__icon icon-development"></span>
											</div>
											<div class="ag-iconbox__content-wrapper">
												<h3 class="ag-iconbox__title txt-light">Development</h3>
											</div>
										</div>
									</div>
									<div class="col-md-3 col-sm-6">
										<div class="ag-iconbox ag-iconbox--style1 clearfix">
											<div class="ag-iconbox__icon-wrapper">
												<span class="ag-iconbox__icon icon-layers"></span>
											</div>
											<div class="ag-iconbox__content-wrapper">
												<h3 class="ag-iconbox__title txt-light">Marketing</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="ag-mask">
					<div class="skew-mask"></div>
				</div>
			</div>
		</div>
	</section>

	<!-- PORTFOLIO GRID -->
	<section class="sidermargins pb-80 sec-portfolio home-portfolio-clean scroll-reveal">
		<div class="container large-container large-container_grid">
			<div class="row">
				<div class="grid ag-gridGallery-jstrigger" data-isotope='{ "itemSelector": ".grid-item", "layoutMode": "fitRows" }'>
					<div class="grid-item grid-item--width2 gallery-item">
						<div class="grid-item-wrapper">
							<a class="portfolio-link" href="images/hero_01E.jpg"></a>
							<div class="ag-gridGallery__img-container"><img src="images/hero_01E.jpg" alt="Custom corrugated packaging design" title="Engineering Case Study"></div>
							<div class="portfolio-overlay"><div class="portfolio-inner"><i class="ag-icon glyphicon glyphicon-picture ag-icon__circled-icon"></i></div></div>
						</div>
					</div>
					<div class="grid-item grid-item--width2 gallery-item">
						<div class="grid-item-wrapper">
							<a class="portfolio-link" href="images/test2.jpg"></a>
							<div class="ag-gridGallery__img-container"><img src="images/test2.jpg" alt="Retail packaging engineering" title="Engineering Case Study"></div>
							<div class="portfolio-overlay"><div class="portfolio-inner"><i class="ag-icon glyphicon glyphicon-picture ag-icon__circled-icon"></i></div></div>
						</div>
					</div>
					<div class="grid-item grid-item--width2 gallery-item">
						<div class="grid-item-wrapper">
							<a class="portfolio-link" href="images/portf_05.jpg"></a>
							<div class="ag-gridGallery__img-container"><img src="images/portf_05.jpg" alt="Product branding and packaging" title="Engineering Case Study"></div>
							<div class="portfolio-overlay"><div class="portfolio-inner"><i class="ag-icon glyphicon glyphicon-picture ag-icon__circled-icon"></i></div></div>
						</div>
					</div>
					<div class="grid-item grid-item--width2 gallery-item">
						<div class="grid-item-wrapper">
							<a class="portfolio-link" href="images/portf_04.jpg"></a>
							<div class="ag-gridGallery__img-container"><img src="images/portf_04.jpg" alt="Structural packaging prototype" title="Engineering Case Study"></div>
							<div class="portfolio-overlay"><div class="portfolio-inner"><i class="ag-icon glyphicon glyphicon-picture ag-icon__circled-icon"></i></div></div>
						</div>
					</div>
				</div>
			</div>
			<div class="ag-vertical-separator"></div>
				<div class="txt-center">
					<a href="{{ route('work') }}#featured-portfolio" class="ag_btn btn btn-lg btn-lined lined-dark btn--square call-to-action--btn d2c-btn--hover">View Our Work</a>
				</div>
			<!-- COUNTER STATS -->
			<div class="row">
				<div class="col-sm-12"><div class="ag-separator"></div></div>
			</div>
			<div class="row scroll-reveal">
				<div class="col-md-3 col-sm-3">
					<div class="counter-wrapper txt-center">
						<div class="counter_trigger counter_element" data-to="1748" data-speed="1000" data-refresh-interval="1"></div>
						<div class="title-block">
							<h4 class="title-block__subtitle txt-grey txt-center">Projects Delivered</h4>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="counter-wrapper txt-center">
						<div class="counter_trigger counter_element el-inline" data-to="75" data-speed="1000" data-refresh-interval="1"></div>
						<span class="counter_element">+</span>
						<div class="title-block">
							<h4 class="title-block__subtitle txt-grey txt-center">Digital Platforms</h4>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="counter-wrapper txt-center">
						<div class="counter_trigger counter_element" data-to="120" data-speed="1000" data-refresh-interval="1"></div>
						<div class="title-block">
							<h4 class="title-block__subtitle txt-grey txt-center">Global Clients</h4>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="counter-wrapper txt-center">
						<div class="counter_trigger counter_element" data-to="15" data-speed="1000" data-refresh-interval="1"></div>
						<div class="title-block">
							<h4 class="title-block__subtitle txt-grey txt-center">Industry Awards</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- BIG SKEW -->
	<div class="ag-wrapper">
		<div class="ag-mask ag-mask--7"><div class="skew-mask skew-mask--color"></div></div>
	</div>

	<!-- TESTIMONIALS + CLIENT LOGOS -->
	<section class="sidermargins color-overlay--grey pt-100 pb-100 scroll-reveal">
		<div class="container large-container">
			<div class="row mb-60">
				<div class="col-sm-12">
					<div class="title-block title-block--center">
						<h4 class="title-block__subtitle txt-dark-transparent">TRUSTED PARTNERS</h4>
						<h2 class="title-block__title txt-dark">What Our Clients Say</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-12 pt-30">
					<div class="testimonial__item testimonial__item--normal">
						<div class="testimonial__text">"From the moment we sat down with Avtar, Lead Engineer and Founder of Draw2Code, we knew this was the right team. Their engineering rigor and attention to production detail is unmatched."</div>
						<div class="testimonial__infos">
							<img class="testimonial__img cover-fit-img" src="images/t2.jpg" width="128" height="128" alt="Client testimonial photo" title="Shiva">
							<h4 class="testimonial__name">Shiva</h4>
							<div class="testimonial__position">Operations Director, FGC International</div>
							<div class="testimonial__stars testimonial__stars--5stars">
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-12">
					<div class="testimonial__item testimonial__item--size-1">
						<div class="testimonial__text">"Their persistence and dedication to structural accuracy is remarkable. Every dieline, every spec -- flawless. We made the right choice."</div>
						<div class="testimonial__infos">
							<img class="testimonial__img cover-fit-img" src="images/t1.jpg" width="128" height="128" alt="Client testimonial photo" title="Vibhu">
							<h4 class="testimonial__name">Vibhu</h4>
							<div class="testimonial__position">Clara International</div>
							<div class="testimonial__stars testimonial__stars--4stars">
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-12">
					<div class="testimonial__item testimonial__item--size-1 testimonial__item--reversed">
						<div class="testimonial__infos">
							<img class="testimonial__img cover-fit-img" src="images/t3.jpg" width="128" height="128" alt="Client testimonial photo" title="Saggy Browns">
							<h4 class="testimonial__name">Saggy Browns</h4>
							<div class="testimonial__position">CEO, Pitcher Studios Inc.</div>
							<div class="testimonial__stars testimonial__stars--5stars">
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
							</div>
						</div>
						<div class="testimonial__text">"Response times are exceptional. The team goes above and beyond -- from initial concept to production-ready files delivered ahead of schedule."</div>
					</div>
				</div>
			</div>
			<div class="testimonial__separator clearfix"></div>
			<div class="row">
				<div class="col-md-3 col-sm-12">
					<div class="title-block">
						<p class="title-block__subtitle txt-dark-transparent client">Brands That Trust Our Engineering</p>
					</div>
				</div>
				<div class="col-md-9 col-sm-12">
					<div class="clients">
						<div class="row">
							<div class="col-md-1-5 col-sm-1-5">
								<div class="img-wrapper"><img class="image-boxes-img img-responsive" src="images/client_01.png" alt="Client logo" title="client"></div>
							</div>
							<div class="col-md-1-5 col-sm-1-5">
								<div class="img-wrapper"><img class="image-boxes-img img-responsive" src="images/client_02.png" alt="Client logo" title="client"></div>
							</div>
							<div class="col-md-1-5 col-sm-1-5">
								<div class="img-wrapper"><img class="image-boxes-img img-responsive" src="images/client_03.png" alt="Client logo" title="client"></div>
							</div>
							<div class="col-md-1-5 col-sm-1-5">
								<div class="img-wrapper"><img class="image-boxes-img img-responsive" src="images/client_04.png" alt="Client logo" title="client"></div>
							</div>
							<div class="col-md-1-5 col-sm-1-5">
								<div class="img-wrapper"><img class="image-boxes-img img-responsive" src="images/client_05.png" alt="Client logo" title="client"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- OUR CAPABILITIES -->
	<section id="services-overview" class="sidermargins pb-100 pt-100 d2c-dark-surface scroll-reveal">
		<div class="container large-container">
			<div class="row">
				<div class="col-sm-12">
					<div class="title-block pb-80">
						<h4 class="title-block__subtitle txt-light-transparent">OUR SERVICES</h4>
						<h2 class="title-block__title txt-light">Services We Provide</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-12">
					<div class="column-wrapper--left">
						<div class="ag-iconbox ag-iconbox--style2">
							<div class="d2c-service-media d2c-service-media--branding" style="background-image:url('images/branding.png');"></div>
							<div class="ag-iconbox__icon-wrapper"><span class="ag-iconbox__icon icon-webdesign"></span></div>
							<div class="ag-iconbox__content-wrapper">
								<h3 class="ag-iconbox__title txt-light">Packaging and Branding</h3>
								<p class="ag-iconbox__desc">Custom corrugated, rigid box, flexible pouches, and retail-ready displays. Engineered dielines with precise tolerances for automated production lines.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="column-wrapper--left">
						<div class="ag-iconbox ag-iconbox--style2">
							<div class="d2c-service-media" style="background-image:url('images/portf_05.jpg');"></div>
							<div class="ag-iconbox__icon-wrapper"><span class="ag-iconbox__icon icon-layers"></span></div>
							<div class="ag-iconbox__content-wrapper">
								<h3 class="ag-iconbox__title txt-light">Brand Identity &amp; Visual Systems</h3>
								<p class="ag-iconbox__desc">Complete brand ecosystems -- from logo architecture to packaging graphics to digital presence. Cohesive visual identity across every customer touchpoint.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="column-wrapper--left">
						<div class="ag-iconbox ag-iconbox--style2">
								<div class="d2c-service-media d2c-service-media--digital" style="background-image:url('images/digital.png');"></div>
							<div class="ag-iconbox__icon-wrapper"><span class="ag-iconbox__icon icon-development"></span></div>
							<div class="ag-iconbox__content-wrapper">
								<h3 class="ag-iconbox__title txt-light">Digital Platform Development</h3>
								<p class="ag-iconbox__desc">Custom web applications, e-commerce platforms, and product configurators. Built with modern architecture and performance-first engineering.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-12">
					<div class="column-wrapper--left">
						<div class="ag-iconbox ag-iconbox--style2">
								<div class="d2c-service-media d2c-service-media--prototype" style="background-image:url('images/prototype.png');"></div>
							<div class="ag-iconbox__icon-wrapper"><span class="ag-iconbox__icon icon-development"></span></div>
							<div class="ag-iconbox__content-wrapper">
								<h3 class="ag-iconbox__title txt-light">Prototyping &amp; Production</h3>
								<p class="ag-iconbox__desc">Rapid prototyping with CAD-to-sample turnaround. We manage production oversight, quality audits, and vendor coordination globally.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="column-wrapper--left">
						<div class="ag-iconbox ag-iconbox--style2">
							<div class="d2c-service-media" style="background-image:url('images/portf_07.jpg');"></div>
							<div class="ag-iconbox__icon-wrapper"><span class="ag-iconbox__icon icon-webdesign"></span></div>
							<div class="ag-iconbox__content-wrapper">
								<h3 class="ag-iconbox__title txt-light">UX/UI &amp; Interface Engineering</h3>
								<p class="ag-iconbox__desc">Data-driven user experience design for web and mobile. Conversion-optimized interfaces built for engagement and long-term retention.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="column-wrapper--left">
						<div class="ag-iconbox ag-iconbox--style2">
								<div class="d2c-service-media d2c-service-media--global" style="background-image:url('images/global.png');"></div>
							<div class="ag-iconbox__icon-wrapper"><span class="ag-iconbox__icon icon-layers"></span></div>
							<div class="ag-iconbox__content-wrapper">
								<h3 class="ag-iconbox__title txt-light">Global Fulfillment &amp; Compliance</h3>
								<p class="ag-iconbox__desc">End-to-end logistics coordination with ISTA, ASTM, and FDA compliance. Optimized for US-based distribution and international shipping standards.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- CALL TO ACTION -->
	<section class="sidermargins color-overlay--grey pb-80 pt-80 scroll-reveal home-cta-section">
		<div class="container large-container">
			<div class="row home-cta-row">
				<div class="col-md-8 col-sm-8">
					<div class="column-wrapper--left">
						<div class="bl-quote call-to-action">
							<h2 class="call-to-action__subtitle">Ready to Start Your Project?</h2>
							<p class="call-to-action__title">Tell us about your goals and get a clear proposal with timeline and budget options within 24 hours.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 home-cta-action">
					<div class="column-wrapper--right">
						<div class="bl-quote">
							<a href="{{ route('contact') }}#project-brief" class="d2c-btn d2c-btn--dark">Start Your Project</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	@php($instagramPosts = $instagramPosts ?? [])
	@if (count($instagramPosts))
	<section class="sidermargins pb-80 pt-40 scroll-reveal">
		<div class="container large-container">
			<div class="title-block title-block--center pb-40">
				<h4 class="title-block__subtitle txt-dark-transparent">LATEST FROM INSTAGRAM</h4>
				<h2 class="title-block__title txt-dark">Behind the Build</h2>
				<p class="work-hero-subtext">Fresh updates from our packaging and product delivery pipeline.</p>
			</div>
			<div class="row instagram-feed-row">
				@foreach ($instagramPosts as $post)
					<div class="col-md-4 col-sm-6">
						<a class="instagram-card" href="{{ $post['permalink'] }}" target="_blank" rel="noopener noreferrer" aria-label="Open Instagram post">
							<div class="instagram-card__media">
								<img src="{{ $post['image_url'] }}" alt="{{ $post['caption'] ? \Illuminate\Support\Str::limit($post['caption'], 80) : 'Instagram post by Draw2Code' }}">
								<div class="instagram-card__overlay">
									<span><i class="fa fa-instagram" aria-hidden="true"></i> View on Instagram</span>
								</div>
							</div>
							@if (!empty($post['caption']))
								<p class="instagram-card__caption">{{ \Illuminate\Support\Str::limit($post['caption'], 110) }}</p>
							@endif
						</a>
					</div>
				@endforeach
			</div>
		</div>
	</section>
	@endif

	<!-- BUILT DIFFERENT -->
	<section class="sidermargins pb-80 pt-80 scroll-reveal">
		<div class="container large-container">
			<div class="row">
				<div class="col-sm-12">
					<div class="title-block title-block--center">
						<h4 class="title-block__subtitle txt-dark-transparent">BUILT DIFFERENT</h4>
						<h2 class="title-block__title txt-dark">Designed &amp; Developed by Engineers</h2>
					</div>
				</div>
			</div>
			<div class="mb-60"></div>
			<div class="row">
				<div class="col-sm-6 col-lg-4">
					<div class="post-wrapper d2c-feature-card">
							<img src="images/zer.png" width="370" height="200" alt="Quality engineering process" class="latest_posts-img" style="width:100%;height:auto;border-radius:2px;">
						<div class="d2c-feature-card__body">
							<h3 class="latest_posts-title" style="font-style:normal;font-weight:700;margin-top:16px;">Zero-Defect Engineering</h3>
							<p style="color:#666;font-size:14px;line-height:1.7;">Every project undergoes rigorous QA -- from structural stress testing to color-match verification. We don't ship until it's production-perfect.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="post-wrapper d2c-feature-card">
						<img src="images/home_slide01.jpg" width="370" height="200" alt="Global logistics and deployment" class="latest_posts-img" style="width:100%;height:auto;border-radius:2px;">
						<div class="d2c-feature-card__body">
							<h3 class="latest_posts-title" style="font-style:normal;font-weight:700;margin-top:16px;">US Market-Ready</h3>
							<p style="color:#666;font-size:14px;line-height:1.7;">Optimized for American retail standards: barcode compliance, sustainability certifications, and Amazon-ready packaging specifications.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="post-wrapper d2c-feature-card">
						<img src="images/portf_07.jpg" width="370" height="200" alt="End-to-end product lifecycle" class="latest_posts-img" style="width:100%;height:auto;border-radius:2px;">
						<div class="d2c-feature-card__body">
							<h3 class="latest_posts-title" style="font-style:normal;font-weight:700;margin-top:16px;">Concept to Container</h3>
							<p style="color:#666;font-size:14px;line-height:1.7;">We handle the full lifecycle: ideation, structural prototyping, graphic design, production management, and global deployment.</p>
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
								<a href="tel:+919814567979"><span>India: +(91) 9814567979</span></a>
								<br>
								<a href="tel:+15878877354"><span>Canada: 1(587) 887-7354</span></a>
								<br>
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

<div id="quoteModal" class="d2c-modal-overlay" aria-hidden="true">
	<div class="d2c-modal-panel" role="dialog" aria-modal="true" aria-labelledby="quoteModalTitle">
		<button type="button" class="d2c-modal-close js-close-quote-modal" aria-label="Close quote form">&times;</button>
		<h2 id="quoteModalTitle" class="d2c-modal-title">Tell Us About You</h2>
		<form class="d2c-modal-form" method="post" action="{{ route('contact.submit') }}">
			@csrf
			<input type="text" name="name" class="d2c-modal-input" placeholder="Your Name*" required>
			<div class="d2c-modal-grid-2">
				<input type="email" name="email" class="d2c-modal-input" placeholder="Email*" required>
				<input type="text" name="phone" class="d2c-modal-input" placeholder="Phone Number">
			</div>
			<input type="text" name="whatsapp" class="d2c-modal-input" placeholder="Skype ID/Whatsapp No.">
			<h3 class="d2c-modal-subtitle">Tell Us About Your Project</h3>
			<input type="text" name="message" class="d2c-modal-input" placeholder="What's your project all about?*" required>
			<h3 class="d2c-modal-subtitle">What Are You Looking For?*</h3>
			<div class="d2c-modal-checkbox-grid">
				<label><input type="checkbox" name="interests[]" value="Branding and Packaging"> Branding and Packaging</label>
				<label><input type="checkbox" name="interests[]" value="Creating a Mobile App"> Creating a Mobile App</label>
				<label><input type="checkbox" name="interests[]" value="Web Development"> Web Development</label>
				<label><input type="checkbox" name="interests[]" value="Dedicated Team Service"> Dedicated Team Service</label>
				<label><input type="checkbox" name="interests[]" value="SEO/PPC/SMM"> SEO/PPC/SMM</label>
				<label><input type="checkbox" name="interests[]" value="Partnership Opportunities"> Partnership Opportunities</label>
			</div>
			<div class="d2c-modal-grid-2">
				<select name="ag-budget" class="d2c-modal-input" required>
					<option value="">Select your budget range*</option>
					<option>$500 - $2,000</option>
					<option>$2,000 - $5,000</option>
					<option>$5,000 - $10,000</option>
					<option>$10,000+</option>
				</select>
				<select name="start_timeline" class="d2c-modal-input" required>
					<option value="">When do you want to get started?*</option>
					<option>Immediately</option>
					<option>Within 2 weeks</option>
					<option>Within 1 month</option>
					<option>Just exploring</option>
				</select>
			</div>
			<input type="text" name="source" class="d2c-modal-input" placeholder="How did you hear about us?">
			<div class="d2c-modal-feedback" aria-live="polite"></div>
			<div class="d2c-modal-actions">
				<button type="submit" class="d2c-btn d2c-btn--primary">Send Request</button>
			</div>
		</form>
	</div>
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
	// Hero Slider - 5 second auto-advance with smooth crossfade
	var slides = document.querySelectorAll('.hero-slide');
	var indicators = document.querySelectorAll('.hero-indicator');
	if (!slides.length) return;

	var currentIndex = 0;
	var intervalTime = 5000;
	var timer;

	function goToSlide(index) {
		slides[currentIndex].classList.remove('active');
		if (indicators[currentIndex]) indicators[currentIndex].classList.remove('active');
		currentIndex = index;
		slides[currentIndex].classList.add('active');
		if (indicators[currentIndex]) indicators[currentIndex].classList.add('active');
	}

	function nextSlide() {
		goToSlide((currentIndex + 1) % slides.length);
	}

	function startTimer() {
		timer = setInterval(nextSlide, intervalTime);
	}

	// Indicator click handlers
	indicators.forEach(function(btn, i) {
		btn.addEventListener('click', function() {
			clearInterval(timer);
			goToSlide(i);
			startTimer();
		});
	});

	startTimer();

	// Scroll to services section
	var servicesBtn = document.querySelector('.js-scroll-services');
	if (servicesBtn) {
		servicesBtn.addEventListener('click', function(e) {
			e.preventDefault();
			var target = document.getElementById('services-overview');
			if (target) {
				target.scrollIntoView({ behavior: 'smooth', block: 'start' });
			}
		});
	}

	// Quote modal open/close
	var quoteModal = document.getElementById('quoteModal');
	var openQuoteBtns = document.querySelectorAll('.js-open-quote-modal');
	var closeQuoteBtns = document.querySelectorAll('.js-close-quote-modal');

	function openQuoteModal() {
		if (!quoteModal) return;
		quoteModal.classList.add('is-open');
		quoteModal.setAttribute('aria-hidden', 'false');
		document.body.classList.add('d2c-modal-open');
	}

	function closeQuoteModal() {
		if (!quoteModal) return;
		quoteModal.classList.remove('is-open');
		quoteModal.setAttribute('aria-hidden', 'true');
		document.body.classList.remove('d2c-modal-open');
	}

	openQuoteBtns.forEach(function(btn) {
		btn.addEventListener('click', openQuoteModal);
	});
	closeQuoteBtns.forEach(function(btn) {
		btn.addEventListener('click', closeQuoteModal);
	});
	if (quoteModal) {
		quoteModal.addEventListener('click', function(e) {
			if (e.target === quoteModal) closeQuoteModal();
		});
	}
	var quoteForm = quoteModal ? quoteModal.querySelector('.d2c-modal-form') : null;
	var quoteFeedback = quoteModal ? quoteModal.querySelector('.d2c-modal-feedback') : null;
	if (quoteForm) {
		quoteForm.addEventListener('submit', function(e) {
			e.preventDefault();
			var formData = new FormData(quoteForm);
			var csrfToken = formData.get('_token');
			fetch(quoteForm.getAttribute('action'), {
				method: 'POST',
				headers: {
					'Accept': 'application/json',
					'X-Requested-With': 'XMLHttpRequest',
					'X-CSRF-TOKEN': csrfToken
				},
				body: formData
			}).then(function(response) {
				return response.json();
			}).then(function(result) {
				if (result.success) {
					if (quoteFeedback) {
						quoteFeedback.textContent = 'Request sent successfully. Our team will contact you shortly.';
						quoteFeedback.classList.add('is-success');
					}
					quoteForm.reset();
					setTimeout(closeQuoteModal, 1200);
				} else if (quoteFeedback) {
					quoteFeedback.textContent = 'Please check your form details and try again.';
					quoteFeedback.classList.remove('is-success');
				}
			}).catch(function() {
				if (quoteFeedback) {
					quoteFeedback.textContent = 'Unable to send right now. Please try again in a moment.';
					quoteFeedback.classList.remove('is-success');
				}
			});
		});
	}
	document.addEventListener('keydown', function(e) {
		if (e.key === 'Escape') closeQuoteModal();
	});

	// Scroll reveal animation
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
