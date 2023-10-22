<!DOCTYPE html>
<html style="font-size: 16px" lang="ru">
<?php include 'C:\MAMP\htdocs\components\head.phtml' ?>

<body>
  <?php include 'C:\MAMP\htdocs\components\header.phtml' ?>
  <section class="body-container">
    <?php include 'C:\MAMP\htdocs\components\sidebar.phtml' ?>

    <div class="body-content-container">
      <form action="../backend/login.php" method="get">
        <div class="login-container">
          <h1>Авторизация</h1>


          <?php
          echo "<h3 class='login-error-text'>" . $_GET['error'] . "</h3>";
          ?>

          <div class="login-input-container">
            <label for="login">Логин</label>
            <input required type="text" class="login-input" placeholder="Введите логин" id="login" name="login" />
          </div>

          <div class="login-input-container">
            <label for="password">Пароль</label>
            <input required type="password" class="login-input" placeholder="Введите пароль" id="password"
              name="password" />
          </div>


          <input type="submit" value="Войти" class="login-button">
        </div>
      </form>
    </div>
  </section>

  <?php require 'C:\MAMP\htdocs\components\footer.phtml'; ?>
</body>

</html>