<?php
require('./wp-blog-header.php');

$article = $_POST['article'];
$cooking = $_POST['cooking'];

$sql = "SELECT meta_value FROM wp_postmeta WHERE post_id = $article AND meta_key = 'wp-svbtle-kudos'";

$kudos = $wpdb->get_var( $wpdb->prepare( $sql ) );

if ( is_null($kudos) ) {
	$kudos = ($kudos + 1);
	$wpdb->insert( 'wp_postmeta',
		array( 'post_id' => $article, 'meta_key' => 'wp-svbtle-kudos', 'meta_value' => $kudos),
		array( '%d', '%s', '%d' )
	);
	echo $kudos;
} else {
	$kudos = ($kudos + 1);
	$wpdb->update( 'wp_postmeta', 
		array( 'meta_value' => $kudos), 
		array( 'post_id' => $article, 'meta_key' => 'wp-svbtle-kudos'), 
		array( '%d' ), 
		array( '%d', '%s' ) 
	);
	echo $kudos;
}

?>