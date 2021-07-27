<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BreezyCV - Resume / CV / vCard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="BreezyCV - Resume / CV / vCard Template" />
    <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Material CV, portfolio" />
    <meta name="author" content="lmpixels" />
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="{{ asset('frontend/css/reset.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-grid.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/animations.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/perfect-scrollbar.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href= "{{ asset('frontend/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}" type="text/css">

    <script src="{{ asset('frontend/js/modernizr.custom.js') }}" ></script>
  </head>

  <body>
    <!-- Animated Background -->
    <div class="lm-animated-bg" style="background-image: url({{ asset('frontend/img/main_bg.png') }});"></div>
    <!-- /Animated Background -->

    <!-- Loading animation -->
    {{-- <div class="preloader">
      <div class="preloader-animation">
        <div class="preloader-spinner">
        </div>
      </div>
    </div> --}}
    <!-- /Loading animation -->

    <div class="page">
      <div class="page-content">

          <header id="site_header" class="header mobile-menu-hide">
            <div class="header-content">
              <div class="header-photo">
                <img src="{{ asset('frontend/img/main_photo.jpg') }}" alt="Consolatrice BYIRINGIRO">
              </div>
              <div class="header-titles">
                <h3>Consolatrice BYIRINGIRO</h3>
                <h4>Web Designer</h4>
              </div>
            </div>

            <ul class="main-menu">
              <li class="active">
                <a href="#home" class="nav-anim">
                  <span class="menu-icon lnr lnr-home"></span>
                  <span class="link-text">Home</span>
                </a>
              </li>
              <li>
                <a href="#about-me" class="nav-anim">
                  <span class="menu-icon lnr lnr-user"></span>
                  <span class="link-text">About Me</span>
                </a>
              </li>
              <li>
                <a href="#resume" class="nav-anim">
                  <span class="menu-icon lnr lnr-graduation-hat"></span>
                  <span class="link-text">Resume</span>
                </a>
              </li>
              <li>
                <a href="#portfolio" class="nav-anim">
                  <span class="menu-icon lnr lnr-briefcase"></span>
                  <span class="link-text">Portfolio</span>
                </a>
              </li>
              <li>
                <a href="#blog" class="nav-anim">
                  <span class="menu-icon lnr lnr-book"></span>
                  <span class="link-text">Blog</span>
                </a>
              </li>
              <li>
                <a href="#contact" class="nav-anim">
                  <span class="menu-icon lnr lnr-envelope"></span>
                  <span class="link-text">Contact</span>
                </a>
              </li>
            </ul>

            <div class="social-links">
              <ul>
                <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
              </ul>
            </div>

            <div class="header-buttons">
              <a href="{{ asset('frontend/Consolatrice Cv.pdf') }}" target="_blank" class="btn btn-primary" download>Download CV</a>
            </div>

            <div class="copyrights">© 2021 All rights reserved.</div>
          </header>

          <!-- Mobile Navigation -->
          <div class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <!-- End Mobile Navigation -->

          <!-- Arrows Nav -->
          <div class="lmpixels-arrows-nav">
            <div class="lmpixels-arrow-right"><i class="lnr lnr-chevron-right"></i></div>
            <div class="lmpixels-arrow-left"><i class="lnr lnr-chevron-left"></i></div>
          </div>
          <!-- End Arrows Nav -->

          <div class="content-area">
            <div class="animated-sections">
              <!-- Home Subpage -->

              @yield('contents')

              <!-- End of Home Subpage -->

              <!-- About Me Subpage -->
              <section data-id="about-me" class="animated-section">
                <div class="page-title">
                  <h2>About <span>Me</span></h2>
                </div>

                <div class="section-content">
                  <!-- Personal Information -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-7">
                      <p>Experienced Software Developer offering two years of experience in working effectively in Software companies. Fluent in JavaScript,NodeJs, ReactJs and Python programming languages used in web and app development working with different companies. Proud team leader focused on achieving project objectives with speed and accuracy. With 3 years in leadership managing a cyber- security club in University of Rwanda.</p>
                    </div>

                    <div class="col-xs-12 col-sm-5">
                      <div class="info-list">
                        <ul>
                          <li>
                            <span class="title">Age</span>
                            <span class="value">23</span>
                          </li>

                          <li>
                            <span class="title">Residence</span>
                            <span class="value">Rwanda</span>
                          </li>

                          <li>
                            <span class="title">Address</span>
                            <span class="value">Kigali, Kanombe, Kabeza</span>
                          </li>

                          <li>
                            <span class="title">e-mail</span>
                            <span class="value">bconso7@gmail.com</span>
                          </li>

                          <li>
                            <span class="title">Phone</span>
                            <span class="value">+250 781 605 853</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- End of Personal Information -->

                  <div class="white-space-50"></div>

                  <!-- Services -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="block-title">
                        <h3>What <span>I Do</span></h3>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-12 col-sm-6">
                      <div class="col-inner">
                        <div class="info-list-w-icon">
                          <div class="info-block-w-icon">
                            <div class="ci-icon">
                              <i class="lnr lnr-store"></i>
                            </div>
                            <div class="ci-text">
                              <h4>Ecommerce</h4>
                              <p> I develop E-Commerce in various Languages both Javascript, NodeJS, ReactJs, PHP LAravel and Wordpress. </p>
                            </div>
                          </div>
                          <div class="info-block-w-icon">
                            <div class="ci-icon">
                              <i class="lnr lnr-laptop-phone"></i>
                            </div><div class="ci-text">
                              <h4>Web Design</h4>
                              <p> I develop websites in various Languages both Javascript, NodeJS, ReactJs, PHP LAravel and Wordpress</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-xs-12 col-sm-6">
                      <div class="col-inner">
                        <div class="info-list-w-icon">
                          <div class="info-block-w-icon">
                            <div class="ci-icon">
                              <i class="lnr lnr-pencil"></i>
                            </div>
                            <div class="ci-text">
                              <h4>Female Youth Empowerment in STEM</h4>
                              <p>I am about to start Female empowerment programs that will motivate all young female who engaged in STEM courses to join female careers.</p>
                            </div>
                          </div>
                          <div class="info-block-w-icon">
                            <div class="ci-icon">
                              <i class="lnr lnr-flag"></i>
                            </div>
                            <div class="ci-text">
                              <h4>IT Desktop Support</h4>
                              <p> Provides an effective IT support service in a complex and time-critical customer focused business environment </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Services -->

                  <div class="white-space-30"></div>

                  <!-- Testimonials -->
                  {{-- <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="block-title">
                        <h3>Testimonials</h3>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="testimonials owl-carousel">
                        <!-- Testimonial 1 -->
                        <div class="testimonial">
                          <div class="img">
                            <img src="{{ asset('frontend/img/testimonials/testimonial-1.jpg') }}" alt="Consolatrice">
                          </div>
                          <div class="text">
                            <p>Vivamus at molestie dui, eu ornare orci. Curabitur vel egestas dolor. Nulla condimentum nunc sit amet urna tempus finibus. Duis mollis leo id ligula pellentesque, at vehicula dui ultrices.</p>
                          </div>

                          <div class="author-info">
                            <h4 class="author">Julia Hickman</h4>
                            <h5 class="company">Omni Source</h5>
                            <div class="icon">
                              <i class="fas fa-quote-right"></i>
                            </div>
                          </div>
                        </div>
                        <!-- End of Testimonial 1 -->

                        <!-- Testimonial 2 -->
                        <div class="testimonial">
                          <div class="img">
                            <img src="img/testimonials/testimonial-2.jpg" alt="Alex Smith">
                          </div>
                          <div class="text">
                            <p>Vivamus at molestie dui, eu ornare orci. Curabitur vel egestas dolor. Nulla condimentum nunc sit amet urna tempus finibus. Duis mollis leo id ligula pellentesque, at vehicula dui ultrices.</p>
                          </div>

                          <div class="author-info">
                            <h4 class="author">Robert Watkins</h4>
                            <h5 class="company">Endicott Shoes</h5>
                            <div class="icon">
                              <i class="fas fa-quote-right"></i>
                            </div>
                          </div>
                        </div>
                        <!-- End of Testimonial 2 -->

                        <!-- Testimonial 3 -->
                        <div class="testimonial">
                          <div class="img">
                            <img src="img/testimonials/testimonial-3.jpg" alt="Alex Smith">
                          </div>
                          <div class="text">
                            <p>Vivamus at molestie dui, eu ornare orci. Curabitur vel egestas dolor. Nulla condimentum nunc sit amet urna tempus finibus. Duis mollis leo id ligula pellentesque, at vehicula dui ultrices.</p>
                          </div>

                          <div class="author-info">
                            <h4 class="author">Kristin Carroll</h4>
                            <h5 class="company">Helping Hand</h5>
                            <div class="icon">
                              <i class="fas fa-quote-right"></i>
                            </div>
                          </div>
                        </div>
                        <!-- End of Testimonial 3 -->
                      </div>
                    </div>
                  </div> --}}
                  <!-- End of Testimonials -->

                  <div class="white-space-50"></div>

                  <!-- Clients -->
                  {{-- <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="block-title">
                        <h3>Clients</h3>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="clients owl-carousel">

                        <div class="client-block">
                          <a href="#" target="_blank" title="Logo">
                            <img src="img/clients/client-1.png" alt="Logo">
                          </a>
                        </div>

                        <div class="client-block">
                          <a href="#" target="_blank" title="Logo">
                            <img src="img/clients/client-2.png" alt="Logo">
                          </a>
                        </div>

                        <div class="client-block">
                          <a href="#" target="_blank" title="Logo">
                            <img src="img/clients/client-3.png" alt="Logo">
                          </a>
                        </div>

                        <div class="client-block">
                          <a href="#" target="_blank" title="Logo">
                            <img src="img/clients/client-4.png" alt="Logo">
                          </a>
                        </div>

                        <div class="client-block">
                          <a href="#" target="_blank" title="Logo">
                            <img src="img/clients/client-5.png" alt="Logo">
                          </a>
                        </div>

                        <div class="client-block">
                          <a href="#" target="_blank" title="Logo">
                            <img src="img/clients/client-6.png" alt="Logo">
                          </a>
                        </div>

                        <div class="client-block">
                          <a href="#" target="_blank" title="Logo">
                            <img src="img/clients/client-7.png" alt="Logo">
                          </a>
                        </div>

                      </div>
                    </div>
                  </div> --}}
                  <!-- End of Clients -->

                  <div class="white-space-50"></div>

                  <!-- Pricing -->
                  {{-- <div class="row">
                    <div class="col-xs-12 col-sm-12">

                      <div class="block-title">
                        <h3>Pricing</h3>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class=" col-xs-12 col-sm-12 ">
                      <div class="fw-pricing clearfix row">

                        <div class="fw-package-wrap col-md-6 ">
                          <div class="fw-package">
                            <div class="fw-heading-row">
                              <span>Silver</span>
                            </div>

                            <div class="fw-pricing-row">
                              <span>$64</span>
                              <small>per month</small>
                            </div>

                            <div class="fw-button-row">
                              <a href="#" target="_self" class="btn btn-secondary">Free Trial</a>
                            </div>

                            <div class="fw-default-row">Lorem ipsum dolor</div>
                            <div class="fw-default-row">Pellentesque scelerisque</div>
                            <div class="fw-default-row">Morbi eu sagittis</div>
                          </div>
                        </div>

                        <div class="fw-package-wrap col-md-6 highlight-col ">
                          <div class="fw-package">
                            <div class="fw-heading-row">
                              <span>Gold</span>
                            </div>

                            <div class="fw-pricing-row">
                              <span>$128</span>
                              <small>per month</small>
                            </div>

                            <div class="fw-button-row">
                              <a href="#" target="_self" class="btn btn-primary">Free Trial</a>
                            </div>

                            <div class="fw-default-row">Lorem ipsum dolor</div>
                            <div class="fw-default-row">Pellentesque scelerisque</div>
                            <div class="fw-default-row">Morbi eu sagittis</div>
                            <div class="fw-default-row">Donec non diam</div>
                            <div class="fw-default-row"></div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> --}}
                  <!-- End of Pricing -->

                  <div class="white-space-50"></div>

                  <!-- Fun Facts -->
                  {{-- <div class="row">
                    <div class="col-xs-12 col-sm-12">

                      <div class="block-title">
                        <h3>Fun <span>Facts</span></h3>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-12 col-sm-4">
                      <div class="fun-fact gray-default">
                        <i class="lnr lnr-heart"></i>
                        <h4>Happy Clients</h4>
                        <span class="fun-fact-block-value">578</span>
                        <span class="fun-fact-block-text"></span>
                      </div>
                    </div>

                    <div class="col-xs-12 col-sm-4">
                      <div class="fun-fact gray-default">
                        <i class="lnr lnr-clock"></i>
                        <h4>Working Hours</h4>
                        <span class="fun-fact-block-value">4,780</span>
                        <span class="fun-fact-block-text"></span>
                      </div>
                    </div>

                    <div class="col-xs-12 col-sm-4 ">
                      <div class="fun-fact gray-default">
                        <i class="lnr lnr-star"></i>
                        <h4>Awards Won</h4>
                        <span class="fun-fact-block-value">15</span>
                        <span class="fun-fact-block-text"></span>
                      </div>
                    </div>
                  </div> --}}
                  <!-- End of Fun Facts -->

                </div>
              </section>
              <!-- End of About Me Subpage -->

              <!-- Resume Subpage -->
              <section data-id="resume" class="animated-section">
                <div class="page-title">
                  <h2>Resume</h2>
                </div>

                <div class="section-content">

                  <div class="row">
                    <div class="col-xs-12 col-sm-7">

                      <div class="block-title">
                        <h3>Education</h3>
                      </div>

                      <div class="timeline timeline-second-style clearfix">
                        <div class="timeline-item clearfix">
                          <div class="left-part">
                            <h5 class="item-period">2021</h5>
                            <span class="item-company">University of Rwanda/ College of Science and Technology/School of ICT</span>
                          </div>
                          <div class="divider"></div>
                          <div class="right-part">
                            <h4 class="item-title">Bachelor's in Computer Science</h4>
                            <p>In computer Science I covered these courses:Entrepreneurship, Data mining and data warehousing, data structure and algorithm, python ,
                              software project management, java programing , ubiquitous and pervasive computing, parallel
                              and distributed system, cryptography and network security, data and information security
                              ,ecommerce, computer networking, java programming.</p>
                          </div>
                        </div>

                        {{-- <div class="timeline-item clearfix">
                          <div class="left-part">
                            <h5 class="item-period">2007</h5>
                            <span class="item-company">University of Studies</span>
                          </div>
                          <div class="divider"></div>
                          <div class="right-part">
                            <h4 class="item-title">Graphic Design</h4>
                            <p>Aliquam tincidunt malesuada tortor vitae iaculis. In eu turpis iaculis, feugiat risus quis, aliquet urna. Quisque fringilla mollis risus, eu pulvinar dolor.</p>
                          </div>
                        </div> --}}
                      </div>

                      <div class="white-space-50"></div>

                      <div class="block-title">
                        <h3>Experience</h3>
                      </div>

                      <div class="timeline timeline-second-style clearfix">
                        <div class="timeline-item clearfix">
                          <div class="left-part">
                            <h5 class="item-period"> MAy 2021 - Current</h5>
                            <span class="item-company">250STARTUPS</span>
                          </div>
                          <div class="divider"></div>
                          <div class="right-part">
                            <h4 class="item-title">Information Technology (IT) Intern</h4>
                            <p>• Participate in responding to customer request on changes they request on their platforms.<br>
                              • Currently, developing e-commerce payment system for DOTPharma which provides digital health care services and health advice, as a 250STARTUPS client.<br>
                              • Improving some website features.</p>
                          </div>
                        </div>

                        <div class="timeline-item clearfix">
                          <div class="left-part">
                            <h5 class="item-period">November 2017 - March 2020</h5>
                            <span class="item-company">Broadcasters of ICT(Information Communication Technology)</span>
                          </div>
                          <div class="divider"></div>
                          <div class="right-part">
                            <h4 class="item-title">Program Leader</h4>
                            <p>• Participate in designing, planning projects that were helpful to ICT students to acquire practical skills in coding, and ICT in University of Rwanda, College of Science and Technology.<br>
                              • Provide leadership and management to all youth who were benefiting from our programs.<br>
                              • Provide technical Support to all University Students both in computer Hardware and Software.<br>                        </div>
                        </div>

                        <div class="timeline-item clearfix">
                          <div class="left-part">
                            <h5 class="item-period">June 2019 - Jan 2020</h5>
                            <span class="item-company">Orient Park Hotel</span>
                          </div>
                          <div class="divider"></div>
                          <div class="right-part">
                            <h4 class="item-title">Front Office Receptionist manage(Part-time))</h4>
                            <p>• Managed the concierge, night auditor and team of receptionists.<br>
                              • Ensured the front desk provides a professional and friendly service for customers.<br>
                              • Troubleshooted emergencies, and provide technical and network support.</p>
                          </div>
                        </div>
                        <div class="timeline-item clearfix">
                          <div class="left-part">
                            <h5 class="item-period">June 2019 - Dec 2019,</h5>
                            <span class="item-company">Alpha Computer ltd</span>
                          </div>
                          <div class="divider"></div>
                          <div class="right-part">
                            <h4 class="item-title">Cybersecurity & Networking Intern</h4>
                            <p>
                              • Coordinated and evaluated the team working on Threat Intelligence project in Alpha Computer ltd so as to meet our goals.<br>
                              • Created Cybersecurity best practice communications to educate staff against known threats and potential vectors of attack.<br>
                              • Engineered, maintained and repaired security systems and programmable logic controls by linking the anti-virus with the firewall and SIEM.<br>
                              • Monitored computer virus reports to determine when to update virus protection systems.<br>
                              • Provide technical support and to Bitdefender Anti-virus users.<br>
                              • Prepare weekly report.</p>
                          </div>
                        </div>
                        <div class="timeline-item clearfix">
                          <div class="left-part">
                            <h5 class="item-period">May 2018 - January 2020</h5>
                            <span class="item-company">Cybersecurity club in University of Rwanda</span>
                          </div>
                          <div class="divider"></div>
                          <div class="right-part">
                            <h4 class="item-title">President </h4>
                            <p> Coordinated activities to equip students with cybersecurity awareness and skills through events online and incampus. Organised cyber Security Training.</p>
                          </div>
                        </div>
                        <div class="timeline-item clearfix">
                          <div class="left-part">
                            <h5 class="item-period">May 2018 – July 2018 </h5>
                            <span class="item-company">Bag Innovation </span>
                          </div>
                          <div class="divider"></div>
                          <div class="right-part">
                            <h4 class="item-title">Sales and Marketing Intern </h4>
                            <p>• Leveraged direct marketing, industry partnerships and social media platforms to maximizemarketing strategy success.<br>
                              • Managed and motivated sales team to increase revenue 50% in one year.<br>
                              • Organized external markets for sales boost</p>
                          </div>
                        </div>
                        <div class="timeline-item clearfix">
                          <div class="left-part">
                            <h5 class="item-period">August 2018 - May 2019</h5>
                            <span class="item-company">Chocolats Caractere</span>
                          </div>
                          <div class="divider"></div>
                          <div class="right-part">
                            <h4 class="item-title">Sales & Marketing Manager</h4>
                            <p>• Leveraged direct marketing, industry partnerships and social media platforms to maximizemarketing strategy success.<br>
                              • Managed and motivated sales team to increase revenue 50% in one year.<br>
                              • Organized external markets for sales boost</p>
                          </div>
                        </div>
                      </div>

                    </div>

                    <!-- Skills & Certificates -->
                    <div class="col-xs-12 col-sm-5">
                      <!-- Design Skills -->
                      <div class="block-title">
                        <h3>Design <span>Skills</span></h3>
                      </div>

                      <div class="skills-info skills-second-style">
                        <!-- Skill 1 -->
                        <div class="skill clearfix">
                          <h4>Web Design</h4>
                          <div class="skill-value">95%</div>
                        </div>
                        <div class="skill-container skill-1">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 1 -->

                        <!-- Skill 2 -->
                        <div class="skill clearfix">
                          <h4>Print Design</h4>
                          <div class="skill-value">65%</div>
                        </div>
                        <div class="skill-container skill-2">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 2 -->

                        <!-- Skill 3 -->
                        <div class="skill clearfix">
                          <h4>Logo Design</h4>
                          <div class="skill-value">70%</div>
                        </div>
                        <div class="skill-container skill-3">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 3 -->

                        <!-- Skill 4 -->
                        <div class="skill clearfix">
                          <h4>Figma</h4>
                          <div class="skill-value">90%</div>
                        </div>
                        <div class="skill-container skill-3">
                          <div class="skill-percentage"></div>
                        </div>
                         <!-- End of Skill 4 -->

                         <!-- skill 5 -->
                        <div class="skill clearfix">
                          <h4>Thunkable</h4>
                          <div class="skill-value">50%</div>
                        </div>
                        <div class="skill-container skill-4">
                          <div class="skill-percentage"></div>
                        </div>
                       <!-- End of Skill 5 -->

                      </div>
                      <!-- End of Design Skills -->

                      <div class="white-space-10"></div>

                      <!-- Coding Skills -->
                      <div class="block-title">
                        <h3>Coding <span>Skills</span></h3>
                      </div>

                      <div class="skills-info skills-second-style">
                        <!-- Skill 5 -->
                        <div class="skill clearfix">
                          <h4>JavaScript</h4>
                          <div class="skill-value">95%</div>
                        </div>
                        <div class="skill-container skill-5">
                          <div class="skill-percentage"></div>
                        </div>
                        <div class="skill clearfix">
                          <h4>NodeJs</h4>
                          <div class="skill-value">95%</div>
                        </div>
                        <div class="skill-container skill-5">
                          <div class="skill-percentage"></div>
                        </div>
                        <div class="skill clearfix">
                          <h4>ReactJs</h4>
                          <div class="skill-value">95%</div>
                        </div>
                        <div class="skill-container skill-5">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 5 -->

                        <!-- Skill 6 -->
                        <div class="skill clearfix">
                          <h4>PHP</h4>
                          <div class="skill-value">85%</div>
                        </div>
                        <div class="skill-container skill-6">
                          <div class="skill-percentage"></div>
                        </div>
                          <!-- End of Skill 6 -->

                          <!-- Skill 7 -->
                        <div class="skill clearfix">
                          <h4>Laravel</h4>
                          <div class="skill-value">85%</div>
                        </div>
                        <div class="skill-container skill-6">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 7 -->

                        <!-- Skill 8 -->
                        <div class="skill clearfix">
                          <h4>HTML/CSS</h4>
                          <div class="skill-value">100%</div>
                        </div>
                        <div class="skill-container skill-7">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 8 -->

                        <!-- Skill 9 -->
                        <div class="skill clearfix">
                          <h4>BootStrap</h4>
                          <div class="skill-value">75%</div>
                        </div>
                        <div class="skill-container skill-8">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 9 -->

                        <!-- Skill 10 -->
                        <div class="skill clearfix">
                          <h4>Perl</h4>
                          <div class="skill-value">90%</div>
                        </div>
                        <div class="skill-container skill-9">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 10 -->
                      </div>
                      <!-- End of Coding Skills -->

                      <div class="white-space-10"></div>

                      <!-- Knowledges -->
                      <div class="block-title">
                        <h3>Knowledges</h3>
                      </div>

                      <ul class="knowledges">
                        <li>Marketing</li>
                        <li>Print</li>
                        <li>Digital Design</li>
                        <li>Social Media</li>
                        <li>Time Management</li>
                        <li>Communication</li>
                        <li>Problem-Solving</li>
                        <li>Social Networking</li>
                        <li>Flexibility</li>
                      </ul>
                      <!-- End of Knowledges -->
                    </div>
                    <!-- End of Skills & Certificates -->
                  </div>

                  <div class="white-space-50"></div>

                  <!-- Certificates -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="block-title">
                        <h3>Certificates</h3>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <!-- Certificate 1 -->
                    <div class="col-xs-12 col-sm-6">
                      <div class="certificate-item clearfix">
                        <div class="certi-logo">
                          <img src="{{ asset('frontend/img/Shecancode.png') }}" alt="logo">
                        </div>

                        <div class="certi-content">
                          <div class="certi-title">
                            <h4>Advanced Programming course in WEB-Developemnt</h4>
                          </div>
                          <div class="certi-id">
                            <span></span>
                          </div>
                          <div class="certi-date">
                            <span>March 2021</span>
                          </div>
                          <div class="certi-company">
                            <span>SheCanCode</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Certificate 1 -->

                    <!-- Certificate 2 -->
                    <div class="col-xs-12 col-sm-6">
                      <div class="certificate-item clearfix">
                        <div class="certi-logo">
                          <img src="{{ asset('frontend/img/Bitdefender Certified MSP Specialist.PNG') }}" alt="logo">
                        </div>

                        <div class="certi-content">
                          <div class="certi-title">
                            <h4>Bitdefender Certified MSP Specialist:</h4>
                          </div>
                          <div class="certi-id">
                            <span>Bitdefender Service Providers Portfolio.</span>
                          </div>
                          <div class="certi-date">
                            <span>November 2019</span>
                          </div>
                          <div class="certi-company">
                            <span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Certificate 2 -->

                     <!-- Certificate 3 -->
                     <div class="col-xs-12 col-sm-6">
                      <div class="certificate-item clearfix">
                        <div class="certi-logo">
                          <img src="{{ asset('frontend/img/Bitdefender Certified Technical Specialist.PNG') }}" alt="logo">
                        </div>

                        <div class="certi-content">
                          <div class="certi-title">
                            <h4>Bitdefender Certified Technical Specialist:</h4>
                          </div>
                          <div class="certi-id">
                            <span>Bitdefender Consumer Line 2019</span>
                          </div>
                          <div class="certi-date">
                            <span>November 2019</span>
                          </div>
                          <div class="certi-company">
                            <span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Certificate 3 -->
                     <!-- Certificate 4 -->
                     <div class="col-xs-12 col-sm-6">
                      <div class="certificate-item clearfix">
                        <div class="certi-logo">
                          <img src="{{ asset('frontend/img/Bitdefender Sales Certficate.PNG') }}" alt="logo">
                        </div>

                        <div class="certi-content">
                          <div class="certi-title">
                            <h4>Bitdefender Certified Sales Specialist</h4>
                          </div>
                          <div class="certi-id">
                            <span>Bitdefender Business Portfolio</span>
                          </div>
                          <div class="certi-date">
                            <span>November 2019</span>
                          </div>
                          <div class="certi-company">
                            <span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Certificate 4 -->
                      <!-- Certificate 4 -->
                          <div class="col-xs-12 col-sm-6">
                            <div class="certificate-item clearfix">
                              <div class="certi-logo">
                                <img src="{{ asset('frontend/img/Bitdefender Sales Specialist.PNG') }}" alt="logo">
                              </div>
      
                              <div class="certi-content">
                                <div class="certi-title">
                                  <h4>Bitdefender Certified Sales Specialist</h4>
                                </div>
                                <div class="certi-id">
                                  <span>Bitdefender Consumer Line 2019</span>
                                </div>
                                <div class="certi-date">
                                  <span>November 2019</span>
                                </div>
                                <div class="certi-company">
                                  <span></span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- End of Certificate 4 -->
                    
                  </div>
                  <!-- End of Certificates -->
                </div>
              </section>
              <!-- End of Resume Subpage -->

              <!-- Portfolio Subpage -->
              <section data-id="portfolio" class="animated-section">
                <div class="page-title">
                  <h2>Portfolio</h2>
                </div>

                <div class="section-content">

                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <!-- Portfolio Content -->
                      <div class="portfolio-content">

                        <ul class="portfolio-filters">
                          <li class="active">
                            <a class="filter btn btn-sm btn-link" data-group="category_all">All</a>
                          </li>
                          {{-- <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_detailed">Detailed</a>
                          </li>
                          <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_mockups">Mockups</a>
                          </li>
                          <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_soundcloud">SoundCloud</a>
                          </li>
                          <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_vimeo-videos">Vimeo Videos</a>
                          </li>
                          <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_youtube-videos">YouTube Videos</a>
                          </li> --}}
                        </ul>

                        <!-- Portfolio Grid -->
                        <div class="portfolio-grid three-columns">

                          <figure class="item lbaudio" data-groups='["category_all", "category_soundcloud"]'>
                            <div class="portfolio-item-img">
                              <img src="{{ asset('frontend/img/moneyWatch.png') }}" alt="MoneyWatch" title="" />
                              <a href="https://moneywatch.netlify.app/" class="lightbox mfp-iframe" title="Money Watch Project"></a>
                            </div>

                            <i class="fa fa-volume-up"></i>
                            <h4 class="name">Money Watch Project</h4>
                            <span class="category"></span>
                          </figure>

                          <figure class="item standard" data-groups='["category_all", "category_detailed"]'>
                            <div class="portfolio-item-img">
                              <img src="{{ asset('frontend/img/portfolio-ReactJs.png') }}" alt="Media Project 2" title="" />
                              <a href="https://consolatrice-byiringiro.netlify.app/" class="ajax-page-load" title="" ></a>
                            </div>

                            <i class="far fa-file-alt"></i>
                            <h4 class="name">Detailed Project 2</h4>
                            <span class="category">Detailed</span>
                          </figure>

                          {{-- <figure class="item lbvideo" data-groups='["category_all", "category_vimeo-videos"]'>
                            <div class="portfolio-item-img">
                              <img src="img/portfolio/3.jpg" alt="Vimeo Video 1" title="" />
                              <a href="https://player.vimeo.com/video/158284739" class="lightbox mfp-iframe" title="Vimeo Video 1"></a>
                            </div>

                            <i class="fas fa-video"></i>
                            <h4 class="name">Vimeo Video 1</h4>
                            <span class="category">Vimeo Videos</span>
                          </figure> --}}

                          {{-- <figure class="item standard" data-groups='["category_all", "category_detailed"]'>
                            <div class="portfolio-item-img">
                              <img src="img/portfolio/4.jpg" alt="Media Project 1" title="" />
                              <a href="portfolio-1.html" class="ajax-page-load"></a>
                            </div>

                            <i class="far fa-file-alt"></i>
                            <h4 class="name">Detailed Project 1</h4>
                            <span class="category">Detailed</span>
                          </figure> --}}

                          {{-- <figure class="item lbimage" data-groups='["category_all", "category_mockups"]'>
                            <div class="portfolio-item-img">
                              <img src="img/portfolio/5.jpg" alt="Mockup Design 1" title="" />
                              <a class="lightbox" title="Mockup Design 1" href="img/portfolio/full/5.jpg"></a>
                            </div>

                            <i class="far fa-image"></i>
                            <h4 class="name">Mockup Design 1</h4>
                            <span class="category">Mockups</span>
                          </figure> --}}

                          {{-- <figure class="item lbvideo" data-groups='["category_all", "category_youtube-videos"]'>
                            <div class="portfolio-item-img">
                              <img src="img/portfolio/6.jpg" alt="YouTube Video 1" title="" />
                              <a href="https://www.youtube.com/embed/bg0gv2YpIok" class="lightbox mfp-iframe" title="YouTube Video 1"></a>
                            </div>

                            <i class="fas fa-video"></i>
                            <h4 class="name">YouTube Video 1</h4>
                            <span class="category">YouTube Videos</span>
                          </figure> --}}
                        </div>
                      </div>
                      <!-- End of Portfolio Content -->
                    </div>
                  </div>
                </div>
              </section>
              <!-- End of Portfolio Subpage -->

              <!-- Blog Subpage -->
              <section data-id="blog" class="animated-section">
                <div class="page-title">
                  <h2>Blog</h2>
                </div>

                <div class="section-content">
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="blog-masonry two-columns clearfix">

                        <!-- Blog Post 1 -->
                        <div class="item post-1">
                          <div class="blog-card">
                            <div class="media-block">
                              <div class="category">
                                <a href="#" title="View all posts in Design">Design</a>
                              </div>
                              <a href="blog-post-1.html">
                                <img src="img/blog/blog_post_1.jpg" class="size-blog-masonry-image-two-c" alt="Why I Switched to Sketch For UI Design" title="" />
                                <div class="mask"></div>
                              </a>
                            </div>
                            <div class="post-info">
                              <div class="post-date">05 Mar 2020</div>
                              <a href="blog-post-1.html">
                                <h4 class="blog-item-title">Why I Switched to Sketch For UI Design</h4>
                              </a>
                            </div>
                          </div>
                        </div>
                        <!-- End of Blog Post 1 -->

                        <!-- Blog Post 2 -->
                        <div class="item post-2">
                          <div class="blog-card">
                            <div class="media-block">
                              <div class="category">
                                <a href="#" title="View all posts in UI">UI</a>
                              </div>
                              <a href="blog-post-1.html">
                                <img src="img/blog/blog_post_2.jpg" class="size-blog-masonry-image-two-c" alt="Best Practices for Animated Progress Indicators" title="" />
                                <div class="mask"></div>
                              </a>
                            </div>
                            <div class="post-info">
                              <div class="post-date">23 Feb 2020</div>
                              <a href="blog-post-1.html">
                                <h4 class="blog-item-title">Best Practices for Animated Progress Indicators</h4>
                              </a>
                            </div>
                          </div>
                        </div>
                        <!-- End of Blog Post 2 -->

                        <!-- Blog Post 3 -->
                        <div class="item post-1">
                          <div class="blog-card">
                            <div class="media-block">
                              <div class="category">
                                <a href="#" title="View all posts in Design">Design</a>
                              </div>
                              <a href="blog-post-1.html">
                                <img src="img/blog/blog_post_3.jpg" class="size-blog-masonry-image-two-c" alt="Designing the Perfect Feature Comparison Table" title="" />
                                <div class="mask"></div>
                              </a>
                            </div>
                            <div class="post-info">
                              <div class="post-date">06 Feb 2020</div>
                              <a href="blog-post-1.html">
                                <h4 class="blog-item-title">Designing the Perfect Feature Comparison Table</h4>
                              </a>
                            </div>
                          </div>
                        </div>
                        <!-- End of Blog Post 3 -->

                        <!-- Blog Post 4 -->
                        <div class="item post-2">
                          <div class="blog-card">
                            <div class="media-block">
                              <div class="category">
                                <a href="#" title="View all posts in E-Commerce">UI</a>
                              </div>
                              <a href="blog-post-1.html">
                                <img src="img/blog/blog_post_4.jpg" class="size-blog-masonry-image-two-c" alt="An Overview of E-Commerce Platforms" title="" />
                                <div class="mask"></div>
                              </a>
                            </div>
                            <div class="post-info">
                              <div class="post-date">07 Jan 2020</div>
                              <a href="blog-post-1.html">
                                <h4 class="blog-item-title">An Overview of E-Commerce Platforms</h4>
                              </a>
                            </div>
                          </div>
                        </div>
                        <!-- End of Blog Post 4 -->
                      </div>
                    </div>
                  </div>
                </div>


              </section>
              <!-- End of Blog Subpage -->

              <!-- Contact Subpage -->
              <section data-id="contact" class="animated-section">
                <div class="page-title">
                  <h2>Contact</h2>
                </div>

                <div class="section-content">

                  <div class="row">
                    <!-- Contact Info -->
                    <div class="col-xs-12 col-sm-4">
                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-map-marker"></i>
                        <h4>Kigali</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>

                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-phone-handset"></i>
                        <h4>078-160-5853</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>

                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-envelope"></i>
                        <h4>bconso7@gmail.com</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>

                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-checkmark-circle"></i>
                        <h4>Jobs Available</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>


                    </div>
                    <!-- End of Contact Info -->

                    <!-- Contact Form -->
                    <div class="col-xs-12 col-sm-8">
                      <div id="map" class="map"></div>
                      <div class="block-title">
                        <h3>How Can I <span>Help You?</span></h3>
                      </div>

                      <form id="contact_form" class="contact-form" action="contact_form/contact_form.php" method="post">

                        <div class="messages"></div>

                        <div class="controls two-columns">
                          <div class="fields clearfix">
                            <div class="left-column">
                              <div class="form-group form-group-with-icon">
                                <input id="form_name" type="text" name="name" class="form-control" placeholder="" required="required" data-error="Name is required.">
                                <label>Full Name</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>

                              <div class="form-group form-group-with-icon">
                                <input id="form_email" type="email" name="email" class="form-control" placeholder="" required="required" data-error="Valid email is required.">
                                <label>Email Address</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>

                              <div class="form-group form-group-with-icon">
                                <input id="form_subject" type="text" name="subject" class="form-control" placeholder="" required="required" data-error="Subject is required.">
                                <label>Subject</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                            <div class="right-column">
                              <div class="form-group form-group-with-icon">
                                <textarea id="form_message" name="message" class="form-control" placeholder="" rows="7" required="required" data-error="Please, leave me a message."></textarea>
                                <label>Message</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                          </div>

                          <div class="g-recaptcha" data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI" data-theme="dark"></div>

                          <input type="submit" class="button btn-send" value="Send message">
                        </div>
                      </form>
                    </div>
                    <!-- End of Contact Form -->
                  </div>

                </div>
              </section>
              <!-- End of Contact Subpage -->
            </div>
          </div>

      </div>
    </div>

    <script src="{{ asset('frontend/js/jquery-2.1.3.min.js') }}"></></script>
    <script src="{{ asset('frontend/js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('frontend/js/animating.js') }}"></script>

    <script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <script src='{{ asset("frontend/js/perfect-scrollbar.min.js") }}'></script>
    <script src='{{ asset("frontend/js/jquery.shuffle.min.js") }}'></script>
    <script src='{{ asset("frontend/js/masonry.pkgd.min.js") }}'></script>
    <script src='{{ asset("frontend/js/owl.carousel.min.js") }}'></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrDf32aQTCVENBhFJbMBKOUTiUAABtC2o"></script>
    <script src="{{ asset('frontend/js/jquery.googlemap.js') }}"></script>
    <script src="{{ asset('frontend/js/validator.js')}}"></script>
    <script src="{{ asset('frontend/js/main.js')}}"></script>
  </body>
</html>
