{% extends 'templates/prm.php'%}
{% block title %}
login
{% endblock%}
{% block content %}
<div class="row">
    <div class="col-lg-12" style="margin-top: 50px;">
        <h2 class="page-header">Sign in to continue to Admin</h2>
    </div>
</div>
<div class="row" style="margin-top: 50px;">
    <div class="col-sm-12 col-md-6 col-md-offset-3">
        <form class="form-horizontal" action="/login" method="post">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="username" {% if errors.post.username  %} value="{{errors.post.username }}" {% endif %}>{% if errors.username %}{{errors.username }}{% endif %}
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="password" > {% if errors.password %}{{errors.password }}{% endif %}
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="remember"> Remember me
                </label>
              </div>
            </div>
          </div>
          <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
          </div>
        </form>
    </div>
</div>
{%endblock%}