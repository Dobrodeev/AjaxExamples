$(document).ready(function () {
    $('.show-more').on("click", function () {
        let rel = +$(this).attr('data-rel');
        $.ajax({
            url: "/ajax.php",
            type: "POST",
            dataType: 'json',
            cache: false,
            data: {"rel": rel},
            success: function (data) {
                if (+data.cmt < 4) $('.show-more').css('display', 'none');
                $('.probability').append(data.dt);
                rel += 3;
                $('.show-more').attr('data-rel', rel);
            }
        });
    });
});