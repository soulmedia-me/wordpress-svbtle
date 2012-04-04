<?php

function main_css()  
{
	// Register the style like this for a theme:
	wp_register_style( 'style', get_template_directory_uri() . '/style.css', array(), '20120208', 'all' );
  
	// For either a plugin or a theme, you can then enqueue the style:  
	wp_enqueue_style( 'style' );
}

function widgets_init() {
register_sidebar(array(
'name' => __( 'Sidebar', 's' ),
'id' => 'sidebar',
'before_widget' => '<li>',
'after_widget' => '</li>',
'before_title' => '',
'after_title' => '',
));
}
add_action( 'init', 'widgets_init' );

function content_nav( $nav_id ) {
  global $wp_query;
  if ( $wp_query->max_num_pages > 1 ) : ?>
	<li class="pagination padded">
		<nav class="pagination">
			<span class="prev"><?php previous_posts_link( 'Previous' ); ?></span>
			<span class="next"><?php next_posts_link( __( 'Next') ); ?></span>
  	</nav>
	</li>
  <?php endif;
}
?>