<?php
include("db.php");

$query = "SELECT * FROM products";
$result = mysqli_query($connection, $query);

if (!$result) {
    die("Ошибка запроса: " . mysqli_error($connection));
}

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td> <img src='" . ($row['src'] ?? '/images/empty-image.png') . "' class='table-img' /> </td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['description'] . "</td>";
    echo "<td>" . $row['price'] . " руб." . "</td>";
    echo "<td>
    <img src='../images/trash.png' class='trash-image' type='text' id='" . $row['id'] . "' ></img>
    <a href='./update?id=" . $row['id'] . "'><img src='../images/edit.png' class='edit-image' type='text'></img></a>
    <a href='./create'><img src='../images/plus.png' class='edit-image' type='text'></img></a>
    </td>";
    echo "</tr>";
}
?>