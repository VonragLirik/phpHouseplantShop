<div class="basic-input-container">
  <label for="category">Категория</label>
  <select name="category" placeholder="Выберите категорию" class="basic-input" value='<?= $value ?? '' ?>'>
    <option value="blooming" <?= ($value === 'blooming') ? 'selected' : '' ?>>Цветущие</option>
    <option value="trees" <?= ($value === 'trees') ? 'selected' : '' ?>>Деревья</option>
    <option value="succulents" <?= ($value === 'succulents') ? 'selected' : '' ?>>Суккуленты</option>
  </select>
</div>