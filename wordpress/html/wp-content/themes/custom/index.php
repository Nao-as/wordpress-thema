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
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <!--ここに記事一覧に表示したいコンテンツを記述-->
                <?php get_template_part('/template/loop-content'); ?>
        <?php endwhile; endif; ?>
        <!--ループ終了-->
        <div class="pagination">
            <?php echo paginate_links(array(
                'type' => 'list',
                'mid_size' => '1',
                'prev_text' => '<i class="fa fa-chevron-left"></i>',
                'next_text' => '<i class="fa fa-chevron-right"></i>'
            )); ?>
        </div>

    </div>
    <!--end contents-->
    <?php get_sidebar(); ?>
</div>
<!--end container-->
<?php get_footer(); ?>