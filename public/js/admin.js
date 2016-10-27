/**
 * Created by shashi on 4/19/15.
 */

$(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-Token': $('meta[name="_token"]').attr('content')
        }
    });


    $('#side-menu').metisMenu();

    $('.date-picker').datepicker();
    $('.thumbnail > a').colorbox({rel:'gal'});
    $('#tag_id').select2({
        placeholder:'choose a tag',
        tags:true
    });

    $(".delete-button").on("click", function () {

        var url = $(this).data('url');
        var msg = "Are you sure you want to delete " + $(this).data('name') + "?";

        var result = confirm(msg);
        if (result) {
            $.ajax({
                type: 'DELETE',
                url: url,
                success: function (response) {
                    message = "<div class=\"alert alert-success fade in\">" +
                        "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>" +
                        " <strong>" + response + "</strong></div>";

                    $(".page-container").prepend(message);

                    location.reload();

                }
            });
        }
    });

    // Change this to the location of your server-side upload handler:
    var url ='http://localhost:8080/nic-website/image/upload';
    $('#fileupload').fileupload({
        url: url,
        method: 'POST',
        dataType: 'json',
        done: function (e, data) {

            $.each(data.files, function (index, file) {
                var i = 0;
                $('<p id="image' + i + '"/>').text(file.name).appendTo('#files');
                $('<img/>').src(file.name).appendTo('#image' + i);
            });
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#progress .progress-bar').css(
                'width',
                progress + '%'
            );
        }
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');

});

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function () {
    $(window).bind("load resize", function () {
        topOffset = 50;
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse');
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse');
        }

        height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    });

    var url = window.location;
    var element = $('ul.nav a').filter(function () {
        return this.href == url || url.href.indexOf(this.href) == 0;
    }).addClass('active').parent().parent().addClass('in').parent();
    if (element.is('li')) {
        element.addClass('active');
    }
});


