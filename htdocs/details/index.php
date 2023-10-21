<!DOCTYPE html>
<html style="font-size: 16px" lang="ru">
<?php include 'C:\MAMP\htdocs\components\head.phtml' ?>

<body>
  <?php include 'C:\MAMP\htdocs\components\header.phtml' ?>
  <section class="body-container">
    <?php include 'C:\MAMP\htdocs\components\sidebar.phtml' ?>

    <?php
    $id = $_GET['id'];

    if (isset($id)) {
      $id;
      include 'C:\MAMP\htdocs\components\details.php';
    } else {
      echo "Параметр 'id' не был передан в URL";
    }
    ?>
  </section>

  <?php require 'C:\MAMP\htdocs\components\footer.phtml'; ?>
</body>

</html>