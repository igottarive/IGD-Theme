<?php
//Set the apple touch icon alt and title
$apple_title = "certificate for online drivers";
$apple_alt = "Certified Drivers Education";

$n = menu_get_object();
if($n->type == 'state_page') {
  $apple_title = "certificate for online drivers in [state_information:name]";
  $apple_alt = "Certified Drivers ED [state_information:name]";
  $stripped = ltrim($_SERVER['REQUEST_URI'],'/');
  $apple_title = token_replace($apple_title, array($stripped));
  $apple_alt = token_replace($apple_alt, array($stripped));
}
?>

<?php print $doctype; ?>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf->version . $rdf->namespaces; ?>>
<head<?php print $rdf->profile; ?>>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <link rel="apple-touch-icon" href="/sites/default/files/apple-touch-icon.png" title="<?php print $apple_title; ?>" alt="<?php print $apple_alt; ?>" />
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body<?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $scripts; ?>
  <?php print $page_bottom; ?>
</body>
</html>
