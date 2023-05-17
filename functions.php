<?php
define( 'THEME_URL', get_stylesheet_directory());
if (!function_exists('tienthanhtheme_setup')) {
    function tienthanhtheme_setup() {
        // tu dong them link RSS len <head>
        add_theme_support('automatic-feed-links');
        // Them post thumbnail
        add_theme_support('post-thumbnails');
        // Post format
        add_theme_support('post-formats', array(
            'image',
            'video',
            'gallery',
            'quote',
            'link'
        ));
        //Them Menu
        register_nav_menus(
            array(
                'header_menu_location'  => __( 'Header Menu Location', 'btso3' ),
                // 'mobile_header_menu_location'  => __( 'Mobile Header Menu Location', 'btso3' ),
                'footer_menu_location'  => __( 'Footer Menu Location', 'btso3' ),
            )
         ); 

        //show on/off admin bar
        // add_filter( 'show_admin_bar', '__return_false' );
        
    }
    add_action('after_setup_theme', 'tienthanhtheme_setup' );
}

function carrental_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'tienthanh_oto' );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'tienthanh_oto', array(
        'label'    => __( 'Upload Logo here', 'tienthanh_oto' ),
        'section'  => 'title_tagline',
        'settings' => 'tienthanh_oto',
    ) ) );
}
add_action( 'customize_register', 'carrental_customize_register' );

if (!function_exists('tienthanhtheme_setup_style')) {
    function tienthanhtheme_setup_style() {
        //Them CSS
        wp_enqueue_style( 'bootstrap', get_theme_file_uri( '/assets/plugins/bootstrap/bootstrap.min.css' ), false, '1.0' );
        wp_enqueue_style( 'owl.carousel.min', get_theme_file_uri( '/assets/plugins/owl-carousel/owl.carousel.min.css' ), false, '1.0' );
        wp_enqueue_style( 'owl.theme.default.min', get_theme_file_uri( '/assets/plugins/owl-carousel/owl.theme.default.min.css' ), false, '1.0' );
        wp_enqueue_style( 'fancybox', get_theme_file_uri( '/assets/plugins/fancybox/fancybox.css' ), false, '1.0' );
        wp_enqueue_style( 'rubyslider', get_theme_file_uri( '/assets/plugins/rubyslide/rubyslider.css' ), false, '1.0' );
        wp_enqueue_style(
            "tienthanhtheme-style",
            get_stylesheet_uri(),
            array(),
            filemtime( get_theme_file_path("./style.css") ),
        );
        //Them Javascript
        wp_enqueue_script( 'jquery-min', get_theme_file_uri( '/assets/js/jquery-3.2.1.slim.min.js' ), array(), '1.0', true );
        wp_enqueue_script( 'bootstrap-popper', get_theme_file_uri( '/assets/plugins/bootstrap/popper.min.js' ), array(), '1.0', true );
        wp_enqueue_script( 'bootstrap', get_theme_file_uri( '/assets/plugins/bootstrap/bootstrap.min.js' ), array(), '1.0', true );
        wp_enqueue_script( 'owl-carousel', get_theme_file_uri( '/assets/plugins/owl-carousel/owl.carousel.min.js' ), array(), '1.0', true );
        wp_enqueue_script( 'fancybox', get_theme_file_uri( '/assets/plugins/fancybox/fancybox.umd.js' ), array(), '1.0', true );
        wp_enqueue_script( 'sticky', get_theme_file_uri( '/assets/js/sticky.js' ), array(), '1.0', true );
        wp_enqueue_script( 'rubyslider', get_theme_file_uri( '/assets/plugins/rubyslide/rubyslider.js' ), array(), '1.0', true );
        wp_enqueue_script( 'owl-fancy', get_theme_file_uri( '/assets/js/owl-fancy.js' ), array(), '1.0', true );
    }
    add_action('wp_enqueue_scripts', 'tienthanhtheme_setup_style' );
}

// Own Customize function
function mytheme($wp_customize) {
	/*  
        Footer
    */
	$wp_customize->add_section("footer", array(
		'title' 		=> __("Footer", "mytheme"),
		'priority' 		=> 22,
		'description' 	=> __( 'Description Custom footer here' ),
	));
	
	//Footer text
	$wp_customize->add_setting("footer_text", array(
		'default' 		=> '',
		'transport' 	=> 'refresh',
	));	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,"footer_text",array(
		'label' 		=> __("Footer text here", "mytheme"),
		'section' 		=> 'footer',
		'settings' 		=> 'footer_text',
		'type' 			=> 'textarea',
	)));

    //Footer background
	$wp_customize->add_setting("footer_background", array(
		'transport' 	=> 'refresh',
	));	
	$wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize,'footer_background',array(
	 	'label'      	=> __('Footer background', 'mytheme'),
	 	'section'    	=> 'footer',
	 	'settings'   	=> 'footer_background',
	)));
    
    //Footer pic
	$wp_customize->add_setting("footer_image", array(
		'transport' 	=> 'refresh',
	));	
	$wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize,'footer_image',array(
	 	'label'      	=> __('Footer image', 'mytheme'),
	 	'section'    	=> 'footer',
	 	'settings'   	=> 'footer_image',
	)));
}
add_action("customize_register","mytheme");
// excerpt length setting
function my_excerpt_length($length){ return 25; } add_filter('excerpt_length', 'my_excerpt_length');

// Pagination
function pagination_bar($my_query) {
    // global $wp_query;
    $total_pages = $my_query->max_num_pages;
    $current_page = max(1, get_query_var('paged'));
    if ($total_pages > 1){
        $_pagination_bar = [
            'base' => get_pagenum_link(1),
            'format' => 'page/%#%',
            'current' => $current_page,
            'total' => $total_pages, 
        ];
    ?>
        <nav class="pagination_bar">
            <div id="pag-cover">
                <?php
                if ($_pagination_bar['current'] > 1) {
                    echo '<a class="pagination_bar__first__last page-numbers" href="'.$_pagination_bar['base'].'"><i class="fa-solid fa-angles-left"></i></a>';
                } ?>
                <?php
                    echo paginate_links(array(
                    'base' => get_pagenum_link(1) . '%_%',
                    'format' => 'page/%#%',
                    'current' => $current_page,
                    'total' => $total_pages,
                    'prev_text' => '<div class="td arr-cover"><div class="arrow" id="l-arrow"><i class="fas fa-chevron-circle-left"></i></div></div>',
                    'next_text' => '<div class="td arr-cover"><div class="arrow" id="r-arrow"><i class="fas fa-chevron-circle-right"></i></div></div>',
                    ));
                ?>
                <?php
                if ($_pagination_bar['current'] < $_pagination_bar['total'] ) {
                    echo '<a class="pagination_bar__first__last page-numbers" href="'.$_pagination_bar['base'].'page/'.($_pagination_bar['total']).'"><i class="fa-solid fa-angles-right"></i></a>';
                }?>
            </div>
        </nav>
        <?php
    }
}
?>
