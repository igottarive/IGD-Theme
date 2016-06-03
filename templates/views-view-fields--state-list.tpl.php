<option 
    value='<?= $fields['field_url']->content ?>' 
    data-img-src='<?php echo file_create_url(file_load($fields['field_selector_icon']->content)->uri); ?>'>
    <?= $fields['name']->content ?>
</option>
