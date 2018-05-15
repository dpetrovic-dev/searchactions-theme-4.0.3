<?php
// Calling your own login css so you can style it
function joints_login_css() {
	wp_enqueue_style( 'joints_login_css', get_template_directory_uri() . '/assets/css/login.css', false );
}

// changing the logo link from wordpress.org to your site
function joints_login_url() {  return home_url(); }

// changing the alt text on the logo to show your site name
function joints_login_title() { return get_option('blogname'); }

// calling it only on the login page
add_action( 'login_enqueue_scripts', 'joints_login_css', 10 );
add_filter('login_headerurl', 'joints_login_url');
add_filter('login_headertitle', 'joints_login_title');

//CUSTOMIZE LOGIN PAGE
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(/wp-content/uploads/logo.png);
		height:65px;
		width:197px;
		background-size: 197px 65px;
		background-repeat: no-repeat;
        	padding-bottom:0;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Login Page';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );