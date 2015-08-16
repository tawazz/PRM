{% if flash.global %}
<div class="row">
    <div class="col-lg-12" style="margin-top: 50px;">
        <div class="alert alert-info alert-dismissible text-center" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <p> {{ flash.global }}</p>
        </div>
    </div>
</div>
{% endif %}
