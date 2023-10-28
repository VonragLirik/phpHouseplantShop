<?php
include("db.php");

$query = "SELECT * FROM products where id=$id";
$result = mysqli_query($connection, $query);

if (!$result) {
    die("Ошибка запроса: " . mysqli_error($connection));
}

while ($row = mysqli_fetch_assoc($result)) {
    echo "<img src='" . ($row['src'] ?? '/images/empty-image.png') . "' class='details-img' />";
    echo "<div class='basic-body-container'>";
    echo "<h1>" . $row["name"] . "</h1>";
    echo "<h3>" . $row["description"] . "</h3>";
    echo "<h2>" . $row["price"] . " руб.</h2>";
    echo "</div>";
}
?>