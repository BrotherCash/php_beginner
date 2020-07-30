<?php

$id = $_GET['id'];
$id = (int) $id;
$category = [];

if ($id) {
    $category = Category::getById($id);
}

if (!empty($_POST)) {
    $category = Category::getDataFromPost();
    $edited = Category::updateById($id, $category);

    if ($edited) {
        header('location: /categories/list');
    } else {
        die('some insertion error');
    }
}
$smarty->assign('category', $category);
$smarty->display('categories/edit.tpl' );
