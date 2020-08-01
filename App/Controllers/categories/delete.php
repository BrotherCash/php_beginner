<?php

$id = Request::getIntFromPost('id');

if (!$id) {
    die('Something is wrong with id');
}

$deleted = Category::deleteById($id);

if ($deleted) {
    Response::redirect('/categories/list');
} else {
    die('some deletion error');
}


