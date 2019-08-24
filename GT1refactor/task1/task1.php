<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Последняя компиляция и сжатый CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Дополнение к теме -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
<!-- Последняя компиляция и сжатый JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

<?php ?>
<?php
/*$link = mysqli_connect("localhost", "my_user", "my_password", "my_db");
$result = mysqli_query($link,'SELECT * FROM example');//дописать запросы

//тут прописать логику обработки данных

mysqli_close($link);*/

include ('../config/config.php');
$query1 = 'SELECT * FROM `gt1_users`';
$query12 = '';
$stmt = $pdo->query($query1);
//сюда необходимо вывести данные в таблицу
echo '<table class="table table-dark">';
echo '<thead>
    <tr>
        <th scope="col">user_id</th>
        <th scope="col">Имя</th>
        <th scope="col">Комментарий</th>
        <th scope="col">дата</th>       
    </tr>
    </thead>
    <tbody>';
while ($row = $stmt->fetch(PDO::FETCH_LAZY)) {
	$query12 = 'SELECT * FROM `gt1_comments` WHERE `user_id`='.intval($row['user_id'])." ORDER BY `date` DESC LIMIT 1";
	$stmt2 = $pdo->query($query12);
	$row2 = $stmt2->fetch(PDO::FETCH_LAZY);
    echo '<tr><td>' . $row['user_id'] . '</td><td>' . $row['fio'] . '</td><td>' . $row2['comments'] . '</td><td>' . $row2['date'] . '</td></tr>';
}
echo '</tbody>
</table>';
?>
</body>
</html>