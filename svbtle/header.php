<!DOCTYPE html>
<html>
<head>
  <title> <?php bloginfo('name'); ?><?php wp_title('|',true); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="<?php bloginfo( 'description' ); ?>"/>
	<style type="text/css">.tk-freight-sans-pro{font-family:"freight-sans-pro",sans-serif;}.tk-proxima-nova{font-family:"proxima-nova",sans-serif;}.tk-ff-meta-web-pro{font-family:"ff-meta-web-pro",sans-serif;}</style>
	<link rel="stylesheet" href="http://scav1.com/wp-content/themes/svbtle/css/fonts.css">
  <link href="<?php bloginfo('rss2_url'); ?>" rel="alternate" title="<?php _e('RSS'); ?>" type="application/rss+xml" />
	<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-precomposed.png" />
  <?php add_action( 'wp_enqueue_scripts', 'main_css' );  ?>
  <?php wp_head(); ?>
	<?php $options = get_option ( 'svbtle_options' ); ?>
  <?php echo $options['google_analytics'];?>

	<style type="text/css">
		a:hover { color: <?php echo $options['color']; ?>;}
		nav.pagination span.next a, footer#paginate a.back_to_blog { border-color: <?php echo $options['color']; ?>; color: <?php echo $options['color']; ?>;}
		section#posts.preview header h2 {color: <?php echo $options['color']; ?>;}		
		div.pullback a {color: <?php echo $options['color']; ?>; border-color: <?php echo $options['color']; ?>;}
		article blockquote, figure#user_logo div.pulse { border-color: <?php echo $options['color']; ?>;}
		figure#user_logo div.logo, article a.kudos.completed div.circle div.filled, figure#cover_logo{background-image: url(<?php echo get_template_directory_uri(); ?>/images/icons/<?php echo $options['icon']; ?>_large.png);}
		nav.pagination span.next a:hover, nav.pagination span.prev a:hover, footer#paginate a.back_to_blog:hover,  div.pullback a:hover{border-color:<?php echo $options['color']; ?>;background-color: <?php echo $options['color']; ?>;}
		section#cover, figure#user_logo div.logo{background-color: <?php echo $options['color']; ?>;}
		::-moz-selection,::selection { background: <?php echo $options['color']; ?>; color: #fff; text-shadow: none; }
	</style>
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