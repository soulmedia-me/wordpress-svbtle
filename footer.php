</section>
<header id="simple"> 
	<h1><a href="/"><?php bloginfo( 'name' ); ?></a></h1>
	<h2><?php bloginfo( 'description' ); ?></h2>
	<ul id="user_info">
		<?php wp_nav_menu(array('menu' => 'custom_menu')); ?>
	</ul>
<?php //get_sidebar(); ?>
	<p class="networkify" style="color: #777">Original design by <a href="http://svbtle.com">Svbtle</a>.</p>
	<figure id="logo_blog">
		<a href="/" style="background-image: url(http://scav1.com/wp-content/themes/obtvse/images/chain_link.png);">SCAVONE</a>
		<span class="dot_pulse"></span>
	</figure>
</header>

<aside id="network_blog" class="start">
	<a href="http://wordpress.org">
		<h4>Wordpress</h4>
	</a>
</aside>
<div class="identify">
	<h3 style="background-image: url(http://scav1.com/wp-content/themes/obtvse/images/chain_link_large.png);">&nbsp;</h3>
	<p class="name"><?php bloginfo( 'name' ); ?></p>
</div>

<nav id="service_hook">
	<a href="?" style="background-image: url(http://scav1.com/wp-content/themes/obtvse/images/bolt_large.png); background-size: 100%;">Service Name</a>
</nav>

<ul id="magic_bar">
	<li class="triangle">&nbsp;</li>
	<li class="catch"><p><?php bloginfo( 'name' ); ?></p></li>	
	<li class="photo">&nbsp;</li>	
	<li class="login"><a href="http://scav1.com/wp-admin" class="login">Log in</a></li>
</ul>
<script>
var username = "<?php bloginfo( 'name' ); ?>";
var custom_domain = "scav1.com";
var appdomain = "scav1.com";
var color = "66A3D2";
</script>

<style>
a:hover, article h2 a:hover {color: #66A3D2;}
a.buttonize:hover {background-color: #66A3D2;}
ul li article blockquote {border-color: #66A3D2;}
header#simple span.dot_pulse {border: 10px solid #66A3D2;}
aside#network_blog.start {background-color: #66A3D2;}
</style>

<!--<script src="http://scav1.com/wp-content/themes/obtvse/build.blog.js" type="text/javascript"></script>-->
<script src="http://scav1.com/wp-content/themes/obtvse/s1.js" type="text/javascript"></script>
</body>
</html>