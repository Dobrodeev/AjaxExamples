<?php
$num_el = addslashes($_REQUEST['num_el']);

$host = '127.0.0.1';
$db = 'testworktrafgid';
$user = 'root';
$pass = '';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,];
$pdo = new PDO($dsn, $user, $pass, $opt);

if ($num_el == 1) {
    $query = 'SELECT rq.id, off.name, rq.price, rq.count, op.fio FROM operators op
  JOIN requests rq ON op.id=rq.operator_id
  JOIN offers off ON rq.offer_id=off.id WHERE rq.count>2 AND rq.operator_id IN (10,12)';
} elseif ($num_el == 2) {
    $query = 'SELECT off.name, rq.count, rq.price FROM offers off
   JOIN requests rq ON off.id=rq.offer_id GROUP BY rq.offer_id';
}
$stmt = $pdo->query($query);

if ($num_el == 1) {
    echo '<h5>Номер заказа, имя товара, цена, количество, имя оператора за которым числится заказ </h5>';
    echo '<table class="table table-dark">';
    echo '<thead>
		<tr>
		  <th scope="col">#</th>
		  <th scope="col">Имя</th>
		  <th scope="col">Цена</th>
		  <th scope="col">Количество товара</th>
		  <th scope="col">ФИО оператора</th>
		</tr>
	  </thead>
	  <tbody>';
    while ($row = $stmt->fetch(PDO::FETCH_LAZY)) {
        echo '<tr><td>' . $row['id'] . '</td><td>' . $row['name'] . '</td><td>' . $row['price'] . '</td><td>' . $row['count'] . '</td><td>' . $row['fio'] . '</td></tr>';
    }
    echo '</tbody>
	</table>';
}

if ($num_el == 2) {
    echo '<h5>Имя товара, количество товара, и сумма (price) по каждому товару </h5>';

    echo '<table class="table table-dark">';
    echo '<thead>
		<tr>
		  <th scope="col">Имя</th>
		  <th scope="col">Количество товара</th>
		  <th scope="col">Цена</th>
		</tr>
	  </thead>
	  <tbody>';
    while ($row = $stmt->fetch(PDO::FETCH_LAZY)) {
        echo '<tr><td>' . $row['name'] . '</td><td>' . $row['count'] . '</td><td>' . $row['price'] . '</td></tr>';
    }
    echo '</tbody>
	</table>';
}

?>