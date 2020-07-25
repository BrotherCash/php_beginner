<?php

$id = $_POST['id'] ?? 0;
$id = (int) $id;

if (!$id) {
    die('Something is wrong with id');
}

$deleted = delete_category_by_id($connect, $id);

if ($deleted) {
    header('location: /categories/list');
} else {
    die('some deletion error');
}


