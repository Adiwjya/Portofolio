<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>Portofolio - Adi Wijaya</title>
<!--
Bootstrap Basic Template
-->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/v4-shims.css">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/font-awesome.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/fullpage.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/owl.carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/templatemo-style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}">

    <style>
        .portfolio-item:hover .thumb-inner h4{
            margin-top: 5%;
        }
    </style>

    </head>
    
    <body>
    
    <div id="video">
        <div class="preloader">
            <div class="preloader-bounce">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <header id="header">
            <div class="container-fluid">
                <div class="navbar">
                    <a href="#" id="logo" title="Portofolio - Adiw">
                        Adiw
                    </a>
                    <div class="navigation-row">
                        <nav id="navigation">
                            <button type="button" class="navbar-toggle"> <i class="fa fa-bars"></i> </button>
                            <div class="nav-box navbar-collapse">
                                <ul class="navigation-menu nav navbar-nav navbars" id="nav">
                                    {{-- <li data-menuanchor="slide01" class="active"><a href="#slide01">Home</a></li> --}}
                                    <li data-menuanchor="slide01" class="active"><a href="#slide01">About Me</a></li>
                                    <li data-menuanchor="slide02"><a href="#slide02">Services</a></li>
                                    <li data-menuanchor="slide03"><a href="#slide03">My Skills</a></li>
                                    <li data-menuanchor="slide04"><a href="#slide04">My Work</a></li>
                                    <li data-menuanchor="slide05"><a href="#slide05">Testimonials</a></li>
                                    <li data-menuanchor="slide06"><a href="#slide06">Contact Me</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>


        <div id="fullpage" class="fullpage-default">

            {{-- ABOUT --}}
            <div class="section animated-row" data-section="slide02">
                <div class="section-inner">
                    <div class="about-section">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 wide-col-laptop">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="about-contentbox">
                                            <div class="animate" data-animate="fadeInUp">
                                                <span>About Me</span>
                                                <h2>Adi Wijaya?</h2>
                                                <p>Hello my name I Gede Adi Wijaya, I am a College Student at Stikom Institute of Business and Information Surabaya. I also work as a Framework-based Full Stack Web Developer at PraMediaEnginering</p>
                                            </div>
                                            <div class="facts-list owl-carousel">
                                                <div class="item animate" data-animate="fadeInUp">
                                                    <div class="counter-box">
                                                        <i class="fa fa-trophy counter-icon" aria-hidden="true"></i><span class="count-number">2</span> Awards Won
                                                    </div>
                                                </div>
                                                <div class="item animate" data-animate="fadeInUp">
                                                    <div class="counter-box">
                                                        <i class="fa fa-desktop counter-icon" aria-hidden="true"></i><span class="count-number">5</span> Month Working Experience
                                                    </div>
                                                </div>
                                                <div class="item animate" data-animate="fadeInUp">
                                                    <div class="counter-box">
                                                        <i class="fa fa-certificate counter-icon" aria-hidden="true"></i><span class="count-number">10+</span> Certificates
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="margin-top: 8.5vw;">
                                        <figure class="about-img animate" data-animate="fadeInUp"><img src="{{ asset('assets/frontend/images/227538.jpg') }}" class="rounded" alt=""></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- ABOUT SELESAI --}}

            
            <div class="section animated-row" data-section="slide03">
                <div class="section-inner">
                    <div class="row justify-content-center">
                        <div class="col-md-8 wide-col-laptop">
                            <div class="title-block animate" data-animate="fadeInUp">
                                <span>Services</span>
                                <h2>What I Do?</h2>
                            </div>
                            <div class="services-section">
                                <div class="services-list owl-carousel">
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="service-box">
                                            <span class="service-icon"><i class="fab fa-bootstrap" aria-hidden="true"></i></span>
                                            <h3>Bootstrap 4</h3>
                                            <p>Experienced using Bootstrap 4 CSS Framework for more than 3 years to design website views.</p>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="service-box">
                                            <span class="service-icon"><i class="fab fa-html5" aria-hidden="true"></i></span>
                                            <h3>HTML5 </h3>
                                            <p>Experienced using HTML 5 for more than 3 years to build website views.</p>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="service-box">
                                            <span class="service-icon"><i class="fas fa-fire" aria-hidden="true"></i></span>
                                            <h3>CodeIgniter Framework</h3>
                                            <p>Experienced using CodeIgniter Framework for more than 10 website project around this year.</p>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="service-box">
                                            <span class="service-icon"><i class="fab fa-laravel" aria-hidden="true"></i></span>
                                            <h3>Laravel Framework</h3>
                                            <p>Experienced using Laravel Framework for more than 4 website project around this year.</p>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="service-box">
                                            <span class="service-icon"><i class="fab fa-js" aria-hidden="true"></i></span>
                                            <h3>Java Script</h3>
                                            <p>Experienced using Java Script for more than 1 years.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section animated-row" data-section="slide04">
                <div class="section-inner">
                    <div class="row justify-content-center">
                        <div class="col-md-7 wide-col-laptop">
                            <div class="title-block animate" data-animate="fadeInUp">
                                <span>My Skills</span>
                                <h2>What i’m good?</h2>
                            </div>
                            <div class="skills-row animate" data-animate="fadeInDown">
                                <div class="row">
                                    <div class="col-md-8 offset-md-2">   
                                        <div class="skill-item">
                                            <h6>HTML CSS</h6>
                                            <div class="skill-bar">
                                                <span>80%</span>
                                                <div class="filled-bar"></div>
                                            </div>          
                                        </div>
                                        <div class="skill-item">
                                            <h6>PHP</h6>
                                            <div class="skill-bar">
                                                <span>70%</span>
                                                <div class="filled-bar-2"></div>
                                            </div>          
                                        </div>
                                        <div class="skill-item">
                                            <h6>Framework</h6>
                                            <div class="skill-bar">
                                                <span>70%</span>
                                                <div class="filled-bar"></div>
                                            </div>          
                                        </div>
                                        <div class="skill-item last-skill">
                                            <h6>Leadership</h6>
                                            <div class="skill-bar">
                                                <span>70%</span>
                                                <div class="filled-bar-2"></div>
                                            </div>          
                                        </div>                   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section animated-row" data-section="slide06">
                <div class="section-inner">
                    <div class="row justify-content-center">
                        <div class="col-md-8 wide-col-laptop">
                            <div class="title-block animate" data-animate="fadeInUp">
                                <span>My Work</span>
                                <h2>what i’ve done?</h2>
                            </div>
                            <div class="gallery-section">
                                <div class="gallery-list owl-carousel">
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="{{ asset('assets/frontend/images/p1.png') }}" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>ASA</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="{{ asset('assets/frontend/images/p2.png') }}" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>INVENTORY</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="{{ asset('assets/frontend/images/p3.png') }}" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>Wahana Visi Indonesia</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="{{ asset('assets/frontend/images/p4.png') }}" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>SERUNI</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="{{ asset('assets/frontend/images/') }}" alt="">
                                            </div>
                                            
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>templatemo is the best</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section animated-row" data-section="slide05">
                <div class="section-inner">
                    <div class="row justify-content-center">
                        <div class="col-md-8 wide-col-laptop">
                            <div class="title-block animate" data-animate="fadeInUp">
                                <span>TESTIMONIALS</span>
                                <h2>what THEY SAY?</h2>
                            </div>
                            <div class="col-md-8 offset-md-2">
                                <div class="testimonials-section">
                                    <div class="testimonials-slider owl-carousel">
                                        <div class="item animate" data-animate="fadeInUp" style="width: -moz-available;">
                                            <div class="testimonial-item">
                                                <div class="client-row">
                                                    <img src="{{ asset('assets/frontend/images/rampa.jpg') }}" class="rounded-circle" alt="profile 1">
                                                </div>
                                                
                                                <div class="testimonial-content">
                                                    <h4>Rampa Praditya</h4>
                                                    <p>"Semangat Kerja Mas!."</p>
                                                    <span>CEO PraMediaEnginering</span>
                                                </div>                                           
                                            </div>
                                            <div class="testimonial-item">
                                                <div class="client-row">
                                                    <img src="{{ asset('assets/frontend/images/dicky.jpg') }}" class="rounded-circle" alt="profile 1">
                                                </div>
                                                
                                                <div class="testimonial-content">
                                                    <h4>Dicky</h4>
                                                    <p>"."</p>
                                                    <span>CEO PraMediaEnginering</span>
                                                </div>                                           
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section animated-row" data-section="slide07">
                <div class="section-inner">
                    <div class="row justify-content-center">
                        <div class="col-md-7 wide-col-laptop">
                            <div class="title-block animate" data-animate="fadeInUp">
                                <span>Contact</span>
                                <h2>Get In Touch!</h2>
                            </div>
                            <div class="contact-section">
                                <div class="row">
                                    <div class="col-md-6 animate" data-animate="fadeInUp">
                                        <div class="contact-box">
                                            <div class="contact-row">
                                                <i class="fas fa-map-marker-alt"></i> 
                                                Surabaya
                                                <br>Jl.Semampir Tengah VIII A No.12
                                                <br>Bali
                                                <br>Jl.Raya Pantai Seseh No.40 
                                            </div>
                                            <div class="contact-row">
                                                <i class="fa fa-phone"></i> +6289 6052 6706 7
                                            </div>
                                            <div class="contact-row">
                                                <i class="fa fa-envelope"></i> ~
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 animate" data-animate="fadeInUp">
                                        <form id="ajax-contact" method="post" action="#">
                                            <div class="input-field">
                                                <input type="text" class="form-control" name="name" id="name" required placeholder="Name">
                                            </div>
                                            <div class="input-field">
                                                <input type="email" class="form-control" name="email" id="email" required placeholder="Email">
                                            </div>
                                            <div class="input-field">
                                                <textarea class="form-control" name="message" id="message" required placeholder="Message"></textarea>
                                            </div>
                                            <button class="btn" type="submit">Submit</button>
                                        </form>
                                        <div id="form-messages" class="mt-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="social-icons">
            <div class="text-right">
                <ul class="social-icons">
                    <li><a href="https://www.facebook.com/profile.php?id=100009862752852" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://github.com/Adiwjya" title="Github"><i class="fa fa-github"></i></a></li>
                    <li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </div>  

    <script src="{{ asset('assets/frontend/js/jquery.js') }}"></script>

    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/frontend/js/fullpage.min.js') }}"></script>

    <script src="{{ asset('assets/frontend/js/scrolloverflow.js') }}"></script>

    <script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('assets/frontend/js/jquery.inview.min.js') }}"></script>

    <script src="{{ asset('assets/frontend/js/form.js') }}"></script>

    <script src="{{ asset('assets/frontend/js/custom.js') }}"></script>


  </body>
</html>