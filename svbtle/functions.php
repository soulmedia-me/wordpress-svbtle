<?php

function main_css()  
{
	wp_register_style( 'style', get_template_directory_uri() . '/style.css', array(), '20120417', 'all' );

	wp_enqueue_style( 'style' );
}

/*function widgets_init() {
	register_sidebar(array(
		'name' => __( 'Sidebar', 's' ),
		'id' => 'sidebar',
		'before_widget' => '<li>',
		'after_widget' => '</li>',
		'before_title' => '',
		'after_title' => '',
	));
}
add_action( 'init', 'widgets_init' );*/

function content_nav( $nav_id ) {
	global $wp_query;
		if ( $wp_query->max_num_pages > 1 ) : ?>
	<nav class="pagination">
		<span class="prev"><?php previous_posts_link( '←   Newer' ); ?></span>
		<span class="next"><?php next_posts_link( __( 'Continue   →') ); ?></span>
  </nav>
		<?php endif;
}

function register_custom_menu() {
	register_nav_menu('custom_menu', __('Svbtle Menu'));
}
add_action('init', 'register_custom_menu');
?>