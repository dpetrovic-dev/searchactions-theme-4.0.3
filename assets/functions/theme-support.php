<?php
// Adding WP Functions & Theme Support

function joints_theme_support() {



	// Add WP Thumbnail Support

	add_theme_support( 'post-thumbnails' );

	

	// Default thumbnail size
add_image_size( 'desktop', 1920, 1920, array( 'center', 'center' ) ); // Hard crop center
add_image_size( 'banner', 1920, 400, array( 'center', 'center' ) ); // Hard crop center

	

	// Enable Shortcode in Widgets 

	add_filter('widget_text', 'do_shortcode');



	// Control Post Excerpt Size 

	function custom_excerpt_length( $length ) {

	return 25;

		}

	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );





	// Disable Comment Replys (comment-reply.js) 

		function disable_comment_js(){

			wp_deregister_script( 'comment-reply' );

				 }

		add_action('init','disable_comment_js');



	// Add classes to specific pages

	add_filter('body_class','my_class_names');

	function my_class_names($c) {

		// add 'class-name' to the $classes array

		is_archive()       		? $c[] = 'bloggy bloggy-index archive'       	: null;

		is_single()       		? $c[] = 'bloggy bloggy-single single'       	: null;

		is_category()       	? $c[] = 'bloggy bloggy-category category'       	: null;

		is_tag()       			? $c[] = 'bloggy bloggy-tag tag'       	: null;

		is_date()       		? $c[] = 'bloggy bloggy-date date'       	: null;

		is_home()       		? $c[] = 'bloggy bloggy-home home'       	: null;

		is_search()        		? $c[] = 'search_page'    	: null; // CSS does not allow a digit as first character

		is_404()        		? $c[] = 'error_page'    	: null; // CSS does not allow a digit as first character


		// return the $classes array

		return $c;

	}



	// Add RSS Support

	add_theme_support( 'automatic-feed-links' );

	

	// Add Support for WP Controlled Title Tag

	add_theme_support( 'title-tag' );

	

	// Add HTML5 Support

	add_theme_support( 'html5', 

	         array( 

	         	'comment-list', 

	         	'comment-form', 

	         	'search-form', 

	         ) 

	);

	

	// Adding post format support

	 add_theme_support( 'post-formats',

		array(

			'aside',             // title less blurb

			'gallery',           // gallery of images

			'link',              // quick link to other site

			'image',             // an image

			'quote',             // a quick quote

			'status',            // a Facebook like status update

			'video',             // video

			'audio',             // audio

			'chat'               // chat transcript

		)

	); 

	

	// Set the maximum allowed width for any content in the theme, like oEmbeds and images added to posts.

	$GLOBALS['content_width'] = apply_filters( 'joints_theme_support', 1200 );		

	

} /* end theme support */



add_action( 'after_setup_theme', 'joints_theme_support' );





// INSERT COPYRIGHT DATE

function searchactions_copyright() {

global $wpdb;

$copyright_dates = $wpdb->get_results("

SELECT

YEAR(min(post_date_gmt)) AS firstdate,

YEAR(max(post_date_gmt)) AS lastdate

FROM

$wpdb->posts

WHERE

post_status = 'publish'

");

$output = '';

if($copyright_dates) {

$copyright = "&copy; " . $copyright_dates[0]->firstdate;

if($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {

$copyright .= '-' . $copyright_dates[0]->lastdate;

}

$output = $copyright;

}

return $output;

}


// UPLOAD CUSTOM AVATAR

add_filter('get_avatar', 'tsm_acf_profile_avatar', 10, 5);

function tsm_acf_profile_avatar( $avatar, $id_or_email, $size, $default, $alt ) {



    // Get user by id or email

    if ( is_numeric( $id_or_email ) ) {



        $id   = (int) $id_or_email;

        $user = get_user_by( 'id' , $id );



    } elseif ( is_object( $id_or_email ) ) {



        if ( ! empty( $id_or_email->user_id ) ) {

            $id   = (int) $id_or_email->user_id;

            $user = get_user_by( 'id' , $id );

        }



    } else {

        $user = get_user_by( 'email', $id_or_email );

    }



    if ( ! $user ) {

        return $avatar;

    }



    // Get the user id

    $user_id = $user->ID;



    // Get the file id

    $image_id = get_user_meta($user_id, 'global_profile_image', true); // CHANGE TO YOUR FIELD NAME



    // Bail if we don't have a local avatar

    if ( ! $image_id ) {

        return $avatar;

    }



    // Get the file size

    $image_url  = wp_get_attachment_image_src( $image_id, 'thumbnail' ); // Set image size by name

    // Get the file url

    $avatar_url = $image_url[0];

    // Get the img markup

    $avatar = '<img alt="' . $alt . '" src="' . $avatar_url . '" class="avatar avatar-' . $size . '" height="' . $size . '" width="' . $size . '"/>';



    // Return our new avatar

    return $avatar;

}


// POPULAR POSTS

function shapeSpace_popular_posts($post_id) {

	$count_key = 'popular_posts';

	$count = get_post_meta($post_id, $count_key, true);

	if ($count == '') {

		$count = 0;

		delete_post_meta($post_id, $count_key);

		add_post_meta($post_id, $count_key, '0');

	} else {

		$count++;

		update_post_meta($post_id, $count_key, $count);

	}

}

function shapeSpace_track_posts($post_id) {

	if (!is_single()) return;

	if (empty($post_id)) {

		global $post;

		$post_id = $post->ID;

	}

	shapeSpace_popular_posts($post_id);

}

add_action('wp_head', 'shapeSpace_track_posts');

//REMOVE DOTS IN EXCERPT
function new_excerpt_more($more) {
       global $post;
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


// GET AUTHOR'S POSTS

function get_related_author_posts() {



    global $authordata, $post;



    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

    $args = array( 

        'author'            => $authordata->ID, 

        'post__not_in'      => array( $post->ID ), 

        'posts_per_page'    => 5,

        'paged'             => $paged

    );

    $authors_posts = new WP_Query( $args );



    $output = '';



    if( $authors_posts->have_posts() ) {



        //INCLUDE UL 

		//$output = '<ul>';



        while( $authors_posts->have_posts() ) {

            $authors_posts->the_post();

			// INCLUDE EXCERPT

            //$output .= '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a>' . get_the_excerpt() . '</li>';

			

			// NO EXCERPT

			$output .= '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';



        }

		//INCLUDE ENDING UL 

        //$output .= '</ul>';

		

		//INCLUDE PAGINATION

       // $output .= '<div class="nav-previous"> '. get_next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts' ), $authors_posts->max_num_pages) .'</div>';

       // $output .= '<div class="nav-next"> '. get_previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>' ) ) .'</div>';





        wp_reset_postdata();

    }



    return $output;



}


// ADD SOCIAL MEDIA LINKS TO AUTHOR CARD



function my_new_contactmethods( $contactmethods ) {

// Add Twitter

$contactmethods['twitter'] = 'Twitter';

//add Facebook

$contactmethods['facebook'] = 'Facebook';

// Add LinkedIN

$contactmethods['linkedin'] = 'LinkedIN';

// Add Instagram

$contactmethods['instagram'] = 'Instagram';

 // Add Pintrest

$contactmethods['pintrest'] = 'Pintrest';

// Add Phone

$contactmethods['phone'] = 'Phone Number';





return $contactmethods;

}

add_filter('user_contactmethods','my_new_contactmethods',10,1);

// SOCIAL SHARING BUTTONS

function searchactions_social_sharing_buttons($content) {

	if(is_singular() || is_home()){

	

		// Get current page URL 

		$searchactionsURL = get_permalink();

 

		// Get current page title

		$searchactionsTitle = str_replace( ' ', '%20', get_the_title());

		

		// Get Post Thumbnail for pinterest
 

		// Construct sharing URL without using any script

		$twitterURL = 'https://twitter.com/intent/tweet?text='.$searchactionsTitle.'&amp;url='.$searchactionsURL.'';

		$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$searchactionsURL;

		$googleURL = 'https://plus.google.com/share?url='.$searchactionsURL;

		$bufferURL = 'https://bufferapp.com/add?url='.$searchactionsURL.'&amp;text='.$searchactionsTitle;

		$linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$searchactionsURL.'&amp;title='.$searchactionsTitle;

		$redditURL = '//www.reddit.com/submit?url='.$searchactionsURL.'&amp;title='.$searchactionsTitle;

		$stumbleuponURL = '//www.stumbleupon.com/submit?url='.$searchactionsURL.'&amp;title='.$searchactionsTitle;

 
// Add sharing button at the end of page/page content

		$content .= '<!-- searchactions.com social sharing. Get your copy here: http://searchactions.me/1VIxAsz -->';

		$content .= '</div><div class="searchactions-social">';

		$content .= '<!--<h4>Share This Article</h4> --><a class="searchactions-link searchactions-twitter" href="'. $twitterURL .'" rel="nofollow" title="Share on Twitter" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>';

		$content .= '<a class="searchactions-link searchactions-facebook" href="'.$facebookURL.'" rel="nofollow" target="_blank" title="Share on Facebook"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>';

		$content .= '<a class="searchactions-link searchactions-googleplus" href="'.$googleURL.'" rel="nofollow" target="_blank" title="Share on Google"><i class="fa fa-google-plus" aria-hidden="true"></i> Google+</a>';

		$content .= '<a class="searchactions-link searchactions-linkedin" href="'.$linkedInURL.'" rel="nofollow" target="_blank" title="Share on LinkedIN"><i class="fa fa-linkedin" aria-hidden="true"></i> LinkedIn</a>';

		$content .= '<a class="searchactions-link searchactions-reddit" href="'.$redditURL.'" rel="nofollow" target="_blank" title="Share on Reddit"><i class="fa fa-reddit-alien" aria-hidden="true"></i> Reddit</a>';

		$content .= '<a class="searchactions-link searchactions-stumbleupon" href="'.$stumbleuponURL.'" rel="nofollow" target="_blank" title="Share on Stumbeupon"><i class="fa fa-stumbleupon" aria-hidden="true"></i> StumbleUpon</a>';

		$content .= '<div class="clearfix"></div></div>';

		

		return $content;

	}else{

		// if not a post/page then don't include sharing button

		return $content;

	}

};
// DISPLAY ARCHIVE TITLE FOR ARCHIVE TYPES (TAGS, CATEGORIES, ETC) 
add_filter( 'the_content', 'searchactions_social_sharing_buttons');

function my_theme_archive_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', true );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', true );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', true );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', true );
    }
	elseif ( is_year() ) {
        $title = single_term_title( '', true );
    }
	elseif ( is_author() ) {
        /* translators: Author archive title. 1: Author name */
        $title = sprintf( __( 'Author: %s' ), '<span class="vcard">' . get_the_author() . '</span>' );
    } elseif ( is_year() ) {
        /* translators: Yearly archive title. 1: Year */
        $title = sprintf( __( 'Year: %s' ), get_the_date( _x( 'Y', 'yearly archives date format' ) ) );
    } elseif ( is_month() ) {
        /* translators: Monthly archive title. 1: Month name and year */
        $title = sprintf( __( 'Month: %s' ), get_the_date( _x( 'F Y', 'monthly archives date format' ) ) );
    } elseif ( is_day() ) {
        /* translators: Daily archive title. 1: Date */
        $title = sprintf( __( 'Day: %s' ), get_the_date( _x( 'F j, Y', 'daily archives date format' ) ) );
    } 
  
    return $title;
}
 
add_filter( 'get_the_archive_title', 'my_theme_archive_title' );

//* REMOVES YOAST SEO SCHEMA.JSON DUE TO ERROR IN GTMETRIX.  MANUALLY COPIED SCHEMA.JSON AND ADDED TO SITE FOOTER 
add_filter( 'wpseo_json_ld_output', '__return_false' );

// MAKE FORMIDABLE PRO FORMS COMPATIBLE WITH AMP PAGES
add_filter( 'frm_form_attributes', 'add_custom_form_attributes', 10, 2 );
function add_custom_form_attributes( $attributes, $form ){
    if ( $form->id == 7 ) {
        $attributes .= 'action-xhr=https://ampbyexample.com/components/amp-form/submit-form-input-text-xhr';
    }

    return $attributes;
}