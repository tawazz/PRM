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
        <script type="text/javascript" src="/js/tinymce/tinymce.min.js"></script>
        <script type="text/javascript">
            tinymce.init({
                    selector: "textarea"
                });
        </script>
    </head>
    <body>
        <div class="brand">{{ brand }}</div>
        <div class="address-bar">bringing divine empowerment to Nations</div> 
        {% include "parts/landing-nav.php" %} 
        <div class="container">
            {% block content %}{% endblock %}
        </div>
        {% include "parts/footer.php" %}
        {% include "parts/scripts.php" %}
    </body>
</html>
