<?php
/**
* Implements hook_preprocess_entity()
*/
function IGD_alpha_preprocess_entity(&$vars) {
  if (!empty($vars['classes_array']) && !empty($vars['attributes_array']['class'])) {    
    unset($vars['attributes_array']['class']);
  }
  if (empty($vars['attributes_array']['typeof'])) {
    unset($vars['attributes_array']['typeof']);
  }
}
?>
