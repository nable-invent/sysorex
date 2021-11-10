<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Sysorex Innovator Edge </title>
	<style>
		div.fixed{
			position: fixed;
			bottom: 0;
			right: 0;
			width: 300px;
			height:42px;
			background-color:green;
			color:#ffffff;
			text-align:center;
			align-items:center;
			z-index: 9;
		}
		.avatar {
  vertical-align: middle;
  width: 150px;
  height: 150px;
  border-radius: 50%;
}
	
		/* Popup container - can be anything you want */
		.popup {
		  position: relative;
		  display: inline-block;
		  cursor: pointer;
		  -webkit-user-select: none;
		  -moz-user-select: none;
		  -ms-user-select: none;
		  user-select: none;
		}
		
		/* The actual popup */
		.popup .popuptext {
		  visibility: hidden;
		  width: 160px;
		  background-color: #555;
		  color: #fff;
		  text-align: center;
		  border-radius: 6px;
		  padding: 8px 0;
		  position: absolute;
		  z-index: 1;
		  bottom: 125%;
		  left: 50%;
		  margin-left: -80px;
		}
		
		/* Popup arrow */
		.popup .popuptext::after {
		  content: "";
		  position: absolute;
		  top: 100%;
		  left: 50%;
		  margin-left: -5px;
		  border-width: 5px;
		  border-style: solid;
		  border-color: #555 transparent transparent transparent;
		}
		
		/* Toggle this class - hide and show the popup */
		.popup .show {
		  visibility: visible;
		  -webkit-animation: fadeIn 1s;
		  animation: fadeIn 1s;
		}
		
		/* Add animation (fade in the popup) */
		@-webkit-keyframes fadeIn {
		  from {opacity: 0;} 
		  to {opacity: 1;}
		}
		
		@keyframes fadeIn {
		  from {opacity: 0;}
		  to {opacity:1 ;}
		}
		.mt-5{
		margin-top: 2.5rem;
		
	}
	.text-center{
		text-align: center;
	}
    .popover__title {
      font-size: 24px;
      line-height: 36px;
      text-decoration: none;
      /* color: rgb(228, 68, 68); */
      /* text-align: center; */
      /* padding: 15px 0; */
    }
    
    .popover__wrapper {
      position: relative;
      /* margin-top: 1.5rem; */
      display: inline-block;
    }
    .popover__content {
      opacity: 0;
      visibility: hidden;
      position: absolute;
      /* left: -150px; */
      top:10px;
      /* right:-50%; */
      transform: translate(0, 10px);
      background-color: #ffffff;
      padding: 1.5rem;
      box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
      width: 100%;
    }
    .popover__content:before {
      position: absolute;
      z-index: -1;
      content: "";
      right: calc(50% - 10px);
      top: -8px;
      border-style: solid;
      border-width: 0 10px 10px 10px;
      border-color: transparent transparent #e9e9e9 transparent;
      transition-duration: 0.3s;
      transition-property: transform;
    }
    .popover__wrapper:hover .popover__content {
      z-index: 10;
      opacity: 1;
      visibility: visible;
      transform: translate(0, 0px);
      transition: all 0.5s cubic-bezier(0.75, -0.02, 0.2, 0.97);
    }
    .popover__message {
      text-align: center;
    }

    /*  rebon*/
    .box {
  /*width: 200px; height: 300px;*/
  position: relative;
  /*border: 1px solid #BBB;*/
  /*background: #EEE;*/
}
.ribbon {
  position: absolute;
  left: -5px; top: -5px;
  z-index: 1;
  overflow: hidden;
  width: 75px; height: 75px;
  text-align: right;
}
.ribbon span {
  font-size: 10px;
  font-weight: bold;
  color: #FFF;
  text-transform: uppercase;
  text-align: center;
  line-height: 20px;
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  width: 100px;
  display: block;
  background: #79A70A;
  background: linear-gradient(#F70505 0%, #8F0808 100%);
  box-shadow: 0 3px 10px -5px rgba(0, 0, 0, 1);
  position: absolute;
  top: 19px; left: -21px;
}
.ribbon span::before {
  content: "";
  position: absolute; left: 0px; top: 100%;
  z-index: -1;
  border-left: 3px solid #8F0808;
  border-right: 3px solid transparent;
  border-bottom: 3px solid transparent;
  border-top: 3px solid #8F0808;
}
.ribbon span::after {
  content: "";
  position: absolute; right: 0px; top: 100%;
  z-index: -1;
  border-left: 3px solid transparent;
  border-right: 3px solid #8F0808;
  border-bottom: 3px solid transparent;
  border-top: 3px solid #8F0808;
}
.quotes {
  font-size: 24px;
}

@media screen and (max-width: 720px) {
    .d-lg-none {
        display: none !important;
    }
}
@media screen and (min-width: 721px) {
    .d-lg-show {
        display: none !important;
    }
}
/*.ribbon span::before {*/
/*  content: "";*/
/*  position: absolute; left: 0px; top: 100%;*/
/*  z-index: -1;*/
/*  border-left: 3px solid #8F0808;*/
/*  border-right: 3px solid transparent;*/
/*  border-bottom: 3px solid transparent;*/
/*  border-top: 3px solid #8F0808;*/
/*}*/
/*.ribbon span::after {*/
/*  content: "";*/
/*  position: absolute; right: 0px; top: 100%;*/
/*  z-index: -1;*/
/*  border-left: 3px solid transparent;*/
/*  border-right: 3px solid #8F0808;*/
/*  border-bottom: 3px solid transparent;*/
/*  border-top: 3px solid #8F0808;*/
/*}*/


		</style>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/site/");?>css/theme-styles.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/site/");?>css/blocks.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/site/");?>css/widgets.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/site/");?>css/plugins/ion.rangeSlider.css">


	<!--External fonts-->

	<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Paaji" rel="stylesheet">

	<!-- Styles for Plugins -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/site/");?>css/plugins/swiper.min.css">

	<!--Styles for RTL-->

	<!--<link rel="stylesheet" type="text/css" href="css/rtl.css">-->

	<!--Favicon-->
	<link rel="shortcut icon" type="image/jpg" href="<?php echo base_url("assets/site/");?>img/sysorex_fav.jpg"/>

	<!-- my stylesheets -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/site/");?>css/app-main.css">

</head>


<body class="crumina-grid" style="overflow-x: hidden;width: 100%;">

	<!-- Preloader -->

	<!-- <div id="hellopreloader" style="display: block; position: fixed;z-index: 99999;top: 0;left: 0;width: 100%;height: 100%;min-width: 100%;background: #66b5ff url(svg/preload.svg) center center no-repeat;background-size: 41px;opacity: 1;"></div> -->

	<!-- ... end Preloader -->


	<!-- Header -->

	<header class="header header--menu-rounded header--blue-lighteen" id="site-header">


		<div class="top-bar top-bar-dark">
			<div class="container">

				<div class="top-bar-contact">
				

					<div class="contact-item">
						<span>Monday - Saturday</span> 09:00 - 17:00
					</div>

					<div class="contact-item">
						<svg class="utouch-icon utouch-icon-telephone-keypad-with-ten-keys">
							<use xlink:href="#utouch-icon-telephone-keypad-with-ten-keys"></use>
						</svg>
						<span>+91- 7880118100</span>
					</div>

					<div class="contact-item">
						<svg class="utouch-icon utouch-icon-letter">
							<use xlink:href="#utouch-icon-letter"></use>
						</svg>
						<a href="#">info@sysorexedge.com</a>
					</div>

				</div>

				<div class="follow_us">
					<span>Follow us:</span>
					<div class="socials">

						<a  href="https://www.facebook.com/sysorexedge" target="_blank" class="social__item">
							<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
								fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round"
								stroke-miterlimit="1.414">
								<path
									d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0"
									fill-rule="nonzero" />
							</svg>
						</a>

						<a href="https://twitter.com/sys0rex" target="_blank" class="social__item">
							<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
								fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round"
								stroke-miterlimit="1.414">
								<path
									d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z"
									fill-rule="nonzero" />
							</svg>
						</a>

						<a href="https://www.linkedin.com/in/sysorex-innovator-edge-1180a5190/" target="_blank" class="social__item">
							<!--<svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"-->
							<!--	fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round"-->
							<!--	stroke-miterlimit="1.414">-->
							<!--	<path-->
							<!--		d="M8.16 6.857V9.6h4.537c-.183 1.177-1.37 3.45-4.537 3.45-2.73 0-4.96-2.26-4.96-5.05s2.23-5.05 4.96-5.05c1.554 0 2.594.66 3.19 1.233l2.17-2.092C12.126.79 10.32 0 8.16 0c-4.423 0-8 3.577-8 8s3.577 8 8 8c4.617 0 7.68-3.246 7.68-7.817 0-.526-.057-.926-.126-1.326H8.16z" />-->
							<!--</svg>'-->
							<svg class="utouch-icon"  viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M13.632 13.635h-2.37V9.922c0-.886-.018-2.025-1.234-2.025-1.235 0-1.424.964-1.424 1.96v3.778h-2.37V6H8.51v1.04h.03c.318-.6 1.092-1.233 2.247-1.233 2.4 0 2.845 1.58 2.845 3.637v4.188zM3.558 4.955c-.762 0-1.376-.617-1.376-1.377 0-.758.614-1.375 1.376-1.375.76 0 1.376.617 1.376 1.375 0 .76-.617 1.377-1.376 1.377zm1.188 8.68H2.37V6h2.376v7.635zM14.816 0H1.18C.528 0 0 .516 0 1.153v13.694C0 15.484.528 16 1.18 16h13.635c.652 0 1.185-.516 1.185-1.153V1.153C16 .516 15.467 0 14.815 0z" fill-rule="nonzero"/></svg>
						</a>

						<a href="https://www.youtube.com/channel/UCTkKglGI1ehWdionKN_PtCg" target="_blank" class="social__item">
							<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
								fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round"
								stroke-miterlimit="1.414">
								<path
									d="M0 7.345c0-1.294.16-2.59.16-2.59s.156-1.1.636-1.587c.608-.637 1.408-.617 1.764-.684C3.84 2.36 8 2.324 8 2.324s3.362.004 5.6.166c.314.038.996.04 1.604.678.48.486.636 1.588.636 1.588S16 6.05 16 7.346v1.258c0 1.296-.16 2.59-.16 2.59s-.156 1.102-.636 1.588c-.608.638-1.29.64-1.604.678-2.238.162-5.6.166-5.6.166s-4.16-.037-5.44-.16c-.356-.067-1.156-.047-1.764-.684-.48-.487-.636-1.587-.636-1.587S0 9.9 0 8.605v-1.26zm6.348 2.73V5.58l4.323 2.255-4.32 2.24z" />
							</svg>
						</a>

					</div>
				</div>

				<a href="#" class="top-bar-close" id="top-bar-close-js">
					<svg class="utouch-icon utouch-icon-cancel-1">
						<use xlink:href="#utouch-icon-cancel-1"></use>
					</svg>
				</a>

			</div>
		</div>
		<!--<a href="">-->
            <div class="marquee-bg-dark" style="padding:2px 0;">
    			<marquee behavior="" direction="">
    			    
    			    <h6 class="text-neon-light" style="margin:0; display:inline;">
    			        <!--<a href="<?php echo base_url('web/courses');?>"><span class="btn btn--green" >Visit Now</span> Announcement 1: - Registration started for Offline Vocational/Industrial Training at Bilaspur office. Last date of registration 23 August, 2021. </a>-->
    			        <a href="<?php echo base_url('web/courses');?>"><span class="btn btn--green" >Visit Now</span> Last date of registration extended for Offline and Online Vocational/Industrial Training 07 September, 2021. </a>
    			    </h6>
    			</marquee>
    		</div>
		<!--</a>-->
		
		<div class="header-lines-decoration">
			<span class="bg-secondary-color"></span>
			<span class="bg-blue"></span>
			<span class="bg-blue-light"></span>
			<span class="bg-orange-light"></span>
			<span class="bg-red"></span>
			<span class="bg-green"></span>
			<span class="bg-secondary-color"></span>
		</div>

		<div class="container">

			<a href="#" id="top-bar-js" class="top-bar-link"><svg class="utouch-icon utouch-icon-arrow-top">
					<use xlink:href="#utouch-icon-arrow-top"></use>
				</svg></a>

			<div class="header-content-wrapper">

				<div class="site-logo">
					<a href="<?php echo base_url();?>" class="full-block"></a>
					<img src="<?php echo base_url("assets/site/");?>img/logo/sysorex-iso.png" alt="Sysorex innovator edge">
				</div>

				<nav id="primary-menu" class="primary-menu">

					<!-- menu-icon-wrapper -->

					<a href='javascript:void(0)' id="menu-icon-trigger" class="menu-icon-trigger showhide">
						<span class="showhide-fix"></span>
						<span class="mob-menu--title">Menu</span>
						<span id="menu-icon-wrapper" class="menu-icon-wrapper">
							<svg width="1000px" height="1000px">
								<path id="pathD"
									d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800">
								</path>
								<path id="pathE" d="M 300 500 L 700 500"></path>
								<path id="pathF"
									d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200">
								</path>
							</svg>
						</span>
					</a>

					<ul class="primary-menu-menu">
						<li class="menu-item-has-children">
							<a href="<?php echo base_url();?>">Home</a>
						</li>

						<!-- Company menu item -->
						<li class="">
							<a href="<?php echo base_url('web/about_us');?>">About US</a>
							<ul class="sub-menu">
								<li><a href="<?php echo base_url('web/about_us');?>#company-overview">
									Company overview
								</a></li>
								<!--<li>-->
								<!--	<a href="<?php echo base_url('web/about_us');?>#clients">-->
								<!--		Clients-->
								<!--	</a>-->
								<!--</li>-->
								<li>
									<a href="<?php echo base_url('web/about_us');?>#our-people">
										Our people
									</a>
								</li>
        <!--                        <li>-->
								<!--	<a href="<?php echo base_url('web/events');?>">-->
								<!--		Career-->
								<!--	</a>-->
								<!--</li>-->
							</ul>
						</li>

                        <li class="">
							<a >Solutions</a>
							<ul class="sub-menu">
								<li><a href="<?php echo base_url('web/teamextension');?>">
									Team Extension
								</a></li>
								<li>
									<a href="<?php echo base_url('web/softwaredevelopment');?>">
										Software Development
									</a>
								</li>
							</ul>
						</li>
						
                        <li class="">
							<a >Expertise</a>
							<ul class="sub-menu">
							    <li><a href="<?php echo base_url('web/industry');?>">Industries</a></li>
								<li><a href="<?php echo base_url('web/appDeveloper');?>">
									App Development
								</a></li>
								<li>
									<a href="<?php echo base_url('web/bpt');?>">
										Business Process Technology
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('web/bpo');?>">
										BPO's
									</a>
								</li>
                                <li>
									<a href="<?php echo base_url('web/Devops');?>">
										Dev Ops
									</a>
								</li>
								 <li>
									<a href="<?php echo base_url('web/productengineering');?>">
										Product Engineering
									</a>
								</li>
							</ul>
						</li>
						 <li class="">
							<a >Products</a>
							<ul class="sub-menu">
							    <li><a href="http://poppos.io">POPPOS</a></li>
								<li><a href="http://stockcounter.sysorexworld.com">
								Stock Counter
								</a></li>
								
							</ul>
						</li>
						
						<!--<li class="">-->
						<!--	<a href="<?php echo base_url('web/events');?>">Events & News</a>-->
						<!--	<ul class="sub-menu">-->
						<!--		<li class="menu-item-has-children">-->
						<!--			<a href="<?php echo base_url('web/events');?>#latest-event">-->
						<!--				Latest events-->
						<!--			</a>-->
									
						<!--		</li>-->

						<!--	</ul>-->
						<!--</li>-->

						<li class="">
							<a href="">SIE Academy</a>
							<ul class="sub-menu">
							    <li><a href="<?php echo base_url('web/training_details');?>">Online training courses</a></li>
								<li><a href="<?php echo base_url('web/courses');?>">Offline training on premises</a></li>
								<li><a href="<?php echo base_url('web/softwaretrainer');?>">Visiting Software Trainer</a></li>
							</ul>
						</li>
						<li class="">
							<a href="<?php echo base_url('web/contactus');?>">Contact us</a>
						</li>
						
					</ul>
					
					<div class="search-standard">
						<form id="search-header" name="form-search-header" method="post">
							<div class="typeahead__container">
								<div class="typeahead__field">

									<span class="typeahead__query">
										<input class="js-typeahead" name="search"
											placeholder="What are you looking for?" autocomplete="off" type="search"
											autofocus>
									</span>
									<button type="submit" class="form-icon">
										<svg class="utouch-icon utouch-icon-search">
											<use xlink:href="#utouch-icon-search"></use>
										</svg>
									</button>
									<span class="close js-popup-clear-input form-icon">
										<svg class="utouch-icon utouch-icon-cancel-1">
											<use xlink:href="#utouch-icon-cancel-1"></use>
										</svg>
									</span>

								</div>
							</div>
						</form>
					</div>
				</nav>

			</div>

		</div>

	</header>
	
    <div style="height:5vh;"></div>

	