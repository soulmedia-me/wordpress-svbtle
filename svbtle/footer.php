<?php $options = get_option ( 'svbtle_options' ); ?>
</section>
<style type="text/css">
	a:hover { color: <?php echo $options['color']; ?>;}
	article blockquote { border-color: <?php echo $options['color']; ?>;}
	figure#user_logo div.pulse { border-color: <?php echo $options['color']; ?>; }
	figure#user_logo div.logo, article a.kudos.completed div.circle div.filled{background-image: url(<?php echo get_template_directory_uri(); ?>/images/icons/<?php echo $options['icon']; ?>_large.png);}
	figure#cover_logo{background-image: url(<?php echo get_template_directory_uri(); ?>/images/icons/<?php echo $options['icon']; ?>_large.png);}
	nav.pagination span.next a, footer#paginate a.back_to_blog { border-color: <?php echo $options['color']; ?>; color: <?php echo $options['color']; ?>;}
	nav.pagination span.next a:hover, nav.pagination span.prev a:hover, footer#paginate a.back_to_blog:hover {border-color:<?php echo $options['color']; ?>;background-color: <?php echo $options['color']; ?>;}
	section#cover{background-color: <?php echo $options['color']; ?>;}
	section#posts.preview header h2 {color: <?php echo $options['color']; ?>;}
	div.pullback a {color: <?php echo $options['color']; ?>; border-color: <?php echo $options['color']; ?>;}
	div.pullback a:hover {border-color: <?php echo $options['color']; ?>;background-color: <?php echo $options['color']; ?>;}
	::-moz-selection { background: <?php echo $options['color']; ?>; color: #fff; text-shadow: none; }
	::selection { background: <?php echo $options['color']; ?>; color: #fff; text-shadow: none; }
</style>
<script>
function bootstrapUser(){
	$.user = {};
	$.user.appdomain = "<?php echo substr_replace(home_url(), '', 0, 7); ?>";
	$.user.cdomain = "<?php echo substr_replace(home_url(), '', 0, 7); ?>";
	$.user.username = "<?php bloginfo( 'name' ); ?>";
	$.user.icon = "<?php echo $options['icon']; ?>";
	$.user.ccolor = "<?php echo substr_replace($options['color'], '', 0, 1); ?>";
}
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/blog.js" type="text/javascript"></script>

</body>
</html>