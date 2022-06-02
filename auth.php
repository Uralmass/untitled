<?php

$email = trim($_POST['email']);
$password = trim($_POST['password']);

$connect = new mysqli('localhost', 'root', 'root', 'test');

$result = $connect->query("SELECT * FROM `users` WHERE `email`=
    '$email' AND `password`='$password'");
$user = $result->fetch_assoc();
if (count($user) == 0) {
    echo "Такой пользователь не найден";
    exit();
}


$connect->close();

header('Location:/feedback.php ');


