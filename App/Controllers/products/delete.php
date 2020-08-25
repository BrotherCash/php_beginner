<?php

use App\Product;
use App\Request;
use App\Response;

$id = Request::getIntFromPost('id');

if (!$id) {
    die('Something is wrong with id');
}

$deleted = Product::deleteById($id);

if ($deleted) {
    Response::redirect('/products/list');
} else {
    die('some deletion error');
}


