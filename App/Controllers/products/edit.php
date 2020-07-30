<?php

$id = $_GET['id'];
$id = (int) $id;
$product = [];

if ($id) {
    $product = Product::getById($id);
}

if (!empty($_POST)) {
    $product = Product::getDataFromPost();
    $edited = Product::updateById($id, $product);

    if ($edited) {
        header('location: /products/list');
    } else {
        die('some insertion error');
    }
}
$categories = Category::getList();

$smarty->assign('categories', $categories);
$smarty->assign('product', $product);
$smarty->display('products/edit.tpl' );
