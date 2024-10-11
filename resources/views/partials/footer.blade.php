@if(!Request::is('/'))
    <!-- header three area start -->
    <!-- rts footer area start -->
    <div class="rts-footer-area social-jumpanimation @@border">
        <div class="container  ptb--50 pt_md--60 pb_md--60 pt_sm--40 pb_sm--40">
            <div class="row">
                <div class="col-lg-6">
                    <!-- footer-two wrapper -->
                    <div class="footer-two-main-wrapper">
                        <a href="{{route('dashboard')}}" class="logo">
                            <img style="    max-width: 250px;" src="{{asset('assets/images/Standard/logoBlue.png')}}" alt="logo">
                        </a>
                        <!-- social style two -->
                        <ul class="social-style-two-wrapper social-anim">
                            <li><a class="counter__anim" href="contact.html#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a class="counter__anim" href="contact.html#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a class="counter__anim" href="contact.html#"><i class="fa-brands fa-youtube"></i></a></li>
                            <li><a class="counter__anim" href="contact.html#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul>
                        <!-- social style two end -->
                    </div>
                    <!-- footer-two wrapper end -->
                </div>
                <div class="col-lg-6">
                    <div class="footer-two-main-wrapper-right">
                        <!-- single footer two wozed -->
                        <!-- <div class="single-footer-wized">
                            <div class="location-information">
                                <div class="location">
                                    <p>1058 Helton Ave, Stky <br>
                                        Berlin, Germany</p>
                                </div>
                                <div class="contact-call">
                                    <a href="Tel:123-456-7890">+23 5825-32535</a>
                                    <span>Call us for support</span>
                                </div>
                                <div class="contact-call">
                                    <a href="mailto:webmaster@example.com">inno@gmail.com</a>
                                    <span>Email us for query</span>
                                </div>
                            </div>

                        </div> -->
                        <!-- single footer two wozed -->
                        <!-- single footer two wozed -->
                        <div class="single-footer-wized">
                            <div class="location-information">

                                    <div class="nav-area-center">
                                    <nav class="navigation">
                                        <ul class="parent-ul">
                                            <li>
                                                <a href="{{route('about')}}">{{ __('messages.about') }}</a>
                                            </li>
                                            <li>
                                                <a href="{{route('services')}}">{{ __('messages.services') }}</a>
                                            </li>
                                            <li>
                                                <a href="{{route('products')}}">{{ __('messages.products') }}</a>
                                            </li>
                                            <li>
                                                <a href="{{route('projects')}}">{{ __('messages.projects') }}</a>
                                            </li>
                                            <li>
                                                <a href="{{route('customers')}}">{{ __('messages.clients') }}</a>
                                            </li>
                                            <li><a href="{{route('contact')}}">{{ __('messages.contact') }}</a></li>

                                        
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                        </div>
                        <!-- single footer two wozed -->
                        <!-- single footer two wozed -->
                        <!-- <div class="single-footer-wized">
                            <div class="location-information">
                                <div class="location">
                                    <h6 class="title">News Letter</h6>
                                    <p class="disc-f">
                                        Subscribe to our newsletter & get all
                                        the latest news.
                                    </p>
                                </div>
                                <form action="contact.html#">
                                    <div class="input-email">
                                        <input type="text" placeholder="Enter your email address" required>
                                        <button><i class="fa-thin fa-arrow-right"></i></button>
                                    </div>
                                </form>

                            </div>

                        </div> -->
                        <!-- single footer two wozed -->
                    </div>
                </div>
            </div>
        </div>
        <div class="rts-copyright-area-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copy-right-area-inner-two">
                            <p class="disc">Copyright 2023. All Rights Reserved.</p>
                            <div class="right">
                                <!-- <ul>
                                    <li><a href="terms-and-condition.html">Terms & conditions</a></li>
                                    <li><a href="privacy-policy.html">Privacy policy</a></li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts footer area end -->
    <!-- header three area end -->



    <!-- search area start -->
    <div class="search-input-area">
        <div class="container">
            <div class="search-input-inner">
                <div class="input-div">
                    <input id="searchInput1" class="search-input" type="text" placeholder="Search by keyword or #">
                    <button><i class="far fa-search"></i></button>
                </div>
            </div>
        </div>
        <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
    </div>
    <!-- search area end -->


    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>
    <!-- back to top end -->



    <!-- header style two -->
    <div id="side-bar" class="side-bar header-two">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <div class="inner-main-wrapper-desk">
            <div class="thumbnail">
                <img src="assets/images/logo/01.svg" alt="Innovate">
            </div>
            <div class="inner-content">
                <p class="disc">
                    Innovate Architects is a full-service design firm providing architecture architecture.
                </p>
                <div class="contact-information--sidebar">
                    <h6 class="title">Contact Info</h6>
                    <div class="single-info">
                        <a href="contact.html#">+123 456 789 33</a>
                    </div>
                    <div class="single-info">
                        <a href="contact.html#">3 innovate Street, NY United <br> States of America</a>
                    </div>
                    <div class="single-info">
                        <a href="contact.html#">Innovate@gmail.com</a>
                    </div>
                    <h6 class="title mt--30">Office Address</h6>
                    <div class="single-info">
                        <a href="contact.html#">+Time Square, New York <br> USA, 3454</a>
                    </div>
                    <div class="rts-social-style-one">
                        <ul>
                            <li>
                                <a href="contact.html#">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="contact.html#">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="contact.html#">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="contact.html#">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer">
                    <h4 class="title">Got a project in mind?</h4>
                    <a href="contact.html" class="rts-btn btn-primary">Let's talk</a>
                </div>
            </div>
        </div>
        <!-- mobile menu area start -->
        <div class="mobile-menu-main">
            <nav class="nav-main mainmenu-nav mt--30">
                <ul class="mainmenu metismenu" id="mobile-menu-active">
                    <li class="has-droupdown">
                        <a href="contact.html#" class="main">{{__('messages.home')}}</a>
                        <ul class="submenu mm-collapse">
                            <li class="has-droupdown third-lvl">
                                <a class="main" href="contact.html#">Multipages</a>
                                <ul class="submenu-third-lvl mm-collapse">
                                    <li><a href="index.html"></a>Home One</li>
                                    <li><a href="index-two.html"></a>Home Two</li>
                                    <li><a href="index-three.html"></a>Home Three</li>
                                    <li><a href="index-four.html"></a>Home Four</li>
                                    <li><a href="index-five.html"></a>Home Five</li>
                                    <li><a href="index-six.html"></a>Home Six</li>
                                    <li><a href="index-seven.html"></a>Home Seven</li>
                                </ul>
                            </li>
                            <li class="has-droupdown third-lvl">
                                <a class="main" href="contact.html#">Onepages</a>
                                <ul class="submenu-third-lvl mm-collapse">
                                    <li><a href="https://themewant.com/products/html/innovat/onepage.html"></a>One Page One</li>
                                    <li><a href="onepage-two.html"></a>One Page Two</li>
                                    <li><a href="onepage-three.html"></a>One Page Three</li>
                                    <li><a href="onepage-four.html"></a>One Page Four</li>
                                    <li><a href="onepage-five.html"></a>One Page Five</li>
                                    <li><a href="onepage-six.html"></a>One Page Six</li>
                                    <li><a href="onepage-seven.html"></a>One Page Seven</li>
                                </ul>
                            </li>
                            <li class="has-droupdown third-lvl">
                                <a class="main" href="contact.html#">Showcase Pages</a>
                                <ul class="submenu-third-lvl mm-collapse">
                                    <li><a href="portfolio-boxes.html"></a>Carousel Slider</li>
                                    <li><a href="varticle-portfolio.html"></a>Vertical Portfolio</li>
                                    <li><a href="varticle-slider.html"></a>Varticl Slider</li>
                                    <li><a href="varticle-slider-tab.html"></a>Vartical Tab Slider</li>
                                    <li><a href="showcase-fade.html"></a>Showcase Fade</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="contact.html#" class="main">Services</a>
                        <ul class="submenu mm-collapse">
                            <li><a class="mobile-menu-link" href="service-1.html">Service One</a></li>
                            <li><a class="mobile-menu-link" href="service-2.html">Service Two</a></li>
                            <li><a class="mobile-menu-link" href="service-3.html">Service Three</a></li>
                            <li><a class="mobile-menu-link" href="service-4.html">Service Four</a></li>
                            <li><a class="mobile-menu-link" href="service-5.html">Service Five</a></li>
                            <li><a class="mobile-menu-link" href="service-details.html">Service Details</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="contact.html#" class="main">Portfolio</a>
                        <ul class="submenu mm-collapse">
                            <li><a class="mobile-menu-link" href="portfolio-grid-1.html">Portfolio Grid</a></li>
                            <li><a class="mobile-menu-link" href="portfolio-grid-col-3.html">Portfolio Col-3</a></li>
                            <li><a class="mobile-menu-link" href="portfolio-grid-col-4.html">Portfolio Col-4</a></li>
                            <li><a class="mobile-menu-link" href="portfolio-varticle-grid.html">Portfolio Mesonary</a></li>
                            <li class="has-droupdown third-lvl">
                                <a class="main" href="contact.html#">Project Details</a>
                                <ul class="submenu-third-lvl mm-collapse">
                                    <li><a href="https://themewant.com/products/html/innovat/project-details-1.html"></a>Project Details v.1</li>
                                    <li><a href="https://themewant.com/products/html/innovat/project-details-2.html"></a>Project Details v.2</li>
                                    <li><a href="https://themewant.com/products/html/innovat/project-details-3.html"></a>Project Details v.3</li>
                                    <li><a href="https://themewant.com/products/html/innovat/project-details-4.html"></a>Project Details v.4</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="contact.html#" class="main">Blog</a>
                        <ul class="submenu mm-collapse">
                            <li><a class="mobile-menu-link" href="blog.html">Blog</a></li>
                            <li><a class="mobile-menu-link" href="blog-list.html">Blog List</a></li>
                            <li><a class="mobile-menu-link" href="blog-2.html">Blog v.2</a></li>
                            <li><a class="mobile-menu-link" href="blog-3.html">Blog v.3</a></li>
                            <li><a class="mobile-menu-link" href="blog-4.html">Blog v.4</a></li>
                            <li><a class="mobile-menu-link" href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="contact.html#" class="main">Pages</a>
                        <ul class="submenu mm-collapse">
                            <li><a class="mobile-menu-link" href="about.html">About</a></li>
                            <li class="has-droupdown third-lvl">
                                <a class="main" href="contact.html#">Team</a>
                                <ul class="submenu-third-lvl mm-collapse">
                                    <li><a href="team-1.html"></a>Team One</li>
                                    <li><a href="team-2.html"></a>Team Two</li>
                                    <li><a href="https://themewant.com/products/html/innovat/team-details.html"></a>Team Details</li>
                                </ul>
                            </li>
                            <li><a class="mobile-menu-link" href="before-after.html">Before After</a></li>
                            <li><a class="mobile-menu-link" href="pricing-plane.html">Pricing Plan</a></li>
                            <li><a class="mobile-menu-link" href="faq.html">Faq's</a></li>
                            <li><a class="mobile-menu-link" href="terms-and-condition.html">Terms & Conditions</a></li>
                            <li><a class="mobile-menu-link" href="privacy-policy.html">Privacy Policy</a></li>
                            <li><a class="mobile-menu-link" href="404.html">404 Page</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html" class="main">Contact Us</a>
                    </li>
                </ul>
            </nav>

            <div class="rts-social-style-one pl--20 mt--100">
                <ul>
                    <li>
                        <a href="contact.html#">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="contact.html#">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="contact.html#">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </li>
                    <li>
                        <a href="contact.html#">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- mobile menu area end -->
    </div>
    <!-- header style two End -->



    <!-- start loader -->
    <!-- <div class="loader-wrapper">
    <div class="loader">
    </div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div> -->
    <!-- End loader -->


    <div id="anywhere-home">
    </div>
@endif



    <!-- scripts -->
    <script src="assets/js/vendor/jquery.min.js"></script>
    <script src="assets/js/vendor/waw.js"></script>

    <!-- gsap plugins -->
    <script src="assets/js/vendor/gsap.js"></script>
    <script src="assets/js/vendor/metismenu.js"></script>
    <script src="assets/js/plugins/scrolltiger.js"></script>
    <script src="assets/js/plugins/scrolltoplugin.js"></script>
    <!-- <script src="assets/js/plugins/smoothscroll.js"></script> -->
    <script src="assets/js/plugins/splittext.js"></script>
    <!-- gsap plugins end-->

    <script src="assets/js/vendor/magnifying-popup.js"></script>

    <!-- swiper JS 10.2.0 -->
    <script src="assets/js/plugins/swiper.js"></script>
    <script src="assets/js/plugins/counterup.js"></script>
    <script src="assets/js/vendor/waypoint.js"></script>
    <script src="assets/js/vendor/chroma.min.js"></script>
    <!-- bootstrap 5.0.2 -->
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <!-- dymanic Contact Form -->
    <script src="assets/js/plugins/contact.form.js"></script>

    <!-- main Js -->
    <script src="assets/js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>