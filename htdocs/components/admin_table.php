<div class="body-content-container">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <div class="table-container">
    <table>
      <thead>
        <tr>
          <th>Изображение</th>
          <th>Название товара</th>
          <th>Основные характеристики товара</th>
          <th>Цена</th>
          <th width="50px"></th>
        </tr>
      </thead>

      <tbody>
        <?php
        require 'C:\MAMP\htdocs\backend\admin_products.php';
        ?>
      </tbody>
    </table>

    <script>
      const rows = document.querySelectorAll('.trash-image');
      rows.forEach(row => {
        row.addEventListener('click', function () {
          $.ajax({
            url: `../backend/delete_product.php?id=${row.id}`,
            type: 'GET',
            success: function (response) {
              if (response === 'success') {
                location.reload();
              } else {
                alert('Ошибка при удалении.');
              }
            }
          });
        });
      });
    </script>
  </div>
</div>