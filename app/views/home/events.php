{% extends 'templates/prm.php' %}

{% block content %}
    <div class="row">
    <div class="col-lg-12" style="margin-top: 50px;">
        <h2 class="page-header">Upcoming Events</h2>
    </div>
</div>
<div class="row" style="margin-top: 50px;">
    <div class="col-md-8 col-md-offset-2">
        <div id="calendar"></div>
    </div>
</div>

{% endblock %}