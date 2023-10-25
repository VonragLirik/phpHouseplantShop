<!DOCTYPE html>
<html style="font-size: 16px" lang="ru">
<?php include 'C:\MAMP\htdocs\components\head.phtml' ?>

<body>
  <?php include 'C:\MAMP\htdocs\components\header.phtml' ?>
  <section class="body-container">
    <?php include 'C:\MAMP\htdocs\components\sidebar.phtml' ?>

    <?php
    session_start();

    if (!isset($_SESSION['first_name'])) {
      header("Location: ../index.php");
    }
    ?>

    <div class="login-container">
      <a href='./create'>
        <button class="basic-button">
          Добавить продукт
        </button>
      </a>
      <?php
      require 'C:\MAMP\htdocs\components\admin_table.php';
      ?>

      <input type="submit" value="Сохранить" class="basic-button">
    </div>
  </section>

  <?php require 'C:\MAMP\htdocs\components\footer.phtml'; ?>
</body>

</html>