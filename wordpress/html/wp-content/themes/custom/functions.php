<?php

/**
 * Twenty TcustomNao functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage customNao
 * @since TcustomNao 1.0
 */

// アイキャッチ画像を有効にする。
add_theme_support( 'post-thumbnails' );

//カスタムメニュー
function twpp_setup_theme(){
     register_nav_menus(array(
          'header-nav' => 'ヘッダーナビゲーション',
          'footer-nav' => 'フッターナビゲーション',
          'social-links'      => 'Social Links',
     ));
}

add_action('after_setup_theme', 'twpp_setup_theme');

function navbutton_scripts(){
     wp_enqueue_script('navbutton_script', get_template_directory_uri() . '/include/app.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'navbutton_scripts');



/* ---------------------------------------
ウィジェットの有効化・設定
--------------------------------------- */
//ウィジェットを作成し、管理画面で設定できるようにします。
//また、各ウィジェットをくくるHTMLタグなども指定できます。
//表示にはテーマテンプレート内でdynamic_sidebar()に設定したidを指定します。
function theme_slug_widgets_init()
{
     register_sidebar(array(
          'name' => 'サイドバー',
          'id' => 'side-widget',
          'before_widget' => '<div id="%1$s" class="%2$s sidebar-wrapper">',
          'after_widget' => '</div>',
          'before_title' => '<h2 class="sidebar-title">',
          'after_title' => '</h2>'
     ));
}
add_action('widgets_init', 'theme_slug_widgets_init');
