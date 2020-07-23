<?php

$id = $_POST['id'] ?? 0;
$id = (int) $id;

if (!id) {
    die('Something is wrong with id');
}

$query = "DELETE FROM products WHERE id = $id";
$result = query($connect, $query);

if (mysqli_affected_rows($connect)) {
    header('location: /products/list');
} else {
    die('some deletion error');
}


