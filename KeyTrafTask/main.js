$('.click').on("click", function () {
    let num_el = 1;
    if ($(this).attr('id') == 'id2')
        num_el = 2;
    $.ajax({
        url: "DatabaseTovar.php",
        type: "POST",
        async: false,
        data: {"num_el": num_el},
        cache: false,
        success: function (resp) {
            $('.to_show').html(resp);
        }
    });
})
