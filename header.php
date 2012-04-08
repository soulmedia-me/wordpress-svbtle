<!DOCTYPE html>
<html>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
	<title><?php bloginfo('name'); ?><?php wp_title('|',true); ?></title>
	<script type="text/javascript">var _sf_startpt=(new Date()).getTime()</script>
	<script type="text/javascript">
		// ganalytics
		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  		})();
 		 var _gaq = _gaq || [];
  		_gaq.push(['_setAccount', 'UA-30642855-1']);
  		_gaq.push(['_setDomainName', 'scav1.com']);
  		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);
	</script>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="<?php echo home_url(); ?>"/>
	<meta property="og:type" content="website"/>
	<meta property="og:description" content="<?php bloginfo( 'description' ); ?>"/>
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/svbtle_logo.png" /> 
	<link href="<?php bloginfo('rss2_url'); ?>" rel="alternate" title="<?php _e('RSS'); ?>" type="application/rss+xml" />
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