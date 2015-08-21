{% extends 'templates/prm.php' %}

{% block content %}
   <div class="row">
    <div class="col-lg-12" style="margin-top: 50px;">
        <h2 class="page-header">Resources</h2>
    </div>
    <div class="row" style="margin-top:50px">
    <!-- Blog Entries Column -->
        <div class="col-md-6 col-md-offset-3">
     {% for post in posts %}
        
        <div class="panel panel-default">
          <div class="panel-body">
            <h4 class="text-primary">{{ post.users.username }}-<small>{{ post.created|date("M/d/Y") }}</small></h4>
                {{  post.body|raw }}
                <div class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            {% if post.images|length > 1 %}
            <ol class="carousel-indicators">
                 {% set i = 0 %}
                 {% for img in post.images %}
                    {% if i < 1 %}
                    <li data-target="#carousel-example-generic" data-slide-to="{{ i }}" class="active"></li>
                    {% endif %}
                    {%  if i >= 1 %}
                    <li data-target="#carousel-example-generic" data-slide-to="{{ i }}"></li>
                    {% endif %}
                    {% set i = i+1 %}
                {% endfor%}
            </ol>
            {% endif %}
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                {% set i = 0 %}
                {%  for img in post.images %}
                
                {%  if i < 1 %}
                <div class="item active">
                    <div style="background:url({{img.path }}) center center; background-size:cover;" class="slider-size"></div>
                    <!--img class="img-responsive" style="height: 420px; width 750px" src="{{ '/'~ img.path }} " alt="slide image" /-->
                </div>
                {% endif %}
                {%  if i >= 1 %}
                <div class="item">
                    <div style="background:url({{img.path }}) center center; background-size:cover;" class="slider-size"></div>
                    <!--img class="img-responsive" style="height: 420px; width 750px" src="{{ '/'~ img.path }} " alt="slide image" /-->
                </div>
                 {% endif %}
                {% set i =i+1 %}
               {% endfor %}
            </div>

            <!-- Controls -->
            {%  if post.images|length > 1 %}
            <a class="left carousel-control" href="javascript:void(0)" 
                    data-slide="prev" data-target="#carousel-example-generic">
            <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="javascript:void(0)" 
                    data-slide="next" data-target="#carousel-example-generic">
            <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
            {% endif %}
        </div>
             
             </div>
          </div>
        
   {% endfor %}
    </div>
</div>
{% endblock %}