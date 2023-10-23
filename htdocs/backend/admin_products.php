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
    echo "<td><img src='../images/trash.png' class='trash-image' type='text' id='" . $row['id'] . "' ></img></td>";
    echo "</tr>";
}
?>