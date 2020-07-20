<?php

require_once 'db.php';

if (!empty($_POST)) {
    $id = $_POST['id'] ?? '';
    $name = $_POST['name'] ?? '';
    $article = $_POST['article'] ?? '';
    $price = $_POST['price'] ?? '';
    $amount = $_POST['amount'] ?? '';
    $description = $_POST['description'] ?? '';

    $query = "INSERT INTO products(name, article, price, amount, description) VALUES ('$name', '$article', '$price', '$amount', '$description')";
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
        Название товара: <input type="text" name="name" required">
    </label>
    <br>
    <br>
    <label>
        Артикул: <input type="text" name="article" required>
    </label>
    <br>
    <br>
    <label>
        Цена: <input type="number" name="price" required>
    </label>
    <br>
    <br>
    <label>
        Количество на складе: <input type="numb" name="amount">
    </label>
    <br>
    <br>
    <label>
        Описание товара: <br>
        <textarea name="description" cols="30" rows="10" required></textarea>
    </label>
    <br>
    <br>
    <input type="submit" value="Добавить">
</form>
