{% extends 'templates/admin.php' %}
{%block heading %} <h2><span class="label label-primary text-capitalize">{{ auth.username }} Profile</span></h2>{% endblock %}
{% block content %}
    <section style="padding-bottom: 50px; padding-top: 50px;">
<div class="row">
    <div class="col-md-4">
        <img src="{{auth.pic}}" class="img-rounded img-responsive" />
        <br/>
        <br/>
        <form action="/update/u" method="post" enctype="multipart/form-data">
            <label>Registered Username</label>
            <input type="text" class="form-control" value="{{ auth.username }}" disabled>
            <label>Registered Email</label>
            <input type="email" class="form-control" placeholder="{{ auth.email }}" name="email">
            <div class="form-group">
                <div id="upload" class="upload col-sm-12">
                </div>
            </div>
            <div class="form-group">
            <span class="btn btn-default btn-file">
                <i class="fa fa-fw fa-camera"></i><input type="file" name='img' onchange="readURL(this);" />
            </span>
            </div>
            <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
            <br>
            <button type="submit" class="btn btn-primary">Update Details</button>
            <br/><br/>
        </form>
    </div>
    <div class="col-md-8">
        <div class="form-group col-md-8">
            <form action="/update/u/password" method="post" >
                <h3>Change Your Password</h3>
                <br />
                <label>Enter Old Password</label>
                <input type="password" class="form-control" name="old_password">
                <label>Enter New Password</label>
                <input type="password" class="form-control"  name="new_password">
                <label>Confirm New Password</label>
                <input type="password" class="form-control"  name="repeat_password" />
                <br>
                <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
                <button type="submit" class="btn btn-primary">Change Password</button>
            </form>
        </div>
    </div>
</div>
<!-- ROW END -->


        </section>
{% endblock %}