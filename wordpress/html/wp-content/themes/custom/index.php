<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @package WordPress
 * @subpackage nao-customize
 * @since nao-customize 1.0
 */

?>

<?php get_header(); ?>
<div class="container">
    <div class="contents">
    ここに表示させたいメインコンテンツを記述
    </div>
    <!--end contents-->
    <?php get_sidebar(); ?>
</div>
<!--end container-->
<?php get_footer(); ?>