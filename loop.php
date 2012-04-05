<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
<?php } ?>
	<ul class="posts">	
<?php while ( have_posts() ) : the_post() ?>
		<li <?php post_class(); ?>>
		<article>
			<h2>
				<a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a>
				<a href="http://scav1.com/?p=<?php the_ID(); ?>" class="anchor">⚓</a>
			</h2>
			<?php the_content( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'hbd-theme' )  ); ?>
			

			<figure class="hover_select">	
				<a href="<?php the_permalink(); ?>#kudos" class="kudos">
					<div class="circle">
						<div class="filled">&nbsp;</div>
					</div>
					<p class="kcount"><?php echo get_post_meta($post->ID, 'wp-svbtle-kudos', true); ?></p>
					<p class="identifier">KUDOS</p>
					<span class="extid hide"><?php the_ID(); ?></span>
					<span class="permalink hide"><?php the_permalink(); ?></span>
				</a>
			</figure>
			<h1><?php //echo get_the_category_list(', '); ?></h1>
		</article>
		</li>
<?php endwhile; ?>
<?php content_nav( 'nav-below' ); ?>
</ul>