<?php
session_start();
include("db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM `products` WHERE `products`.`id` = $id";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        echo ("Ошибка удаления: " . mysqli_error($connection));
    } else {
        echo 'success';
    }
}
?>