<?php

//$file = $_FILES['import_file'] ?? null;
//
//if (is_null($file) || empty($file['name'])) {
//    die('no import file uploaded');
//}
//
//$uploadDir = APP_UPLOAD_DIR . '/import';
//if(!file_exists($uploadDir)) {
//    mkdir($uploadDir);
//}
//
//$importFilename = 'i_' . time() . '.' . $file['name'];
//move_uploaded_file($file['tmp_name'], $uploadDir . '/' . $importFilename);

$filepath = APP_UPLOAD_DIR . '/import/i_1596803221.import.csv';

$file = fopen($filepath, 'r');

$withHeaders = true;
$settings = [
    0 => 'name',
    1 => 'category_name',
    2 => 'article',
    3 => 'price',
    4 => 'amount',
    5 => 'description',
    6 => 'image_urls',
];

if ($withHeaders) {
    $headers = fgetcsv($file);
}
while ($row = fgetcsv($file)) {
    $productData = [];

    foreach ($settings as $index => $key) {
        $productData[$key] = $row[$index] ?? null;
    }

    $product = [
        'name' => $productData['name'],
        'article' => $productData['article'],
        'price' => $productData['price'],
        'amount' => $productData['amount'],
        'description' => $productData['description'],
    ];

    $categoryName = $productData['category_name'];
    $category = Category::getByName($categoryName);

    if (empty($category)) {
//        continue;
        $categoryId = Category::add([
            'name' => $categoryName,
        ]);
    } else {
        $categoryId = $category['id'];
    }

    $product['category_id'] = $categoryId;

    $productId = Product::add($product);

    $productData['image_urls'] = explode("\n", $productData['image_urls']);

    $productData['image_urls'] = array_map(function($item){
        return trim($item);
    }, $productData['image_urls']);

    $productData['image_urls'] = array_filter($productData['image_urls'], function($item){
        return !empty($item);
    });

    foreach ($productData['image_urls'] as $imageUrl) {
        ProductImage::uploadImageByUrl($productId, $imageUrl);
    }


    echo "<pre>"; var_dump($productData); echo "</pre>";
}



