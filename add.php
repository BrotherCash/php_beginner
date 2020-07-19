<?php
/**
 * 1. Проверять был ли отправлен POST запрос на эту страницу
 * 2. Полученный данные записывать в базу данных
 * 3. Делать редирект на главную страницу
 */

if (!empty($_POST)) {
    $name = $_POST['name'] ?? '';
    $year = $_POST['year'] ?? '';

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

    $query = "INSERT INTO books(name, year) VALUES ('$name', '$year')";
    $result = mysqli_query($connect, $query);

    if (mysqli_errno($connect)) {
        var_dump(mysqli_error($connect));
        exit;
    }

    if (mysqli_affected_rows($connect)) {
        header('location: /');
    } else {
        die('some insertion error');
    }

}

?>
<br>
<br>
<form method="post" action="">
    <label>
        Название книги: <input type="text" name="name" required>
    </label>

    <label>
        Год издания: <input type="number" name="year" required>
    </label>
    <input type="submit" value="Добавить">
</form>
