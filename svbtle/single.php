<?php 
get_header();
global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
<?php } ?>
<?php while ( have_posts() ) : the_post() ?>
		<article id="<?php the_ID(); ?>">
			<h2>
				<a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a>
				<span class="anchor"><a href="<?php echo home_url('/'); ?>?p=<?php the_ID(); ?>">&#9875;</a></span>
				<!--Use the anchor image instead of unicode. Comment line above & uncomment line below -->
				<!--<a href="<?php echo home_url('/'); ?>?p=<?php the_ID(); ?>" class="anchor"><img src="<?php echo get_template_directory_uri(); ?>/images/anchor.png" width=15px></a>-->
			</h2>
			<?php the_content( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'hbd-theme' )  ); ?>
			<?php $kudos = get_post_meta($post->ID, 'wp-svbtle-kudos', true); 
						if ($kudos > "") { $kudos = $kudos; } else { $kudos = "0"; } ?>
			<figure class="kudo">	
				<a class="kudos kudoable animate" id="<?php the_permalink(); ?>">
					<div class="circle"><div class="filled">&nbsp;</div></div>
					<p class="count"><?php echo $kudos; ?> <span class="identifier">Kudos</p>
				</a>
				<div class="pbar"><div class="progress">&nbsp;</div></div>
			</figure>
			<h1><?php //echo get_the_category_list(', '); ?></h1>
		</article>
<?php endwhile; ?>
<footer id="paginate">
	<?php single_content_nav( 'nav-below' ); ?>
</footer>
<?php
get_footer(); 
?>