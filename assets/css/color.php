<?php


/** Set ABSPATH for execution */
define( 'ABSPATH', dirname(dirname(__FILE__)) . '/' );
define( 'WPINC', 'wp-includes' );



function add_filter() {}
function esc_attr($str) {return $str;}
function apply_filters() {}
function get_option() {}
function is_lighttpd_before_150() {}
function add_action() {}
function did_action() {}
function do_action_ref_array() {}
function get_bloginfo() {}
function is_admin() {return true;}
function site_url() {}
function admin_url() {}
function home_url() {}
function includes_url() {}
function wp_guess_url() {}
if ( ! function_exists( 'json_encode' ) ) :
function json_encode() {}
endif;
/* Convert hexdec color string to rgb(a) string */
function hex2rgba($color, $opacity = false) {
	$default = 'rgb(0,0,0)';
	//Return default if no color provided
	if(empty($color))
          return $default; 
	//Sanitize $color if "#" is provided 
        if ($color[0] == '#' ) {
        	$color = substr( $color, 1 );
        }
 
        //Check if color has 6 or 3 characters and get values
        if (strlen($color) == 6) {
                $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        } elseif ( strlen( $color ) == 3 ) {
                $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
        } else {
                return $default;
        }
 
        //Convert hexadec to rgb
        $rgb =  array_map('hexdec', $hex);
 
        //Check if opacity is set(rgba or rgb)
        if($opacity){
        	if(abs($opacity) > 1)
        		$opacity = 1.0;
        	$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
        } else {
        	$output = 'rgb('.implode(",",$rgb).')';
        }
 
        //Return rgb(a) color string
        return $output;
}


$color = $_GET['main_color'];

ob_start(); ?>
/*========== Color ====================*/
.main-menu .navigation > li.current > a, .main-menu .navigation > li:hover > a, .main-menu .navigation > li > ul > li > a:hover, .main-menu .navigation > li > .megamenu li > a:hover, .main-menu .navigation > li > ul > li > ul > li > a:hover, .header-top .links-list li a:hover, .header-top .info-list li i, .header-top .info-list li a:hover, .banner-carousel .content-box h2 span, .sec-title h6, .content_block_one .content-box .inner-box .single-item .icon-box, .service-block-one .inner-box .icon-box, .content_block_two .content-box .form-group input[type='button'], .funfact-block-one:first-child .inner-box .icon-box, .theme-btn.btn-three, .news-block-one .inner-box .post-date i, .news-block-one .inner-box h3 a:hover, .news-block-one .inner-box .post-info li i, .news-block-one .inner-box .post-info li a:hover, .scroll-to-top .scroll-bar-text, .main-footer a:hover, .footer-bottom p a, .sec-title h2 span, .feature-block-two .inner-box .icon-box, .feature-block-two .inner-box h3 a:hover, .content_block_four .content-box .list-item li:before, .card-block-one .inner-box .lower-content h3 a:hover, .processing-block-one:hover .inner-box .count-text, .news-block-two .inner-box .lower-content h3 a:hover, .news-block-two .inner-box .lower-content .post-info li i, .news-block-two .inner-box .lower-content .post-info li a:hover, .page-title .bread-crumb li a:hover, .team-block-one .inner-box .lower-content h3 a:hover, .team-block-one .inner-box:hover .lower-content .designation, .team-details .content-box .designation, .team-details .content-box .info-list li a:hover, .career-block-one .inner-box .info-box li i, .career-block-one .inner-box .btn-box a, .career-details-content .content-one span, .career-sidebar .info-list li i, .news-block-three .inner-box .lower-content .post-info li i, .news-block-three .inner-box .lower-content .post-info li a:hover, .news-block-three .inner-box .lower-content h3 a:hover, .news-block-three .inner-box .lower-content .btn-box a, .blog-sidebar .search-widget .search-inner .form-group input:focus + button, .blog-sidebar .search-widget .search-inner .form-group button:hover, .blog-sidebar .category-widget .category-list li a:before, .blog-sidebar .category-widget .category-list li a:hover, .blog-sidebar .post-widget .post h5 a:hover, .blog-sidebar .post-widget .post .post-date i, .info-block-one .inner-box p a:hover
{
	color: #<?php echo esc_attr( $color ); ?>!important;
}


.switcher .switch_btn button, button.rtl, button.ltr, .main-header .outer-box .logo-box, .main-header .outer-box .logo-box:before, .theme-btn.btn-one, .theme-btn.btn-two:before, .theme-btn.btn-two:after, .main-header .outer-box .logo-box .shape, .main-header .outer-box .logo-box:after, .banner-section .owl-nav button:hover, .feature-block-one .inner-box .icon-box, .feature-block-one .inner-box:before, .image_block_one .image-box .experience-box, .content_block_one .content-box .inner-box .single-item .icon-box:before, .service-block-one .inner-box:before, .content_block_two .content-box .form-group input[type='button']:hover, .video-section .inner-box .video-btn a, .funfact-block-one:last-child .inner-box, .apps-section .content-box .btn-box a:hover, .subscribe-section, .main-footer .social-links li a:hover, .main-footer .links-widget .links-list li a:hover:before, .nav-style-one .owl-nav button:hover, .service-style-two .tab-btns li:before, .service-style-two .tab-btns li:after, .processing-block-one .inner-box .count-text, .processing-block-one:before, .exchange-section .tab-btns li:before, .exchange-section .tab-btns li:after, .apps-section.alternat-2, .service-block-one .inner-box .shape:before, .requirements-block-one .inner-box h4:before, .team-block-one .inner-box .image-box .social-links li a:hover, .team-details .content-box .social-links li a:hover, .career-block-one .inner-box .btn-box a:hover, .news-block-one .inner-box .theme-btn:before, .news-block-one .inner-box .theme-btn:after, .career-sidebar h4, .news-block-three .inner-box .lower-content .post-date, .news-block-three .inner-box .lower-content .btn-box a:hover, .blog-sidebar .tags-widget .tags-list li a:hover, .blog-details-content .list-item li:before, .blog-details-content .post-tag-option .tags-list li a:hover, .accordion .acc-btn .icon-box:before, .info-block-one .inner-box .icon-box


{
    background: #<?php echo esc_attr( $color ); ?>!important;;
}


{
    border-color: #<?php echo esc_attr( $color ); ?>!important;  
}


<?php 

$out = ob_get_clean();
$expires_offset = 31536000; // 1 year
header('Content-Type: text/css; charset=UTF-8');
header('Expires: ' . gmdate( "D, d M Y H:i:s", time() + $expires_offset ) . ' GMT');
header("Cache-Control: public, max-age=$expires_offset");
header('Vary: Accept-Encoding'); // Handle proxies
header('Content-Encoding: gzip');

echo gzencode($out);
exit;