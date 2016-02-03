<?php
 /*
Plugin Name: MPW G Adw Remarketing Tag Shortcode
Plugin URI:  
Description: Add Remarketing Tag, use shortcode [remarket convid="google_conversion_id"]
Version:     0.1-alpha
Author:      MPW Marketing
 */
/**
 * Add shortcode for tag, enter conversion ID into tag
 */

function remark_tag ( $atts ) {
	 $atts = shortcode_atts(
	 		array(
	 			'convid' => '',
	 		), $atts, 'remarket_tag' );

				$cont = '';

$cont .= '<!-- Google Code for Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">/* <![CDATA[ */ var google_conversion_id = '.$atts['convid'].'; var google_custom_params = window.google_tag_params;
var google_remarketing_only = true; /* ]]> */ </script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
<noscript><div style="display:inline;"><img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/'.$atts['convid'].'/?value=0&amp;guid=ON&amp;script=0"/></div></noscript>';

return do_shortcode( $cont );
}

add_shortcode( 'remarket', 'remark_tag' );