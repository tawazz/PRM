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
                <p>Join us Sunday mornings at 10:00am to 12:30pm</p>
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
                  <h2 class="section-heading">Bringing Divine Empowerment To The Nation</h2>
                  <hr class="light">
              </div>
          </div>
      </div>
      <div class="container">
          <div class="row">
              <div class="col-sm-4 text-center">
                  <div class="well">
                      <h3 class="text-primary">Welcome</h3>
                      <p>
                          Our church is called the "Pentecostal Revival Ministries". We see ourselves as a family of God's people and we relate with each other
                          in a way that reflect God's idea of the community of His people. <i>Eph 3:15</i>
                      </p>
                      <p>
                        The Lord and foundation of our church is the <b><u>Lord Jesus Christ </u></b>.<i>Matt 16:18; 1 Cor 3:10-11; 1 Peter 2:25; 1 Peter 5:4</i>
                      </p>
                      <p>
                          Our teaching , preaching, worship and way of life is based only on the Bible, the word of God and not on tradition or religious practices. 
                          <i> Gal 1:8; 2 Tim 3:15-17; Matt 15:9; James 1:22;</i>
                      </p>
                  </div>
              </div>
              <div class="col-sm-4 text-center">
                  <div class="well">
                      <h3 class="text-primary">Our Mission</h3>
                      <p>We were called by God to <b>Bring The Sword And Set For War</b> to set the captives free by getting them young, healing the land and restoring life</p>
                  </div>
              </div>
              <div class="col-sm-4 text-center">
                  <div class="well">
                      <h3 class="text-primary">Upcoming Events</h3>
                      <div class="list-group">
                          {% for event in events %}
                            <a href="#" class="list-group-item">
                              <h4 class="text-primary text-capitalize">{{event.name}}</h4>
                              <div class="truncate">{{event.details|raw }}</div>
                            </a>
                          {% endfor %}
                      </div>
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