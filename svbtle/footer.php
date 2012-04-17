
</section>
<style type="text/css">
	a:hover { color: #66A3D2;}
	article blockquote { border-color: #66A3D2;}
	figure#user_logo div.pulse { border-color: #66A3D2; }
	figure#user_logo div.logo, article a.kudos.completed div.circle div.filled{background-image: url(<?php echo get_template_directory_uri(); ?>/images/icons/chain_link_large.png);}
	figure#cover_logo{background-image: url(<?php echo get_template_directory_uri(); ?>/images/icons/chain_link_large.png);}
	nav.pagination span.next a, footer#paginate a.back_to_blog { border-color: #66A3D2; color: #66A3D2;}
	nav.pagination span.next a:hover, nav.pagination span.prev a:hover, footer#paginate a.back_to_blog:hover {border-color:#66A3D2;background-color: #66A3D2;}
	section#cover{background-color:#66A3D2;}
	section#posts.preview header h2 {color:#66A3D2;}
	div.pullback a {color:#66A3D2; border-color:#66A3D2;}
	div.pullback a:hover {border-color:#66A3D2;background-color:#66A3D2;}
	::-moz-selection { background: #66A3D2; color: #fff; text-shadow: none; }
	::selection { background: #66A3D2; color: #fff; text-shadow: none; }
</style>
<script>
function bootstrapUser(){
	$.user = {};
	$.user.appdomain = "<?php echo substr_replace(home_url(), '', 0, 7); ?>";
	$.user.cdomain = "<?php echo substr_replace(home_url(), '', 0, 7); ?>";
	$.user.username = "<?php bloginfo( 'name' ); ?>";
	$.user.icon = "chain_link";
	$.user.ccolor = "66A3D2";
}
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/blog.js" type="text/javascript"></script>

</body>
</html>