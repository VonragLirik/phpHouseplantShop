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

          <div class="login-input-container">
            <label for="login">Ссылка на картинку</label>
            <input required type="text" class="login-input" placeholder="Введите ссылку на картинку" name="src"
              value='/images/empty-image.png' />
          </div>

          <div class="login-input-container">
            <label for="login">Имя</label>
            <input required type="text" class="login-input" placeholder="Введите имя" name="name" />
          </div>

          <div class="login-input-container">
            <label for="login">Описание</label>
            <input required type="text" class="login-input" placeholder="Введите описание" name="description" />
          </div>

          <div class="login-input-container">
            <label for="login">Цена</label>
            <input required type="text" class="login-input" placeholder="Введите цену" name="price" />
          </div>

          <div class="login-input-container">
            <label for="login">Категория</label>
            <select name="category" placeholder="Выберите категорию">
              <option value="blooming">Цветущие</option>
              <option value="trees">Деревья</option>
              <option value="succulents">Суккуленты</option>
            </select>
          </div>

          <input type="submit" value="Сохранить" class="login-button">
        </div>
      </form>
    </div>
  </section>

  <?php require 'C:\MAMP\htdocs\components\footer.phtml'; ?>
</body>

</html>