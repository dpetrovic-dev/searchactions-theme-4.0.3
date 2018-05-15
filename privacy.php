

<?php 

/*

Template Name: SearchActions Privacy Page

*/

get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- *****************************************

			BANNER

****************************************** -->

<?php

    if (get_field('page_banner_select') == 'yes' ) { 



        $saBannerLayout = get_field('page_banner_layout'); 



        if ($saBannerLayout === 'banner1') { 

            get_template_part( 'banners/banner1');



        } else if ($saBannerLayout === 'banner2') { 

            get_template_part( 'banners/banner2');



        } else if ($saBannerLayout === 'banner3') { 

            get_template_part( 'banners/banner3');



        }
		
		else if ($saBannerLayout === 'banner4') { 

            get_template_part( 'banners/banner4');



        }


		else if ($saBannerLayout === 'bannerinside') { 

            get_template_part( 'banners/bannerinside' );



        } 

    }

    ?>
<!-- *****************************************

			OVERLAY END (OVERLAY BEGINS IN HEADER.PHP)

****************************************** -->
<?php if ( get_field('global_header_overlay_truefalse','option') == true ) { ?>
</div>
<?php } else { ?>
<?php } ?>

<main id="main" class="<?php if ( get_field('global_overlay_content_area_boxed','option') == true ) { ?>main-boxed<?php } ?>">
<div class="grid-container">

<div class="small-12 cell privacy_content">

<h1>PRIVACY POLICY</h1>

<h2>Our Commitment to Privacy</h2>

<p>Your privacy is important to us. To better protect your privacy we provide this notice explaining our online information practices and the choices you can make about the way your information is collected and used.  This privacy policy discloses the privacy practices for <?php echo get_site_url(); ?>. This privacy policy applies solely to information collected by this web site. It will notify you of the following:



<ul>

<li>What personally identifiable information is collected from you through the web site, how it is used and with whom it may be shared.</li>

<li>What choices are available to you regarding the use of your data.</li>

<li>The security procedures in place to protect the misuse of your information.</li>

<li>How you can correct any inaccuracies in the information.</li>

</ul>



<h2>Information Collection, Use, and Sharing </h2>

<p>We are the sole owners of the information collected on this site. We only have access to/collect information that you voluntarily give us via email or other direct contact from you. We will not sell or rent this information to anyone.</p>



<p>We will use your information to respond to you, regarding the reason you contacted us. We will not share your information with any third party outside of our organization, other than as necessary to fulfill your request, e.g. to ship an order.</p>



<p>Unless you ask us not to, we may contact you via email in the future to tell you about specials, new products or services, or changes to this privacy policy.</p>



<h2>Your Access to and Control Over Information </h2>

<p>You may opt out of any future contacts from us at any time. You can do the following at any time by contacting us via the email address or phone number given on our website:</p>

<ul>

<li>See what data we have about you, if any.</li>

<li>Change/correct any data we have about you.</li>

<li>Have us delete any data we have about you.</li>

<li>Express any concern you have about our use of your data.</li>

</ul>

  

<h2>Our Commitment to Data Security</h2>

<p>We take precautions to protect your information. When you submit sensitive information via the website, your information is protected both online and offline.</p>



<p>Wherever we collect sensitive information (such as credit card data), that information is encrypted and transmitted to us in a secure way. You can verify this by looking for a closed lock icon at the bottom of your web browser, or looking for "https" at the beginning of the address of the web page.</p>



<p>While we use encryption to protect sensitive information transmitted online, we also protect your information offline. Only employees who need the information to perform a specific job (for example, billing or customer service) are granted access to personally identifiable information. The computers/servers in which we store personally identifiable information are kept in a secure environment.</p>



<h2>Advertising Cookies</h2>

<p>As you browse <?php echo get_site_url(); ?>, advertising cookies may be placed on your computer so that we can understand what you are interested in. This enables us to present you with retargeting advertising on other sites based on your previous interaction with example.com. The techniques employed do not collect personal information such as your name, email address, postal address or telephone number. You can send an email to <?php if( get_field('global_email_address','option') ){ ?> <?php the_field('global_email_address','option'); ?><?php } else { ?><?php echo bloginfo('admin_email'); ?> <?php } ?> to opt out of targeted advertising.</p>



<h2>Links </h2>

<p>This web site contains links to other sites. Please be aware that we are not responsible for the content or privacy practices of such other sites. We encourage our users to be aware when they leave our site and to read the privacy statements of any other site that collects personally identifiable information.</p>



<h2>Surveys &amp; Contests </h2>

<p>From time-to-time our site requests information via surveys or contests. Participation in these surveys or contests is completely voluntary and you may choose whether or not to participate and therefore disclose this information. Information requested may include contact information (such as name and shipping address), and demographic information (such as zip code, age level). Contact information will be used to notify the winners and award prizes. Survey information will be used for purposes of monitoring or improving the use and satisfaction of this site.</p>

</div><!-- END cell -->

<?php wp_link_pages(); ?>

<?php endwhile; endif; ?>	

</div><!-- END ROW -->
</main> <!-- end #main -->
<?php get_footer(); ?>