<div class="body-content-container">
  <div class="table-container">
    <table>
      <thead>
        <tr>
          <th>Название товара</th>
          <th>Основные характеристики товара</th>
          <th>Цена</th>
        </tr>
      </thead>

      <tbody>
        <?php
        if ($category === 'trees') {
          require 'C:\MAMP\htdocs\backend\trees_products.php';
        } else if ($category === 'succulents') {
          require 'C:\MAMP\htdocs\backend\succulents_products.php';
        } else {
          require 'C:\MAMP\htdocs\backend\blooming_products.php';
        }
        ?>
        <?php ?>
      </tbody>
    </table>
  </div>
</div>