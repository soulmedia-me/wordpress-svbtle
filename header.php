<!DOCTYPE html>
<html>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
	<title><?php bloginfo('name'); ?><?php wp_title('|',true); ?></title>

	<script type="text/javascript">var _sf_startpt=(new Date()).getTime()</script>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="http://scav1.com"/>
	<meta property="og:type" content="website"/>
	<meta property="og:description" content="<?php bloginfo( 'description' ); ?>"/>
	<meta property="og:image" content="http://cargo.dcurt.is/svbtle_logo.png" /> 
	<link href="http://scav1.com/feed" rel="alternate" title="RSS" type="application/rss+xml" />
	<meta name="Description" content="<?php bloginfo( 'description' ); ?>"/>
	<?php add_action( 'wp_enqueue_scripts', 'main_css' );  ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<section id="conductor">
	<header>
		<h1 class="hide"><?php bloginfo( 'name' ); ?></h1>
    		<h2 class="hide"><?php bloginfo( 'description' ); ?></h2>
		<h3 class="date"><?php date_default_timezone_set("America/Chicago"); echo date("F d, Y"); ?></h3>
	</header>