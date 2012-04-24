<?php $options = get_option ( 'svbtle_options' ); ?>
</section>

<script data-cfasync="false" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<script>
function buildUser(){
	$.user = {};
	$.user.appdomain = "<?php echo substr_replace(home_url(), '', 0, 7); ?>";
	$.user.cdomain = "<?php echo substr_replace(home_url(), '', 0, 7); ?>";
	$.user.username = "<?php bloginfo( 'name' ); ?>";
	$.user.icon = "<?php echo $options['icon']; ?>";
	$.user.ccolor = "<?php echo substr_replace($options['color'], '', 0, 1); ?>";
}
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/blog.js" type="text/javascript"></script>
<?php wp_footer(); ?>
</body>
</html>