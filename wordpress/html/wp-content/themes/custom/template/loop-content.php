<article <?php post_class('article-list'); ?>>
    <a href="<?php the_permalink(); ?>">
        <div class="img-wrap">
            <!--画像を追加-->
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium'); ?>
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/include/no.jpeg" alt="no-img" />
            <?php endif; ?>
            <!--カテゴリ-->
            <?php if (!is_category() && has_category()) : ?>
                <span class="cat-data">
                    <?php
                    $postcat = get_the_category();
                    echo $postcat[0]->name;
                    ?>
                </span>
            <?php endif; ?>
        </div>
        <!--end img-warp-->
        <div class="text">
            <!--タイトル-->
            <h2><?php the_title(); ?></h2>
            <!--投稿日を表示-->
            <span class="article-date">
                <i class="fa fa-clock-o"></i>
                <time datetime="<?php echo get_the_date('Y年m月d日'); ?>">
                    <?php echo get_the_date(); ?>
                </time>
            </span>
            <!--著者を表示-->
            <span class="article-author">
                <i class="fa fa-user-circle-o"></i><?php the_author(); ?>
            </span>
            <!--抜粋-->
            <?php the_excerpt(); ?>
        </div>
        <!--end text-->
    </a>
</article>