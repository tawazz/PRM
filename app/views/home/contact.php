{% extends 'templates/prm.php' %}
{% block content %}
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
<script>
    function initialize() {
    var myLatlng = new google.maps.LatLng(-32.113834, 115.815296);
    var mapOptions = {
    zoom: 15,
    zoomControl: false,
    center: myLatlng
    }
    var map = new google.maps.Map(document.getElementById('map'), mapOptions);

    var marker = new google.maps.Marker({
    position: myLatlng,
    map: map,
    title: 'church'
    });
    }

    google.maps.event.addDomListener(window, 'load', initialize);

</script>
<!-- Content Row -->
<div class="row">
    <div class="col-lg-12" style="margin-top: 100px;">
        <h2 class="page-header">Contact Us</h2>
    </div>
</div>
<div class="row">
    <!-- Map Column -->
    <div class="col-md-8">
        <!-- Embedded Google Map -->
        <div id="map" style="width: 100%;height: 400px;"></div>
    </div>
    <!-- Contact Details Column -->
    <div class="col-md-4">
        <h3>Contact Details</h3>
        <p>{{address|raw}}</p>
        <p><i class="fa fa-phone"></i> 
            <abbr title="Phone">P</abbr>:{{phone|raw}}</p>
        <p><i class="fa fa-envelope-o"></i> 
            <abbr title="Email">E</abbr>: <a href="mailto:{{ email }}">{{email}}</a>
        </p>
        <p><i class="fa fa-clock-o"></i> 
            <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>
        <ul class="list-unstyled list-inline list-social-icons">
            <li>
                <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-whatsapp fa-2x"></i></a>
            </li>
        </ul>
    </div>
</div>
<!-- /.row -->

<!-- Contact Form -->
<!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
<div class="row">
    <div class="col-sm-12 col-md-8">
        <h3>Send us a Message</h3>
        <form name="sentMessage" id="contactForm" method="post" action="/send">
            <div class="control-group form-group">
                <div class="controls">
                    <label>Full Name:</label>
                    <input type="text" class="form-control" name="name" required data-validation-required-message="Please enter your name.">
                    <p class="help-block"></p>
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Phone Number:</label>
                    <input type="tel" class="form-control"name="phone" required data-validation-required-message="Please enter your phone number.">
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Email Address:</label>
                    <input type="email" class="form-control" name="email" required data-validation-required-message="Please enter your email address.">
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Message:</label>
                    <textarea rows="10" cols="100" class="form-control" name="message" maxlength="999" style="resize:none"></textarea>
                </div>
            </div>
            <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>

</div>
{% endblock %}