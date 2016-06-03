<?php
/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */

function IGD_css_alter(&$css) {
//  Remove defaults.css file.
  unset($css[drupal_get_path('module', 'system') . '/system.menus.css']);
}


/**
 * Remove product title from attributes view
 */
function igd_commerce_product_attributes_item_title($variables) {
  // Do nothing
}
