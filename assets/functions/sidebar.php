<?php
// SIDEBARS AND WIDGETIZED AREAS
function joints_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __('Sidebar 1', 'jointswp'),
		'description' => __('The first (primary) sidebar.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	register_sidebar(array(
		'id' => 'sidebar2',
		'name' => __('Sidebar 2', 'jointswp'),
		'description' => __('The second (secondary) sidebar.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
	register_sidebar(array(
		'id' => 'sidebar3',
		'name' => __('Sidebar 3', 'jointswp'),
		'description' => __('The third sidebar.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
		register_sidebar(array(
		'id' => 'sidebar4',
		'name' => __('Sidebar 4', 'jointswp'),
		'description' => __('The fourth sidebar.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
	register_sidebar(array(
		'id' => 'whitepaper1',
		'name' => __('Whitepaper Sidebar 1', 'jointswp'),
		'description' => __('Whitepaper Sidebar 1.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="whitepaper-widget widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
		register_sidebar(array(
		'id' => 'whitepaper2',
		'name' => __('Whitepaper Sidebar 2', 'jointswp'),
		'description' => __('Whitepaper Sidebar 2.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="whitepaper-widget widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
		register_sidebar(array(
		'id' => 'whitepaper3',
		'name' => __('Whitepaper Sidebar 3', 'jointswp'),
		'description' => __('Whitepaper Sidebar 3.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="whitepaper-widget widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
		register_sidebar(array(
		'id' => 'whitepaper4',
		'name' => __('Whitepaper Sidebar 4', 'jointswp'),
		'description' => __('Whitepaper Sidebar 4.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="whitepaper-widget widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
			register_sidebar(array(
		'id' => 'whitepaper5',
		'name' => __('Whitepaper Sidebar 5', 'jointswp'),
		'description' => __('Whitepaper Sidebar 5.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="whitepaper-widget widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));

	register_sidebar(array(
		'id' => 'footer1',
		'name' => __('Footer 1', 'jointswp'),
		'description' => __('The first footer cell.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
	register_sidebar(array(
		'id' => 'footer2',
		'name' => __('Footer 2', 'jointswp'),
		'description' => __('The second footer cell.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
	register_sidebar(array(
		'id' => 'footer3',
		'name' => __('Footer 3', 'jointswp'),
		'description' => __('The third footer cell.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
	register_sidebar(array(
		'id' => 'footer4',
		'name' => __('Footer 4', 'jointswp'),
		'description' => __('The fourth footer cell.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
	register_sidebar(array(
		'id' => 'scheduleuploads',
		'name' => __('Schedule Uploads', 'jointswp'),
		'description' => __('Sidebar for schedule upload pages.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));


	/*
	to add more sidebars or widgetized areas, just copy
	and edit the above sidebar code. In order to call
	your new sidebar just use the following code:

	Just change the name to whatever your new
	sidebar's id is, for example:

	register_sidebar(array(
		'id' => 'sidebar2',
		'name' => __('Sidebar 2', 'jointswp'),
		'description' => __('The second (secondary) sidebar.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	To call the sidebar in your template, you can just copy
	the sidebar.php file and rename it to your sidebar's name.
	So using the above example, it would be:
	sidebar-sidebar2.php

	*/
} // don't remove this bracket!

