<?php global $post;?>
<?php

  $permalink = get_the_permalink();

  $icons = array(
    'fb'  => array(
      'icon'  => 'fa fa-facebook',
      'url'   => "https://www.facebook.com/sharer.php?u=$permalink"
    ),
    'tw'  => array(
      'icon'  => 'fa fa-twitter',
      'url'   => "https://twitter.com/intent/tweet?text=".$post->post_excerpt."&url=$permalink&via="
    ),
    'li'  => array(
      'icon'  => 'fa fa-linkedin',
      'url'   => "https://www.linkedin.com/sharing/share-offsite/?url=$permalink"
    ),
  );
?>
<ul class="list-inline social-share">
<?php foreach( $icons as $key => $icon ): $class = $key." social-fa-icon"; ?>
  <li>
    <a class='<?php _e( $class ); ?>' target='_blank' href='<?php _e( $icon['url'] );?>'>
      <i class='<?php _e( $icon['icon'] );?>'></i>
    </a>
  </li>
<?php endforeach;?>
</ul>
