{% set brand="Pentecostal Revival Ministries" %}
{% set address = "<p>16 Kalmia Rd <br>Bibra Lake WA 6163 <br>Australia</p>" %} 
{% set phone = "+61 401 234 567" %}
{% set email = "admin@example.com" %}

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title></title>
        {% include "parts/css.php" %}
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
     <script type="text/javascript" src="/js/tinymce/tinymce.min.js"></script>
        <script type="text/javascript">
            tinymce.init({
                    selector: "textarea"
                });
        </script>
    </head>
    <body>
        {% include "parts/landing-nav.php" %} 
        {% block content %}{% endblock %}
        {% include "parts/footer.php" %}
        {% include "parts/scripts.php" %}
    </body>
</html>
