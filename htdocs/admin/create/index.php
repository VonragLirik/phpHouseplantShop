<!DOCTYPE html>
<html style="font-size: 16px" lang="ru">
<?php include 'C:\MAMP\htdocs\components\head.phtml' ?>

<?php
session_start();

if (!isset($_SESSION['first_name'])) {
  header("Location: ../../index.php");
}
?>

<body>
  <?php include 'C:\MAMP\htdocs\components\header.phtml' ?>
  <section class="body-container">
    <?php include 'C:\MAMP\htdocs\components\sidebar.phtml' ?>

    <div class="body-content-container">
      <form action="..\..\backend\create_product.php" method="post">
        <div class="login-container">
          <h1>Создание продукта</h1>

          <?php
          if ($_GET['error']) {
            echo "<h3 class='login-error-text'>" . $_GET['error'] . "</h3>";
          }
          ?>

          <div class="basic-input-container">
            <label for="src">Ссылка на картинку</label>
            <input required type="text" class="basic-input" placeholder="Введите ссылку на картинку" name="src"
              value='/images/empty-image.png' />
          </div>

          <div class="basic-input-container">
            <label for="name">Имя</label>
            <input required type="text" class="basic-input" placeholder="Введите имя" name="name" />
          </div>

          <div class="basic-input-container">
            <label for="description">Описание</label>
            <input required type="text" class="basic-input" placeholder="Введите описание" name="description" />
          </div>

          <div class="basic-input-container">
            <label for="price">Цена</label>
            <input required type="number" class="basic-input" placeholder="Введите цену" name="price" min="1" />
          </div>

          <?php include 'C:\MAMP\htdocs\components\category_selector.php' ?>

          <input type="submit" value="Сохранить" class="basic-button">
        </div>
      </form>
    </div>
  </section>

  <?php require 'C:\MAMP\htdocs\components\footer.phtml'; ?>
</body>

</html>