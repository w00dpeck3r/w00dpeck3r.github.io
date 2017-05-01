<?php
/*
Template Name: Project
*/
?>

<?php get_header(); ?>

<div id="content" class="container">
  <div id="links">
    <h2><a href="<?php echo site_url(); ?>/#top">ホーム</a> > <a href="#">PROJECT - <?php echo get_the_title(); ?></a></h2>
  </div>
  <?php
  $args = array('post_type' => get_the_title());
  $customPosts = get_posts($args);
  if ($customPosts) {
    $odd = true;
    foreach ($customPosts as $post) {
      if ($odd) : ?>
        <div class="article beige-background">
      <?php else : ?>
        <div class="article white-background">
      <?php endif; ?>

      <h3><?php echo $post -> post_title; ?></h3>
      <?php echo $post -> post_content; ?>

      </div>

      <?php
      $odd = !$odd;
    }
  }
  ?>
</div> <!-- content ends here -->

<?php get_footer(); ?>
