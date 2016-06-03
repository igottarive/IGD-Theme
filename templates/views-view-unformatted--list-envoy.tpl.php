<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>

<?php $href = '<a href="/envoy/'; ?>

<?php foreach ($rows as $id => $row): ?>
  <?php $href .= trim($row) . "+"; ?>
<?php endforeach; ?>

<?php $href .= '">Click</a>'; ?>
<?php print $href; ?>
