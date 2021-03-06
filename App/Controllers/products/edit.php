<?php

use App\Product;
use App\ProductImage;
use App\Request;
use App\Response;

$productId = Request::getIntFromGet('id');
$product = [];

if ($productId) {
    $product = Product::getById($productId);
}

if (Request::isPost()) {
    $productData = Product::getDataFromPost();
    $edited = Product::updateById($productId, $productData);

    $imageUrl = trim($_POST['image_url']);
    ProductImage::uploadImageByUrl($productId, $imageUrl);

    $uploadImages = $_FILES['images'] ?? [];
    ProductImage::uploadImages($productId, $uploadImages);

    Response::redirect('/products/list');
}
$categories = Category::getList();

$smarty->assign('categories', $categories);
$smarty->assign('product', $product);
$smarty->display('products/edit.tpl' );