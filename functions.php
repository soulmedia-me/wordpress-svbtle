<?php

function main_css()  
{
	// Register the style like this for a theme:
	wp_register_style( 'style', get_template_directory_uri() . '/style.css', array(), '20120208', 'all' );
  
	// For either a plugin or a theme, you can then enqueue the style:  
	wp_enqueue_style( 'style' );
}

?>