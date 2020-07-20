<?php

require_once 'db.php';

if (!empty($_POST)) {
    $name = $_POST['name'] ?? '';
    $year = $_POST['year'] ?? '';

    $query = "INSERT INTO products(name) VALUES ('$name')";
    $result = query($connect, $query);

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
    <input type="submit" value="Добавить">
</form>
