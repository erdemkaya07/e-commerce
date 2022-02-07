/**
 * Created by studyo on 4.10.2018.
 */

function GlobalMessage(message)
{
    $('.global-message').html(message).fadeIn('show').delay('3000').fadeOut('slow');
}

function ajaxPost(url, data, div) {
    $.ajax({
        type: "POST",
        url: url,
        data: data,
        success: function (result) {
            $('#'+div).html(result);
        }
    });
}
