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
<style media="screen">
  .article-share{ margin: 20px 0; }
  .article-share .social-share{ padding: 0;margin:0;}
  .article-share .social-share > li{ padding: 0; float: left;}
  .article-share .social-share a{
    background-color: red;
    display: block;
    /* padding: 5px; */
    width: 30px;
    /* height: 30px; */
    line-height: 30px;
    text-align: center;
    color: #fff;
  }
  .article-share .social-share a.fb{
    background-color: #3b5998;
  }
  .article-share .social-share a.tw{
    background-color: #00aeed;
  }
  .article-share .social-share a.li{
    background-color: #0077B5;
  }
</style>
