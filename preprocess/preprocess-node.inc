<?php
/**
* Implements hook_preprocess_node()
*/
function IGD_alpha_preprocess_node(&$vars) {
  unset($vars['title_attributes_array']['datatype']);
}
?>
