<!DOCTYPE html>
<html style="font-size: 16px" lang="ru">
<?php include 'C:\MAMP\htdocs\components\head.phtml' ?>
<script src="../../ckeditor/ckeditor.js"></script>

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

    <form action="..\..\backend\save_dinamic_content.php" method="POST">
      <div class="body-content-container">
        <div class="edit-body-container">
          <textarea id="editor" name="content">
          <?php
          $type = 'about_author_page';
          require '..\..\backend\get_dinamic_content.php';
          ?>
          </textarea>

          <input class="hidden-container" name="type" value="about_author_page"></input>
          <input type="submit" value="Сохранить" class="basic-button">
        </div>

      </div>
    </form>

    <script>
      ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
          console.error(error);
        });
    </script>
  </section>

  <?php require 'C:\MAMP\htdocs\components\footer.phtml'; ?>
</body>

</html>