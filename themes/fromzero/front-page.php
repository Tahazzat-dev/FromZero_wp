<?php
/**
 * Template Name: Front page template
 * 
 * The template for displaying front page of the website
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package fromzero
 */
get_header();
?>

<!-- Main -->
<main class="FZ_main-wrap">
  <!-- banner starts -->
  <?php
  $banner = get_field('home_banner');
  ?>
  <div class="FZ_home-banner-wrap">
    <!-- banner background -->
    <div class="banner-bg">
      <div class="bg-overlay"></div>
      <video autoplay loop muted>
        <source
          src="<?php echo $banner['video_url'] ?: get_template_directory_uri() . '/assets/media/video/home-banner-video.mp4'; ?>"
          type="video/mp4" />
        Your browser does not support the video tag.
      </video>

      <!-- banner content -->
    </div>
    <div class="FZ_home-banner-inner FZ_container FZ_flex flex_align_center">
      <div class="banner-content">
        <h4 data-aos="zoom-in" class="fs-xl"><?php echo $banner['house_address'] ?></h4>
        <h1 data-aos-delay="500" data-aos="zoom-in" class="fs-5xl"><?php echo $banner['title'] ?></h1>
        <p data-aos-delay="800" data-aos="zoom-in" class="fs-md"><?php echo $banner['short_description'] ?></p>
        <a href="<?php echo $banner['explore_url'] ?>" class="FZ_btn">EXPLORE IT</a>
      </div>
    </div>
  </div>
  <!-- banner ends -->

  <!-- about us start -->
  <?php
  $about_us = get_field('home_about_us');

  ?>
  <section id="about" class="FZ_section-gap-top FZ_section-gap-bottom FZ_home-about-us-wrap">
    <div class="FZ_home-about-us-inner FZ_container FZ_flex flex_align_center">
      <!-- experience counter start-->
      <div data-aos="zoom-in" class="FZ_counter alone_item no-figure">
        <div class="figures"></div>

        <div class="counter-outer s-back-switch" style="
                padding: 15px;
                background-image: url('<?php echo $about_us['experience_frame_bg'] ?>');
              ">
          <div class="numbers">
            <svg>
              <defs>
                <mask id="coming_mask_0" x="0" y="0">
                  <rect class="coming-alpha" x="0" y="0" width="100%" height="100%"></rect>
                  <text class="count number" x="50%" y="45%" text-anchor="middle" alignment-baseline="middle">
                    <?php echo $about_us['total_experience'] ?>
                  </text>
                  <text class="count title" x="50%" y="70%" text-anchor="middle" alignment-baseline="middle">
                    <?php
                    if ($about_us['total_experience'] > 1) {
                      echo $about_us['total_experience'] . " YEARS OF EXPERIENCE";
                    } else {
                      echo $about_us['total_experience'] . " YEAR OF EXPERIENCE";
                    }
                    ?>

                  </text>
                </mask>
              </defs>
              <rect style="
                      -webkit-mask: url(#coming_mask_0);
                      mask: url(#coming_mask_0);
                    " class="base" x="0" y="0" width="100%" height="100%"></rect>
            </svg>
          </div>
        </div>
      </div>
      <!-- experience counter ends-->

      <!-- about us info starts-->
      <div class="about-us-info-card">
        <div class="content">
          <h4 data-aos-delay="500" data-aos="zoom-in-right" class="fs-lg">ABOUT US</h4>
          <h3 data-aos-delay="700" data-aos="zoom-in-right" class="fs-4xl"><?php echo $about_us['section_title']; ?>
          </h3>
          <p data-aos-delay="700" data-aos="zoom-in-right"><?php echo $about_us['section_description']; ?></p>
          <a data-aos-delay="600" data-aos="zoom-in-up" href="/contact.html"
            class="FZ_btn btn_icon icon__phone"><?php echo $about_us['button_text']; ?></a>
        </div>
      </div>
      <!-- about us info ends-->
    </div>


    <?php
    $our_partners = get_field('home_our_partners');
    ?>
    <div class="FZ_partners-inner FZ_container FZ_gap-md-top">
      <h5 class="fs-md text-center "><?php echo $our_partners['title'] ?></h5>
      <div class="FZ_marquee">
        <div class="FZ_marquee-inner-wrap">
          <div class="FZ_marquee-inner">
            <?php
            $partners_array = $our_partners['partner_images'];
            if (isset($partners_array)):
              $partners_array = array_merge($partners_array, $partners_array, $partners_array, $partners_array, $partners_array);
              foreach ($partners_array as $partner): ?>
                <div class="FZ_marquee-img">
                  <img src="<?php echo $partner['partners_logo']; ?>" alt="Image 2">
                </div>
                <?php
              endforeach;
            endif;
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- about us ends -->

  <!-- our expertise starts -->
  <?php
  $our_expertise = get_field('home_our_expertise');
  ?>
  <section class="FZ_section FZ_section-gap-huge FZ_our-expertise-wrap">
    <div class="FZ_our-expertise-inner FZ_container">
      <div class="top-text">
        <h5 data-aos="zoom-in-up" class="fs-lg"><?php echo $our_expertise['section_subtitle'] ?></h5>
        <h3 data-aos="zoom-in-up" class="fs-4xl"><?php echo $our_expertise['section_title'] ?></h3>
      </div>
      <div class="expertises FZ_flex">
        <?php
        $expertise_array = $our_expertise['our_expertise'];
        if (isset($expertise_array)):
          foreach ($expertise_array as $expertise): ?>
            <div class="expertise-card">
              <div class="icon-text FZ_flex flex_align_center">
                <img data-aos="zoom-in-up" src="<?php echo $expertise['expertise']['icon']; ?>" alt="Icon 1" />
                <h3 data-aos="zoom-in-up" class="fs-lg"><?php echo $expertise['expertise']['title']; ?></h3>
              </div>
              <p data-aos="zoom-in-up"><?php echo $expertise['expertise']['description']; ?></p>
            </div>
            <!-- expertise card -->
            <?php
          endforeach;
        endif;
        ?>
      </div>
    </div>
  </section>
  <!-- our expertise ends -->

  <!-- last projects section starts -->
  <?php
  $last_projects = get_field('last_projects');
  ?>
  <section id="projects" class="FZ_section FZ_section-gap-huge FZ_our-projects-wrap">
    <div class="FZ_our-projects-inner FZ_container">
      <div class="top-text">
        <h5 data-aos="zoom-in-up" class="fs-lg"><?php echo $last_projects['section_subtitle']; ?></h5>
        <h3 data-aos-delay="300" data-aos="zoom-in-up" class="fs-4xl"><?php echo $last_projects['section_title']; ?>
        </h3>
      </div>

      <div class="FZ_latest-projects FZ_flex flex_column">
        <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3,
          'orderby' => 'date',
          'order' => 'DESC'
        );

        $latest_posts = new WP_Query($args);

        if ($latest_posts->have_posts()):
          while ($latest_posts->have_posts()):
            $latest_posts->the_post();
            $slider_images = get_field('slider_images');
            $post_year = get_field('year');
            ?>

            <!-- latest project card -->
            <div class="latest-project FZ_flex flex_align_center flex_justify_between">
              <div data-aos="zoom-in" class="latest-project-images">
                <div class="latest-project-images-slider first">
                  <?php
                  if (isset($slider_images)):
                    foreach ($slider_images as $image): ?>
                      <img src="<?php echo $image['slider_img'] ?: '' ?>" alt="Project image" />
                      <?php
                    endforeach;
                  endif;
                  ?>
                </div>
              </div>

              <div class="content">
                <h6 data-aos="fade-in" class="fs-md"><?php echo $post_year; ?></h6>

                <h4 data-aos-delay="300" data-aos="zoom-in-up" class="fs-2xl"><?php the_title(); ?></h4>
                <p data-aos-delay="500" data-aos="zoom-in-up"><?php echo get_the_excerpt(); ?></p>

                <a data-aos-delay="600" data-aos="zoom-in-up" href="<?php the_permalink(); ?>"
                  class="FZ_btn btn_icon icon__arrow">READ</a>
              </div>
            </div>
          <?php endwhile;
          wp_reset_postdata();
        else:
          echo '<p>Please add at least one project from the post.</p>';
        endif;
        ?>
      </div>

    </div>
  </section>
  <!-- last projects section ends -->

  <!-- our services starts -->
  <?php
  $our_services = get_field('home_our_services');
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
  <!-- our services ends -->

  <!-- testimonials starts -->
  <?php
  $testimonials = get_field('testimonials');
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
  <!-- testimonials ends -->

  <!-- faq section starts -->
  <?php
  $faq_section = get_field('home_faq');
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
              <div data-aos-offset="-200" data-aos="zoom-in" class="FZ_accordion__header" data-toggle="#faq<?php echo $index+1; ?>"><?php echo $faq['question']; ?></div>
              <div class="FZ_accordion__content" id="faq1">
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
  <!-- faq section ends -->


</main>

<?php get_footer();
