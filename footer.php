<section class="section-sm bg-custom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 text-white">
                    <h4 class="mb-3">Become a part of Fiveone Digital community today</h4>
                    <p class=" mb-0 mo-mb-20 cta-desc text-white">Join Our Franchise and Grow with us! We are emerging Mobile app development company providing iOS and Android app development as our primary service to our clients. We welcome you to join us as franchise partner.</p>
                </div>

                <div class="col-md-4 text-center">
                    <a href="contact-us.php" class="btn btn-light">Get Started</a>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <h4 class="text-uppercase footer-title mt-2">
                        <a href="index.html" class="text-white">
                    <!-- <img src="images/logo-light.png" alt="" class="logo-light" height="28" /> -->
                    FiveOne Digital
                </a>
                    </h4>
                    <p class="text-white-50">Create a Website Design, Ecommerce Websites, Android Apps, SEO, Business Listing, Social Media Marketing with best Web Design Company in India located in Mumbai. We provide best website design services to our client.</p>
                    <ul class="footer-icons text-whit e-50 list-inline mt-3">
                        <li class="list-inline-item"><a href="https://www.facebook.com/fiveonedigital.in/"  target="blank" class=""><i class="mdi mdi-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="https://twitter.com/DigitalFiveone/" target="blank" class=""><i class="mdi mdi-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="https://api.whatsapp.com/send?phone=919082368880" target="blank" class=""><i class="mdi mdi-whatsapp"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.instagram.com/fiveonedigital/" target="blank" class=""><i class="mdi mdi-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.linkedin.com/company/35550522/admin/" target="blank" class=""><i class="mdi mdi-linkedin"></i></a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <h6 class="text-white footer-title mt-2 mb-3">Company</h6>
                    <ul class="list-unstyled company-sub-menu">
                        <li><a href="#" class="text-white-50">Home</a></li>
                        <!-- <li><a href="#" class="text-white-50">Blog</a></li> -->
                        <li><a href="./faq.php" class="text-white-50">FAQ</a></li>
                        <li><a href="./about-us.php" class="text-white-50">About</a></li>
                        <!-- <li><a href="#" class="text-white-50">Support</a></li> -->
                    </ul>  
                </div>

                
                <div class="col-lg-3 col-sm-6">
                    <h6 class="text-white footer-title mt-2 mb-3">What we provide ?</h6>
                    <ul class="list-unstyled company-sub-menu">
                        <li><a  href="./service.php" class="text-white-50">Mobile app developement</a></li>
                        <li><a href="./service.php" class="text-white-50">Create a website</a></li>
                        <li><a href="./service.php" class="text-white-50">SEO services</a></li>
                    </ul>
                </div>
            </div>
            <hr class="footer-border">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-white-50">

                        
                        <div class="float-left pull-none mt-2">
                            <p class="mb-0">Fiveone Digital © 2015 - <?php echo date('Y'); ?></p>
                        </div>
                        <div class="float-right pull-none mt-2">
                            <p class="mb-0"><a href="#" class="text-white-50">Back to top</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- build:js assets/js/vendor-bundle.js -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrollspy.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/isotope.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <!-- endbuild -->
    <!-- build:js assets/js/scripts.js -->
    <script src="js/counter.int.js"></script>
    <script src="js/portfolio-filter.js"></script>
    <script src="js/app.js"></script>
    <!-- endbuild -->
    <script>
    // Check that service workers are registered
    if ('serviceWorker' in navigator) {
      // Use the window load event to keep the page load performant
      window.addEventListener('load', () => {
        navigator.serviceWorker.register('./sw.js');
      });
    }
    </script>