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
?>
  <!-- Main -->
  <main class="FZ_main-wrap">
      <!-- banner starts -->
      <div class="FZ_page-banner-wrap">
        <!-- banner background -->

        <div class="banner-bg">
          <picture>
            <source
              srcset="<?php echo get_template_directory_uri(); ?>/assets/media/img/about-us-banner-small.png"
              media="(max-width: 767px)"
            />
            <source
              srcset="<?php echo get_template_directory_uri(); ?>/assets/media/img/about-us-banner-medium.png"
              media="(max-width: 1023px) and (min-width: 768px)"
            />
            <source
              srcset="<?php echo get_template_directory_uri(); ?>/assets/media/img/about-us-banner-large.png"
              media="(min-width: 1024px)"
            />
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/media/img/about-us-banner-large.png"
              alt="Home Banner Image"
            />
          </picture>

          <!-- overlay -->
          <div class="bg-overlay"></div>

          <!-- banner content -->
        </div>
        <div
          class="FZ_page-banner-inner FZ_container FZ_flex flex_align_center"
        >
          <div class="banner-content FZ_flex flex_center flex_column">
            <h1 data-aos="zoom-in" class="fs-3xl">About US</h1>
            <h4 data-aos="zoom-in" class="fs-md">
              Architecture is Our Art, Innovation is Our Passion.
            </h4>
          </div>
        </div>
      </div>
      <!-- banner ends -->

      <!-- welcome message starts -->
      <section class="FZ_section FZ_section-gap-huge FZ_company-intro-wrap">
        <div
          class="FZ_company-intro-inner FZ_container FZ_flex flex_align_center flex_justify_between"
        >
          <div class="company-profile">
            <img
            data-aos="zoom-in"
              src="<?php echo get_template_directory_uri(); ?>/assets/media/img/company-interior.png"
              alt="Company Profile"
            />
          </div>

          <div class="content">
            <h3 data-aos="zoom-in-up" class="fs-3xl">Our History</h3>
            <p data-aos-delay="200" data-aos="zoom-in-up">
              Founded in [Year], FromZero is driven by a passion for innovative,
              sustainable architecture. We specialize in creating functional,
              timeless designs that transform spaces and enhance lives. Our team
              combines creativity with cutting-edge technology to deliver
              exceptional projects, ensuring every detail reflects our
              commitment to quality and excellence.
            </p>
            <br />
            <p data-aos-delay="300" data-aos="zoom-in-up">
              We believe architecture is more than just buildings—it’s about
              shaping experiences and enhancing lives. With a deep dedication to
              craftsmanship, technology, and environmental responsibility, we
              bring visionary concepts to life, ensuring each project is as
              functional as it is beautiful.
            </p>
          </div>
        </div>

        <div class="FZ_company-vision FZ_gap-md-top FZ_container">
          <h3 data-aos="zoom-in-up" class="fs-3xl">Our Mission</h3>
          <p data-aos="zoom-in-up">
            At FromZero, our mission is to create innovative, sustainable, and
            functional designs that not only meet the needs of our clients but
            also inspire the communities they serve. We believe architecture is
            about more than just constructing buildings; it’s about shaping
            environments that enhance the quality of life, drive progress, and
            stand the test of time.
            <br />
            <br />
            We are committed to a client-centered approach, ensuring every
            project reflects the unique vision and requirements of those we work
            with. Whether it's a residential home, a commercial complex, or an
            urban development, we focus on understanding the individual needs of
            each client to provide tailor-made solutions that bring their ideas
            to life.
          </p>
        </div>

        <div class="FZ_company-vision FZ_gap-xs-top FZ_container">
          <h3 data-aos="zoom-in-up" class="fs-3xl">Our Vision</h3>
          <p data-aos="zoom-in-up">
            Our vision is to be a leading force in the architecture and
            construction industry, recognized for our ability to design and
            build exceptional spaces that inspire, challenge conventions, and
            improve lives. We aim to push the boundaries of design, integrating
            creativity, technology, and sustainability to create spaces that not
            only meet but exceed expectations.
            <br />
            <br />
            We envision a future where FromZero becomes synonymous with
            architectural excellence, where our designs contribute to shaping
            smarter, more sustainable cities, and where our commitment to
            innovation and quality continues to lead the way in the industry.
          </p>
        </div>
      </section>
      <!-- welcome message ends -->


         <!-- our services starts -->
         <section class="FZ_section FZ_section-gap-huge FZ_our-services-wrap">
            <div class="FZ_our-services-inner FZ_container">
              <div class="top-text">
                <h5 data-aos="zoom-in-up" class="fs-lg">BUILDING DREAMS WITH</h5>
                <h3 data-aos-delay="300" data-aos="zoom-in-up" class="fs-4xl">Our Services</h3>
              </div>
    
              <div class="FZ_services">
                <!-- service card -->
                <div class="service">
                  <div class="service-bg">
                    <img 
                     data-aos="zoom-in-up"
                      src="<?php echo get_template_directory_uri(); ?>/assets/media/img/apartment-inerior-service.png"
                      alt="Servoce image"
                    />
                  </div>
                  <div class="content">
                    <h4 data-aos-delay="900" data-aos="zoom-in-up" class="fs-2xl">Apartment Interior</h4>
                    <p >
                      Stylish, functional, and personalized interiors that elevate
                      your living space with expert craftsmanship and attention to
                      detail.
                    </p>
                  </div>
                </div>
                <!-- service card -->
                <div class="service">
                  <div class="service-bg">
                    <img
                    data-aos="zoom-in-up"
                      src="<?php echo get_template_directory_uri(); ?>/assets/media/img/kitchen-interior-service.png"
                      alt="Servoce image"
                    />
                  </div>
                  <div class="content">
                    <h4 data-aos="zoom-in-up" class="fs-2xl">Kitchen Interior</h4>
                    <p>
                      Functional, stylish, and modern kitchens designed for
                      efficiency, comfort, and elegance.
                    </p>
                  </div>
                </div>
                <!-- service card -->
                <div class="service">
                  <div class="service-bg">
                    <img
                    data-aos="zoom-in-up"
                      src="<?php echo get_template_directory_uri(); ?>/assets/media/img/Design-and-consultancy-service.png"
                      alt="Servoce image"
                    />
                  </div>
                  <div class="content">
                    <h4 data-aos="zoom-in-up"  class="fs-2xl">Design & Consultancy</h4>
                    <p>
                      Expert guidance and innovative solutions to transform your
                      vision into reality with precision and creativity.
                    </p>
                  </div>
                </div>
                <!-- service card -->
                <div class="service">
                  <div class="service-bg">
                    <img
                    data-aos="zoom-in-up"
                      src="<?php echo get_template_directory_uri(); ?>/assets/media/img/apartment-inerior-service.png"
                      alt="Servoce image"
                    />
                  </div>
                  <div class="content">
                    <h4 data-aos="zoom-in-up"  class="fs-2xl">Renovative Space</h4>
                    <p>
                      Transforming existing spaces with creative, functional, and
                      modern design solutions.
                    </p>
                  </div>
                </div>
                <!-- service card -->
                <div class="service">
                  <div class="service-bg">
                    <img  data-aos="zoom-in-up"
                      src="<?php echo get_template_directory_uri(); ?>/assets/media/img/rooftop-landscape-service.png"
                      alt="Servoce image"
                    />
                  </div>
                  <div class="content">
                    <h4 data-aos="zoom-in-up"  class="fs-2xl">Rooftop Landscaping</h4>
                    <p>
                      Elevate your outdoor space with lush, sustainable, and stylish
                      rooftop garden designs.
                    </p>
                  </div>
                </div>
                <!-- service card -->
                <div class="service">
                  <div class="service-bg">
                    <img  data-aos="zoom-in-up"
                      src="<?php echo get_template_directory_uri(); ?>/assets/media/img/office-interior-service.png"
                      alt="Servoce image"
                    />
                  </div>
                  <div class="content">
                    <h4 data-aos="zoom-in-up"  class="fs-2xl">Office Interior</h4>
                    <p>
                      Smart, stylish, and functional workspaces designed to enhance
                      productivity and reflect your brand identity.
                    </p>
                  </div>
                </div>
                <!-- service card -->
              </div>
    
              <div class="cta-btn FZ_gap-sm-top FZ_flex flex_justify_center">
                <a href="tel:01777524051" class="FZ_btn btn_white">Call Now</a>
              </div>
            </div>
          </section>
          <!-- our services ends -->





      
      <!-- testimonials starts -->
      <section class="FZ_section FZ_gap-md-top FZ_section-gap-bottom FZ_our-testimonials-wrap">
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
