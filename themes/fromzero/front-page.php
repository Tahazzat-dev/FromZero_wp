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
      <div class="FZ_home-banner-wrap">
        <!-- banner background -->
        <div class="banner-bg">
          <!-- <picture>
                    <source srcset="assets/media/img/home-banner-small.png" media="(max-width: 767px)">
                    <source srcset="assets/media/img/home-banner-medium.png" media="(max-width: 1023px) and (min-width: 768px)">
                    <source srcset="assets/media/img/home-banner-large.jpg" media="(min-width: 1024px)">
                    <img src="assets/media/img/home-banner-medium.png" alt="Home Banner Image" />
                </picture> -->

          <!-- overlay -->
          <div class="bg-overlay"></div>

          <video autoplay loop muted>
            <source
              src="assets/media/video/home-banner-video.mp4"
              type="video/mp4"
            />
            Your browser does not support the video tag.
          </video>

          <!-- banner content -->
        </div>
        <div
          class="FZ_home-banner-inner FZ_container FZ_flex flex_align_center"
        >
          <div class="banner-content">
            <h4 data-aos="zoom-in" class="fs-xl">House 30 Road No. 20, Dhaka 1230</h4>
            <h1 data-aos-delay="500" data-aos="zoom-in" class="fs-5xl">Awesome Design for the ELITE RESIDENCE</h1>
            <p data-aos-delay="800" data-aos="zoom-in" class="fs-md">
              The main objective of the project – transformation of DHAKA City
              in innovative SMART CITY and tourist center.
            </p>
            <a  href="#" class="FZ_btn">EXPLORE IT</a>
          </div>
        </div>
      </div>
      <!-- banner ends -->

      <!-- about us start -->
      <section
      id="about"
        class="FZ_section-gap-top FZ_section-gap-bottom FZ_home-about-us-wrap"
      >
        <div
          class="FZ_home-about-us-inner FZ_container FZ_flex flex_align_center"
        >
          <!-- experience counter start-->
          <div data-aos="zoom-in" class="FZ_counter alone_item no-figure">
            <div class="figures"></div>

            <div
              class="counter-outer s-back-switch"
              style="
                padding: 15px;
                background-image: url('assets/media/img/Experience-background-image.jpg');
              "
            >
              <div class="numbers">
                <svg>
                  <defs>
                    <mask id="coming_mask_0" x="0" y="0">
                      <rect
                        class="coming-alpha"
                        x="0"
                        y="0"
                        width="100%"
                        height="100%"
                      ></rect>
                      <text
                        class="count number"
                        x="50%"
                        y="45%"
                        text-anchor="middle"
                        alignment-baseline="middle"
                      >
                        14
                      </text>
                      <text
                        class="count title"
                        x="50%"
                        y="70%"
                        text-anchor="middle"
                        alignment-baseline="middle"
                      >
                        YEARS OF EXPERIENCE
                      </text>
                    </mask>
                  </defs>
                  <rect
                    style="
                      -webkit-mask: url(#coming_mask_0);
                      mask: url(#coming_mask_0);
                    "
                    class="base"
                    x="0"
                    y="0"
                    width="100%"
                    height="100%"
                  ></rect>
                </svg>
              </div>
            </div>
          </div>
          <!-- experience counter ends-->

          <!-- about us info starts-->
          <div class="about-us-info-card">
            <div class="content">
              <h4 data-aos-delay="500" data-aos="zoom-in-right" class="fs-lg">ABOUT US</h4>
              <h3 data-aos-delay="700" data-aos="zoom-in-right" class="fs-4xl">
                We Offer Top-Quality Interior and Exterior Designs in Bangladesh
              </h3>
              <p data-aos-delay="700" data-aos="zoom-in-right">
                At FromZero, we specialize in comprehensive interior and
                exterior design solutions, transforming spaces into reflections
                of personality and purpose. Our designs seamlessly blend
                aesthetics with functionality, creating cohesive environments
                tailored to your needs.
              </p>
              <a data-aos-delay="600" data-aos="zoom-in-up" href="/contact.html" class="FZ_btn btn_icon icon__phone">CONTACT US</a>
            </div>
          </div>
          <!-- about us info ends-->
        </div>

        <div class="FZ_partners-inner FZ_container FZ_gap-md-top">
          <h5 class="fs-md text-center ">
            We work for the following brands
          </h5>
          <div class="FZ_marquee">
            <div class="FZ_marquee-inner-wrap">
                <div class="FZ_marquee-inner">
                    <div class="FZ_marquee-img">
                      <img src="assets/media/img/partners/abc-realestate.png" alt="Image 1">
                    </div>
                    <div class="FZ_marquee-img">
                      <img src="assets/media/img/partners/assure.png" alt="Image 2">
                    </div>
                    <div class="FZ_marquee-img">
                      <img src="assets/media/img/partners/bashundhara.png" alt="Image 3">
                    </div>
                    <div class="FZ_marquee-img">
                      <img src="assets/media/img/partners/bti.png" alt="Image 4">
                    </div>
                    <div  class="FZ_marquee-img">
                      <img src="assets/media/img/partners/glg.png" alt="Image 5">
                    </div>
                    <div class="FZ_marquee-img">
                      <img src="assets/media/img/partners/navana-real-state.png" alt="Image 6">
                    </div>



                    <div class="FZ_marquee-img">
                      <img src="assets/media/img/partners/abc-realestate.png" alt="Image 1">
                    </div>
                    <div class="FZ_marquee-img">
                      <img src="assets/media/img/partners/assure.png" alt="Image 2">
                    </div>
                    <div class="FZ_marquee-img">
                      <img src="assets/media/img/partners/bashundhara.png" alt="Image 3">
                    </div>
                    <div class="FZ_marquee-img">
                      <img src="assets/media/img/partners/bti.png" alt="Image 4">
                    </div>
                    <div  class="FZ_marquee-img">
                      <img src="assets/media/img/partners/glg.png" alt="Image 5">
                    </div>
                    <div class="FZ_marquee-img">
                      <img src="assets/media/img/partners/navana-real-state.png" alt="Image 6">
                    </div>



                    <div class="FZ_marquee-img">
                      <img src="assets/media/img/partners/abc-realestate.png" alt="Image 1">
                    </div>
                    <div class="FZ_marquee-img">
                      <img src="assets/media/img/partners/assure.png" alt="Image 2">
                    </div>
                    <div class="FZ_marquee-img">
                      <img src="assets/media/img/partners/bashundhara.png" alt="Image 3">
                    </div>
                    <div class="FZ_marquee-img">
                      <img src="assets/media/img/partners/bti.png" alt="Image 4">
                    </div>
                    <div  class="FZ_marquee-img">
                      <img src="assets/media/img/partners/glg.png" alt="Image 5">
                    </div>
                    <div class="FZ_marquee-img">
                      <img src="assets/media/img/partners/navana-real-state.png" alt="Image 6">
                    </div>


                    <div class="FZ_marquee-img">
                      <img src="assets/media/img/partners/abc-realestate.png" alt="Image 1">
                    </div>
                    <div class="FZ_marquee-img">
                      <img src="assets/media/img/partners/assure.png" alt="Image 2">
                    </div>
                    <div class="FZ_marquee-img">
                      <img src="assets/media/img/partners/bashundhara.png" alt="Image 3">
                    </div>
                    <div class="FZ_marquee-img">
                      <img src="assets/media/img/partners/bti.png" alt="Image 4">
                    </div>
                    <div  class="FZ_marquee-img">
                      <img src="assets/media/img/partners/glg.png" alt="Image 5">
                    </div>
                    <div class="FZ_marquee-img">
                      <img src="assets/media/img/partners/navana-real-state.png" alt="Image 6">
                    </div>
                  </div>
            </div>
          </div>
        </div>
      </section>
      <!-- about us ends -->

      <!-- our expertise starts -->
      <section class="FZ_section FZ_section-gap-huge FZ_our-expertise-wrap">
        <div class="FZ_our-expertise-inner FZ_container">
          <div class="top-text">
            <h5 data-aos="zoom-in-up" class="fs-lg">YOUR VISION</h5>
            <h3 data-aos="zoom-in-up" class="fs-4xl">Our Expertise</h3>
          </div>
          <div class="expertises FZ_flex">
            <!-- expertise card -->
            <div class="expertise-card">
              <div class="icon-text FZ_flex flex_align_center">
                <img data-aos="zoom-in-up" src="assets/media/img/customize-image.png" alt="Icon 1" />
                <h3 data-aos="zoom-in-up" class="fs-lg">Customized Design Solutions</h3>
              </div>
              <p data-aos="zoom-in-up">
                Tailored interiors and exteriors to reflect your unique style
                and needs.
              </p>
            </div>
            <!-- expertise card -->
            <div class="expertise-card">
              <div class="icon-text FZ_flex flex_align_center">
                <img data-aos="zoom-in-up" src="assets/media/img/expert-img.png" alt="Icon 2" />
                <h3 data-aos="zoom-in-up" class="fs-lg">Expert Consultation</h3>
              </div>
              <p data-aos="zoom-in-up">
                Professional advice to guide your design choices and maximize
                your space.
              </p>
            </div>
            <!-- expertise card -->
            <div class="expertise-card">
              <div class="icon-text FZ_flex flex_align_center">
                <img data-aos="zoom-in-up"
                  src="assets/media/img/sustainable-peace-img.png"
                  alt="Icon 3"
                />
                <h3 data-aos="zoom-in-up" class="fs-lg">Sustainable Practices</h3>
              </div>
              <p data-aos="zoom-in-up">
                Eco-friendly materials and methods for a greener environment.
              </p>
            </div>
            <!-- expertise card -->
            <div class="expertise-card">
              <div class="icon-text FZ_flex flex_align_center">
                <img data-aos="zoom-in-up" src="assets/media/img/3d-visualization.png" alt="Icon 4" />
                <h3 data-aos="zoom-in-up" class="fs-lg">3D Visualization</h3>
              </div>
              <p data-aos="zoom-in-up">
                Realistic 3D models to preview your design before
                implementation.
              </p>
            </div>
            <!-- expertise card -->
            <div class="expertise-card">
              <div class="icon-text FZ_flex flex_align_center">
                <img data-aos="zoom-in-up"
                  src="assets/media/img/project-management-img.png"
                  alt="Icon 5"
                />
                <h3 data-aos="zoom-in-up" class="fs-lg">Project Management</h3>
              </div>
              <p data-aos="zoom-in-up">
                End-to-end project oversight ensuring timely and budget-friendly
                completion.
              </p>
            </div>
            <!-- expertise card -->
            <div class="expertise-card">
              <div class="icon-text FZ_flex flex_align_center">
                <img data-aos="zoom-in-up"
                  src="assets/media/img/quality-craftsman-img.png"
                  alt="Icon 1"
                />
                <h3 data-aos="zoom-in-up" class="fs-lg">Quality Craftsmanship</h3>
              </div>
              <p data-aos="zoom-in-up">
                High-quality materials and skilled craftsmanship for lasting
                results.
              </p>
            </div>
            <!-- expertise card -->
          </div>
        </div>
      </section>
      <!-- our expertise ends -->

      <!-- last projects section starts -->
      <section id="projects" class="FZ_section FZ_section-gap-huge FZ_our-projects-wrap">
        <div class="FZ_our-projects-inner FZ_container">
          <div class="top-text">
            <h5 data-aos="zoom-in-up" class="fs-lg">LAST PROJECTS</h5>
            <h3 data-aos-delay="300" data-aos="zoom-in-up" class="fs-4xl">Make it with passion.</h3>
          </div>

          <div class="FZ_latest-projects FZ_flex flex_column">
            <!-- latest project card -->
            <div class="latest-project FZ_flex flex_align_center flex_justify_between">
              <div data-aos="zoom-in"  class="latest-project-images">
                <div  class="latest-project-images-slider first">
                  <img 
                    src="assets/media/img/latest-project-img-1.jpg"
                    alt="Project image" />
                  <img 
                    src="assets/media/img/latest-project-img-2.jpg"
                    alt="Project image" />
                  <img 
                    src="assets/media/img/latest-project-img-3.jpg"
                    alt="Project image" />
                  <img 
                    src="assets/media/img/latest-project-img-4.jpg"
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
                    src="assets/media/img/latest-project-img-3.jpg"
                    alt="Project image" />
                  <img 
                    src="assets/media/img/latest-project-img-4.jpg"
                    alt="Project image" />
                  <img 
                    src="assets/media/img/latest-project-img-5.jpg"
                    alt="Project image" />
                  <img 
                    src="assets/media/img/latest-project-img-6.jpg"
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
                  src="assets/media/img/latest-project-img-6.jpg"
                  alt="Project image" />
                <img 
                  src="assets/media/img/latest-project-img-7.jpg"
                  alt="Project image" />
                <img 
                  src="assets/media/img/latest-project-img-8.jpg"
                  alt="Project image" />
                <img 
                  src="assets/media/img/latest-project-img-9.jpg"
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
                  src="assets/media/img/apartment-inerior-service.png"
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
                  src="assets/media/img/kitchen-interior-service.png"
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
                  src="assets/media/img/Design-and-consultancy-service.png"
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
                  src="assets/media/img/apartment-inerior-service.png"
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
                  src="assets/media/img/rooftop-landscape-service.png"
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
                  src="assets/media/img/office-interior-service.png"
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
            <a href="tel:+880 1818-339339" class="FZ_btn btn_white">Call Now</a>
          </div>
        </div>
      </section>
      <!-- our services ends -->

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
                src="assets/media/img/client-feedback-icon.png"
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
                src="assets/media/img/client-feedback-icon.png"
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
                src="assets/media/img/client-feedback-icon.png"
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
