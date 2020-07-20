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

    $query = "UPDATE products SET name = '$name' WHERE id = $id";
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
        Название книги: <input type="text" name="name" required value="<?php echo $product['name'] ?? ''; ?>">
    </label>
    <input type="submit" value="Сохранить">
</form>
