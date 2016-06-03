<?php
function IGD_alpha_preprocess_html(&$vars) {

  //Fix doctype and other w3c validation issues
  $prefixes = array();
  $namespaces = explode("n", trim($vars['rdf_namespaces']));
  foreach ($namespaces as $name) {
    if(count($name) > 1) {
      list($key,$url) = explode('=', $name, 2);
      if(count($key) > 1) {
        list($xml,$space) = explode(':',$key, 2);
      }
    }
    if(!empty($url)) $url = trim($url, '"');
    if (!empty($space) && !empty($url)) {
      $prefixes[] = $space . ': ' . $url;
    }
  }
  $prefix = implode(" ", $prefixes);
  $vars['doctype'] = '<!DOCTYPE HTML>';
  $vars['rdf']->version = '';
  $vars['rdf']->namespaces = ' xmlns="http://www.w3.org/1999/xhtml" prefix="' . $prefix . '"';
  $vars['rdf']->profile = '';

  //Add jqueryui themeroller
  drupal_add_css('sites/all/themes/igd' . '/css/ie-alpha-default.css', array(
    'type' => 'file',
    'group' => 2000,
    'media' => 'all',
    'browsers' => array('IE' => '(lt IE 9)&(!IEMobile)', '!IE' => FALSE),
    'weight' => 100
  ));

//  drupal_add_css('//fonts.googleapis.com/css?family=Varela+Round', array(
//	'type' => 'external'
//  ));

}

?>
