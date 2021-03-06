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
    </head>
    <body>
        {% include "parts/prm-nav.php" %} 
        <div class="container">
        {% include 'parts/flash.php' %}
        {% block content %}{% endblock %}
        </div>
        {% include "parts/footer.php" %}
        {% include "parts/scripts.php" %}
    </body>
</html>
