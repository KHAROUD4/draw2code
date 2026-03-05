<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
	<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
	<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
	<!--[if gt IE 8]> <html class="no-js"> <![endif]-->
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content=" width=device-width, initial-scale=1">
		<base href="{{ url('/') }}/">
		<title>Studio-Draw2Code - A creative UX/UI Design studio, Expert in Graphic Designing</title>
    <!-- Fonts -->
  	<link href="https://fonts.googleapis.com/css?family=Gilda+Display%7CMontserrat:400,700%7COpen+Sans" rel="stylesheet">
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


		<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
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
        
         <!-- Global site tag (gtag.js) - Google Analytics -->
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
	<!-- Responsive menu start -->
	<ul class="cg__resMenu">
		<li class="cg__resMenu-back">
			<span class="cg__resMenu-backIcon glyphicon glyphicon-chevron-left"></span><a href="#" class="cg__resMenu-backLink">Back</a>
		</li>
		<li><a class="active" href="{{ route('home') }}"><span>Home</span></a></li>
		<li>	<a href="{{ route('studio') }}"><span>Studio</span></a>
		<li><a href="{{ route('our-process') }}"><span>Our process</span></a></li>
		<li><a href="{{ route('work') }}"><span>Work</span></a></li>
		<li><a href="{{ route('contact') }}"><span>Contact</span></a></li>
	</ul>

	<!-- Responsive menu end -->

	<header id="header" class="site-header site-header--absolute">
		<div class="container siteheader-container large-container  ">
			<div class="fxb-col fxb-basis-auto">
				<div class="fxb-row site-header-row site-header-main ">
						<!-- Logo column -->
					<div class="fxb-col fxb fxb-start-x fxb-center-y fxb-basis-auto fxb-grow-0 fxb-sm-half ">
						<div id="logo-container" class="logo-container">
							<h1 class="site-logo logo " id="logo">
								<a href="{{ route('home') }}" class="site-logo-anch">
									<img class="logo-img site-logo-img" src="img-assets/logo.png" alt="Agency" title="Agency">
								</a>
							</h1>
						</div>
					</div>
							<p class="logo-tagline">Packaging & Product Engineering Studio.</p>
					 <!-- Right column with navigation -->
					 <div class="fxb-col fxb fxb-end-x fxb-center-y fxb-basis-auto fxb-sm-half site-header-col-right site-header-main-right">
						 <div class="fxb-col fxb fxb-end-x fxb-center-y fxb-basis-auto fxb-sm-half site-header-main-right-top">

										<!-- menu trigger -->
									 <div class="sh-component menu-wrapper">

											<div class="cg__menuWrapper">
												<div class="cg__mainMenu-trigger">
													<a href="#" class="cg__menuBurger">
														<span></span>
														<span></span>
														<span></span>
													</a>
												</div><!--/.cg__mainMenu-trigger-->

												<ul class="cg__mainMenu clearfix">
													<li><a class="active" href="{{ route('home') }}"><span>Home</span></a></li>
													<li><a href="{{ route('studio') }}"><span>Studio</span></a></li>
													<li><a href="{{ route('our-process') }}"><span>Our process</span></a></li>
													<li><a href="{{ route('work') }}"><span>Work</span></a></li>
													<li><a href="{{ route('contact') }}"><span>Contact</span></a></li>
												</ul><!--/.cg__mainMenu-->

											</div><!--/.cg__menuWrapper-->

									 </div>

					 </div>
				 </div><!--end right column-->
			 </div><!--end flex row-->
			</div>
		</div>
	</header>
	<div class="ag-subheader ">

				<div class="media-wrapper">
						<div class="media-container media-header">
							<div class="container-overlay">
							<div class="bg-source bg-source--image" style="background-image: url(images/hero_02.jpg);">
							</div>
							<div class="bg-source img-overlay">
							</div>
						</div>
						<div class="media-container-title txt-center">
								<h1 class="txt-light">Studio
								</h1>
						</div>
					</div>
				</div>


		<div class="ag-mask">
			<div class="skew-mask">
			</div>
		</div>
	</div><!--end subheader-->
<section class="container pt-80 ">

		<div class="row gutter-0">
			<div class="col-lg-offset-2 col-md-8 col-sm-12 col-xs-12">
				<div class="quote-wrapper">
						<div class="bl-quote bl-quote--dark txt-center">
							<h4 class="bl-quote--dark__subtitle">A FEW WORDS ABOUT US</h4>
							<p class="bl-quote--dark__title">We create outstanding UX/UI, branding web design & development solutions for Freelancers, startups & companies. Founded in June 2016, our agency creates Web Interfaces, Brands, Mobile application designs. Our strengths lie in the simplicity of our design. Perfection is our goal.
							</p>
						</div>
						<div class="icon-wrpper clearfix">
						</div>

				</div>
			</div>
		</div>

</section>
<section class="pt-80 pb-160">
	<div class="container large-container">
		<div class="row gutter-0">
			<div class="col-md-6 col-sm-12 col-xs-12 media-container--video">
				<div class="bg-source color-overlay--dark">
			  </div>
				<div class="column-wrapper column-wrapper--65 media-container media-container--video">
					<div class="quote-wrapper txt-center fxb-center">
						<p class="bl-quote__title txt-grey">Designers can create normality out of chaos; they can clearly communicate ideas through the organising and manipulating of words and pictures</p>
						<h5 class="txt-light">JEFFREY VEEN
						</h5>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12">
				<div class="fxb media-container--video">
					<div class="container-overlay">
						<div class="bg-source bg-source--video" style="background-image: url(images/home_slide01.jpg);">
						</div>
						<div class="bg-source video-overlay">
						</div>
				</div>
				<a class="media-container-title txt-center media-container__link ag__playVideo" href="#" data-lightbox="iframe">
					<!-- flex item-->
					<div class="circleanim-svg">
						<svg height="108" width="108" xmlns="http://www.w3.org/2000/svg">
							<circle stroke-opacity="0.1" fill="#FFFFFF" stroke-width="5" cx="54" cy="54" r="48" class="circleanim-svg__circle-back"></circle>
							<circle stroke-width="5" fill="#FFFFFF" cx="54" cy="54" r="48" class="circleanim-svg__circle-front" transform="rotate(50 54 54) "></circle>
							<path d="M62.1556183,56.1947505 L52,62.859375 C50.6192881,63.7654672 49.5,63.1544098 49.5,61.491212 L49.5,46.508788 C49.5,44.8470803 50.6250889,44.2383396 52,45.140625 L62.1556183,51.8052495 C64.0026693,53.0173767 63.9947588,54.9878145 62.1556183,56.1947505 Z" fill="#FFFFFF"></path>
						</svg>
					</div>


				</a>
			</div>
			</div>

		</div>
	</div>



</section>
<div class="ag-wrapper">
	<div class="ag-mask">
		<div class="skew-mask skew-mask--color">
		</div>
	</div>
</div>
<!--iconbox style3 section-->
<section class="sidermargins pb-160 pt-80">

	<div class="bg-source color-overlay--grey">
  </div>

	<div class="container large-container">
		<div class="row gutter-sm">
			<div class="col-sm-12">
				<div class="title-block title-block--center pb-80">
					<h4 class="title-block__subtitle txt-dark-transparent">THE TEAM</h4>
					<h2 class="title-block__title txt-dark">The Guys behind all this</h2>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="media-container media-container--team">
					<div class="container-overlay">
						<div class="bg-source bg-source--image" style="background-image: url(images/member_01.jpg);">
						</div>
						<div class="bg-source fancy-overlay">
						</div>
					</div>
					<div class="media-container-title media-container-title--align-bt txt-center team">
						<h2 class="title-block__title txt-light">Avtar Singh</h2>
						<p class="title-block__subtitle txt-grey-transparent">Designer / Founder</p>
					</div>
				</div>
		</div>
		<div class="col-md-4 col-sm-4">
			<div class="media-container media-container--team">
				<div class="container-overlay">
					<div class="bg-source bg-source--image" style="background-image: url(images/member_04.jpg);">
					</div>
					<div class="bg-source grey-overlay">
					</div>
				</div>
				<div class="media-container-title media-container-title--align-bt txt-center team">
					<h2 class="title-block__title txt-light">Olivia Sears</h2>
					<p class="title-block__subtitle txt-grey-transparent">Front-End Developer</p>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-4">
			<div class="media-container media-container--team">
				<div class="container-overlay">
					<div class="bg-source bg-source--image" style="background-image: url(images/member_02.jpg);">
					</div>
					<div class="bg-source grey-overlay">
					</div>
				</div>
				<div class="media-container-title media-container-title--align-bt txt-center team">
					<h2 class="title-block__title txt-light">Kyle Rivers</h2>
					<p class="title-block__subtitle txt-grey-transparent">Designer</p>
				</div>
			</div>
		</div>
	</div>
</div>

</section>
<div class="ag-wrapper">
	<div class="ag-mask">
		<div class="skew-mask skew-mask--dark">
		</div>
	</div>
</div>
<!--logos section-->
<section class="sidermargins pb-120 pt-100">

	<div class="bg-source color-overlay--dark">
  </div>

	<div class="container large-container">
			<div class="row studio">
				<div class="col-sm-12">
					<div class="title-block title-block--center pb-80">
						<h4 class="title-block__subtitle txt-light-transparent txt-thin">People Who Love Working With Us</h4>
					</div>
				</div>
			</div>
			<div class="clients">
					<div class="row">
				<!--start logo row-->
						<div class="col-md-1-5 col-sm-1-5">
							<div class="img-wrapper">
								<img class="image-boxes-img img-responsive" src="images/client_01.png" alt title="client" >
							</div>
						</div>
						<div class="col-md-1-5 col-sm-1-5">
							<div class="img-wrapper">
								<img class="image-boxes-img img-responsive" src="images/client_03.png" alt title="client" >
							</div>
						</div>
						<div class="col-md-1-5 col-sm-1-5">
							<div class="img-wrapper">
								<img class="image-boxes-img img-responsive" src="images/client_02.png" alt title="client" >
							</div>
						</div>
						<div class="col-md-1-5 col-sm-1-5">
							<div class="img-wrapper">
								<img class="image-boxes-img img-responsive" src="images/client_05.png" alt title="client" >
							</div>
						</div>
						<div class="col-md-1-5 col-sm-1-5">
							<div class="img-wrapper">
								<img class="image-boxes-img img-responsive" src="images/client_04.png" alt title="client" >
							</div>
						</div>
				</div>
		</div>
		</div>

</section>
<!--call to action section-->
<section class="sidermargins pb-80 pt-80  color-overlay--grey">

	<div class="container large-container">
		<div class="row">
			<div class="col-md-9 col-sm-9 ">
			<div class="column-wrapper--left">
				<div class="bl-quote call-to-action ">
					<h2 class="call-to-action__subtitle">Let's make something great together</h2>
					<p class="call-to-action__title">Get in touch with us and send some basic info for a quick quote
					</p>
				</div>
			</div>

			</div>
			<div class="col-md-3 col-sm-3">
				<div class="column-wrapper--right">
					<div class="bl-quote ">
						<a href="mailto:draw2code@gmail.com" class="ag_btn btn btn-lg btn-lined lined-dark btn--square call-to-action--btn ">draw2code@gmail.com</a>
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
									Draw2Code, Block-D <br>
								DLF IT Park, Chandigarh, 160101, India<br>
									Copyright © 2025 Draw2Code. All Rights Reserved.
							</p>
						</div>
						<div class="col-md-6 col-sm-6">
							<p>
								<a href="tel:(245)410-245-8784"><span>+(91) 93-771-20007</span></a>
								<br>
								<span>
									<a href="mailto:draw2code@gmail.com"><span>draw2code@gmail.com</span></a>
								</span>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4  pt-100 pb-100 dark-bg">
				<div class="footer-last-col social-container">
					<ul class="footer-social">
						<li class="footer-social__item "><a href="https://www.facebook.com/draw2code"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="footer-social__item"><a href="https://twitter.com/draw2code"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="footer-social__item"><a href="https://plus.google.com/u/0/100554868355797924341"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>

</footer>



</div><!-- /.#page_wrapper -->

<a href="#" class="totop">TOP</a> <!--/.totop -->


 <!--Revolution slider script-->

<script>
var revapi1,
tpj=jQuery;

tpj(document).ready(function() {
if(tpj("#rev_slider_1_1").revolution == undefined){
revslider_showDoubleJqueryError("#rev_slider_1_1");
}else{
revapi1 = tpj("#rev_slider_1_1").show().revolution({
	sliderType:"standard",
	jsFileLocation:"addons/assets/js/",
	sliderLayout:"auto",
	dottedOverlay:"none",
	delay:9000,
	navigation: {
		keyboardNavigation:"off",
		keyboard_direction: "horizontal",
		mouseScrollNavigation:"off",
					mouseScrollReverse:"default",
		onHoverStop:"off",
		bullets: {
			enable:true,
			hide_onmobile:true,
			hide_under:1100,
			style:"uranus",
			hide_onleave:false,
			direction:"vertical",
							container:"layergrid",
			h_align:"right",
			v_align:"center",
			h_offset:50,
			v_offset:0,
			space:5,
			tmp:'<span class="tp-bullet-inner"></span>'
		}
	},
	responsiveLevels:[1240,1024,778,480],
	visibilityLevels:[1240,1024,778,480],
	gridwidth:[1600,1024,778,480],
	gridheight:[868,768,960,720],
	lazyType:"smart",
	parallax: {
		type:"scroll",
		origo:"slidercenter",
		speed:400,
		speedbg:0,
		speedls:0,
		levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,55],
	},
	shadow:0,
	spinner:"spinner2",
	stopLoop:"on",
	stopAfterLoops:0,
	stopAtSlide:1,
	shuffle:"off",
	autoHeight:"off",
	disableProgressBar:"on",
	hideThumbsOnMobile:"off",
	hideSliderAtLimit:0,
	hideCaptionAtLimit:0,
	hideAllCaptionAtLilmit:0,
	debugMode:false,
	fallbacks: {
		simplifyAll:"off",
		nextSlideOnWindowFocus:"off",
		disableFocusListener:false,
	}
});
}

});	/*ready*/
</script>



<script src="js/plugins/bootstrap.min.js"></script>

<!--isotope script-->
<script src="addons/isotope/isotope.pkgd.min.js"></script>
<script src="addons/imagesloaded.pkgd.min.js"></script>
<!--popup script-->
<script src="addons/Magnific-Popup/jquery.magnific-popup.js"></script>
<!--count script-->
<script src="addons/jquery.countTo.js"></script>
<!-- Main template script -->
<script src="js/script.js"></script>

</body>
</html>

<!-- Localized -->