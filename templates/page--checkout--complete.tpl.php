<?php

/**
 * @file page--checkout--complete.tpl.php
 *
 * Theme implementation to display the commerce checkout 
 * completion page.
 *
 * Available variables:
 * - $page:
 * - $user:
 *
 */
?>
<div<?php print $attributes; ?>>
  <?php if (isset($page['header'])) : ?>
    <?php print render($page['header']); ?>
  <?php endif; ?>

  <?php if (isset($page['content'])) : ?>
    <?php print render($page['content']); ?>
  <?php endif; ?>

  <?php if (isset($page['footer'])) : ?>
    <?php print render($page['footer']); ?>
  <?php endif; ?>
</div>
