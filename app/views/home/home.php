{% extends 'templates/landing-page.php' %}

{% block content %}
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <div class="svg-container">
                <object type="image/svg+xml" data="/img/worshipw.svg" width="100%" height="100%" class="svg-content">
                </object>
                </div>
                <hr>
                <p>Join us Sunday mornings at 10:00am to 12:20pm</p>
                <br><br><br><br>
                <a href="#about" class="btn btn-circle page-scroll">
                    <i class="fa fa-angle-double-down animated"></i>
                </a>
            </div>
        </div>
    </header>
    <section class="bg-primary" id="about">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 text-center">
                  <h2 class="section-heading">Engage. Equip. Empower.</h2>
                  <hr class="light">
              </div>
          </div>
      </div>
      <div class="container">
          <div class="row">
              <div class="col-sm-4 text-center">
                  <div class="well">
                      <h3 class="text-primary">Welcome</h3>
                      <p class="text-primary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
              </div>
              <div class="col-sm-4 text-center">
                  <div class="well">
                      <h3 class="text-primary">2015 Theme</h3>
                      <p class="text-primary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
              </div>
              <div class="col-sm-4 text-center">
                  <div class="well">
                      <h3 class="text-primary">Upcoming Events</h3>
                      <div class="list-group">
                        <a href="#" class="list-group-item">
                          <h4 class="text-primary text-capitalize">youth meeting</h4>
                          <p class="list-group-item-text">Saturday, 18 July 2015 2pm-6pm Centenary Park, Corner Barker St/Daly St, Belmont, WA 6104.</p>
                        </a>
                        <a href="#" class="list-group-item">
                          <h4 class="text-primary text-capitalize">youth meeting</h4>
                          <p class="list-group-item-tex">Saturday, 18 July 2015 2pm-6pm Centenary Park, Corner Barker St/Daly St, Belmont, WA 6104.</p>
                        </a>
                      </div>
                      <p class="text-primary"></p>
                  </div>
              </div>
          </div>
      </div>
    </section>
    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Church Services</h2>
            </div>
        </div>
    </aside>
    <aside class="bg-grey">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-4 aside-item border-right">
                  <h3>Sunday</h3>
                  <p>
                         Main service 10:00AM - 12pm
                  </p>
                </div>
                <div class="col-sm-4 aside-item border-right">
                  <h3>Midweek</h3>
                  <p>
                      Thursday 7:00pm -8:00pm
                  </p>
                </div>
                <div class="col-sm-4 aside-item">
                  <h3>Intercession</h3>
                  <p>
                      Friday 6pm-7pm
                  </p>
                </div>
            </div>
        </div>
    </aside>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-phone wow bounceIn text-primary"></i>
                        <h3>Call</h3>
                        <p class="text-muted">{{ phone|raw }}</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-map-marker wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>Location</h3>
                        <a href="https://goo.gl/maps/xAOXk" target="_blank">{{ address|raw }}</a>
                    </div>
                </div>
                <div class="col-sm-4 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-envelope wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>Email</h3>
                        <p class="text-muted">{{ email|raw }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <aside class="">
      <div class="overlay">
        <div id="map"></div>
      </div>
    </aside>
    
{% endblock %}