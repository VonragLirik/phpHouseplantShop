<!DOCTYPE html>
<html style="font-size: 16px" lang="ru">
<?php include 'C:\MAMP\htdocs\components\head.phtml' ?>

<body>
  <?php include 'C:\MAMP\htdocs\components\header.phtml' ?>
  <section class="body-container">
    <?php include 'C:\MAMP\htdocs\components\sidebar.phtml' ?>

    <div class="body-content-container">
      <div class="basic-body-container">
        <?php
        $type = 'about_author_page';
        require '..\backend\get_dinamic_content.php';
        ?>
      </div>
    </div>
  </section>

  <?php require 'C:\MAMP\htdocs\components\footer.phtml'; ?>
</body>

</html>