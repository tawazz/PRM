
$(function () {
    $('.datepicker').datetimepicker({ //date picker
    pickTime: false,
    format: 'YYYY/MM/DD'
    });
});

$(function () {
    $('.time').datetimepicker( //time picker
        {
        pickDate: false,
        format: 'HH:mm'
    });});
$(function ()
{
    $("#calendar").fullCalendar({
        events:
                  {
                      url: '/prm-events',
                      error: function ()
                      {
                          alert('error fetching events');
                      }
                  },
        timezone: 'local',
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,basicDay',
            ignoreTimezone: false
        },
        allDayDefault: false,
        defaultView: 'month',
        columnFormat: {
            week: 'ddd D/M'
        },
        titleFormat: {
            week: 'D MMM YYYY',
            day: 'D MMMM YYYY'
        },
        eventRender: function (event, element)
        {
            element.attr("data-toggle", "popover");
            element.attr("data-content", "<div>" + moment(event.start.toDate()).format("DD/MM/YYYY HH:mm") + "<br>" + event.details + "</div>");
            element.css("cursor", "pointer");
        },
        eventMouseover: function (event, jsEvent, view)
        {
            $this = $(this);
            $this.popover({ html: true, title: event.title, placement: 'right', container: 'body' }).popover('show');
            return false;
        },
        eventMouseout: function (event, jsEvent, view)
        {
            $this = $(this);
            $this.popover().popover('hide');
            return false;
        }

    });

});
var slide = 0;
function readURL(input) {
    if (input.files && input.files[0]) {
        for (var i = slide; i > 0 ;i-- ){
            $('.upload').slick('slickRemove', i);
        }
        for (var i = 0; i < input.files.length; i++) {
            var reader = new FileReader();
            reader.onload = function (e)
            {
                slide++
                //$('#upload').append( "<div><img src='" + e.target.result + "' class=\"img-responsive img-thumbnail\" alt=\"Responsive image\"></div>");
                $('.upload').slick('slickAdd', "<div><img src='" + e.target.result + "' class=\"img-responsive img-thumbnail\" alt=\"Responsive image\"></div>");
            };
            reader.readAsDataURL(input.files[i]);
        }
    }
    
}
$(function()
{
  slick_init();  
});
function slick_init()
{
    $('.upload').slick({
        dots: true,
        infinite:false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
    {
        breakpoint: 1024,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: false,
            dots: true
        }
    },
    {
        breakpoint: 600,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 2
        }
    },
    {
        breakpoint: 480,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1
        }
    }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
  ]
    });
}
/**
<div class="col-sm-6">
    <span  class="btn btn-default btn-file" style="width:96px;height:96px;font-size: 45px;">
        <i class="fa fa-f4 fa-plus img-upload"></i><input name='uploads[]' type="file" multiple>
    </span>
</div>
**/