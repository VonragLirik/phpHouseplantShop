<?php
include("db.php");

if (isset($_POST['type']) && isset($_POST['content'])) {
    $type = $_POST['type'];
    $content = $_POST['content'];

    $query = "UPDATE dynamic_contents SET content = '$content' WHERE dynamic_contents.type = '$type'";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        echo ("Ошибка сохранения контента: " . mysqli_error($connection));
    }

    if ($result) {
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
}
?>