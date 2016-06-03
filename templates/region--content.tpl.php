<?php
drupal_add_js('
jQuery(function(){
  // Highlight the correct tab
  jQuery(".tabs").tabs({ selected: jQuery(".active").prevAll().length });

  // Make sure the jqueryui does not take the clicks,
  // and make the click goto the href of the link
  jQuery(".tabs>li>a").unbind("click").each(function() {
    this.href = jQuery.data(this, "href.tabs");
  });

});
', 'inline');

?>
<div<?php print $attributes; ?>>
  <div<?php print $content_attributes; ?>>
    <a id="main-content"></a>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
    <?php if ($title_hidden): ?><div class="element-invisible"><?php endif; ?>
    <h1 class="title" id="page-title"><?php print $title; ?></h1>
    <?php if ($title_hidden): ?></div><?php endif; ?>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php if ($tabs && !empty($tabs['#primary'])): ?><div class="igd-user-menu-tabs tabs clearfix"><?php print render($tabs); ?><?php endif; ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
    <?php print $content; ?>
    <?php if ($feed_icons): ?><div class="feed-icon clearfix"><?php print $feed_icons; ?></div><?php endif; ?>
    <?php if ($tabs && !empty($tabs['#primary'])): ?></div><?php endif; ?>
  </div>
</div>
