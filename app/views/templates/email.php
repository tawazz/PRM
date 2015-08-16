<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    {% if auth %}
      <p>
        Hello {{ auth.username }}
      </p>
    {% else %}
      <p>
        hello There
      </p>
    {% endif %}
    {% block content %}{% endblock %}
  </body>
</html>
