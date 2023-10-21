<?php
include("db.php");

$query = "SELECT * FROM products where category = 'trees'";
$result = mysqli_query($connection, $query);

if (!$result) {
    die("Ошибка запроса: " . mysqli_error($connection));
}

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr class='clickable-row' data-href='/details?id=" . $row['id'] . "'>";
    echo "<td> <img src='" . ($row['src'] ?? '/images/empty-image.png') . "' class='table-img' /> </td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['description'] . "</td>";
    echo "<td>" . $row['price'] . " руб." . "</td>";
    echo "</tr>";
}
?>