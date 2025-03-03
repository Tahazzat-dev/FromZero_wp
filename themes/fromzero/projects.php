<?php
/**
 * Template Name: Projects page template
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
  $banner = get_field('project_page_banner');
  ?>
  <div class="FZ_page-banner-wrap">
    <!-- banner background -->

    <div class="banner-bg">
      <picture>
        <source
          srcset="<?php echo $banner['banner_bg']['mobile_background'] ?: get_template_directory_uri() . '/assets/media/img/projects-banner-small.png' ?>"
          media="(max-width: 767px)">
        <source
          srcset="<?php echo $banner['banner_bg']['tablet_background'] ?: get_template_directory_uri() . '/assets/media/img/projects-banner-medium.png' ?>"
          media="(max-width: 1023px) and (min-width: 768px)">
        <source
          srcset="<?php echo $banner['banner_bg']['desktop_background'] ?: get_template_directory_uri() . '/assets/media/img/projects-banner-large.png' ?>"
          media="(min-width: 1024px)">
        <img
          src="<?php echo $banner['banner_bg']['desktop_background'] ?: get_template_directory_uri() . '/assets/media/img/projects-banner-large.png' ?>"
          alt="Home Banner Image" />
      </picture>

      <!-- overlay -->
      <div class="bg-overlay"></div>

      <!-- banner content -->
    </div>
    <div class="FZ_page-banner-inner FZ_container FZ_flex flex_align_center">
      <div class="banner-content FZ_flex flex_center flex_column">
        <h1 data-aos="zoom-in" class="fs-3xl"><?php echo $banner['title']?:"Our Projectss" ?></h1>
        <h4 data-aos="zoom-in" class="fs-md"><?php echo $banner['sub_title']?:"From Concept to Creation." ?></h4>
      </div>
    </div>
  </div>
  <!-- banner ends -->

  <!-- last projects section starts -->
  <?php
  $our_projects = get_field('all_projects');
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Get current page number
  echo $paged;
  
  $args = array(
    'post_type' => 'post',
    'paged' => $paged,
    'orderby' => 'date',
    'order' => 'DESC'
  );



  $projects_query = new WP_Query($args);
  ?>
  <section id="projects" class="FZ_section FZ_section-gap-top FZ_our-projects-wrap">
    <div class="FZ_our-projects-inner FZ_container">
      <div class="top-text">
        <h5 data-aos="zoom-in-up" class="fs-lg"> <?php echo $our_projects['subtitle'] ?></h5>
        <h3 data-aos-delay="300" data-aos="zoom-in-up" class="fs-4xl"><?php echo $our_projects['title'] ?></h3>
      </div>

      <div class="FZ_latest-projects FZ_flex flex_column">
        <?php
        if ($projects_query->have_posts()):
          while ($projects_query->have_posts()):
            $projects_query->the_post();
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
          <?php endwhile; ?>
          <!-- Pagination -->
          <div class=" FZ_pagination">

            <?php
            echo paginate_links(array(
              'total' => $projects_query->max_num_pages,
              'current' => $paged,
              'prev_text' => '« Previous',
              'next_text' => 'Next »',
            ));
            ?>
          </div>
          <?php wp_reset_postdata();
        else:
          echo '<p>Please add at least one project from the post.</p>';
        endif;
        ?>
      </div>

    </div>
  </section>
  <!-- last projects section ends -->


  <!-- testimonials starts -->
  <?php
  $testimonials = get_field('testimonials', 8); // 8 is the home page id have to change this.
  
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
  $faq_section = get_field('project_faq_section');
  ?>
  <section class="FZ_section FZ_section-gap-bottom FZ_faq-wrap">
    <div class="FZ_faq-inner FZ_container">
      <div class="top-text">
        <h5 data-aos="zoom-in-up" class="fs-lg"><?php echo $faq_section['section_subtitle'] ?></h5>
        <h3 data-aos="zoom-in-up" class="fs-4xl"><?php echo $faq_section['title'] ?></h3>
      </div>
      <?php
      $faq_array = get_field('projects_faq');
      if (isset($faq_array)):
        echo '<div class="FZ_accordion">';
        foreach ($faq_array as $index => $faq):
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
        echo '</div>';
      endif;
      ?>
    </div>
  </section>
  <!-- faq section ends -->


</main>


<?php get_footer();
