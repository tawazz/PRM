{% extends 'templates/admin.php' %}
{% block heading %}<h1 class="page-header">Settings</h1>{% endblock %}
{% block content %}
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title text-center" style="font-size:24px;">Add New User</h3>
              </div>
              <div class="panel-body">
                    <form action="/reg/u/new" method="post">
                    <label>User Email</label>
                    <input type="email" class="form-control" name="email" required data-validation-required-message="Please enter your email address.">
                    <div class="form-group">
                        <div id="upload" class="upload col-sm-12">
                        </div>
                    </div>
                    <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
                    <br>
                    <button type="submit" class="btn btn-primary">Register</button>
                    <br/><br/>
                </form>
              </div>
            </div>
            
        </div>
        <div class="col-md-8">
             <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title text-center" style="font-size:24px;">Update Site Info</h3>
              </div>
              <div class="panel-body">
                    <form action="/reg/u/new" method="post">
                    <label>User Email</label>
                    <input type="email" class="form-control" name="email" required data-validation-required-message="Please enter your email address.">
                    <div class="form-group">
                        <label>User Email</label>
                        <input type="email" class="form-control" name="email" required data-validation-required-message="Please enter your email address.">
                        <label>User Email</label>
                        <input type="email" class="form-control" name="email" required data-validation-required-message="Please enter your email address.">
                        <label>User Email</label>
                        <input type="email" class="form-control" name="email" required data-validation-required-message="Please enter your email address.">
                    </div>
                    <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
                    <br>
                    <button type="submit" class="btn btn-primary">Register</button>
                    <br/><br/>
                </form>
              </div>
            </div>
        </div>
    </div>
{% endblock %}