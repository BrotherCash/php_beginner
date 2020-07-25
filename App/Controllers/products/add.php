<?php

if (!empty($_POST)) {
    $product = get_product_from_post();
    $inserted = add_product($connect, $product);

    if ($inserted) {
        header('location: /products/list');
    } else {
        die('some insertion error');
    }
}

$categories = get_category_list($connect);

$smarty->assign('categories', $categories);
$smarty->display('products/add.tpl');


