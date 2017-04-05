<?php get_header(); ?>

<div id="content" class="container">

  <div class="article beige-background" id="about">
    <h2>about</h2>
    <?php // 指定の固定ページの本文を抽出
    $my_post = get_page_by_title('about');
    echo apply_filters('the_content', $my_post -> post_content);
    ?>
  </div>

  <div class="article white-background" id="project">
    <h2>project</h2>
    <?php
    $my_post = get_page_by_title('project');
    echo apply_filters('the_content', $my_post -> post_content);
    ?>
  </div>

  <div class="article beige-background" id="schedule">
    <h2>schedule</h2>
    <?php
    $my_post = get_page_by_title('schedule');
    echo apply_filters('the_content', $my_post -> post_content);
    ?>
  </div>

  <div class="article white-background" id="news">
    <h2>news</h2>
    <?php
    $my_post = get_page_by_title('news');
    echo apply_filters('the_content', $my_post -> post_content);
    ?>
  </div>

  <div class="article beige-background" id="contact">
    <h2>contact</h2>
    <?php
    $my_post = get_page_by_title('contact');
    echo apply_filters('the_content', $my_post -> post_content);
    ?>
  </div>

<?php get_footer(); ?>
