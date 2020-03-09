<?php get_header(); $flag = 0;?>
<div class="container" style="margin-top: 80px;">
  <div class="row">
    <div class="col-md-8"  style="padding-right: 30px;">
      <?php if( have_posts() ): while( have_posts() ) : the_post();?>
      <?php get_template_part( 'partials/single', 'post' );?>
      <?php if( has_category() ? $flag = 1 : $flag = 0 ):   ?>
      <div class="entry-meta">
        <span class="categories">
          Tagged: <?php the_category(', '); ?>
        </span>
      </div>
      <?php endif;?>
      <?php endwhile;endif;?>
      <div class="article-share">
        <?php get_template_part( 'partials/share', 'socialmedia' );?>
        <div class="clear"></div>
      </div>
      <div class="article-decoration-full"></div>
      <nav class="article-pagination">
        <span class="nav-previous pull-left"><strong><?php previous_post_link( '%link' ); ?></strong></span>
        <span class="nav-next pull-right"><strong><?php next_post_link( '%link' ); ?></strong></span>
      </nav><!-- #nav-single -->
      <div class="clear" style="margin-bottom: 50px;"></div>
    </div>
    <div class="col-md-4">
      <?php echo do_shortcode( "[sidebar]" );?>
    </div>
  </div>
  <!-- Section display's posts having same post_tags -->
  <?php if( $flag ): ?>
  <?php $html = do_shortcode( '[orbit_related_query taxonomy="category" style="grid3" posts_per_page="-1"]' ); ?>
    <?php if( strlen( $html ) ):?>
    <div class="suggested-articles">
      <div class="row">
        <div class="col-md-12">
          <h3 class="title">Suggested Reading</h3>
          <?php echo $html;?>
        </div>
      </div>
    </div>
  <?php endif;endif;?>
</div>
<?php get_footer();?>
