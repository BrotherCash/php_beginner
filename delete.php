<?php
$id = $_POST['id'] ?? 0;
$id = (int) $id;

if (!id) {
    die('Something is wrong with id');
}

$host = 'localhost';
$user = 'brothercash';
$password = '';
$database = 'phpbeginner';

$connect = mysqli_connect($host, $user, $password, $database);

if (mysqli_connect_errno()) {
    $error = mysqli_connect_error();
    var_dump($error);

    exit;
}

$query = "DELETE FROM books WHERE id = $id";
$result = mysqli_query($connect, $query);

if (mysqli_errno($connect)) {
    var_dump(mysqli_error($connect));
    exit;
}

if (mysqli_affected_rows($connect)) {
    header('location: /');
} else {
    die('some deletion error');
}

/**
 * Нужно поле для идентефикаии записи
 * Отправим запрос на удаление
 * Сделаем редирект на главную
 */

