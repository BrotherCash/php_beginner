<?php

$query = "SELECT * FROM products";
$result = query($connect, $query);

$products = [];
while ($row = mysqli_fetch_assoc($result)) {
    $products[] = $row;
}

$smarty->assign('products', $products);
$smarty->display('products/index.tpl');





