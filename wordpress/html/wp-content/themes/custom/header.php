<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package WordPress
 * 
 */
// @subpackage Twenty_Nineteen
//  * @since Twenty Nineteen 1.0


if (is_home() || is_front_page()) {
    $title_tag_start = '<h1 class="site-title">';
    $title_tag_end = '</h1>';
} else {
    $title_tag_start = '<p class="site-title">';
    $title_tag_end =  '</p>';
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <title>カスタマイズ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/krishdevdb/reseter.css/css/reseter.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <!--スタイルシートの呼び出し-->
    <?php wp_head(); ?>
    <!--システム・プラグイン用-->
</head>

<body <?php body_class(); ?>>

    <header>
        <div class="header-inner">

            <!--タイトルを画像にする場合-->
            <!-- <div class="site-title-wrap">
                <?php echo $title_tag_start; ?>
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo home_url() ?>/wp-content/uploads/2021/04/river-6068374_640.jpeg">
                </a>
                <?php echo $title_tag_end; ?>
            </div> -->

            <!--タイトルを文字にする場合-->
            <div class="site-title-wrap">
                <?php echo $title_tag_start; ?>
                <a href="<?php echo home_url(); ?>">
                    <?php bloginfo('name'); ?>
                </a>
                <?php echo $title_tag_end; ?>
            </div>

            <!--スマホ用メニューボタン-->
            <button type="button" id="navbutton" class="navbutton">
                <i class="fas fa-bars"></i>
            </button>

            <!--ヘッダーメニュー-->
            <div id="header-nav-wrap" class="header-nav-wrap">
                <?php wp_nav_menu(array(
                    'theme_location' => 'header-nav',
                    'container' => 'nav',
                    'container_class' => 'header-nav',
                    'container_id' => 'header-nav',
                    'fallback_cb' => ''
                )); ?>
            </div>
        </div>
        <!--end header-inner-->
    </header>