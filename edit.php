<?php

require_once 'config.php';

$id = $_GET['id'];
$id = (int) $id;
$product = [];

if ($id) {
    $query = "SELECT * FROM products WHERE id = $id";
    $result = query($connect, $query);

    $product = mysqli_fetch_assoc($result);
    if (is_null($product)) {
        $product = [];
    }
}

if (!empty($_POST)) {
    $id = $_POST['id'] ?? '';
    $name = $_POST['name'] ?? '';
    $article = $_POST['article'] ?? '';
    $price = $_POST['price'] ?? '';
    $amount = $_POST['amount'] ?? '';
    $description = $_POST['description'] ?? '';

    $query = "UPDATE products SET name = '$name', article = '$article', price = '$price', amount = '$amount', description = '$description' WHERE id = $id";
    $result = query($connect, $query);

    if (mysqli_affected_rows($connect)) {
        header('location: /');
    } else {
        die('some insertion error');
    }
}
$smarty->assign('product', $product);
$smarty->display('products/add.tpl' );
