<!DOCTYPE html>
<html style="font-size: 16px" lang="ru">
<?php include 'C:\MAMP\htdocs\components\head.phtml' ?>

<body>
  <?php include 'C:\MAMP\htdocs\components\header.phtml' ?>
  <section class="body-container">
    <?php include 'C:\MAMP\htdocs\components\sidebar.phtml' ?>

    <?php
    session_start();

    if (isset($_SESSION['first_name'])) {
      echo "<h2>Добро пожаловать, " . $_SESSION['first_name'] . "!</h2>";
      echo "<a href='../logout'>Выйти</a>";
    } else {
      header("Location: ../index.php");
    }
    ?>
  </section>

  <?php require 'C:\MAMP\htdocs\components\footer.phtml'; ?>
</body>

</html>