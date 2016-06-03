<select id="state-select" class="state-select" name="state">
    <option value=""></option>
    <?php foreach($rows as $id => $row): ?>
        <?= $row ?>
    <?php endforeach; ?>
</select>
