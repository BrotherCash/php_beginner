<?php

if (!empty($_POST)) {
    $product = Product::getDataFromPost();
    $inserted = Product::add($connect, $product);

    if ($inserted) {
        header('location: /products/list');
    } else {
        die('some insertion error');
    }
}

$categories = Category::getList();

$smarty->assign('categories', $categories);
$smarty->display('products/add.tpl');


