<div id="site-wrapper" class="clearfix">

<div id="site-header" class="container-16 clearfix">

    <div id="branding" class="clearfix">
    <?php if ($linked_logo_img): ?>
      <span id="logo" class=""><?php print $linked_logo_img; ?></span>
    <?php endif; ?>
    <?php if ($linked_site_name): ?>
      <h1 id="site-name" class=""><?php print $linked_site_name; ?></h1>
    <?php endif; ?>
    <?php if ($site_slogan): ?>
      <div id="site-slogan" class=""><?php print $site_slogan; ?></div>
    <?php endif; ?>
    </div>

  <?php if ($main_menu_links || $secondary_menu_links): ?>
    <div id="site-menu" class="prefix-2 grid-14 clearfix">
      <?php print $main_menu_links; ?>
      <?php print $secondary_menu_links; ?>
    </div>
  <?php endif; ?>

</div>


<div id="site-subheader-wrapper" class="clearfix">
<div id="site-subheader" class="container-16 clearfix">  

  <?php if ($page['highlighted']): ?>
    <div id="highlighted" class="<?php print ns('grid-16', $page['header'], 8); ?>">
      <?php print render($page['highlighted']); ?>
    </div>
  <?php endif; ?>

  <?php if ($page['header']): ?>
    <div id="header-region" class="region <?php print ns('grid-16', $page['highlighted'], 8); ?> clearfix">
      <?php print render($page['header']); ?>
    </div>
  <?php endif; ?>

  <?php if (!$is_front): ?>
    <?php print render($title_prefix); ?>
    <?php if ($title && $node->type != 'article' ): ?>
        <h1 class="title" id="page-title"><?php print $title; ?></h1>
    <?php elseif ($title && $node->type == 'article' ): ?>
        <h1 class="title" id="page-title"><?php print t('News'); ?></h1>
    <?php endif;?>
    <?php print render($title_suffix); ?>
  <?php endif; ?>

</div>
</div>


<div id="page-wrapper">
<div id="page" class="container-16 clearfix">

  <div id="main" class="column prefix-1 <?php print ns('grid-15', $page['sidebar_first'], 4, $page['sidebar_second'], 3) . ' ' . ns('push-4', !$page['sidebar_first'], 4); ?>">
    <?php print $breadcrumb; ?>
    <?php if ($tabs): ?>
      <div class="tabs"><?php print render($tabs); ?></div>
    <?php endif; ?>
    <?php print $messages; ?>
    <?php print render($page['help']); ?>

    <div id="main-content" class="region clearfix">
      <?php print render($page['content']); ?>
    </div>

    <?php print $feed_icons; ?>
  </div>

<?php if ($page['sidebar_first']): ?>
  <div id="sidebar-left" class="column sidebar region grid-4 <?php print ns('pull-12', $page['sidebar_second'], 3); ?>">
    <?php print render($page['sidebar_first']); ?>
  </div>
<?php endif; ?>

<?php if ($page['sidebar_second']): ?>
  <div id="sidebar-right" class="column sidebar region grid-3">
    <?php print render($page['sidebar_second']); ?>
  </div>
<?php endif; ?>

</div>
</div>


<div id="footer-outer">
    <div id="footer-inner">

  <div id="footer" class="container-16 clearfix">
    <?php if ($page['footer']): ?>
      <div id="footer-region" class="region grid-16 clearfix">
        <?php print render($page['footer']); ?>
      </div>
    <?php endif; ?>
  </div>

    </div>
</div>
    
    
</div>
