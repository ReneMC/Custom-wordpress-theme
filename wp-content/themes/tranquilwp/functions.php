<?php 

	
	if ( ! isset( $content_width ) ) {
		$content_width = 660;
	}

	function tranquilwp_setup (){

		add_theme_support('automatic-feed-links');
		add_theme_support('title-tag');

		// Register Custom Navigation Walker
		require_once('wp_bootstrap_navwalker.php');

		register_nav_menus( array(
		    'primary' => __( 'Primary Menu', 'tranquilwp' ),
		));
	}

	add_action('after_setup_theme', 'tranquilwp_setup');

	function tranquilwp_scripts (){
		/* add styles */
		wp_enqueue_style('bootstrap-core', get_template_directory_uri() . '/css/bootstrap.min.css');
		wp_enqueue_style('custom', get_template_directory_uri() . '/style.css');

		/* add scripts */
		wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), true);
	}

	add_action('wp_enqueue_scripts', 'tranquilwp_scripts');

	/**
	 * Filter the excerpt "read more" string.
	 * @param string $more "Read more" excerpt string.
	 * @return string (Maybe) modified "read more" excerpt string.
	 */
	function wpdocs_excerpt_more( $more ) {
		return '...';
	}
	add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

	function featureText(){

		if(is_front_page()){

			_e('SILENCE<br> IS GOLDEN.');

		} else if(is_home()) {

			_e('Official blog');

		}
	}

?>