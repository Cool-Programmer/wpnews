<?php
	function wn_theme_setup()
	{
		register_nav_menus([
			'primary' => __('Primary Menu')
		]);

		add_theme_support('post-thumbnails');

		add_image_size('news-thumb', 400, 200);
	}

	add_action('after_setup_theme', 'wn_theme_setup');



	// Set new excerpt length
	function set_excerpt_length()
	{
		return 20;
	}
	add_filter('excerpt_length', 'set_excerpt_length');


	// Remove [...] from the_excerpt()
	function new_excerpt_more($more) {
	    return '...';
	}
	add_filter('excerpt_more', 'new_excerpt_more');


	// widgets
	function init_widgets($id)
	{
		register_sidebar([
			'name' => 'Sidebar',
			'id' => 'sidebar',
			'before_widget' => '<div class="side-widget">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		]);
	}
	add_action('widgets_init', 'init_widgets');