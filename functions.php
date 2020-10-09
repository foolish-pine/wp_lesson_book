<?php

function mytheme_setup() {
  // theme.min.cssの有効化
  add_theme_support('wp-block-styles');

  // 縦横比を維持したレスポンシブを有効化
  add_theme_support('responsive-embeds');

  // editor-style.cssの有効化
  add_theme_support('editor-styles');
  add_editor_style('editor-style.css');

  //ページのタイトルを有効化
  add_theme_support('title-tag');

  // link, style, scriptのHTML5対応を有効化
  add_theme_support('html5', array(
    'style',
    'script'
  ));
}

add_action('after_setup_theme', 'mytheme_setup');

// style.cssの読み込み
function mytheme_enqueue() {
  wp_enqueue_style(
    'mytheme-style',
    get_stylesheet_uri(),
    array(),
    filemtime(get_theme_file_path('style.css'))
  );
}

add_action('wp_enqueue_scripts', 'mytheme_enqueue');