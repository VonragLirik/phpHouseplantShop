<?php
include("db.php");

$query = "SELECT * FROM dynamic_contents where dynamic_contents.type = '$type'";
$result = mysqli_query($connection, $query);

if (!$result) {
    die("Ошибка получения контента: " . mysqli_error($connection));
}

$row = mysqli_fetch_assoc($result);
echo $row["content"];
?>