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
/*$link = mysqli_connect("localhost", "my_user", "my_password", "my_db");
$result = mysqli_query($link,'SELECT * FROM example');//дописать запросы

//тут прописать логику обработки данных

mysqli_close($link);*/
<?php
$host = '127.0.0.1';
$db = 'regandauto';
$user = 'root';
$pass = '';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,];
$pdo = new PDO($dsn, $user, $pass, $opt);
$query1 = '';
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
    echo '<tr><td>' . $row['user_id'] . '</td><td>' . $row['fio'] . '</td><td>' . $row['comments'] . '</td><td>' . $row['date'] . '</td></tr>';
}
echo '</tbody>
</table>';
?>
</body>
</html>
