<!DOCTYPE html>
<html style="font-size: 16px" lang="ru">
  <?php include 'C:\MAMP\htdocs\components\header.phtml'?>
    <body>
    <section class="header-container"><img src="./images/logo.png" class="header-logo" />Магазин комнатных растений</section>

    <section class="body-container">
      <?php include 'C:\MAMP\htdocs\components\sidebar.phtml'?>
     
      
      <div class="body-content-container">
        <?php require 'C:\MAMP\htdocs\components\table.php'; ?> 
      </div>
    </section>

    <?php require 'C:\MAMP\htdocs\components\footer.phtml'; ?> 
  </body>
</html>
