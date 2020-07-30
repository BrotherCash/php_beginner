<?php

$id = $_POST['id'] ?? 0;
$id = (int) $id;

if (!$id) {
    die('Something is wrong with id');
}

$deleted = Category::deleteById($id);

if ($deleted) {
    header('location: /categories/list');
} else {
    die('some deletion error');
}


