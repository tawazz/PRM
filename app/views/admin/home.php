{% extends 'templates/admin.php' %}
{% block heading %}<h1 class="page-header">Dashboard</h1>{% endblock %}
{% block content %}

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Post To Website
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <div class="well">
                                    <h3>Post to Website</h3>
                                        <form action="/posts/add" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" name="title" placeholder="title">
                                            </div>
                                            <div class="form-group">
                                            <label for="body">body</label>
                                            <textarea class="form-control" name="body"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <div id="upload" class="upload col-sm-12">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            <span class="btn btn-default btn-file">
                                                <i class="fa fa-fw fa-camera"></i><input type="file" name='img[]'  multiple onchange="readURL(this);" />
                                            </span>
                                            <div id="img_prop"></div>
                                                 <p class="help-block">you can select more than one picture using the <kbd>ctrl</kbd> key</p>
                                            </div>
                                             <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
                                            <button type="submit" class="btn btn-primary">Post</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <div class="panel panel-primary">
                                      <div class="panel-heading">
                                        <h3 class="panel-title">Add Event</h3>
                                      </div>
                                      <div class="panel-body">
                                        <form class="form-horizontal" method="post" action="/posts/event">
                                          <div class="form-group">
                                            <label class="col-sm-2 control-label">Event Name</label>
                                            <div class="col-sm-10">
                                              <input type="text" name="name" class="form-control">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-sm-2 control-label">Details</label>
                                            <div class="col-sm-10">
                                              <textarea class="form-control" name="details" style="min-height: 100px;"></textarea>
                                            </div>
                                          </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Where</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="location" placeholder="Location" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Date</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control datepicker" name="date" placeholder="Date" data-provide="datepicker">
                                            </div>
                                             <label class="col-sm-2 control-label">Time</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="time" placeholder="time" class="form-control time">
                                            </div>
                                        </div>
                                            <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
                                          <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                              <button type="submit" class="btn btn-primary">Create</button>
                                            </div>
                                          </div>
                                        </form>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
                </div>
{% endblock %}