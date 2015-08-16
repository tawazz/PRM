{% extends 'templates/email.php'%}
{% block content %}
<h1>Hie There</h1>
    <pre>You have been asked to register for a PRM Account. Click the link below to register your account</pre>
<a href='{{baseUrl}}/activate/{{ hash }}'>Register</a>
{% endblock%}
