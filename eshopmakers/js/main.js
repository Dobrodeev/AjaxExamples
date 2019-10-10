$(document).ready(function () {
    var slider = multiItemSlider('.slider', {
        isCycling: true
    });
    $(document).on('click', '.not_phone a', function (e) {
        e.preventDefault();
        $('.fancy_block').show();
        $('.overlay').show();
        $('.success_text').css('display', 'none');
        $('.error_text').css('display', 'none');
        $('#phone').css('border-color', '#ced4da');
        $('#name').css('border-color', '#ced4da');
    });
    $(document).on('click', '.close_fancy, .overlay', function (e) {
        e.preventDefault();
        $('.fancy_block').hide();
        $('.overlay').hide();
        $('.success_text').css('display', 'none');
        $('.error_text').css('display', 'none');
        $('#phone').css('border-color', '#ced4da');
        $('#name').css('border-color', '#ced4da');
    });
    $(document).on('click', '#recall', function (e) {
        e.preventDefault();
        var er = false;
        if ($('#name').val() == '') {
            $('#name').css('border-color', 'red');
            er = true;
        } else {
            $('#name').css('border-color', '#ced4da');
        }
        if ($('#phone').val() == '') {
            $('#phone').css('border-color', 'red');
            er = true;
        } else {
            $('#phone').css('border-color', '#ced4da');
        }
        if (!er) {
            $.ajax({
                url: "/php/sendMes.php",
                type: "GET",
                data: {"name": $('#name').val(), "phone": $('#phone').val()},
                cache: false,
                success: function (response) {
                    $('.success_text').css('display', 'inline-block');
                    $('.error_text').css('display', 'none');
                    $('#name').val('');
                    $('#phone').val('');
                }
            });
        } else {
            $('.success_text').css('display', 'none');
            $('.error_text').css('display', 'inline-block');
        }
    });
});