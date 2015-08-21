{% extends 'templates/admin.php' %}
{%block heading %} <h2>Users</h2>{% endblock %}
{% block content %}
    <div class="table-responsive">
      <table class="table table-striped">
          <thead>
            <tr>
                <td>#</td>
                <td>User Name</td>
                <td>Email</td>
                <td>Edit</td>
                <td>Deactivate</td>
                <td>Delete</td>
            </tr>
          </thead>
          <tbody>
              {% for user in users %}
                <tr>
                    <td>{{ user.user_id}}</td>
                    <td>{{user.username}}</td>
                    <td>{{user.email}}</td>
                    <td><a href="#" class="btn btn-info">Edit</a></td>
                    <td><a href="#" class="btn btn-warning">Deactivate</a></td>
                    <td><a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
              {% endfor %}
          </tbody>
      </table>
    </div>

{%endblock%}