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
        
        <!-- Bootstrap Core CSS -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/animate.min.css" rel="stylesheet">
        <link href="/css/sb-admin-2.css" rel="stylesheet">

        <!-- Custom CSS -->
        <!--Slick slides -->
        <link href="/css/slick/slick.css" rel="stylesheet">
        <link href="/css/slick/slick-theme.css" rel="stylesheet">
        <!-- Fonts -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
        <link href="/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" />

        <script type="text/javascript" src="/js/tinymce/tinymce.min.js"></script>
        <script type="text/javascript">
            tinymce.init({
                    selector: ".tinymce"
                });
        </script>

    </head>
    <body>
        <div id="wrapper">
           <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/admin">PRM</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li><a href="/">Home</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        My Account</i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="{{ urlFor('profile') }}"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="/admin/settings"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{urlFor('logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="/admin"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="/admin/messages"><i class="fa fa-envelope fa-fw"></i> Messages</a>
                        </li>
                        <li>
                            <a href="/admin/settings"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li>
                            <a href="/admin/users"><i class="fa fa-users fa-fw"></i> Users</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
             <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        {% include 'parts/flash.php' %}
                        {% block heading %}{%endblock%}
                    </div>
                </div>          
                 {% block content %}{% endblock %}
            </div>
            {% include "parts/footer.php" %}
            {% include "parts/scripts.php" %}
        </div>
    </body>
</html>
