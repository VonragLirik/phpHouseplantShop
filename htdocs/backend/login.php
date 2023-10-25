<?php
session_start();
include("db.php");

if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        echo ("Ошибка авторизации: " . mysqli_error($connection));
    }

    if ($result->num_rows == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['first_name'] = $row['first_name'];
        header("Location: ../admin");
    } else {
        header("Location: ../login?error=Неверное имя пользователя или пароль");
    }
}
?>