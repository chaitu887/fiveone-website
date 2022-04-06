<?php
include './header.php'
?>
<section class="faq-home section" id="home">
  <div class="bg-overlay"></div>
  <div class="home-center">
    <div class="home-desc-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="home-page-title text-center">
              <h1 class="text-white mb-2">Training</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center bg-transparent">
                  <li class="breadcrumb-item text-white"><a href="/" class="text-white">Home</a></li>
                  <li class="breadcrumb-item  active" aria-current="page"><a href="training.php"
                      class="text-custom">Training</a></li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- WHAT WE DO START -->
<section class="section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-10">
        <div class="title-name text-center mb-4">
          <h3 class="text-dark mb-3">Our Courses</h3>
          <!-- <p class="text-muted">Cras ultricies mi eu turpis hendrerit fringilla vestibulum ante ipsum primis in faucibus at cubilia Curae.</p> -->
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="services-box text-center p-4 mt-4 mb-1">
          <div class="services-icon m-3">
            <i class="mdi mdi-android text-custom"></i>
          </div>
          <h2 class="text-dark mt-4">Mobile App Development</h2>
          <p class="text-muted mt-3">Get the best mobile app development service for managing your team and company by
            highly experienced professionals for Android and iOS applications.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="services-box text-center p-4 mt-4 mb-1">
          <div class="services-icon m-3">
            <i class="mdi mdi-language-php text-custom"></i>
          </div>
          <h2 class="text-dark mt-4">Laravel App Development</h2>
          <p class="text-muted mt-3">Laravel is a PHP framework wich uses MVC Structure to make it easy for users to
            craft high speed beautiful web application with clean and pretty coding structure</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="services-box text-center p-4 mt-4 mb-1">
          <div class="services-icon m-3">
            <i class="mdi mdi-cellphone-android text-custom"></i>
          </div>
          <h2 class="text-dark mt-4">Flutter App Development</h2>
          <p class="text-muted mt-3">Flutter is an open-source UI software development kit created by Google. It is used
            to develop cross platform applications for Android, iOS, Linux, macOS, Windows, Google Fuchsia, and the
            web from a single codebase.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="services-box text-center p-4 mt-4 mb-1">
          <div class="services-icon m-3">
            <i class="mdi mdi-desktop-mac text-custom"></i>
          </div>
          <h2 class="text-dark mt-4">Web Designing</h2>
          <p class="text-muted mt-3">Web design has numerous components that work together to create the finished
            experience of a website, including graphic design, user experience design, interface design, search engine
            optimization (SEO) and content creation. These elements determine how a website looks, feels and works on
            various devices.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="services-box text-center p-4 mt-4 mb-1">
          <div class="services-icon m-3">
            <i class="mdi mdi-database text-custom"></i>
          </div>
          <h2 class="text-dark mt-4">Introduction to Databases using SQL Server</h2>
          <p class="text-muted mt-3">SQL stands for Structured Query Language. SQL allows us to interact with relational
            databases through queries. These queries can allow you to perform a number of actions such as: insert,
            select, update and delete information in a database.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="services-box text-center p-4 mt-4 mb-1">
          <div class="services-icon m-3">
            <i class="mdi mdi-google-circles-extended text-custom"></i>
          </div>
          <h2 class="text-dark mt-4">Digital Marketing</h2>
          <p class="text-muted mt-3">We are SEO company providing SEO services in Search Engine Optimization (SEO
            Marketing) and also Social media marketing, Pay Per Click, Google AdWords, Email marketing, etc.</p>
        </div>
      </div>

    </div>
</section>
<!-- WHAT WE DO END -->



<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="faq-content">
          <h3 class="text-dark">Mobile App Development </h3>
          <div class="team-details-border mt-2 mb-5"></div>
          <div class="accordion mt-4" id="accordionExample">


            <div class="row">
              <div class="col-md-4">
                <div class="card mb-3">
                  <a data-toggle="collapse" href="#collapse1" class="faq" aria-expanded="true"
                    aria-controls="collapse1">
                    <div class="card-header" id="heading1">
                      <h6 class="mb-0 faq-question">Introduction</h6>
                    </div>
                  </a>
                  <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        <li>Introduction</li>
                        <li>Installing Ionic</li>
                        <li>Setting Up Envoirment</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-3">
                  <a data-toggle="collapse" href="#collapse2" class="faq collapsed" aria-expanded="false"
                    aria-controls="collapse2">
                    <div class="card-header" id="heading2">
                      <h6 class="mb-0 faq-question">Getting Started</h6>
                    </div>
                  </a>
                  <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        <li>Creating the app</li>
                        <li>Serving the first App</li>
                        <li>Project Structure</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">


                <!-- collapse one end -->


                <!-- collapse two end -->

                <div class="card mb-3">
                  <a data-toggle="collapse" href="#collapse3" class="faq collapsed" aria-expanded="false"
                    aria-controls="collapse3">
                    <div class="card-header" id="heading3">
                      <h6 class="mb-0 faq-question">Ionic Components</h6>
                    </div>
                  </a>
                  <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        <li>Ionic list component</li>
                        <li>Menus</li>
                        <li>Slides</li>
                        <li>Tabs</li>
                        <li>Cards</li>
                        <li>icons</li>
                        <li>Form elements e.g. Buttons, Checkbox, Inputs etc.</li>
                        <li>Grids</li>
                        <li>Other Utilities</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <!-- collapse three end -->

                <div class="card mb-3">
                  <a data-toggle="collapse" href="#collapse4" class="faq collapsed" aria-expanded="false"
                    aria-controls="collapse4">
                    <div class="card-header" id="heading4">
                      <h6 class="mb-0 faq-question">Navigation</h6>
                    </div>
                  </a>
                  <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        <li>Basic Navigation</li>
                        <li>Navigating for the root component</li>
                        <li>Navigating from an overlay component</li>
                        <li>Pushing a view </li>
                        <li>Removing a view</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <!-- collapse four end -->

                <div class="card mb-3">
                  <a data-toggle="collapse" href="#collapse5" class="faq collapsed" aria-expanded="false"
                    aria-controls="collapse5">
                    <div class="card-header" id="heading5">
                      <h6 class="mb-0 faq-question">Theming</h6>
                    </div>
                  </a>
                  <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        <li>Introduction</li>
                        <li>SASS</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <!-- collapse five end -->

                <div class="card mb-3">
                  <a data-toggle="collapse" href="#collapse6" class="faq collapsed" aria-expanded="false"
                    aria-controls="collapse6">
                    <div class="card-header" id="heading6">
                      <h6 class="mb-0 faq-question">Loaders,modals,Popovers</h6>
                    </div>
                  </a>
                  <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        <li>Loading</li>
                        <li>Modals</li>
                        <li>Popovers</li>
                        <li>Alerts</li>
                        <li>Toasts</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <!-- collapse six end -->
                <div class="card mb-3">
                  <a data-toggle="collapse" href="#collapse7" class="faq collapsed" aria-expanded="false"
                    aria-controls="collapse7">
                    <div class="card-header" id="heading7">
                      <h6 class="mb-0 faq-question">Guestures and Events</h6>
                    </div>
                  </a>
                  <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        <li>Guestures</li>
                        <li>Events</li>

                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <!-- collapse seven end -->
                <div class="card mb-3">
                  <a data-toggle="collapse" href="#collapse8" class="faq collapsed" aria-expanded="false"
                    aria-controls="collapse8">
                    <div class="card-header" id="heading8">
                      <h6 class="mb-0 faq-question">Storage</h6>
                    </div>
                  </a>
                  <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        <li>Ionic Storage</li>

                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <!-- collapse eight end -->
                <div class="card mb-3">
                  <a data-toggle="collapse" href="#collapse9" class="faq collapsed" aria-expanded="false"
                    aria-controls="collapse9">
                    <div class="card-header" id="heading9">
                      <h6 class="mb-0 faq-question">Ionic Native</h6>
                    </div>
                  </a>
                  <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        <li>Device Information</li>
                        <li>Camera</li>
                        <li>Http</li>
                        <li>In App Browser</li>
                        <li>Android Permission</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <!-- collapse nine end -->
                <div class="card mb-3">
                  <a data-toggle="collapse" href="#collapse10" class="faq collapsed" aria-expanded="false"
                    aria-controls="collapse10">
                    <div class="card-header" id="heading10">
                      <h6 class="mb-0 faq-question">Deployment</h6>
                    </div>
                  </a>
                  <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        <li>Cli and Ionic Overview</li>
                        <li>Creating Android/iOS build</li>
                        <li>Running the app</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>


            </div>
            <!-- collapse ten end -->

          </div>
        </div>

      </div>


      <div class="col-md-12 mt-3 mb-3">
        <div class="faq-content mt-3">
          <h3 class="text-dark">Laravel </h3>
          <div class="team-details-border mt-2 mb-5"></div>
          <div class="accordion mt-4" id="accordionExample">
            <div class="row">
              <div class="col-md-4">
                <div class="card mb-3">
                  <a data-toggle="collapse" href="#collapse11" class="faq" aria-expanded="true"
                    aria-controls="collapse11">
                    <div class="card-header" id="heading11">
                      <h6 class="mb-0 faq-question">Introduction</h6>
                    </div>
                  </a>
                  <div id="collapse11" class="collapse" aria-labelledby="headingone" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        <li>Introduction</li>
                        <li>Installing Laravel</li>
                        <li>Setting Up Envoirment</li>
                      </ul>
                    </div>
                  </div>
                </div>



              </div>
              <div class="col-md-4">

                <!-- collapse one end -->

                <div class="card mb-3">
                  <a data-toggle="collapse" href="#collapse12" class="faq collapsed" aria-expanded="false"
                    aria-controls="collapse12">
                    <div class="card-header" id="heading12">
                      <h6 class="mb-0 faq-question">Getting Started</h6>
                    </div>
                  </a>
                  <div id="collapse12" class="collapse" aria-labelledby="heading12" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        <li>Installation</li>
                        <li>Configuration</li>
                        <li>Direcoty Structure</li>
                        <li>Homestead</li>
                        <li>Valet</li>
                        <li>Deployment</li>
                      </ul>
                    </div>
                  </div>
                </div>


              </div>
              <div class="col-md-4">

                <!-- collapse two end -->

                <div class="card mb-3">
                  <a data-toggle="collapse" href="#collapse13" class="faq collapsed" aria-expanded="false"
                    aria-controls="collapse13">
                    <div class="card-header" id="heading13">
                      <h6 class="mb-0 faq-question">Architecture Concept</h6>
                    </div>
                  </a>
                  <div id="collapse13" class="collapse" aria-labelledby="heading13" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        <li>Request Lifecycle</li>
                        <li>Service Container</li>
                        <li>Service Providers</li>
                        <li>Facades</li>
                        <li>Contracts</li>
                      </ul>
                    </div>
                  </div>
                </div>


              </div>
              <div class="col-md-4">
                <!-- collapse three end -->

                <div class="card mb-3">
                  <a data-toggle="collapse" href="#collapse14" class="faq collapsed" aria-expanded="false"
                    aria-controls="collapse14">
                    <div class="card-header" id="heading14">
                      <h6 class="mb-0 faq-question">The Basics</h6>
                    </div>
                  </a>
                  <div id="collapse14" class="collapse" aria-labelledby="heading14" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        <li>Routing</li>
                        <li>Middleware</li>
                        <li>CSRF Protection</li>
                        <li>Controllers</li>
                        <li>Requests</li>
                        <li>Responses</li>
                        <li>Views</li>
                        <li>URL Generation</li>
                        <li>Session</li>
                        <li>Validation</li>
                        <li>Error Handling</li>
                        <li>Logging</li>
                      </ul>
                    </div>
                  </div>
                </div>


              </div>
              <div class="col-md-4">
                <!-- collapse four end -->

                <div class="card mb-3">
                  <a data-toggle="collapse" href="#collapse15" class="faq collapsed" aria-expanded="false"
                    aria-controls="collapse15">
                    <div class="card-header" id="heading15">
                      <h6 class="mb-0 faq-question">Frontend</h6>
                    </div>
                  </a>
                  <div id="collapse15" class="collapse" aria-labelledby="heading15" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        <li>Blade Templates</li>
                        <li>Localization</li>
                        <li>Frontend Scaffolding</li>
                        <li>Compiling Assets</li>
                      </ul>
                    </div>
                  </div>
                </div>


              </div>
              <div class="col-md-4">
                <!-- collapse five end -->

                <div class="card mb-3">
                  <a data-toggle="collapse" href="#collapse16" class="faq collapsed" aria-expanded="false"
                    aria-controls="collapse16">
                    <div class="card-header" id="heading16">
                      <h6 class="mb-0 faq-question">Security</h6>
                    </div>
                  </a>
                  <div id="collapse16" class="collapse" aria-labelledby="heading16" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        <li>Authentication</li>
                        <li>API Authentication</li>
                        <li>Authorization</li>
                        <li>Email Verification</li>
                        <li>Encryption</li>
                        <li>Hashing</li>
                        <li>Password Reset</li>
                      </ul>
                    </div>
                  </div>
                </div>


              </div>
              <div class="col-md-4">
                <!-- collapse six end -->
                <div class="card mb-3">
                  <a data-toggle="collapse" href="#collapse17" class="faq collapsed" aria-expanded="false"
                    aria-controls="collapse17">
                    <div class="card-header" id="heading17">
                      <h6 class="mb-0 faq-question">Digging Deeper</h6>
                    </div>
                  </a>
                  <div id="collapse17" class="collapse" aria-labelledby="heading17" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        <li>Artisan Console</li>
                        <li>Broadcasting</li>
                        <li>Cache</li>
                        <li>Collections</li>
                        <li>Events</li>
                        <li>File Storage</li>
                        <li>Helpers</li>
                        <li>Mail</li>
                        <li>Notifications</li>
                        <li>Package Development</li>
                        <li>Queues</li>
                        <li>Task Scheduling</li>
                      </ul>
                    </div>
                  </div>
                </div>


              </div>
              <div class="col-md-4">
                <!-- collapse seven end -->
                <div class="card mb-3">
                  <a data-toggle="collapse" href="#collapse18" class="faq collapsed" aria-expanded="false"
                    aria-controls="collapse18">
                    <div class="card-header" id="heading18">
                      <h6 class="mb-0 faq-question">Database</h6>
                    </div>
                  </a>
                  <div id="collapse18" class="collapse" aria-labelledby="heading18" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        <li>Getting Started</li>
                        <li>Query Builder</li>
                        <li>Pagination</li>
                        <li>Migrations</li>
                        <li>Seeding</li>
                        <li>Redis</li>
                      </ul>
                    </div>
                  </div>
                </div>


              </div>
              <div class="col-md-4">
                <!-- collapse eight end -->
                <div class="card mb-3">
                  <a data-toggle="collapse" href="#collapse19" class="faq collapsed" aria-expanded="false"
                    aria-controls="collapse19">
                    <div class="card-header" id="heading19">
                      <h6 class="mb-0 faq-question">Eloquent ORM</h6>
                    </div>
                  </a>
                  <div id="collapse19" class="collapse" aria-labelledby="heading19" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        <li>Getting Started</li>
                        <li>Relationships</li>
                        <li>Collections</li>
                        <li>Mutators</li>
                        <li>API Resources</li>
                        <li>Serialization</li>
                      </ul>
                    </div>
                  </div>
                </div>


              </div>
              <div class="col-md-4">
                <!-- collapse nine end -->
                <div class="card mb-3">
                  <a data-toggle="collapse" href="#collapse20" class="faq collapsed" aria-expanded="false"
                    aria-controls="collapse20">
                    <div class="card-header" id="heading20">
                      <h6 class="mb-0 faq-question">Testing</h6>
                    </div>
                  </a>
                  <div id="collapse20" class="collapse" aria-labelledby="heading20" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        <li>Getting Started</li>
                        <li>HTTP Tests</li>
                        <li>Console Tests</li>
                        <li>Browser Tests</li>
                        <li>Database</li>
                        <li>Mocking</li>
                      </ul>
                    </div>
                  </div>
                </div>


              </div>
              <div class="col-md-4">
                <!-- collapse ten end -->
                <div class="card mb-3">
                  <a data-toggle="collapse" href="#collapse21" class="faq collapsed" aria-expanded="false"
                    aria-controls="collapse21">
                    <div class="card-header" id="heading21">
                      <h6 class="mb-0 faq-question">Official Packages</h6>
                    </div>
                  </a>
                  <div id="collapse21" class="collapse" aria-labelledby="heading21" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        <li>Cashier</li>
                        <li>Dusk</li>
                        <li>Envoy</li>
                        <li>Horizon</li>
                        <li>Passport</li>
                        <li>Scout</li>
                        <li>Socialite</li>
                        <li>Telescope</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>


            </div>

            <!-- collapse ten end -->

          </div>
        </div>

      </div>

      <div class="col-md-12 mt-3 mb-3">
        <div class="faq-content mt-3">
          <h3 class="text-dark">Flutter </h3>
          <div class="team-details-border mt-2 mb-5"></div>
          <div class="accordion mt-4" id="accordionExample">
            <div class="row">
              <div class="col-md-4">
                <div class="card mb-3">
                  <a data-toggle="collapse" href="#collapse22" class="faq" aria-expanded="true"
                    aria-controls="collapse22">
                    <div class="card-header" id="heading22">
                      <h6 class="mb-0 faq-question">Introduction</h6>
                    </div>
                  </a>
                  <div id="collapse22" class="collapse" aria-labelledby="heading22" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        <li>Introduction</li>
                        <li>Installing Flutter</li>
                        <li>Setting Up Envoirment</li>
                      </ul>
                    </div>
                  </div>
                </div>



              </div>
              <div class="col-md-4">

                <!-- collapse one end -->

                <div class="card mb-3">
                  <a data-toggle="collapse" href="#collapse23" class="faq collapsed" aria-expanded="false"
                    aria-controls="collapse23">
                    <div class="card-header" id="heading23">
                      <h6 class="mb-0 faq-question">Basics</h6>
                    </div>
                  </a>
                  <div id="collapse23" class="collapse" aria-labelledby="heading23" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        <li>Flutter Architecture</li>
                        <li>Basics of Flutter Components</li>
                      </ul>
                    </div>
                  </div>
                </div>


              </div>
              <div class="col-md-4">

                <!-- collapse two end -->

                <div class="card mb-3">
                  <a data-toggle="collapse" href="#collapse24" class="faq collapsed" aria-expanded="false"
                    aria-controls="collapse24">
                    <div class="card-header" id="heading24">
                      <h6 class="mb-0 faq-question">Getting Started</h6>
                    </div>
                  </a>
                  <div id="collapse24" class="collapse" aria-labelledby="heading24" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        <li>Creating App</li>
                        <li>Serving the First Basic App</li>
                        <li>Project Structure</li>
                      </ul>
                    </div>
                  </div>
                </div>


              </div>
              <div class="col-md-4">
                <!-- collapse three end -->

                <div class="card mb-3">
                  <a data-toggle="collapse" href="#collapse25" class="faq collapsed" aria-expanded="false"
                    aria-controls="collapse25">
                    <div class="card-header" id="heading25">
                      <h6 class="mb-0 faq-question">Programming Essentials</h6>
                    </div>
                  </a>
                  <div id="collapse25" class="collapse" aria-labelledby="heading25" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        <li>Dart - Programming Language Introduction</li>
                        <li>Data Types</li>
                        <li>Functions</li>
                        <li>Variables</li>
                        <li>Classes, Objects, Constructors</li>
                        <li>Conditional Statements and Ternary Operators</li>
                        <li>Error Handling</li>
                      </ul>
                    </div>
                  </div>
                </div>


              </div>
              <div class="col-md-4">
                <!-- collapse four end -->

                <div class="card mb-3">
                  <a data-toggle="collapse" href="#collapse26" class="faq collapsed" aria-expanded="false"
                    aria-controls="collapse26">
                    <div class="card-header" id="heading26">
                      <h6 class="mb-0 faq-question">Widgets</h6>
                    </div>
                  </a>
                  <div id="collapse26" class="collapse" aria-labelledby="heading26" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        <li>Introduction</li>
                        <li>App Bar, Column, Row</li>
                        <li>Container, Elevated Button</li>
                        <li>Flutter Logo, Icon, Image, Placeholder</li>
                        <li>Scaffhold, Text</li>
                      </ul>
                    </div>
                  </div>
                </div>


              </div>
              <div class="col-md-4">
                <!-- collapse five end -->

                <div class="card mb-3">
                  <a data-toggle="collapse" href="#collapse27" class="faq collapsed" aria-expanded="false"
                    aria-controls="collapse27">
                    <div class="card-header" id="heading27">
                      <h6 class="mb-0 faq-question">Layouts</h6>
                    </div>
                  </a>
                  <div id="collapse27" class="collapse" aria-labelledby="heading27" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        <li>Single-Child Layout Widgets</li>
                        <li>Align, Aspect Ratio</li>
                        <li>Baseline, Center</li>
                        <li>Constrained Box, Container, Padding</li>
                        <li>Multi-child layout widgets</li>
                        <li>Column, Row, Flow</li>
                        <li>Grid View, List View, List Body</li>
                        <li>Layout Builder, Table, Wrap</li>
                      </ul>
                    </div>
                  </div>
                </div>


              </div>
              <div class="col-md-4">
                <!-- collapse six end -->
                <div class="card mb-3">
                  <a data-toggle="collapse" href="#collapse28" class="faq collapsed" aria-expanded="false"
                    aria-controls="collapse28">
                    <div class="card-header" id="heading28">
                      <h6 class="mb-0 faq-question">UI Components</h6>
                    </div>
                  </a>
                  <div id="collapse28" class="collapse" aria-labelledby="heading28" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        <li>App Bars: Bottom, App Bars: Top</li>
                        <li>Buttons, Dialogs, Tooltips</li>
                        <li>Tab, Lists, Menus</li>
                        <li>Text fields, Sliders, Radio Buttons</li>
                      </ul>
                    </div>
                  </div>
                </div>


              </div>
              <div class="col-md-4">
                <!-- collapse seven end -->
                <div class="card mb-3">
                  <a data-toggle="collapse" href="#collapse29" class="faq collapsed" aria-expanded="false"
                    aria-controls="collapse29">
                    <div class="card-header" id="heading29">
                      <h6 class="mb-0 faq-question">Navigation</h6>
                    </div>
                  </a>
                  <div id="collapse29" class="collapse" aria-labelledby="heading29" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        <li>Routes and Navigator in Flutter</li>
                        <li>Creating Routes</li>
                        <li>Navigator</li>
                        <li>Defining Home</li>
                        <li>Navigating to a Page</li>
                        <li>Navigating Back to Home</li>
                      </ul>
                    </div>
                  </div>
                </div>


              </div>
              <div class="col-md-4">
                <!-- collapse eight end -->
                <div class="card mb-3">
                  <a data-toggle="collapse" href="#collapse30" class="faq collapsed" aria-expanded="false"
                    aria-controls="collapse30">
                    <div class="card-header" id="heading30">
                      <h6 class="mb-0 faq-question">Routing</h6>
                    </div>
                  </a>
                  <div id="collapse30" class="collapse" aria-labelledby="heading30" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        <li>Creating a Route</li>
                        <li>Defining the Routes</li>
                        <li>Navigating to a Page</li>
                      </ul>
                    </div>
                  </div>
                </div>


              </div>



            </div>

            <!-- collapse ten end -->

          </div>
        </div>

      </div>
      <div class="col-md-12 mt-3 mb-3">
        <div class="faq-content mt-3">
          <h3 class="text-dark">Web Designing </h3>
          <div class="team-details-border mt-2 mb-5"></div>
          <div class="accordion mt-4" id="accordionExample">
            <div class="row">
              <div class="col-md-4">
                <div class="card mb-3">
                  <a data-toggle="collapse" href="#collapse31" class="faq" aria-expanded="true"
                    aria-controls="collapse31">
                    <div class="card-header" id="heading31">
                      <h6 class="mb-0 faq-question">HTML</h6>
                    </div>
                  </a>
                  <div id="collapse31" class="collapse" aria-labelledby="heading31" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        <li>Introduction, Editor, Basic Tags, Element, Body Attributes, Attribute Headings, Font,
                          Paragraph, Style</li>
                        <li>Marquee, Bookmark Ordered and Unordered Lists</li>
                        <li>Blockquote, HyperLinks, Sound Alignment of images & Mapping</li>
                        <li>Tables : Creating a Table, Combine cells in a Row or Column</li>
                        <li>iFrame- Its Attributes</li>
                        <li>Forms: Create Checkbox Box, Radio Buttons, Dropdowns, Input Elements, Submit buttons,
                          Actions, type</li>
                      </ul>
                    </div>
                  </div>
                </div>



              </div>
              <div class="col-md-4">

                <!-- collapse one end -->

                <div class="card mb-3">
                  <a data-toggle="collapse" href="#collapse32" class="faq collapsed" aria-expanded="false"
                    aria-controls="collapse32">
                    <div class="card-header" id="heading32">
                      <h6 class="mb-0 faq-question">CSS</h6>
                    </div>
                  </a>
                  <div id="collapse32" class="collapse" aria-labelledby="heading32" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        <li>Introduction, Declare CSS</li>
                        <li>Font , Icon, Links</li>
                        <li>Display, Positioning</li>
                        <li>Background, Border Property</li>
                        <li>Box Model, Text, Outline Margin, Padding, Height / Width</li>
                        <li>List, Table, Display</li>
                        <li>Using Library (Bootstrap)</li>
                      </ul>
                    </div>
                  </div>
                </div>


              </div>
              <div class="col-md-4">

                <!-- collapse two end -->

                <div class="card mb-3">
                  <a data-toggle="collapse" href="#collapse33" class="faq collapsed" aria-expanded="false"
                    aria-controls="collapse33">
                    <div class="card-header" id="heading33">
                      <h6 class="mb-0 faq-question">Basic JS</h6>
                    </div>
                  </a>
                  <div id="collapse33" class="collapse" aria-labelledby="heading33" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul>
                        <li>Getting / Setting value of elements</li>
                        <li>Adding, Using Library</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-12 mt-3 mb-3">
                <div class="faq-content mt-3">
                  <h3 class="text-dark">Digital Marketing </h3>
                  <div class="team-details-border mt-2 mb-5"></div>
                  <div class="accordion mt-4" id="accordionExample">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="card mb-3">
                          <a data-toggle="collapse" href="#collapse34" class="faq" aria-expanded="true"
                            aria-controls="collapse34">
                            <div class="card-header" id="heading34">
                              <h6 class="mb-0 faq-question">Introduction</h6>
                            </div>
                          </a>
                          <div id="collapse34" class="collapse show" aria-labelledby="heading34"
                            data-parent="#accordionExample">
                            <div class="card-body">
                              <ul>
                                <li>Introduction</li>
                                <li>Building Web Presence</li>
                                <li>Keys of Marketing</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card mb-3">
                          <a data-toggle="collapse" href="#collapse35" class="faq collapsed" aria-expanded="false"
                            aria-controls="collapse35">
                            <div class="card-header" id="heading35">
                              <h6 class="mb-0 faq-question">Getting Started</h6>
                            </div>
                          </a>
                          <div id="collapse35" class="collapse" aria-labelledby="heading35"
                            data-parent="#accordionExample">
                            <div class="card-body">
                              <ul>
                                <li>Social Media Marketing & Using Different Platforms</li>
                                <li>SEO</li>
                                <li>Search Engine Ad</li>
                                <li>Organic vs Paid Traffic</li>
                                <li>Paid Ads</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">


                        <!-- collapse one end -->


                        <!-- collapse two end -->

                        <div class="card mb-3">
                          <a data-toggle="collapse" href="#collapse36" class="faq collapsed" aria-expanded="false"
                            aria-controls="collapse36">
                            <div class="card-header" id="heading36">
                              <h6 class="mb-0 faq-question">Social Media Marketing</h6>
                            </div>
                          </a>
                          <div id="collapse36" class="collapse" aria-labelledby="heading36"
                            data-parent="#accordionExample">
                            <div class="card-body">
                              <ul>
                                <li>Facebook Ads & Content Posting</li>
                                <li>Google Ads</li>
                                <li>Instagram Ads & Content Posting</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <!-- collapse three end -->

                        <div class="card mb-3">
                          <a data-toggle="collapse" href="#collapse37" class="faq collapsed" aria-expanded="false"
                            aria-controls="collapse37">
                            <div class="card-header" id="heading37">
                              <h6 class="mb-0 faq-question">SEO</h6>
                            </div>
                          </a>
                          <div id="collapse37" class="collapse" aria-labelledby="heading37"
                            data-parent="#accordionExample">
                            <div class="card-body">
                              <ul>
                                <li>Kewords and its importance</li>
                                <li>Content & its importance</li>
                                <li>Keyword research</li>
                                <li>How to make SEO friendly page</li>
                                <li>Backlinks</li>
                                <li>SERP Checking</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <!-- collapse four end -->

                        <div class="card mb-3">
                          <a data-toggle="collapse" href="#collapse38" class="faq collapsed" aria-expanded="false"
                            aria-controls="collapse38">
                            <div class="card-header" id="heading38">
                              <h6 class="mb-0 faq-question">Analytics</h6>
                            </div>
                          </a>
                          <div id="collapse38" class="collapse" aria-labelledby="heading38"
                            data-parent="#accordionExample">
                            <div class="card-body">
                              <ul>
                                <li>Checking Analytics</li>
                                <li>Search Console</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12 mt-3 mb-3">
                        <div class="faq-content mt-3">
                          <h3 class="text-dark">Introduction to Databases using SQL Server</h3>
                          <div class="team-details-border mt-2 mb-5"></div>
                          <div class="accordion mt-4" id="accordionExample">
                            <div class="row">
                              <div class="col-md-4">
                                <div class="card mb-3">
                                  <a data-toggle="collapse" href="#collapse39" class="faq" aria-expanded="true"
                                    aria-controls="collapse39">
                                    <div class="card-header" id="heading39">
                                      <h6 class="mb-0 faq-question">Introduction</h6>
                                    </div>
                                  </a>
                                  <div id="collapse39" class="collapse" aria-labelledby="heading39"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                      <ul>
                                        <li>What is a Database?</li>
                                        <li>Relational and Other Databases</li>
                                        <li>Sample Database/Table Examples</li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>



                              </div>
                              <div class="col-md-4">

                                <!-- collapse one end -->

                                <div class="card mb-3">
                                  <a data-toggle="collapse" href="#collapse40" class="faq collapsed"
                                    aria-expanded="false" aria-controls="collapse40">
                                    <div class="card-header" id="heading40">
                                      <h6 class="mb-0 faq-question">Introduction To Database Design</h6>
                                    </div>
                                  </a>
                                  <div id="collapse40" class="collapse" aria-labelledby="heading40"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                      <ul>
                                        <li>Introduction To Database Designing</li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>


                              </div>
                              <div class="col-md-4">

                                <!-- collapse two end -->

                                <div class="card mb-3">
                                  <a data-toggle="collapse" href="#collapse41" class="faq collapsed"
                                    aria-expanded="false" aria-controls="collapse41">
                                    <div class="card-header" id="heading41">
                                      <h6 class="mb-0 faq-question">Normalization (Using a Case Study)</h6>
                                    </div>
                                  </a>
                                  <div id="collapse41" class="collapse" aria-labelledby="heading41"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                      <ul>
                                        <li>Introduction to Normalization</li>
                                        <li>1NF, Keys and 2NF</li>
                                        <li>3NF, BCNF</li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>


                              </div>
                              <div class="col-md-4">
                                <!-- collapse three end -->

                                <div class="card mb-3">
                                  <a data-toggle="collapse" href="#collapse42" class="faq collapsed"
                                    aria-expanded="false" aria-controls="collapse42">
                                    <div class="card-header" id="heading42">
                                      <h6 class="mb-0 faq-question">Learn ER Modeling with a Case Study</h6>
                                    </div>
                                  </a>
                                  <div id="collapse42" class="collapse" aria-labelledby="heading42"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                      <ul>
                                        <li>Introduction to ER Modelling</li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>


                              </div>
                              <div class="col-md-4">
                                <!-- collapse four end -->

                                <div class="card mb-3">
                                  <a data-toggle="collapse" href="#collapse43" class="faq collapsed"
                                    aria-expanded="false" aria-controls="collapse43">
                                    <div class="card-header" id="heading43">
                                      <h6 class="mb-0 faq-question">Diving into databases with SQL Server</h6>
                                    </div>
                                  </a>
                                  <div id="collapse43" class="collapse" aria-labelledby="heading43"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                      <ul>
                                        <li>SQL Server Database: Create, Alter, Drop, Restore</li>
                                        <li>SQL Server DataTypes: Varchar, Numeric, Date Time [T-SQL Examples]</li>
                                        <li>SQL Server Variable: Declare, Set, Select, Global,Local [TSQL Examples]</li>
                                        <li>SQL Server Table: CREATE, ALTER, DROP [T-SQL Examples]</li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>


                              </div>
                              <div class="col-md-4">
                                <!-- collapse five end -->

                                <div class="card mb-3">
                                  <a data-toggle="collapse" href="#collapse44" class="faq collapsed"
                                    aria-expanded="false" aria-controls="collapse44">
                                    <div class="card-header" id="heading44">
                                      <h6 class="mb-0 faq-question">Basic Statements</h6>
                                    </div>
                                  </a>
                                  <div id="collapse44" class="collapse" aria-labelledby="heading44"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                      <ul>
                                        <li>How to use SELECT</li>
                                        <li>How to query data using Where clause</li>
                                        <li>How to use Insert Into</li>
                                        <li>How to Delete & Update data</li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>


                              </div>
                              <div class="col-md-4">
                                <!-- collapse six end -->
                                <div class="card mb-3">
                                  <a data-toggle="collapse" href="#collapse45" class="faq collapsed"
                                    aria-expanded="false" aria-controls="collapse45">
                                    <div class="card-header" id="heading45">
                                      <h6 class="mb-0 faq-question">More on SELECT statement</h6>
                                    </div>
                                  </a>
                                  <div id="collapse45" class="collapse" aria-labelledby="headingSeven"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                      <ul>
                                        <li>How sorting is done using ORDER BY, DESC and ASC</li>
                                        <li>How to use Group By</li>
                                        <li>How to use Wildcards</li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>


                              </div>
                              <div class="col-md-4">
                                <!-- collapse seven end -->
                                <div class="card mb-3">
                                  <a data-toggle="collapse" href="#collapse46" class="faq collapsed"
                                    aria-expanded="false" aria-controls="collapse46">
                                    <div class="card-header" id="heading46">
                                      <h6 class="mb-0 faq-question">SELECT statement contd.</h6>
                                    </div>
                                  </a>
                                  <div id="collapse46" class="collapse" aria-labelledby="heading46"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                      <ul>
                                        <li>Order of execution</li>
                                        <li>More examples</li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>


                              </div>
                              <div class="col-md-4">
                                <!-- collapse eight end -->
                                <div class="card mb-3">
                                  <a data-toggle="collapse" href="#collapse47" class="faq collapsed"
                                    aria-expanded="false" aria-controls="collapse47">
                                    <div class="card-header" id="heading47">
                                      <h6 class="mb-0 faq-question">Some more Syntactic Nuances</h6>
                                    </div>
                                  </a>
                                  <div id="collapse47" class="collapse" aria-labelledby="heading47"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                      <ul>
                                        <li>SQL Server IF…ELSE Statement: T-SQL Example</li>
                                        <li>CASE statement in SQL Server: T-SQL Example</li>
                                        <li>SQL Server SUBSTRING() Function: T-SQL Example</li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>


                              </div>
                              <div class="col-md-4">
                                <!-- collapse nine end -->
                                <div class="card mb-3">
                                  <a data-toggle="collapse" href="#collapse48" class="faq collapsed"
                                    aria-expanded="false" aria-controls="collapse48">
                                    <div class="card-header" id="heading48">
                                      <h6 class="mb-0 faq-question">Joins</h6>
                                    </div>
                                  </a>
                                  <div id="collapse48" class="collapse" aria-labelledby="heading48"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                      <ul>
                                        <li>Why Joins?</li>
                                        <li>Types of joins: INNER, LEFT, RIGHT , OUTER</li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>


                              </div>
                              <div class="col-md-4">
                                <!-- collapse ten end -->
                                <div class="card mb-3">
                                  <a data-toggle="collapse" href="#collapse49" class="faq collapsed"
                                    aria-expanded="false" aria-controls="collapse49">
                                    <div class="card-header" id="heading49">
                                      <h6 class="mb-0 faq-question">Practical examples of Joins</h6>
                                    </div>
                                  </a>
                                  <div id="collapse49" class="collapse" aria-labelledby="heading49"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                      <ul>
                                        <li>Examples of Joins</li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="col-md-4">
                                <!-- collapse ten end -->
                                <div class="card mb-3">
                                  <a data-toggle="collapse" href="#collapse50" class="faq collapsed"
                                    aria-expanded="false" aria-controls="collapse50">
                                    <div class="card-header" id="heading50">
                                      <h6 class="mb-0 faq-question">Primary and Foreign Keys</h6>
                                    </div>
                                  </a>
                                  <div id="collapse50" class="collapse" aria-labelledby="heading50"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                      <ul>
                                        <li>SQL Server PRIMARY KEY: T-SQL Examples</li>
                                        <li>SQL Server FOREIGN KEY: T-SQL Examples</li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>


                            </div>

                            <!-- collapse ten end -->

                          </div>
                        </div>

                      </div>



                    </div>
                  </div>
</section>
<?php
  include './footer.php'
  ?>
</body>

</html>