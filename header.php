<!DOCTYPE html>
<!--[if lte IE 9 ]> <html class="no-js ie lte-ie9 ie9" <?php language_attributes( ); ?>> <![endif]-->
<!--[if !(IE)]><! -->
<html class="fonts-loading no-js" <?php language_attributes( ); ?>>
<!--<![endif]-->
<head>
	<script type="text/javascript">
		//<![CDATA[
		(function(){
			var c = document.documentElement.className;
			c = c.replace(/no-js/, 'js');
			document.documentElement.className = c;
		})();
		//]]>
	</script>

    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="initial-scale=1.0" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- Web App favicons from /<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/favicons/index_hd.html -->
	<link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/favicons/manifest.json">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="theme-color" content="#ffffff">
	<meta name="application-name" content="BFF">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/favicons/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/favicons/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/favicons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/favicons/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/favicons/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/favicons/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/favicons/apple-touch-icon-180x180.png">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta name="apple-mobile-web-app-title" content="BFF">
	<link rel="icon" type="image/png" sizes="228x228" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/favicons/coast-228x228.png">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/favicons/mstile-144x144.png">
	<meta name="msapplication-config" content="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/favicons/browserconfig.xml">
	<link rel="yandex-tableau-widget" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/favicons/yandex-browser-manifest.json">

	<!-- Standard favicons from /assets/img/favicons/index_sd.html -->
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/favicons/favicon-16x16.png">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/img/favicons/favicon.ico">

	<!--[if lte IE 9]>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/js/vendor_ie/matchMedia-polyfill.js"></script>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/js/vendor_ie/matchMedia.addListener.js"></script>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/js/vendor_ie/placeholders.min.js"></script>
	<![endif]-->
	<!--[if lt IE 9]>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/js/vendor_ie/html5shiv.min.js"></script>
	<![endif]-->
	<!--[if lte IE 8]>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/js/vendor_ie/selectivizr.js"></script>
	<![endif]-->

	<style>
		.cssloading__overlay {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: #fff;
			opacity: 1;
			z-index: 10001;
			transition: opacity .25s ease, z-index .25s ease .5s, width .25s ease .5s, height .25s ease .25s, visibility .25s ease .25s;
		}
	</style>

	<link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/app.css" as="style" onload="this.rel='stylesheet'">
	<noscript>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/app.css">
	</noscript>

	<script>
	/*! loadCSS. [c]2017 Filament Group, Inc. MIT License */
	!function(a){"use strict";var b=function(b,c,d){function e(a){return h.body?a():void setTimeout(function(){e(a)})}function f(){i.addEventListener&&i.removeEventListener("load",f),i.media=d||"all"}var g,h=a.document,i=h.createElement("link");if(c)g=c;else{var j=(h.body||h.getElementsByTagName("head")[0]).childNodes;g=j[j.length-1]}var k=h.styleSheets;i.rel="stylesheet",i.href=b,i.media="only x",e(function(){g.parentNode.insertBefore(i,c?g:g.nextSibling)});var l=function(a){for(var b=i.href,c=k.length;c--;)if(k[c].href===b)return a();setTimeout(function(){l(a)})};return i.addEventListener&&i.addEventListener("load",f),i.onloadcssdefined=l,l(f),i};"undefined"!=typeof exports?exports.loadCSS=b:a.loadCSS=b}("undefined"!=typeof global?global:this);
	/*! loadCSS rel=preload polyfill. [c]2017 Filament Group, Inc. MIT License */
	!function(a){if(a.loadCSS){var b=loadCSS.relpreload={};if(b.support=function(){try{return a.document.createElement("link").relList.supports("preload")}catch(b){return!1}},b.poly=function(){for(var b=a.document.getElementsByTagName("link"),c=0;c<b.length;c++){var d=b[c];"preload"===d.rel&&"style"===d.getAttribute("as")&&(a.loadCSS(d.href,d,d.getAttribute("media")),d.rel=null)}},!b.support()){b.poly();var c=a.setInterval(b.poly,300);a.addEventListener&&a.addEventListener("load",function(){b.poly(),a.clearInterval(c)}),a.attachEvent&&a.attachEvent("onload",function(){a.clearInterval(c)})}}}(this);
	</script>

	<!-- jQuery from official WordPress Core -->
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/js/vendor_async/jquery.js"></script>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!--[if lte IE 9]>
		<div class="message message__browserhappy">
			<p>
			You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a> to improve your experience.
			</p>
			<p>
			<button><span class="button-icon icon-close"></span>&nbsp;Close</button>
			</p>
		</div>
	<![endif]-->
	<div class="cssloading__overlay"></div>

	<!-- <nav id="menu" class="menu" role="navigation" tabindex="-1" aria-label="Navigation Principal">
		<?php // wp_nav_menu( array( 'theme_location'  => 'primary', 'container' => '', 'menu_class' => 'menu__list', ) ); ?>
	</nav> -->