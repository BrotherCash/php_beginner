<?php

$id = $_POST['id'] ?? 0;
$id = (int) $id;

if (!$id) {
    die('Something is wrong with id');
}

$deleted = delete_product_by_id($connect, $id);

if ($deleted) {
    header('location: /products/list');
} else {
    die('some deletion error');
}


