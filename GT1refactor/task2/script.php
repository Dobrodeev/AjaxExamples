<?php
include('../config/config.php');
$email = addslashes(trim($_POST['email']));
$password = addslashes(trim($_POST['password']));
$query = "INSERT INTO `gt1_users` SET `email`='".$email."', `password`='".$password."'";
$stmt = $pdo->query($query);
echo '<pre>';
print_r($_POST);
echo '</pre>';

/*echo $_REQUEST['email'] . '<br>';
echo $_REQUEST['password'];*/