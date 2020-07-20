<?php

require_once 'db.php';

$id = $_GET['id'];
$id = (int) $id;
$product = [];

if ($id) {
    $query = "SELECT * FROM products WHERE id = $id";
    $result = query($connect, $query);

    $product = mysqli_fetch_assoc($result);
    if (is_null($product)) {
        $product = [];
    }
}

if (!empty($_POST)) {
    $id = $_POST['id'] ?? '';
    $name = $_POST['name'] ?? '';
    $article = $_POST['article'] ?? '';
    $price = $_POST['price'] ?? '';
    $amount = $_POST['amount'] ?? '';
    $description = $_POST['description'] ?? '';

    $query = "UPDATE products SET name = '$name', article = '$article', price = '$price', amount = '$amount', description = '$description' WHERE id = $id";
    $result = query($connect, $query);

    if (mysqli_affected_rows($connect)) {
        header('location: /');
    } else {
        die('some insertion error');
    }
}

?>
<br>
<br>
<form method="post" action="">
    <input type="hidden" name="id" value="<?php echo $product['id'] ?? 0; ?>">
    <label>
        Название товара: <input type="text" name="name" required value="<?php echo $product['name'] ?? ''; ?>">
    </label>
    <br>
    <br>
    <label>
        Артикул: <input type="text" name="article" required value="<?php echo $product['article'] ?? ''; ?>">
    </label>
    <br>
    <br>
    <label>
        Цена: <input type="number" name="price" required value="<?php echo $product['price'] ?? ''; ?>">
    </label>
    <br>
    <br>
    <label>
        Количество на складе: <input type="number" name="amount" required value="<?php echo $product['amount'] ?? ''; ?>">
    </label>
    <br>
    <br>
    <label>
        Описание товара: <br>
        <textarea name="description" cols="30" rows="10"><?php echo $product['description'] ?? ''; ?></textarea>
    </label>
    <br>
    <br>
    <input type="submit" value="Сохранить">
</form>
