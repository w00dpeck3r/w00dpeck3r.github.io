<?php get_header(); ?>

<div id="content" class="container">

  <div class="article beige-background">
    <h2>about</h2>
    <?php // 指定の固定ページの本文を抽出
    $my_post = get_page_by_title('about');
    echo apply_filters('the_content', $my_post -> post_content);
    ?>
  </div>

  <?php
  /*
  $even = false; // 偶奇判定用変数

  if (have_posts()) : // WordPress ループ
    while (have_posts()) : the_post(); // 繰り返し処理開始 ?>

      <div class="article <?php echo $even? 'white-background' : 'beige-background'; ?>">
        <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
        <?php the_content(); ?>
      </div>

      <?php $even = $even? false : true; ?>

  <?php
    endwhile;
  endif;
  */
  ?>

<?php get_footer(); ?>
