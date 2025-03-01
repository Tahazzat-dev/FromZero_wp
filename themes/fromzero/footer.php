<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fromzero
 */

?>

    <!-- Footer -->
    <footer class="FZ_footer FZ_section-gap-equal">
      <div class="FZ_footer-inner FZ_container">

        <!-- top footer -->
        <div class="FZ_footer-top FZ_flex flex_justify_between">
          <div class="col site_info">
            <div class="FZ_site-logo">
            <img   data-aos-offset="-200"  data-aos="fade-in"  src="<?php echo get_theme_mod("fromzero_footer_logo", '' ) ?: get_template_directory_uri().'/assets/media/img/site-logo.png' ?>" alt="Site Logo" />
            </div>
            <p data-aos-offset="-300" data-aos="zoom-in-up" ><?php echo get_theme_mod('fromzero_footer_description') ?: 'Please add footer description from theme customizer'  ?></p>
          </div>

          <div class="col contact_info FZ_flex flex_column">
            <h5 data-aos-offset="-200" data-aos="zoom-in-up" class="fs-lg">GET IN TOUCH</h5>
            <p  data-aos-offset="-220" data-aos="zoom-in-up" class="whats-app FZ_flex flex_align_center"><img src="<?php echo get_template_directory_uri(); ?>/assets/media/img/whats-app-icon.png" alt="icon" /><?php echo get_theme_mod('fromzero_whatsapp-number', 'Add from customizer')?></p>
            <p  data-aos-offset="-240" data-aos="zoom-in-up" class="inquery-mail FZ_flex flex_align_center"><img src="<?php echo get_template_directory_uri(); ?>/assets/media/img/enquery-email-icon.png" alt="icon" /><?php echo get_theme_mod('fromzero_office_info_email', 'Add from customizer')?></p>
            <p  data-aos-offset="-250" data-aos="zoom-in-up" class="mail FZ_flex flex_align_center"><img src="<?php echo get_template_directory_uri(); ?>/assets/media/img/email-icon.png" alt="icon" /><?php echo get_theme_mod('fromzero_personal_email', 'Add from customizer')?></p>
          </div>
        </div>


        
        <!-- bottom footer -->
        <div  data-aos-offset="-300" data-aos="zoom-in-up"  class="section-divider divider__white FZ_gap-xs-equal">
          <span></span>
        </div>
        <div class="FZ_footer-bottom FZ_flex flex_justify_between">
          <p  data-aos-offset="-420" data-aos="zoom-in-up"><?php echo get_theme_mod('fromzero_footer_copyright_text') ?: 'Please add footer copywrite text'  ?></p>
          <div class="social-icons FZ_flex flex_align_center">
              <a  data-aos-offset="-420" data-aos="zoom-in-up" href="<?php echo get_theme_mod('social_facebook', '#')?>" class="social-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/media/img/facebook-icon.png" alt="Social icon"></a>
              <a  data-aos-offset="-420" data-aos="zoom-in-up" href="<?php echo get_theme_mod('social_instagram', '#')?>" class="social-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/media/img/twitter-icon.png" alt="Social icon"></a>
              <a  data-aos-offset="-420" data-aos="zoom-in-up" href="<?php echo get_theme_mod('social_youtube', '#')?>" class="social-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/media/img/linked-in-icon.png" alt="Social icon"></a>
          </div>
        </div>
            </div>
    </footer>

<?php
 wp_footer(); ?>

</body>
</html>
