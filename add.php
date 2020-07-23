<?php

require_once 'config.php';

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
$smarty->display('products/add.tpl');


