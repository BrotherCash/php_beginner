<?php

if (!empty($_POST)) {
    $category = Category::getDataFromPost();
    $inserted = Category::add($category);

    if ($inserted) {
        header('location: /categories/list');
    } else {
        die('some insertion error');
    }

}
$smarty->display('categories/add.tpl');


