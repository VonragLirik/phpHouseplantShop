<?php
    $user = 'root';
    $password = 'root';
    $db = 'shop';
    $host = 'localhost';
    $port = 3306;

    $connection = mysqli_connect($host, $user, $password, $db, $port);

    if (!$connection) {
        die("Ошибка подключения: " . mysqli_connect_error());
    }
?>