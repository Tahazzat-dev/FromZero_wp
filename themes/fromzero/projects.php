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
      <div class="FZ_page-banner-wrap">
        <!-- banner background -->

        <div class="banner-bg">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/media/img/projects-banner-small.png" media="(max-width: 767px)">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/media/img/projects-banner-medium.png" media="(max-width: 1023px) and (min-width: 768px)">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/media/img/projects-banner-large.png" media="(min-width: 1024px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/media/img/projects-banner-large.png" alt="Home Banner Image" />
                </picture>

          <!-- overlay -->
          <div class="bg-overlay"></div>

          <!-- banner content -->
        </div>
        <div
          class="FZ_page-banner-inner FZ_container FZ_flex flex_align_center"
        >
          <div class="banner-content FZ_flex flex_center flex_column">
            <h1 data-aos="zoom-in" class="fs-3xl">Our Projects</h1>
            <h4 data-aos="zoom-in" class="fs-md">From Concept to Creation.</h4>
          </div>
        </div>
      </div>
      <!-- banner ends -->

        <!-- last projects section starts -->
        <section id="projects" class="FZ_section FZ_section-gap-top FZ_our-projects-wrap">
            <div class="FZ_our-projects-inner FZ_container">
              <div class="top-text">
                <h5 data-aos="zoom-in-up" class="fs-lg">PROJECTS</h5>
                <h3 data-aos-delay="300" data-aos="zoom-in-up" class="fs-4xl">We create it with passion.</h3>
              </div>
    
              <div class="FZ_latest-projects FZ_flex flex_column">
                <!-- latest project card -->
                <div class="latest-project FZ_flex flex_align_center flex_justify_between">
                  <div data-aos="zoom-in"  class="latest-project-images">
                    <div  class="latest-project-images-slider first">
                      <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/media/img/latest-project-img-1.jpg"
                        alt="Project image" />
                      <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/media/img/latest-project-img-2.jpg"
                        alt="Project image" />
                      <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/media/img/latest-project-img-3.jpg"
                        alt="Project image" />
                      <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/media/img/latest-project-img-4.jpg"
                        alt="Project image" />
                    </div>
                  </div>
              
                  <div class="content">
                    <h6 data-aos="fade-in" class="fs-md">2024</h6>
              
                    <h4 data-aos-delay="300" data-aos="zoom-in-up" class="fs-2xl">Poolscape Villa</h4>
                    <p data-aos-delay="500" data-aos="zoom-in-up">
                      The Seascape Villas project constitutes one of the first urban
                      interventions in this very unique context, a landscape dominated by
                      mountains and sea.
                    </p>
              
                    <a data-aos-delay="600" data-aos="zoom-in-up" href="#" class="FZ_btn btn_icon icon__arrow">READ</a>
                  </div>
                </div>
              
                <!-- latest project card (Updated with AOS animations) -->
                <div class="latest-project FZ_flex flex_align_center flex_justify_between">
                  <div  data-aos="zoom-in" class="latest-project-images">
                    <div  class="latest-project-images-slider second">
                      <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/media/img/latest-project-img-3.jpg"
                        alt="Project image" />
                      <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/media/img/latest-project-img-4.jpg"
                        alt="Project image" />
                      <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/media/img/latest-project-img-5.jpg"
                        alt="Project image" />
                      <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/media/img/latest-project-img-6.jpg"
                        alt="Project image" />
                    </div>
                  </div>
              
                  <div class="content">
                    <h6 data-aos="fade-in" class="fs-md">2024</h6>
              
                    <h4 data-aos-delay="300" data-aos="zoom-in-up" class="fs-2xl">Poolscape Villa</h4>
                    <p data-aos-delay="500" data-aos="zoom-in-up">
                      The Seascape Villas project constitutes one of the first urban
                      interventions in this very unique context, a landscape dominated by
                      mountains and sea.
                    </p>
              
                    <a data-aos-delay="600" data-aos="zoom-in-up" href="#" class="FZ_btn btn_icon icon__arrow">READ</a>
                  </div>
                </div>
              
                <!-- latest project card (Updated with AOS animations) -->
                <div class="latest-project FZ_flex flex_align_center flex_justify_between">
                  <div data-aos="zoom-in" class="latest-project-images">
                    <div   class="latest-project-images-slider third">
                      <img 
                      src="<?php echo get_template_directory_uri(); ?>/assets/media/img/latest-project-img-6.jpg"
                      alt="Project image" />
                    <img 
                      src="<?php echo get_template_directory_uri(); ?>/assets/media/img/latest-project-img-7.jpg"
                      alt="Project image" />
                    <img 
                      src="<?php echo get_template_directory_uri(); ?>/assets/media/img/latest-project-img-8.jpg"
                      alt="Project image" />
                    <img 
                      src="<?php echo get_template_directory_uri(); ?>/assets/media/img/latest-project-img-9.jpg"
                      alt="Project image" />
                    </div>
                  </div>
              
                  <div class="content">
                    <h6 data-aos="fade-in" class="fs-md">2024</h6>
              
                    <h4 data-aos-delay="300" data-aos="zoom-in-up" class="fs-2xl">Poolscape Villa</h4>
                    <p data-aos-delay="500" data-aos="zoom-in-up">
                      The Seascape Villas project constitutes one of the first urban
                      interventions in this very unique context, a landscape dominated by
                      mountains and sea.
                    </p>
              
                    <a data-aos-delay="600" data-aos="zoom-in-up" href="#" class="FZ_btn btn_icon icon__arrow">READ</a>
                  </div>
                </div>
                 <!-- latest project card -->
                 <div class="latest-project FZ_flex flex_align_center flex_justify_between">
                    <div data-aos="zoom-in"  class="latest-project-images">
                      <div  class="latest-project-images-slider first">
                        <img 
                          src="<?php echo get_template_directory_uri(); ?>/assets/media/img/latest-project-img-1.jpg"
                          alt="Project image" />
                        <img 
                          src="<?php echo get_template_directory_uri(); ?>/assets/media/img/latest-project-img-2.jpg"
                          alt="Project image" />
                        <img 
                          src="<?php echo get_template_directory_uri(); ?>/assets/media/img/latest-project-img-3.jpg"
                          alt="Project image" />
                        <img 
                          src="<?php echo get_template_directory_uri(); ?>/assets/media/img/latest-project-img-4.jpg"
                          alt="Project image" />
                      </div>
                    </div>
                
                    <div class="content">
                      <h6 data-aos="fade-in" class="fs-md">2024</h6>
                
                      <h4 data-aos-delay="300" data-aos="zoom-in-up" class="fs-2xl">Poolscape Villa</h4>
                      <p data-aos-delay="500" data-aos="zoom-in-up">
                        The Seascape Villas project constitutes one of the first urban
                        interventions in this very unique context, a landscape dominated by
                        mountains and sea.
                      </p>
                
                      <a data-aos-delay="600" data-aos="zoom-in-up" href="#" class="FZ_btn btn_icon icon__arrow">READ</a>
                    </div>
                  </div>
                
                  <!-- latest project card (Updated with AOS animations) -->
                  <div class="latest-project FZ_flex flex_align_center flex_justify_between">
                    <div  data-aos="zoom-in" class="latest-project-images">
                      <div  class="latest-project-images-slider second">
                        <img 
                          src="<?php echo get_template_directory_uri(); ?>/assets/media/img/latest-project-img-3.jpg"
                          alt="Project image" />
                        <img 
                          src="<?php echo get_template_directory_uri(); ?>/assets/media/img/latest-project-img-4.jpg"
                          alt="Project image" />
                        <img 
                          src="<?php echo get_template_directory_uri(); ?>/assets/media/img/latest-project-img-5.jpg"
                          alt="Project image" />
                        <img 
                          src="<?php echo get_template_directory_uri(); ?>/assets/media/img/latest-project-img-6.jpg"
                          alt="Project image" />
                      </div>
                    </div>
                
                    <div class="content">
                      <h6 data-aos="fade-in" class="fs-md">2024</h6>
                
                      <h4 data-aos-delay="300" data-aos="zoom-in-up" class="fs-2xl">Poolscape Villa</h4>
                      <p data-aos-delay="500" data-aos="zoom-in-up">
                        The Seascape Villas project constitutes one of the first urban
                        interventions in this very unique context, a landscape dominated by
                        mountains and sea.
                      </p>
                
                      <a data-aos-delay="600" data-aos="zoom-in-up" href="#" class="FZ_btn btn_icon icon__arrow">READ</a>
                    </div>
                  </div>
                
                  <!-- latest project card (Updated with AOS animations) -->
                  <div class="latest-project FZ_flex flex_align_center flex_justify_between">
                    <div data-aos="zoom-in" class="latest-project-images">
                      <div   class="latest-project-images-slider third">
                        <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/media/img/latest-project-img-6.jpg"
                        alt="Project image" />
                      <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/media/img/latest-project-img-7.jpg"
                        alt="Project image" />
                      <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/media/img/latest-project-img-8.jpg"
                        alt="Project image" />
                      <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/media/img/latest-project-img-9.jpg"
                        alt="Project image" />
                      </div>
                    </div>
                
                    <div class="content">
                      <h6 data-aos="fade-in" class="fs-md">2024</h6>
                
                      <h4 data-aos-delay="300" data-aos="zoom-in-up" class="fs-2xl">Poolscape Villa</h4>
                      <p data-aos-delay="500" data-aos="zoom-in-up">
                        The Seascape Villas project constitutes one of the first urban
                        interventions in this very unique context, a landscape dominated by
                        mountains and sea.
                      </p>
                
                      <a data-aos-delay="600" data-aos="zoom-in-up" href="#" class="FZ_btn btn_icon icon__arrow">READ</a>
                    </div>
                  </div>
              </div>
              
            </div>
          </section>
          <!-- last projects section ends -->


            <!-- testimonials starts -->
      <section class="FZ_section FZ_section-gap-huge FZ_our-testimonials-wrap">
        <div class="FZ_our-testimonials-inner FZ_container">
          <div class="top-text">
            <h5 data-aos="zoom-in-up" class="fs-lg">TESTIMONIALS</h5>
            <h3 data-aos="zoom-in-up" class="fs-4xl">They Love Us</h3>
          </div>

          <div data-aos="zoom-in" class="FZ_testimonials">
            <!-- testimonial -->
            <div class="FZ_testimonial">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/media/img/client-feedback-icon.png"
                alt="Client icon"
              />

              <div class="content">
                <p>
                  The way you approached the project was professional, and the
                  final design was nothing short of extraordinary. A true
                  testament to your skill and vision.
                </p>
                <h6 class="fs-md">Jamshed Mojumdar</h6>
                <p>Bashundhara, Dhaka</p>
              </div>
            </div>

            <!-- testimonial -->
            <div class="FZ_testimonial">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/media/img/client-feedback-icon.png"
                alt="Client icon"
              />

              <div class="content">
                <p>
                  Working with FromZero was a game-changer. Their ability to
                  envision and create something from nothing is nothing short of
                  extraordinary.
                </p>
                <h6 class="fs-md">Salman Farshi</h6>
                <p>Rupnagar, Dhaka</p>
              </div>
            </div>
            <!-- testimonial -->
            <div class="FZ_testimonial">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/media/img/client-feedback-icon.png"
                alt="Client icon"
              />

              <div class="content">
                <p>
                  FromZero has an exceptional ability to turn even the most
                  basic ideas into stunning, functional works of art. Truly a
                  master of design!
                </p>
                <h6 class="fs-md">Kyle</h6>
                <p>Brooklyn, NewYork</p>
              </div>
            </div>
            <!-- testimonial -->
          </div>
        </div>
      </section>
      <!-- testimonials ends -->



      
      <!-- faq section starts -->
      <section class="FZ_section FZ_section-gap-bottom FZ_faq-wrap">
        <div class="FZ_faq-inner FZ_container">
          <div class="top-text">
            <h5 data-aos="zoom-in-up" class="fs-lg">Your questions, our answers.</h5>
            <h3 data-aos="zoom-in-up" class="fs-4xl">FAQ</h3>
          </div>

          <div class="FZ_accordion">
            <div class="FZ_accordion__item">
              <div data-aos-offset="-200" data-aos="zoom-in" class="FZ_accordion__header" data-toggle="#faq1">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit?
              </div>
              <div class="FZ_accordion__content" id="faq1">
                <p >
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco
                  laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                  irure dolor in reprehenderit in voluptate velit esse cillum
                  dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                  cupidatat non proident, sunt in culpa qui officia deserunt
                  mollit anim id est laborum.
                </p>
              </div>
            </div>

            <div class="FZ_accordion__item">
              <div data-aos-offset="-200" data-aos="zoom-in" class="FZ_accordion__header" data-toggle="#faq2">
                But I must explain to you how all this mistaken idea?
              </div>
              <div class="FZ_accordion__content" id="faq2">
                <p>
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                  accusantium doloremque laudantium, totam rem aperiam, eaque
                  ipsa quae ab illo inventore veritatis et quasi architecto
                  beata
                </p>
              </div>
            </div>

            <div class="FZ_accordion__item">
              <div data-aos-offset="-200" data-aos="zoom-in" class="FZ_accordion__header" data-toggle="#faq3">
                At vero eos et accusamus et iusto odio?
              </div>
              <div class="FZ_accordion__content" id="faq3">
                <p>
                  But I must explain to you how all this mistaken idea of
                  denouncing pleasure and praising pain was born and I will give
                  you a complete account of the system, and expound the actual
                  teachings of the great explorer of the truth, the
                  master-builder of human happiness. No one rejects, dislikes,
                  or avoids pleasure itself, because it is pleasure, but because
                  those who do not know how to pursue pleasure rationally
                  encounter consequences that are extremely painful
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- faq section ends -->


    </main>


    <?php get_footer();
