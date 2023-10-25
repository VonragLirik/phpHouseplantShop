<?php
session_start();
include("db.php");

$id = $_GET['id'];
$src = $_POST['src'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$category = $_POST['category'];

if (isset($id) && isset($src) && isset($name) && isset($description) && isset($price) && isset($category)) {
    $query = "UPDATE products SET name = '$name', src = '$src', description = '$description', price = '$price', category = '$category' WHERE id = $id";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        echo ("Ошибка обновления продукта: " . mysqli_error($connection));
    }

    if ($result) {
        header("Location: ../admin");
    } else {
        header("Location: " . $_SERVER['HTTP_REFERER'] . "&error=Возникла ошибка при обновлении - " . mysqli_error($connection));
    }
}
?>