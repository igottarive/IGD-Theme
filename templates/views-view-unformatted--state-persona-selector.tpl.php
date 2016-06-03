<select id="persona-select" class="persona-select" name="persona">
    <option value=""></option>
    <?php foreach($rows as $id => $row): ?>
        <?= $row ?>
    <?php endforeach; ?>
</select>
<span id='choose-state-persona'>Choose</span>
        
    
