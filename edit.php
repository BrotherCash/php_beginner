<?php
/**
 * 2. Полученный данные записывать в базу данных
 * 3. Делать редирект на главную страницу
 */

$host = 'localhost';
$user = 'brothercash';
$password = '';
$database = 'phpbeginner';

$connect = mysqli_connect($host, $user, $password, $database);

if (mysqli_connect_errno()) {
    $error = mysqli_connect_error();
    var_dump($error);

    exit;
}

$id = $_GET['id'];
$id = (int) $id;
$book = [];

if ($id) {
    $query = "SELECT * FROM books WHERE id = $id";
    $result = mysqli_query($connect, $query);
    $book = mysqli_fetch_assoc($result);

    if (is_null($book)) {
        $book = [];
    }
}

if (!empty($_POST)) {
    $id = $_POST['id'] ?? '';
    $name = $_POST['name'] ?? '';
    $year = $_POST['year'] ?? '';

    $query = "UPDATE books SET name = '$name', year = '$year' WHERE id = $id";

    $result = mysqli_query($connect, $query);

    if (mysqli_errno($connect)) {
        var_dump(mysqli_error($connect));
        exit;
    }

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
    <input type="hidden" name="id" value="<?php echo $book['id'] ?? 0; ?>">
    <label>
        Название книги: <input type="text" name="name" required value="<?php echo $book['name'] ?? ''; ?>">
    </label>
    <label>
        Год издания: <input type="number" name="year" required value="<?php echo $book['year'] ?? ''; ?>">
    </label>
    <input type="submit" value="Сохранить">
</form>
