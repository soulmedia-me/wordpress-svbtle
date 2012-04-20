<!DOCTYPE html>
<html>
<head>
  <title> <?php bloginfo('name'); ?><?php wp_title('|',true); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="<?php bloginfo('rss2_url'); ?>" rel="alternate" title="<?php _e('RSS'); ?>" type="application/rss+xml" />
  <meta name="description" content="<?php bloginfo( 'description' ); ?>"/>
  <meta name="generator" content="<?php echo substr_replace(home_url(), '', 0, 7); ?>" />
	<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-precomposed.png" />
  <?php add_action( 'wp_enqueue_scripts', 'main_css' );  ?>
  <?php wp_head(); ?>
	<?php $options = get_option ( 'svbtle_options' ); ?>
  <?php echo $options['google_analytics'];?>
</head>
<body>
  <section id="cover" class="fixed">
  <figure id="cover_logo">
    <div class="logo">&nbsp;</div>
  </figure>
  <h1 id="cover_user"><a href="/"><?php bloginfo( 'name' ); ?></a></h1>
</section>

<section id="sidebar" class="fixed">
  <figure id="user_logo">
    <a href="/">
      <div class="pulse animate">&nbsp;</div>
      <div class="logo">&nbsp;</div>
    </a>
  </figure>

  <div class="user_meta">
    <h1 id="user"><a href="/" class=""><?php bloginfo( 'name' ); ?></a></h1>
    <h2><?php bloginfo( 'description' ); ?></h2>
    <ul id="linkbar" class="clearfix">
			<?php wp_nav_menu(array('menu' => 'custom_menu')); ?>
    </ul>
<?php //get_sidebar(); ?>
  </div>
  <a href="http://svbtle.com" class="network_link">
    Original design by <span>Svbtle</span>.
  </a>
</section>

<section id="posts">
	<header>
		<h3 class="date"><?php date_default_timezone_set("America/Chicago"); echo date("F d, Y"); ?></h3>
	</header>