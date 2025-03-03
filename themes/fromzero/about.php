<?php
/**
 * Template Name: About page template
 * 
 * The template for displaying front page of the website
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package fromzero
 */
get_header();

$home_page_id = 8;   // 8 is the home page id have to change this.
?>
<!-- Main -->
<main class="FZ_main-wrap">
   <!-- banner starts -->
   <?php
  $banner = get_field('about_page_banner');
  ?>
  <div class="FZ_page-banner-wrap">
    <!-- banner background -->

    <div class="banner-bg">
      <picture>
        <source
          srcset="<?php echo $banner['banner_bg']['mobile_background'] ?: get_template_directory_uri() . '/assets/media/img/about-us-banner-small.png' ?>"
          media="(max-width: 767px)">
        <source
          srcset="<?php echo $banner['banner_bg']['tablet_background'] ?: get_template_directory_uri() . '/assets/media/img/about-us-banner-medium.png' ?>"
          media="(max-width: 1023px) and (min-width: 768px)">
        <source
          srcset="<?php echo $banner['banner_bg']['desktop_background'] ?: get_template_directory_uri() . '/assets/media/img/about-us-banner-large.png' ?>"
          media="(min-width: 1024px)">
        <img
          src="<?php echo $banner['banner_bg']['desktop_background'] ?: get_template_directory_uri() . '/assets/media/img/about-us-banner-large.png' ?>"
          alt="Home Banner Image" />
      </picture>

      <!-- overlay -->
      <div class="bg-overlay"></div>

      <!-- banner content -->
    </div>
    <div class="FZ_page-banner-inner FZ_container FZ_flex flex_align_center">
      <div class="banner-content FZ_flex flex_center flex_column">
      <h1 data-aos="zoom-in" class="fs-3xl"><?php echo $banner['title']?:"About US" ?></h1>
      <h4 data-aos="zoom-in" class="fs-md"><?php echo $banner['sub_title']?:"Architecture is Our Art, Innovation is Our Passion." ?></h4>
      </div>
    </div>
  </div>
  <!-- banner ends -->

  <!-- welcome message starts -->
  <?php 
  $about_company = get_field('history_mission_and_vission');
  $history = $about_company['history'];
   ?>
  <section class="FZ_section FZ_section-gap-huge FZ_company-intro-wrap">
    <div class="FZ_company-intro-inner FZ_container FZ_flex flex_align_center flex_justify_between">
      <div class="company-profile">
        <img data-aos="zoom-in" src="<?php echo $history['img'] ?: get_template_directory_uri().'/assets/media/img/company-interior.png' ?>"
          alt="Company Profile" />
      </div>

      <div class="content">
        <h3 data-aos="zoom-in-up" class="fs-3xl"><?php echo $history['title'] ?></h3>
        <p data-aos-delay="200" data-aos="zoom-in-up"><?php echo $history['description'] ?></p>
      </div>
    </div>

    <div class="FZ_company-vision FZ_gap-md-top FZ_container">
      <?php
       $mission = $about_company['mission'];
      ?>
      <h3 data-aos="zoom-in-up" class="fs-3xl"><?php echo $mission['title'] ?></h3>
      <p data-aos="zoom-in-up"><?php echo $mission['description'] ?></p>
    </div>

    <div class="FZ_company-vision FZ_gap-xs-top FZ_container">
    <?php
       $vision = $about_company['vision'];
      ?>
      <h3 data-aos="zoom-in-up" class="fs-3xl"><?php echo $vision['title'] ?></h3>
      <p data-aos="zoom-in-up"><?php echo $vision['description'] ?></p>
    </div>
  </section>
  <!-- welcome message ends -->


  <!-- our services starts -->
  <?php
  $our_services = get_field('home_our_services', $home_page_id);
  if ($our_services):
    ?>
    <section class="FZ_section FZ_section-gap-huge FZ_our-services-wrap">
      <div class="FZ_our-services-inner FZ_container">
        <div class="top-text">
          <h5 data-aos="zoom-in-up" class="fs-lg"><?php echo $our_services['section_subtitle'] ?></h5>
          <h3 data-aos-delay="300" data-aos="zoom-in-up" class="fs-4xl"><?php echo $our_services['section_title'] ?></h3>
        </div>

        <div class="FZ_services">
          <?php
          $services_array = $our_services['our_services'];
          if (isset($services_array)):
            foreach ($services_array as $index => $service_arr):
              $service = $service_arr['service'];
              ?>
              <!-- service card -->
              <div class="service">
                <div class="service-bg">
                  <img data-aos="zoom-in-up" src="<?php echo $service['img'] ?: '' ?>" alt="Servoce image" />
                </div>
                <div class="content">
                  <h4 data-aos-delay="900" data-aos="zoom-in-up" class="fs-2xl"><?php echo $service['title'] ?: '' ?></h4>
                  <p><?php echo $service['description'] ?: '' ?></p>
                </div>
              </div>
              <?php
            endforeach;
          endif;
          ?>
        </div>

        <div class="cta-btn FZ_gap-sm-top FZ_flex flex_justify_center">
          <a href="tel:<?php echo $our_services['call_now_telephone_number'] ?>" class="FZ_btn btn_white">Call Now</a>
        </div>
      </div>
    </section>
    <?php
  else:
    echo '<div class="FZ_section FZ_gap-lg-top"></div>';
  endif;
  ?>

  <!-- our services ends -->
  <!-- testimonials starts -->
  <?php
  $testimonials = get_field('testimonials', $home_page_id); // 8 is the home page id have to change this.
  
  if ($testimonials):
    ?>
    <section class="FZ_section FZ_section-gap-huge FZ_our-testimonials-wrap">
      <div class="FZ_our-testimonials-inner FZ_container">
        <div class="top-text">
          <h5 data-aos="zoom-in-up" class="fs-lg"><?php echo $testimonials['section_subtitle'] ?></h5>
          <h3 data-aos="zoom-in-up" class="fs-4xl"><?php echo $testimonials['section_title'] ?></h3>
        </div>

        <div data-aos="zoom-in" class="FZ_testimonials">

          <?php
          $testimonials_array = $testimonials['testimonials'];
          if (isset($testimonials_array)):
            foreach ($testimonials_array as $index => $testimonial_arr):
              $testimonial = $testimonial_arr['testimonial'];
              ?>
              <!-- testimonial -->
              <div class="FZ_testimonial">
                <img src="<?php echo $testimonial['img']; ?>" alt="Client icon" />

                <div class="content">
                  <p><?php echo $testimonial['message']; ?></p>
                  <h6 class="fs-md"><?php echo $testimonial['name']; ?></h6>
                  <p><?php echo $testimonial['client_location']; ?></p>
                </div>
              </div>
              <?php
            endforeach;
          endif;
          ?>
          <!-- testimonial -->
        </div>
      </div>
    </section>
    <?php
  else:
    echo '<div class="FZ_section FZ_gap-lg-top"></div>';
  endif;
  ?>
  <!-- testimonials ends -->


  <!-- faq section starts -->
  <?php
  $faq_section = get_field('home_faq', $home_page_id);

  if ($faq_section):
    ?>
    <section class="FZ_section FZ_section-gap-bottom FZ_faq-wrap">
      <div class="FZ_faq-inner FZ_container">
        <div class="top-text">
          <h5 data-aos="zoom-in-up" class="fs-lg"><?php echo $faq_section['subtitle'] ?></h5>
          <h3 data-aos="zoom-in-up" class="fs-4xl"><?php echo $faq_section['title'] ?></h3>
        </div>

        <div class="FZ_accordion">
          <?php
          $faq_array = $faq_section['faqs'];
          if (isset($faq_array)):
            foreach ($faq_array as $index => $faq_arr):
              $faq = $faq_arr['faqs_group'];
              ?>

              <!-- faq item -->
              <div class="FZ_accordion__item">
                <div data-aos-offset="-200" data-aos="zoom-in" class="FZ_accordion__header"
                  data-toggle="#faq<?php echo $index + 1; ?>"><?php echo $faq['question']; ?></div>
                <div class="FZ_accordion__content" id="faq<?php echo $index + 1; ?>">
                  <p><?php echo $faq['answer']; ?></p>
                </div>
              </div>
              <!-- faq item -->
              <?php
            endforeach;
          endif;
          ?>
        </div>
      </div>
    </section>
    <?php
  else:
    echo '<div class="FZ_section FZ_gap-lg-top"></div>';
  endif;
  ?>
  <!-- faq section ends -->


</main>


<?php get_footer();
