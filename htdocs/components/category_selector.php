<div class="login-input-container">
  <label for="category">Категория</label>
  <select name="category" placeholder="Выберите категорию" class="login-input" value='<?= $value ?? '' ?>'>
    <option value="blooming" <?= ($value === 'blooming') ? 'selected' : '' ?>>Цветущие</option>
    <option value="trees" <?= ($value === 'trees') ? 'selected' : '' ?>>Деревья</option>
    <option value="succulents" <?= ($value === 'succulents') ? 'selected' : '' ?>>Суккуленты</option>
  </select>
</div>