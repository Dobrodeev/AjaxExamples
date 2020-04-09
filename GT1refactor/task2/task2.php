<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TASK2</title>
    <!--ваш код тут-->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<script src="../assets/js/bootstrap.js"></script>
<script src="../assets/jquery%20v3.4.1.js"></script>
<!--<form class="form-send">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
    </div>
    <div class="form-group">
        <label for="exampleInputFile">File input</label>
        <input type="file" id="exampleInputFile">
        <p class="help-block">Example block-level help text here.</p>
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox"> Check me out
        </label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>-->
<div id="results"></div>
<script>
    var form = $('<form class="form-send"></form>');

    var content_form = '<label for="exampleInputEmail1">Email address</label><br>' +
        '<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">' +
        '<label for="exampleInputPassword1">Password</label><br>' +
        '<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">' +
        '<button type="submit" class="btn btn-default">Submit</button>';
    $(form).append(content_form);
    $('body').prepend(form);
    /*var parent = $('.form-send');
    parent.append(label1);
    var input1 = $('<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">');
    parent.append(input1);
    var label2 = '<label for="exampleInputPassword1">Password</label><br>';
    parent.append(label2);
    var input2 = $('<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">');
    parent.append(input2);
    var button = $('<button type="submit" class="btn btn-default">Submit</button>');
    parent.append(button);*/

    $(document).ready(function () {
        $('.form-send').submit(function (event) {
            event.preventDefault();
            var msg = $('.form-send').serialize();
            $.ajax({
                type: 'POST',
                url: 'script.php',
                data: msg,
                success: function (data) {
                    // $('.form-send').reset();
                    $("input").each(function () {
                        $(this).val('');
                    });
                    $('#results').html(data);
                },
                error: function (xhr, str) {
                    alert('Возникла ошибка: ' + xhr.responseCode);
                }
            });
        });
    });

</script>
</body>
</html>