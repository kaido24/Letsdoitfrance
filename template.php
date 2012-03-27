<?php

function sdelaem_feed_icon($variables) {
  $text = t('Subscribe to @feed-title', array('@feed-title' => $variables['title']));
  if ($image = theme('image', array(
  		'path' => '/'.drupal_get_path('theme', 'sdelaem').'/images/ico_feed.png',
  		'width' => 16,
  		'height' => 16,
  		'alt' => $text))) {
    return l($image, $variables['url'], array('html' => TRUE, 'attributes' => array('class' => array('feed-icon'), 'title' => $text)));
  }
}

/*
* Adding script on selected pages
*/
/*
function sdelaem_preprocess_page(&$vars, $hook) {
 // if( 'blog' === arg(0) || 'contact' === arg(0) ) { // selecting by argument
  if( !drupal_is_front_page() ) { // selecting by non-front
    drupal_add_js(path_to_theme().'/scripts/script.js');
  }  
  $vars['scripts'] = drupal_get_js();
}
*/
