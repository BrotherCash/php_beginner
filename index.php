<?php

require_once 'db.php';

$query = "SELECT * FROM products";
$result = query($connect, $query);


echo "<a href='/add.php'>Добавить</a>";
echo "<table border='1' cellpadding='3'>";
$is_header = true;
while ($row = mysqli_fetch_assoc($result)) {
    if ($is_header) {
        echo "<tr>";
            foreach ($row as $field => $value) {
                echo "<td>";
                echo "$field";
                echo "</td>";
            }
            echo "<td>";
            echo "&nbsp;";
            echo "</td>";
        echo "</tr>";
        $is_header = false;
    }
    echo "<tr>";
        foreach ($row as $field => $value) {
            echo "<td>";
            echo "$value";
            echo "</td>";
        }
        echo "<td>";
    $id = $row['id'];
    echo "<a href='/edit.php?id=$id'>Редактировать</a>";
    echo "&nbsp;&nbsp;|&nbsp;&nbsp;";


    echo '<form action="/delete.php" method="post" style="display: inline-block"><input type="hidden" name="id" value="' . $id . '"><input type="submit" value="Удалить"></form> ';
        echo "</td>";
    echo "</tr>";
}
echo "</table>";



