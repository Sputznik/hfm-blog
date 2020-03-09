<div class="entry-header text-center">
  <h1 class="entry-title"><?php the_title();?></h1>
</div>
<div class="entry-content">
  <p class="excerpt text-center"><em><?php echo excerpt(30);?></em></p>
  <div class="article-decoration"></div>
  <div class="main-content">
    <?php the_content();?>
  </div>
</div>
<div class='author-info'>
  <?php global $post;?>
  <div class="author-avatar">
    <img src="<?php _e( get_avatar_url( $post->post_author,array("size"=>60 ) ) );?>" alt="">
  </div>
  <div class="author-meta">
    <div class="author-name"><?php the_author();?></div>
    <div class="author-date"><?php the_time('M j, Y');?></div>
  </div>
</div>
