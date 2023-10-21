<?php
    include("db.php");
   
    $query = "SELECT * FROM products where category = 'blooming'";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Ошибка запроса: " . mysqli_error($connection));
    }

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['description'] . "</td>";
        echo "<td>Цена: " . $row['price'] . " руб." . "</td>";
        echo "</tr>";
    }

?>