<?php

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * Init plugin options to white list our options
 */
function theme_options_init(){
	register_setting( 'sample_options', 'svbtle_options', 'theme_options_validate' );
}

/**
 * Load up the menu page
 */
function theme_options_add_page() {
	add_theme_page( __( 'Svbtle Options', 'wordpress-svbtle' ), __( 'Svbtle Options', 'wordpress-svbtle' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}

/**
 * Create arrays for our select and radio options
 */
$select_options = array(
	'0' => array(
		'value' =>	'0',
		'label' => __( 'Zero', 'wordpress-svbtle' )
	),
	'1' => array(
		'value' =>	'1',
		'label' => __( 'One', 'wordpress-svbtle' )
	),
	'2' => array(
		'value' => '2',
		'label' => __( 'Two', 'wordpress-svbtle' )
	),
	'3' => array(
		'value' => '3',
		'label' => __( 'Three', 'wordpress-svbtle' )
	),
	'4' => array(
		'value' => '4',
		'label' => __( 'Four', 'wordpress-svbtle' )
	),
	'5' => array(
		'value' => '3',
		'label' => __( 'Five', 'wordpress-svbtle' )
	)
);

$radio_options = array(
	'atom' => array(
		'url' => get_template_directory_uri() . '/images/icons/atom_large.png',
		'value' => 'atom',
		'label' => __( 'Atom', 'wordpress-svbtle' )
	),
	'bear' => array(
		'url' => get_template_directory_uri() . '/images/icons/bear_large.png',
		'value' => 'bear',
		'label' => __( 'Bear', 'wordpress-svbtle' )
	),
	'bolt' => array(
		'url' => get_template_directory_uri() . '/images/icons/bolt_large.png',
		'value' => 'bolt',
		'label' => __( 'Bolt', 'wordpress-svbtle' )
	),
	'bullhorn' => array(
		'url' => get_template_directory_uri() . '/images/icons/bullhorn_large.png',
		'value' => 'bullhorn',
		'label' => __( 'Bullhorn', 'wordpress-svbtle' )
	),
	'cassette' => array(
		'url' => get_template_directory_uri() . '/images/icons/cassette_large.png',
		'value' => 'cassette',
		'label' => __( 'Cassette', 'wordpress-svbtle' )
	),
	'cell_phone' => array(
		'url' => get_template_directory_uri() . '/images/icons/cell_phone_large.png',
		'value' => 'cell_phone',
		'label' => __( 'Cell Phone', 'wordpress-svbtle' )
	),
	'chain_link' => array(
		'url' => get_template_directory_uri() . '/images/icons/chain_link_large.png',
		'value' => 'chain_link',
		'label' => __( 'Chain Link', 'wordpress-svbtle' )
	),
	'coffee' => array(
		'url' => get_template_directory_uri() . '/images/icons/coffee_large.png',
		'value' => 'coffee',
		'label' => __( 'Coffee', 'wordpress-svbtle' )
	),
	'disapprove' => array(
		'url' => get_template_directory_uri() . '/images/icons/disapprove_large.png',
		'value' => 'disapprove',
		'label' => __( 'Disapprove', 'wordpress-svbtle' )
	),
	'dog' => array(
		'url' => get_template_directory_uri() . '/images/icons/dog_large.png',
		'value' => 'dog',
		'label' => __( 'Dog', 'wordpress-svbtle' )
	),
	'eye' => array(
		'url' => get_template_directory_uri() . '/images/icons/eye_large.png',
		'value' => 'eye',
		'label' => __( 'Eye', 'wordpress-svbtle' )
	),
	'film' => array(
		'url' => get_template_directory_uri() . '/images/icons/film_large.png',
		'value' => 'film',
		'label' => __( 'Film', 'wordpress-svbtle' )
	),
	'flask' => array(
		'url' => get_template_directory_uri() . '/images/icons/flask_large.png',
		'value' => 'flask',
		'label' => __( 'Flask', 'wordpress-svbtle' )
	),
	'ghost' => array(
		'url' => get_template_directory_uri() . '/images/icons/ghost_large.png',
		'value' => 'ghost',
		'label' => __( 'Ghost', 'wordpress-svbtle' )
	),
	'glasses' => array(
		'url' => get_template_directory_uri() . '/images/icons/glasses_large.png',
		'value' => 'glasses',
		'label' => __( 'Glasses', 'wordpress-svbtle' )
	),
	'hat' => array(
		'url' => get_template_directory_uri() . '/images/icons/hat_large.png',
		'value' => 'hat',
		'label' => __( 'Hat', 'wordpress-svbtle' )
	),
	'man_stairs' => array(
		'url' => get_template_directory_uri() . '/images/icons/man_stairs_large.png',
		'value' => 'man_stairs',
		'label' => __( 'Man Stairs', 'wordpress-svbtle' )
	),
	'mine_cross' => array(
		'url' => get_template_directory_uri() . '/images/icons/mine_cross_large.png',
		'value' => 'mine_cross',
		'label' => __( 'Mine Cross', 'wordpress-svbtle' )
	),
	'motorcycle' => array(
		'url' => get_template_directory_uri() . '/images/icons/motorcycle_large.png',
		'value' => 'motorcycle',
		'label' => __( 'Motorcycle', 'wordpress-svbtle' )
	),
	'pan_ui' => array(
		'url' => get_template_directory_uri() . '/images/icons/pan_ui_large.png',
		'value' => 'pan_ui',
		'label' => __( 'Pan UI', 'wordpress-svbtle' )
	),
	'radio' => array(
		'url' => get_template_directory_uri() . '/images/icons/radio_large.png',
		'value' => 'radio',
		'label' => __( 'Radio', 'wordpress-svbtle' )
	),
	'robot_square' => array(
		'url' => get_template_directory_uri() . '/images/icons/robot_square_large.png',
		'value' => 'robot_square',
		'label' => __( 'Robot Square', 'wordpress-svbtle' )
	)
);


/**
 * Create the options page
 */
function theme_options_do_page() {
	global $select_options, $radio_options;

	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;

	?>
	<script type="text/javascript">
		jQuery(document).ready(function($){
			$('#color_picker_color1').farbtastic('#color1');            
		});
	</script>
	
	<div class="wrap">
		<?php screen_icon(); echo "<h2>" . get_current_theme() . __( ' Options', 'wordpress-svbtle' ) . "</h2>"; ?>

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Options saved', 'wordpress-svbtle' ); ?></strong></p></div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields( 'sample_options' ); ?>
			<?php $options = get_option( 'svbtle_options' ); ?>

			<table class="form-table">

				<?php
				/**
				 * A sample checkbox option
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Display anchors?', 'wordpress-svbtle' ); ?></th>
					<td>
						<input id="svbtle_options[anchor]" name="svbtle_options[anchor]" type="checkbox" value="1" <?php checked( '1', $options['anchor'] ); ?> />
					</td>
				</tr>

				<?php
				/**
				 * A sample text input option
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Blog color', 'wordpress-svbtle' ); ?></th>
					<td>
						<input id="color1" class="regular-text" type="text" name="svbtle_options[color]" value="<?php esc_attr_e( $options['color'] ); ?>" /><div id="color_picker_color1"></div>
					</td>
				</tr>

				<?php
				/**
				 * A sample select input option
				 *//*
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Select input', 'wordpress-svbtle' ); ?></th>
					<td>
						<select name="svbtle_options[selectinput]">
							<?php
								$selected = $options['selectinput'];
								$p = '';
								$r = '';

								foreach ( $select_options as $option ) {
									$label = $option['label'];
									if ( $selected == $option['value'] ) // Make default first in list
										$p = "\n\t<option style=\"padding-right: 10px;\" selected='selected' value='" . esc_attr( $option['value'] ) . "'>$label</option>";
									else
										$r .= "\n\t<option style=\"padding-right: 10px;\" value='" . esc_attr( $option['value'] ) . "'>$label</option>";
								}
								echo $p . $r;
							?>
						</select>
					</td>
				</tr>

				<?php */
				/**
				 * A sample of radio buttons
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Blog icon', 'wordpress-svbtle' ); ?></th>
					<td>
						<fieldset><legend class="screen-reader-text"><span><?php _e( 'Radio buttons', 'wordpress-svbtle' ); ?></span></legend>
						<?php
							if ( ! isset( $checked ) )
								$checked = '';
							foreach ( $radio_options as $option ) {
								$radio_setting = $options['icon'];

								if ( '' != $radio_setting ) {
									if ( $options['icon'] == $option['value'] ) {
										$checked = "checked=\"checked\"";
									} else {
										$checked = '';
									}
								}
								?>
								<label class="description">
									<input type="radio" name="svbtle_options[icon]" value="<?php esc_attr_e( $option['value'] ); ?>" <?php echo $checked; ?> />
									<span style="display:inline-block;height:50px;background-color:#000;">
										<img src="<?php echo esc_url( $option['url'] ); ?>" width="50" height="50" alt="" />
									</span>
								</label>
								<?php
							}
						?>
						</fieldset>
					</td>
				</tr>

				<?php
				/**
				 * A sample textarea option
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Google Analytics', 'wordpress-svbtle' ); ?></th>
					<td>
						<textarea id="svbtle_options[google_analytics]" class="large-text" cols="50" rows="10" name="svbtle_options[google_analytics]"><?php echo esc_textarea( $options['google_analytics'] ); ?></textarea>
					</td>
				</tr>
			</table>

			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'wordpress-svbtle' ); ?>" />
			</p>
		</form>
	</div>
	<?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function theme_options_validate( $input ) {
	global $select_options, $radio_options;

	// Our checkbox value is either 0 or 1
	if ( ! isset( $input['anchor'] ) )
		$input['anchor'] = null;
	$input['anchor'] = ( $input['anchor'] == 1 ? 1 : 0 );

	// Say our text option must be safe text with no HTML tags
	$input['color'] = wp_filter_nohtml_kses( $input['color'] );

	// Our select option must actually be in our array of select options
	if ( ! array_key_exists( $input['selectinput'], $select_options ) )
		$input['selectinput'] = null;

	// Our radio option must actually be in our array of radio options
	if ( ! isset( $input['icon'] ) )
		$input['icon'] = null;
	if ( ! array_key_exists( $input['icon'], $radio_options ) )
		$input['icon'] = null;

	// Say our textarea option must be safe text with the allowed tags for posts
	//$input['google_analytics'] = wp_filter_post_kses( $input['google_analytics'] );
	$input['google_analytics'] = $input['google_analytics'] ;

	return $input;
}

?>