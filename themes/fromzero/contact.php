<?php
/**
 * Template Name: Contact page template
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
  $banner = get_field('contact_page_banner');
  ?>
  <div class="FZ_page-banner-wrap">
    <!-- banner background -->

    <div class="banner-bg">
      <picture>
        <source
          srcset="<?php echo $banner['banner_bg']['mobile_background'] ?: get_template_directory_uri() . '/assets/media/img/contact-us-banner-small.png' ?>"
          media="(max-width: 767px)">
        <source
          srcset="<?php echo $banner['banner_bg']['tablet_background'] ?: get_template_directory_uri() . '/assets/media/img/contact-us-banner-medium.png' ?>"
          media="(max-width: 1023px) and (min-width: 768px)">
        <source
          srcset="<?php echo $banner['banner_bg']['desktop_background'] ?: get_template_directory_uri() . '/assets/media/img/contact-us-banner-large.png' ?>"
          media="(min-width: 1024px)">
        <img
          src="<?php echo $banner['banner_bg']['desktop_background'] ?: get_template_directory_uri() . '/assets/media/img/contact-us-banner-large.png' ?>"
          alt="Home Banner Image" />
      </picture>

      <!-- overlay -->
      <div class="bg-overlay"></div>

      <!-- banner content -->
    </div>
    <div class="FZ_page-banner-inner FZ_container FZ_flex flex_align_center">
      <div class="banner-content FZ_flex flex_center flex_column">
      <h1 data-aos="zoom-in" class="fs-3xl"><?php echo $banner['title']?:"Contact US" ?></h1>
      <h4 data-aos="zoom-in" class="fs-md"><?php echo $banner['sub_title']?:"We’d Love to Hear from You!" ?></h4>
      </div>
    </div>
  </div>
  <!-- banner ends -->

  <?php
  $contact_section = get_field('contact_form');
  $contact_info = $contact_section['contact_info'];
  ?>
      <!-- contact info starts -->
       <section class="FZ_section FZ_contact-info-wrap FZ_section-gap-huge">
        <div class="FZ_contact-info-inner FZ_container">

            <div class="contact-container FZ_flex flex_justify_between">
                        <div class="col contact_info FZ_flex flex_column">
                            <h3 data-aos-delay="100" data-aos="zoom-in-up" class="fs-3xl"><?php echo $contact_section['title'] ?></h3>
                               <p data-aos-delay="200" data-aos="zoom-in-up" class="des"><?php echo $contact_section['des'] ?></p>

                            <p data-aos-delay="300"  data-aos="zoom-in-up" class="whats-app FZ_flex flex_align_center"><?php echo $contact_info['phone'] ?></p>
                            <p data-aos-delay="400" data-aos="zoom-in-up" class="inquery-mail FZ_flex flex_align_center"><?php echo $contact_info['inquiry_email'] ?></p>
                            <p data-aos-delay="500" data-aos="zoom-in-up" class="mail FZ_flex flex_align_center"><?php echo isset($contact_info['personal_mail'])? $contact_info['personal_mail']:'' ?></p>
                          </div>
                        <form id="custom-contact-form" action="" class="contact-form FZ_flex flex_column">
                            <div class="FZ_flex flex_align_center">
                                <input data-aos-delay="600"  data-aos="zoom-in-right"  type="text" placeholder="Name" name="name" id="">
                                <input data-aos-delay="600"  data-aos="zoom-in-left" type="number" placeholder="Phone" name="phone" id="">
                            </div>
                            <input data-aos-delay="700"  data-aos="zoom-in-up" type="text" placeholder="Email" name="email" id="">
                            <textarea data-aos-delay="800"  data-aos="zoom-in-up"  name="message" placeholder="Message" id=""></textarea>

                            <button data-aos-delay="900"  data-aos="zoom-in-up" type="submit" class="FZ_btn btn_send">SEND</button>
                        </form>


                        <?php // do_shortcode('[contact-form-7 id="6f1b0d6" title="Contact"]') ?>
            </div>
        </div>
       </section>
      <!-- contact info ends -->
    </main>


    <?php get_footer();
