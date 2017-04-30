<!-- ヘッダー -->
<?php get_header(); ?>
<!-- /ヘッダー -->

<!-- 記事情報 -->
<?php if (have_posts()) : ?>

    <?php the_post() ?>

    <!-- タイトル -->
    <h1><?php the_title() ?></h1>
    <!-- /タイトル -->

    <!-- 本文 -->
    <section><?php the_content() ?></section>
    <!-- /本文 -->

    <!-- 日付 -->
    <span><?php the_time('Y.m.d') ?></span>
    <!-- /日付 -->

    <!-- カテゴリ -->
    <p><?php the_category(', '); ?></p>
    <!-- /カテゴリ -->

<?php endif ?>
<!-- /記事情報 -->

<!-- ページネーション -->
<?php previous_post_link('%link','古い記事へ'); ?>

<?php next_post_link('%link','新しい記事へ'); ?>
<!-- /ページネーション -->

<!-- サイドバー -->
<?php get_sidebar(); ?>
<!-- /サイドバー -->

<!-- フッター -->
<?php get_footer(); ?>
<!-- /フッター -->