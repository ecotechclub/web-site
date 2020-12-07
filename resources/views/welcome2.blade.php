<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>uiCookies:Virb &mdash; Free Bootstrap Theme, Free Responsive Bootstrap Website Template</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('virb') }}/css/styles-merged.css">
    <link rel="stylesheet" href="{{ asset('virb') }}/css/style.min.css">
    <link rel="stylesheet" href="{{ asset('virb') }}/css/custom.css">

    <!--[if lt IE 9]>
      <script src="{{ asset('virb') }}/js/vendor/html5shiv.min.js"></script>
      <script src="{{ asset('virb') }}/js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <!-- START: header -->
  
  <div class="probootstrap-loader"></div>

  <header role="banner" class="probootstrap-header">
    <div class="container">
        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
            <a href="index.html" class="probootstrap-logo navbar-brand mb-3" style="margin-top: -1%;">ecotech</a>
          <ul class="probootstrap-main-nav">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="projects.html">Portfolio</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
          <ul class="probootstrap-right-nav hidden-xs">
            <li><a href="#"><i class="icon-twitter"></i></a></li>
            <li><a href="#"><i class="icon-facebook2"></i></a></li>
            <li><a href="#"><i class="icon-instagram2"></i></a></li>
          </ul>
          <div class="extra-text visible-xs"> 
            <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
            <h5>Address</h5>
            <p>198 West 21th Street, Suite 721 New York NY 10016</p>
            <h5>Connect</h5>
            <ul class="social-buttons">
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook2"></i></a></li>
              <li><a href="#"><i class="icon-instagram2"></i></a></li>
            </ul>
          </div>
        </nav>
    </div>
  </header>
  <!-- END: header -->
  <section class="probootstrap-slider flexslider">
    <ul class="slides">
      <li style="background-image: url({{ asset('virb') }}/img/slider_1.jpg);" class="overlay2">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="slides-text probootstrap-animate" data-animate-effect="fadeIn">
                <h2>Create beautiful things one at a time</h2>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </section>
  <!-- END: slider  -->

  <section class="probootstrap-section">
    <div class="container">
      <div class="row overlap">
        <div class="col-md-4">
          <div class="service left-icon probootstrap-animate">

            <div class="icon">
              <i class="icon-laptop3"></i>
            </div>
            <div class="text">
              <h3 class="heading">Business Strategy</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
              <p><a href="single-page.html">Learn more</a></p>
            </div>

          </div>
        </div>
        <div class="col-md-4">
          <div class="service left-icon probootstrap-animate">
            <div class="icon">
              <i class="icon-presentation"></i>
            </div>
            <div class="text">
              <h3 class="heading">Business Marketing</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
              <p><a href="single-page.html">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service left-icon probootstrap-animate">
            <div class="icon">
              <i class="icon-wallet2"></i>
            </div>
            <div class="text">
              <h3 class="heading">Business Profit</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
              <p><a href="single-page.html">Learn more</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END section -->

  <div class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center section-heading probootstrap-animate">
          <h2>Our Services</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 probootstrap-animate" data-animate-effect="fadeInLeft">

          <div class="panel-group probootstrap-panel" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingOne">
                <h3 class="panel-title">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                    Web Design
                  </a>
                </h3>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>

                  
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingTwo">
                <h3 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    WordPress Integration
                  </a>
                </h3>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                  
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h3 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    SEO &amp; Ranking
                  </a>
                </h3>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                  <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- END panel-group -->
        </div>
        <div class="col-md-6 probootstrap-animate" data-animate-effect="fadeInRight">
          <p><img src="{{ asset('virb') }}/img/slider_2.jpg" alt="Free HTML Bootstrap Theme by uicookies.com" class="img-responsive"></p>
        </div>
      </div>
    </div>
  </div>
  <!-- END section -->

  <section class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center section-heading probootstrap-animate">
          <h2>Watch Video</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 probootstrap-animate" data-animate-effect="fadeIn">
          <figure>
            <div class="probootstrap-video">
              <a href="https://vimeo.com/45830194" class="popup-vimeo probootstrap-video-play overlay"><span><i class="icon-play3"></i></span></a>
              <img src="{{ asset('virb') }}/img/slider_3.jpg" alt="Free HTML5 Bootstrap Template by uicookies.com" class="img-responsive">
            </div>
          </figure>
        </div>
      </div>
    </div>
  </section>
  <!-- END section -->

  <section class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center section-heading probootstrap-animate">
          <h2>Recent Work</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-card with-hover">
            <div class="probootstrap-card-media">
              <a href="single-page.html"><img src="{{ asset('virb') }}/img/slider_1.jpg" class="img-responsive img-border" alt="Free HTML5 Template by uicookies.com"></a>
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading mb0">Vokalia and Consonantia</h2>
              <p class="category">Design</p>
              <p><a href="single-page.html">View details</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-card with-hover">
            <div class="probootstrap-card-media">
              <a href="single-page.html"><img src="{{ asset('virb') }}/img/slider_2.jpg" class="img-responsive img-border" alt="Free HTML5 Template by uicookies.com"></a>
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading mb0">Live the Blind Texts</h2>
              <p class="category">Model</p>
              <p><a href="single-page.html">View details</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-card with-hover">
            <div class="probootstrap-card-media">
              <a href="single-page.html"><img src="{{ asset('virb') }}/img/slider_3.jpg" class="img-responsive img-border" alt="Free HTML5 Template by uicookies.com"></a>
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading mb0">Behind the Word Mountains</h2>
              <p class="category">Website</p>
              <p><a href="single-page.html">View details</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END section -->

  <section class="probootstrap-section probootstrap-section-lighter">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center section-heading probootstrap-animate">
          <h2>People Says...</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4  probootstrap-animate">
          <div class="probootstrap-testimony">
            <blockquote>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </blockquote>
            <div class="author">
              <img src="{{ asset('virb') }}/img/person_1.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Theme by uicookies.com">
              <div>John Doe <span>Designer at uicookies.com</span></div>
            </div>
          </div>
        </div>
        <div class="col-md-4  probootstrap-animate">
          <div class="probootstrap-testimony">
            <blockquote>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </blockquote>
            <div class="author">
              <img src="{{ asset('virb') }}/img/person_2.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Theme by uicookies.com">
              <div>John Doe <span>Designer at uicookies.com</span></div>
            </div>
          </div>
        </div>
        <div class="col-md-4  probootstrap-animate">
          <div class="probootstrap-testimony">
            <blockquote>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </blockquote>
            <div class="author">
              <img src="{{ asset('virb') }}/img/person_3.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Theme by uicookies.com">
              <div>John Doe <span>Designer at uicookies.com</span></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- END section -->
  

  <footer class="probootstrap-footer probootstrap-bg">
    <div class="container">
      <div class="row mb60">
        <div class="col-md-3">
          <div class="probootstrap-footer-widget">
            <h4 class="heading">About Virb.</h4>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            <p><a href="#">Read more...</a></p>
          </div> 
        </div>
        <div class="col-md-3">
          <div class="probootstrap-footer-widget probootstrap-link-wrap">
            <h4 class="heading">Quick Links</h4>
            <ul class="stack-link">
              <li><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Products</a></li>
              <li><a href="#">Testimonial</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="probootstrap-footer-widget">
            <h4 class="heading">More Links</h4>
            <ul class="stack-link">
              <li><a href="#">Projects</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Terms</a></li>
              <li><a href="#">Career</a></li>
              <li><a href="#">Support Help</a></li>
            </ul>
          </div> 
        </div>
        <div class="col-md-3">
          <div class="probootstrap-footer-widget">
            <h4 class="heading">Subscribe</h4>
            <p>Far far away behind the word mountains far from.</p>
            <form action="#">
              <div class="form-field">
                <input type="text" class="form-control" placeholder="Enter your email">
                <button class="btn btn-subscribe">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="row copyright">
        <div class="col-md-6">
          <div class="probootstrap-footer-widget">
            <p>&copy; 2017 <a href="https://uicookies.com/">uiCookies:Virb</a>. Designed by <a href="https://uicookies.com/">uicookies.com</a> <br> Demo Photos from <a href="https://unsplash.com/">Unsplash</a></p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="probootstrap-footer-widget right">
            <ul class="probootstrap-social">
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook"></i></a></li>
              <li><a href="#"><i class="icon-instagram2"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
  </div>
  

  <script src="{{ asset('virb') }}/js/scripts.min.js"></script>
  <script src="{{ asset('virb') }}/js/main.min.js"></script>
  <script src="{{ asset('virb') }}/js/custom.js"></script>

  </body>
</html>