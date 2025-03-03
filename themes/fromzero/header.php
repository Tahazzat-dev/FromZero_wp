<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fromzero
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
 <!-- Header -->
 <header class="FZ_header-wrap">
      <div
        class="FZ_header-inner FZ_container FZ_flex flex_align_center flex_justify_between"
      >
        <div class="FZ_site-logo">
          <a href="<?php echo esc_url(home_url()); ?>">
            <img  data-aos-duration="900" data-aos="fade-down" src="<?php echo get_theme_mod("fromzero_header_logo", '' ) ?: get_template_directory_uri().'/assets/media/img/site-logo.png' ?>" alt="Site Logo" />
          </a>
        </div>

        <nav class="FZ_nav-links-wrap">
          <ul class="FZ_nav-links FZ_flex flex_align_center">
            <li  data-aos-delay="100" data-aos="fade-down"><a  href="<?php echo esc_url(home_url()); ?>">Home</a></li>
            <li data-aos-delay="200" data-aos="fade-down"><a href="<?php echo esc_url(site_url()) ?>/projects">Projects</a></li>
            <li data-aos-delay="300" data-aos="fade-down"><a href="<?php echo esc_url(site_url()) ?>/about">About</a></li>
            <li data-aos-delay="400" data-aos="fade-down"><a href="<?php echo esc_url(site_url()) ?>/contact">Contact</a></li>
          </ul>
        </nav>

        <div class="FZ_menu-toggler-wrap">
          <div class="FZ_menu-toggler FZ_flex flex_column">
            <input class="FZ_hamberger-toggler-input" type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </header>  