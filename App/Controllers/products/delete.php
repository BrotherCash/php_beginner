<?php

$id = $_POST['id'] ?? 0;
$id = (int) $id;

if (!$id) {
    die('Something is wrong with id');
}

$deleted = Product::deleteById($id);

if ($deleted) {
    header('location: /products/list');
} else {
    die('some deletion error');
}


