<?php

  $title = get_the_title();
  $title_length = strlen( $title );
  $excerpt_length = 0;
  if( $title_length < 120 ){
    $excerpt_length = 120 - $title_length;

    if( $excerpt_length < 15 ){
      $excerpt_length = 15;
    }
    if( $excerpt_length > 40 ){
      $excerpt_length = 40;
    }
  }
?>
<div class="article-content">
  <a class="article-link" href = "<?php the_permalink(); ?>" class="<?php _e( $post_type );?>">
    <h3 class="article-title"><?php echo $title; ?></h3>
  </a>
  <div class="article-date">
    <?php the_time('F j, Y');?>
  </div>
  <?php if( $excerpt_length ):?>
  <p class="article-excerpt"><?php echo excerpt( $excerpt_length ); ?></p>
  <a class="continue-reading" href = "<?php the_permalink(); ?>" class="<?php _e( $post_type );?>">
    <h4>CONTINUE READING</h4>
  </a>
  <?php endif;?>
</div>
