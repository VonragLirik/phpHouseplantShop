<?php
session_start();
include("db.php");

$src = $_POST['src'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$category = $_POST['category'];

if (isset($src) && isset($name) && isset($description) && isset($price) && isset($category)) {
    $query = "INSERT INTO products (name, description, price, category, src) VALUES ('$name', '$description', '$price', '$category', '$src')";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        echo ("Ошибка обновления продукта: " . mysqli_error($connection));
    }

    if ($result) {
        header("Location: ../admin");
    } else {
        header("Location: " . $_SERVER['HTTP_REFERER'] . "?error=Возникла ошибка при создании - " . mysqli_error($connection));
    }
}
?>