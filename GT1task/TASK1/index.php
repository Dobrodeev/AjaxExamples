<?php
$link = mysqli_connect("localhost", "my_user", "my_password", "my_db");
$result = mysqli_query($link,'SELECT * FROM example');//дописать запросы

//тут прописать логику обработки данных

mysqli_close($link);
?>

<!DOCTYPE html>
<html>
<head>
    <title>TASK1</title>
</head>
<body>
<!--сюда необходимо вывести данные в таблицу-->
</body>
</html>
