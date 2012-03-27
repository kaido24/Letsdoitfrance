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
    
  <?php // if ($is_front): ?>
    <!--<div id="front_map">
        <iframe width="428" height="297" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=tallinn,+estonia&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=55.455479,114.169922&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Tallinn,+Harju+County,+Estonia&amp;t=m&amp;ll=59.439839,24.753742&amp;spn=0.025922,0.073299&amp;z=13&amp;output=embed"></iframe>
    </div>-->
  <?php // endif; ?>
  

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
    <?php if ($title && $node->type != 'article' ): ?>
        <h1 class="title"><?php print $title; ?></h1>
    <?php elseif ($title && $node->type == 'article' ): ?>
        <h1 class="title"><?php print t('News'); ?></h1>
    <?php endif;?>
  <?php endif; ?>

</div>
</div>


<div id="page-wrapper">
<div id="page" class="container-16 clearfix">

  <div id="main" class="column <?php print ns('grid-16', $page['sidebar_first'], 4, $page['sidebar_second'], 3) . ' ' . ns('push-4', !$page['sidebar_first'], 4); ?>">
    <?php print $breadcrumb; ?>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <h1 class="title" id="page-title"><?php print $title; ?></h1>
    <?php endif; ?>
    <?php print render($title_suffix); ?>      
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
