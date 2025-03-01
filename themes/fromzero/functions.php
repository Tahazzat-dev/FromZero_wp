<?php
/**
 * fromzero functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package fromzero
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function fromzero_setup()
{
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on fromzero, use a find and replace
	 * to change 'fromzero' to the name of your theme in all the template files.
	 */
	load_theme_textdomain('fromzero', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'main-menu' => esc_html__('Primary', 'fromzero'),
		)
	);
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);


	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');
}
add_action('after_setup_theme', 'fromzero_setup');

/**
 * Enqueue scripts and styles.
 */
function fromzero_scripts()
{
	wp_enqueue_style('fromzero-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('fromzero-style', 'rtl', 'replace');

	// Register and enqueue styles
	wp_enqueue_style('slick-carousel', get_template_directory_uri() . '/assets/css/slick-carousel.css', array(), '1.0.0', 'all');
	wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/theme.css', array(), '1.0.0', 'all');
	wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all');
	wp_enqueue_style('aos-style', get_template_directory_uri() . '/assets/css/aos.css', array(), '1.0.0', 'all');

	// Register and enqueue scripts
	wp_enqueue_script('jquery');
	wp_enqueue_script('lenis', get_template_directory_uri() . '/assets/js/lenis.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('slick-slider', get_template_directory_uri() . '/assets/js/slick-slider.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('aos', get_template_directory_uri() . '/assets/js/aos.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);

}
add_action('wp_enqueue_scripts', 'fromzero_scripts');

/**
 * Implement the Custom Header feature.
 */

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}





/*=========== color customization =============*/
function fromzero_customize_color_section($wp_customize) {
    $wp_customize->add_section('custom_theme_colors', array(
        'title'    => __('Theme Colors', 'fromzero'),
        'priority' => 20,
    ));

    // Color Settings Array
    $colors = [
        'clr_white' => ['White', '#F7F7F7', 'This color is used for background, button effect, card background etc.'],
        'clr_black' => ['Black', '#1c1d1e', 'This color is used for text color, button effect, card and section background etc.'],
        'clr_gray' => ['Gray', '#EEEEEE', 'This color is used for background of a specific section or card.'],
        'clr_warning' => ['Yellow', '#FFC107', 'This color is for warning messages'],
        'clr_danger' => ['Red', '#DC3545', 'This color is for alert messages'],
        'clr_success' => ['Green', '#28A745', 'This color is for success messages'],
        'clr_secondary' => ['Secondary', '#929AAB', 'Secondary color'],
        'clr_primary_500' => ['Primary 500', '#4d5563', 'This color is used for background of a few cards, hover effect etc'],
        'clr_primary_700' => ['Primary 700', '#393E46', 'This color is used for background'],
        'clr_primary_900' => ['Primary 900', '#28292b', 'This color is used for background'],
        
    ];

    // Add Color Settings
    foreach ($colors as $key => [$label, $default, $description]) {
        $wp_customize->add_setting($key, array(
            'default'   => $default,
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_hex_color',
        ));

        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $key . '_control', array(
            'label'    => __($label, 'fromzero'),
            'description' => __($description, 'fromzero'),
            'section'  => 'custom_theme_colors',
            'settings' => $key,
        )));
    }
}

// insert root custom colors inside root variables of head
function fromzero_theme_custom_styles() {
    $clr_white = get_theme_mod('clr_white', '#F7F7F7');
    $clr_black = get_theme_mod('clr_black', '#1c1d1e');
    $clr_gray = get_theme_mod('clr_gray', '#EEEEEE');
    $clr_warning = get_theme_mod('clr_warning', '#FFC107');
    $clr_danger = get_theme_mod('clr_danger', '#DC3545');
    $clr_success = get_theme_mod('clr_success', '#28A745');
    $clr_secondary = get_theme_mod('clr_secondary', '#929AAB');
    $clr_primary_500 = get_theme_mod('clr_primary_500', '#4d5563');
    $clr_primary_700 = get_theme_mod('clr_primary_700', '#393E46');
    $clr_primary_900 = get_theme_mod('clr_primary_900', '#28292b');

    echo "<style>
        :root {
   --clr-primary-900: {$clr_primary_900};
  --clr-primary-700: {$clr_primary_700};
  --clr-primary-500: {$clr_primary_500};
  --clr-secondary: {$clr_secondary};
  --clr-success: {$clr_success};
  --clr-danger: {$clr_danger};
  --clr-warning: {$clr_warning};
  --clr-white: {$clr_white};
  --clr-gray:{$clr_gray};
  --clr-black: {$clr_black};
        }
    </style>";
}
add_action('wp_head', 'fromzero_theme_custom_styles');




/*====== custom logos =========*/
function fromzero_header_customization($wp_customize) {
    $wp_customize->add_section('fromzero_logo_section', array(
        'title'       => __('Header Customization', 'fromzero'),
        'priority'    => 22,
        'description' => __('Update Header logo', 'fromzero'),
    ));

    // Add Logos
        $wp_customize->add_setting('fromzero_header_logo', array(
            'default'           => 'http://localhost/fromzero/wp-content/uploads/2025/03/site-logo.png',
            'transport'         => 'refresh',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,  'fromzero_header_logo_control', array(
            'label'       => __('Header Logo', 'fromzero'),
            'description' => __('This logo will appear in the header Navbar', 'fromzero'),
            'section'     => 'fromzero_logo_section',
            'settings'    => 'fromzero_header_logo',
        )));
}

/*==========Necessary info customization===========*/ 
function fromzero_customize_necessary_info($wp_customize){
	$wp_customize->add_section('fromzero_necessary_info_customization', array(
        'title'       => __('Necessary Info', 'fromzero'),
        'priority'    => 25,
        'description' => __('Customize Address, email phone', 'fromzero'),
    ));

	$necessary_info = [
        'office_address' => ['Office Address', 'House #539 (1st Floor), Road #08, Avenue: 06, Mirpur DOHS, Dhaka-1216.', '', 'text'],
        'house_address' => ['House Address', 'Bashundhara R/A, Block: F, Road #10, House #123 (Level-05), Dhaka-1229.', '', 'text'],
        'whatsapp-number' => ['Whats app number', '+880 1818-339339', 'It will be visible in contact page and footer also', 'text'],
        'office_info_email' => ['Info Email', 'inquiry@fromzerodesign.studio', 'This email will be shown in info email section', 'email'],
        'personal_email' => ['Personal Email', 'paragkhan@gmail.com', 'This email will be shown in personal email section', 'email'],
        'office_contact_email' => ['Contact Email', 'contact@fromzerolimited.com', 'This email will show in contact email section', 'email'],
        // 'office_opening_time' => ['Office Opening Time', 'Mon-Fri 11am-5pm', 'Office opening and closing time', 'text'],
		'social_facebook' => ['Facebook profile URL', '','','url'],
		'social_instagram' => ['Instagram Profile URL', '','','url'],
		'social_youtube' => ['YouTube Chanel Link', '','', 'url'],
    ];

	foreach ($necessary_info as $key => [$label, $default_info, $default_description, $field_type]) {
		$wp_customize->add_setting("fromzero_{$key}", array(
			'default'           => $default_info,
			'transport'         => 'refresh',
			'sanitize_callback' => 'wp_kses_post',
		));
	
		$wp_customize->add_control("fromzero_{$key}_control", array(
			'label'       => __($label, 'fromzero'),
			'description' => __($default_description, 'fromzero'),
			'section'     => 'fromzero_necessary_info_customization',
			'settings'    => "fromzero_{$key}",
			'type'        => $field_type,
		));
	}
}

/*====== footer customization ========*/ 
function fromzero_customize_footer($wp_customize){
	$wp_customize->add_section('fromzero_footer_customization', array(
        'title'       => __('Footer Customization', 'fromzero'),
        'priority'    => 25,
        'description' => __('Customize site footer', 'fromzero'),
    ));
	
	// footer logo
	$wp_customize->add_setting('fromzero_footer_logo', array(
        'default'           => 'http://localhost/fromzero/wp-content/uploads/2025/03/footer-site-logo.png',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'fromzero_footer_logo_control', array(
        'label'       => __('Footer Logo', 'fromzero'),
        'description' => __('Upload a logo for the footer.', 'fromzero'),
        'section'     => 'fromzero_footer_customization',
        'settings'    => 'fromzero_footer_logo',
    )));


	// footer description
	$default_footer_des = 'The company principle of Architecture-Studio is the collective conception. From the very beginning, the practice has believed in the virtues of exchange, crossing ideas, common effort, shared knowledge and enthusiasm.';
	$wp_customize->add_setting('fromzero_footer_description', array(
		'default'           => $default_footer_des,
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control('fromzero_footer_description_control', array(
		'label'       => __('Footer description', 'fromzero'),
		'description' => __('This text will appear in the footer below site logo', 'fromzero'),
		'section'     => 'fromzero_footer_customization',
		'settings'    => 'fromzero_footer_description',
		'type'        => 'textarea',
	));


	// footer copy right section
	$default_copyright_text = 'FromZero © 2025 all rights reserved';
	$wp_customize->add_setting('fromzero_footer_copyright_text', array(
		'default'           => $default_copyright_text,
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control('fromzero_footer_copyright_text_control', array(
		'label'       => __('Footer Copy right text', 'fromzero'),
		'description' => __('This text will appear in the footer bottoms ection', 'fromzero'),
		'section'     => 'fromzero_footer_customization',
		'settings'    => 'fromzero_footer_copyright_text',
		'type'        => 'textarea',
	));

}

/*====== partners galler  ========*/ 
function fromzero_partners_gallery($wp_customize){
   // Add section for the gallery
   $wp_customize->add_section('custom_gallery_section', array(
    'title' => __('Partners Gallery', 'fromzero'),
    'priority' => 30,
));

// Add hidden setting for the gallery images (comma-separated list)
$wp_customize->add_setting('custom_gallery_images', array(
    'default' => '',
    'sanitize_callback' => 'theme_sanitize_gallery_images',
));

// Add textarea control (hidden by default) for gallery images URLs
$wp_customize->add_control('custom_gallery_images_control', array(
    'label' => __('Gallery Images (hidden)', 'fromzero'),
    'section' => 'custom_gallery_section',
    'settings' => 'custom_gallery_images',
    'type' => 'textarea',
    'description' => 'This textarea stores the image URLs (hidden from view).',
    'input_attrs' => array(
        'style' => 'display: none;',
    ),
));
}

 function fromzero_theme_customize_register($wp_customize) {
	 fromzero_customize_color_section($wp_customize);
	 fromzero_header_customization($wp_customize);
	 fromzero_customize_necessary_info($wp_customize);
	fromzero_customize_footer($wp_customize);
	fromzero_partners_gallery($wp_customize);
}
add_action('customize_register', 'fromzero_theme_customize_register');



// sanitize images
function theme_sanitize_gallery_images($value) {
    if (empty($value)) return '';
    
    // Sanitize and split URLs by commas
    $images = explode(',', $value);
    $images = array_map('esc_url_raw', $images);
    return implode(',', $images); // Save as a comma-separated list
}

// Enqueue customizer scripts and styles
function theme_customize_scripts() {
    wp_enqueue_script('gallery-customizer-js', get_template_directory_uri() . '/assets/js/partners-gallery.js', array('jquery'), null, true);
    wp_enqueue_style('gallery-customizer-css', get_template_directory_uri() . '/assets/css/partners-gallery.css');
}
add_action('customize_controls_enqueue_scripts', 'theme_customize_scripts');

