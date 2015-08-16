{% extends 'templates/admin.php' %}
{%block heading %} <h2><span class="label label-primary text-capitalize">Messages</span></h2>{% endblock %}
{% block content %}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="chat-panel panel panel-success">
                        <div class="panel-heading">
                            <i class="fa fa-comments fa-fw"></i>
                            Messages
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul class="chat">
                                {% for msg in messages %}
                                <li class="left clearfix">
                                    <span class="pull-left">
                                        <i style="color: #5cb85c" class="fa fa-comments fa-4x"></i>
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">{{ msg.from }}</strong>:<a style="color: #5cb85c" href="tel:{{ msg.phone }}"> <i class="fa fa-phone"></i>  : {{  msg.phone }}</a>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> {{  msg.created }}
                                            </small>
                                        </div>
                                        <p>
                                            {{  msg.message|raw }}
                                        </p>
                                        <p>
                                            <br>
                                            Send me an email:
                                        <a class="text-primary" href="mailto:{{  msg.email }}" target="_blank">Send Mail</a>
                                        </p>
                                    </div>
                                </li>
                                {% endfor %}
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                        <div class="panel-footer">
                            <p class="text-center"><strong>Check your emails to reply to messages</strong> </p>
                        </div>
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->
                    </div>
                </div>
            </div>
{% endblock %}