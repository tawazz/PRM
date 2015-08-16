{% extends 'templates/prm.php'%}
{% block title %}
register
{% endblock%}
{% block content %}
<div class="row">
    <div class="col-lg-12" style="margin-top: 50px;">
        <h2 class="page-header">Register</h2>
    </div>
</div>
<div class="row" style="margin-top: 50px;">
    <div class="col-sm-12 col-md-6 col-md-offset-3">
        <form action="/register" method="post">
          <div class="form-group">
            <label for="username">UserName</label>
             <input type="text" name="username" class="form-control"  {% if errors.post.username  %} value="{{errors.post.username }}" {% endif %}>{% if errors.username %}{{errors.username }}{% endif %}
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control"  > {% if errors.password %}{{errors.password }}{% endif %}
          </div>
          <div class="form-group">
            <label for="password again">Password Again</label>
            <input type="password" name="password_again" class="form-control"  > {% if errors.password_again %}{{errors.password_again }}{% endif %}
          </div>
          <input type="hidden" name="active_hash" value="{{ hash }}"/>
          <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}"/>
          <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</div>

{% endblock%}
