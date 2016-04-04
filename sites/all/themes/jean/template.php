<?php
/**
 * Created by PhpStorm.
 * User: akkovanettinger
 * Date: 30-08-15
 * Time: 20:40
 */
function jean_preprocess_page(&$variables){
  if(drupal_is_front_page()){
    $variables['content'] = views_embed_view('video');
  }
}