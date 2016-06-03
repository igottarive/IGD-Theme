<?php if ($teaser): ?>
  <?php if (1): ?>
    <img src="<?php print file_create_url($node->field_enabled_image['und'][0]['uri']); ?>"
      alt="<?php print $node->field_reason['und'][0]['value']; ?>"
      title="<?php print $node->field_reason['und'][0]['value']; ?>"
    ></img>
  <?php else: ?>
    <img src="<?php print file_create_url($node->field_disabled_image['und'][0]['uri']); ?>"
      alt="<?php print $node->field_goal['und'][0]['value']; ?>"
      title="<?php print $node->field_goal['und'][0]['value']; ?>"
    ></img>
  <?php endif; ?>
<?php else: ?>
<article<?php print $attributes; ?>>
  <?php print $user_picture; ?>
  <?php print render($title_prefix); ?>
  <?php if (!$page && $title): ?>
  <header>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
  </header>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <?php if ($display_submitted): ?>
  <footer class="submitted"><?php print $date; ?> -- <?php print $name; ?></footer>
  <?php endif; ?>

  <div<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>

  <div class="clearfix">
    <?php if (!empty($content['links'])): ?>
      <nav class="links node-links clearfix"><?php print render($content['links']); ?></nav>
    <?php endif; ?>

    <?php print render($content['comments']); ?>
  </div>
</article>
<?php endif; ?>
